<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

/**************************************************
  The transliteration folder has been adopted from
  the corresponding module from the Drupal project, 
  which is being released under GNU GPL.
  http://drupal.org/project/transliteration
***************************************************/

/**
 * Sanitize a file name.
 *
 * Transliterates the file name and removes invalid characters.
 *
 * @param $filename
 *   A file name.
 * @param $langcode
 *   Optional ISO 639 language code that denotes the language of the input.
 *   Used to apply language-specific optimizations.  Defaults to the current
 *   display language.
 * @return
 *   Cleaned file name.
 */
function transliteration_clean_filename($filename, $langcode = NULL) {
  // Trim any leading/trailing dots.
  $filename = trim($filename, '.');
  // Transliterate to ASCII.
  $filename = transliteration_process($filename, '', $langcode);
  // Replace whitespace.
  $filename = str_replace(' ', '_', $filename);
  // Remove any remaining non-safe characters.
  $filename = preg_replace('/[^0-9A-Za-z_.-]/', '', $filename);
  // Force lowercase to prevent issues on case insensitive file systems.
  $filename = strtolower($filename);

  return $filename;
}

/**
 * Transliterate UTF-8 text to ASCII.
 *
 * Based on Mediawiki's UtfNormal::quickIsNFCVerify().
 *
 * @param $string
 *   UTF-8 text input.
 * @param $unknown
 *   Replacement string for characters that do not have a suitable ASCII
 *   equivalent.
 * @param $langcode
 *   Optional ISO 639 language code that denotes the language of the input.
 *   Used to apply language-specific optimizations.  Defaults to the current
 *   display language.
 * @return
 *   Transliterated text.
 */
function transliteration_process($string, $unknown = '?', $langcode = NULL) {
  // Screen out some characters that eg won't be allowed in XML.
  $string = preg_replace('/[\x00-\x08\x0b\x0c\x0e-\x1f]/', $unknown, $string);

  // ASCII is always valid NFC!
  // If we're only ever given plain ASCII, we can avoid the overhead
  // of initializing the decomposition tables by skipping out early.
  if (!preg_match('/[\x80-\xff]/', $string)) {
    return $string;
  }

  static $tailBytes;

  if (!isset($tailBytes)) {
    // Each UTF-8 head byte is followed by a certain
    // number of tail bytes.
    $tailBytes = array();
    for ($n = 0; $n < 256; $n++) {
      if ($n < 0xc0) {
        $remaining = 0;
      }
      elseif ($n < 0xe0) {
        $remaining = 1;
      }
      elseif ($n < 0xf0) {
        $remaining = 2;
      }
      elseif ($n < 0xf8) {
        $remaining = 3;
      }
      elseif ($n < 0xfc) {
        $remaining = 4;
      }
      elseif ($n < 0xfe) {
        $remaining = 5;
      }
      else {
        $remaining = 0;
      }
      $tailBytes[chr($n)] = $remaining;
    }
  }

  // Chop the text into pure-ASCII and non-ASCII areas;
  // large ASCII parts can be handled much more quickly.
  // Don't chop up Unicode areas for punctuation, though,
  // that wastes energy.
  preg_match_all('/[\x00-\x7f]+|[\x80-\xff][\x00-\x40\x5b-\x5f\x7b-\xff]*/', $string, $matches);

  $result = '';
  foreach ($matches[0] as $str) {
    if ($str[0] < "\x80") {
      // ASCII chunk: guaranteed to be valid UTF-8
      // and in normal form C, so skip over it.
      $result .= $str;
      continue;
    }

    // We'll have to examine the chunk byte by byte to ensure
    // that it consists of valid UTF-8 sequences, and to see
    // if any of them might not be normalized.
    //
    // Since PHP is not the fastest language on earth, some of
    // this code is a little ugly with inner loop optimizations.

    $head = '';
    $chunk = strlen($str);
    // Counting down is faster. I'm *so* sorry.
    $len = $chunk + 1;

    for ($i = -1; --$len; ) {
      $c = $str[++$i];
      if ($remaining = $tailBytes[$c]) {
        // UTF-8 head byte!
        $sequence = $head = $c;
        do {
          // Look for the defined number of tail bytes...
          if (--$len && ($c = $str[++$i]) >= "\x80" && $c < "\xc0") {
            // Legal tail bytes are nice.
            $sequence .= $c;
          }
          else {
            if ($len == 0) {
              // Premature end of string!
              // Drop a replacement character into output to
              // represent the invalid UTF-8 sequence.
              $result .= $unknown;
              break 2;
            }
            else {
              // Illegal tail byte; abandon the sequence.
              $result .= $unknown;
              // Back up and reprocess this byte; it may itself
              // be a legal ASCII or UTF-8 sequence head.
              --$i;
              ++$len;
              continue 2;
            }
          }
        } while (--$remaining);

        $n = ord($head);
        if ($n <= 0xdf) {
          $ord = ($n - 192) * 64 + (ord($sequence[1]) - 128);
        }
        else if ($n <= 0xef) {
          $ord = ($n - 224) * 4096 + (ord($sequence[1]) - 128) * 64 + (ord($sequence[2]) - 128);
        }
        else if ($n <= 0xf7) {
          $ord = ($n - 240) * 262144 + (ord($sequence[1]) - 128) * 4096 + (ord($sequence[2]) - 128) * 64 + (ord($sequence[3]) - 128);
        }
        else if ($n <= 0xfb) {
          $ord = ($n - 248) * 16777216 + (ord($sequence[1]) - 128) * 262144 + (ord($sequence[2]) - 128) * 4096 + (ord($sequence[3]) - 128) * 64 + (ord($sequence[4]) - 128);
        }
        else if ($n <= 0xfd) {
          $ord = ($n - 252) * 1073741824 + (ord($sequence[1]) - 128) * 16777216 + (ord($sequence[2]) - 128) * 262144 + (ord($sequence[3]) - 128) * 4096 + (ord($sequence[4]) - 128) * 64 + (ord($sequence[5]) - 128);
        }
        $result .= _transliteration_replace($ord, $unknown, $langcode);
        $head = '';
      }
      elseif ($c < "\x80") {
        // ASCII byte.
        $result .= $c;
        $head = '';
      }
      elseif ($c < "\xc0") {
        // Illegal tail bytes.
        if ($head == '') {
          $result .= $unknown;
        }
      }
      else {
        // Miscellaneous freaks.
        $result .= $unknown;
        $head = '';
      }
    }
  }
  return $result;
}

/**
 * Load the transliteration database and replace a Unicode character.
 *
 * @param $ord
 *   A ordinal Unicode character code.
 * @param $unknown
 *   Replacement string for characters that do not have a suitable ASCII
 *   equivalent.
 * @param $langcode
 *   Optional ISO 639 language code that denotes the language of the input.
 *   Used to apply language-specific optimizations.  Defaults to the current
 *   display language.
 * @return
 *   ASCII replacement character.
 */
function _transliteration_replace($ord, $unknown = '?', $langcode = NULL) {
  static $map = array();

  if (!isset($langcode)) {
    global $CONFIG;
	$langcode = cpg_lang_name2code($CONFIG['lang']);
  }

  $bank = $ord >> 8;

  if (!isset($map[$bank][$langcode])) {
    $file = 'include/transliteration/' . sprintf('x%02x', $bank) . '.php';
    if (file_exists($file)) {
      include $file;
      if ($langcode != 'en' && isset($variant[$langcode])) {
        // Merge in language specific mappings.
        $map[$bank][$langcode] = $variant[$langcode] + $base;
      }
      else {
        $map[$bank][$langcode] = $base;
      }
    }
    else {
      $map[$bank][$langcode] = array();
    }
  }

  $ord = $ord & 255;

  return isset($map[$bank][$langcode][$ord]) ? $map[$bank][$langcode][$ord] : $unknown;
}

