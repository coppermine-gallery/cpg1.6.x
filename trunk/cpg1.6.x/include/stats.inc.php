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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

/**
 * initialize the vars start
 */

 // os and browser icon / name array
$browserArray = array(
	'Adobe' => 'adobe.png',
	'Alcatel' => 'alcatel.png',
	'Amaya' => 'amaya.png',
	'Amiga Voyager' => 'amigavoyager.png',
	'AOL' => 'aol.png',
	'APT' => 'apt.png',
	'Avant' => 'avant.png',
	'AWeb' => 'aweb.png',
	'Beonex' => 'beonex.png',
	'BPFTP' => 'bpftp.png',
	'Bytel' => 'bytel.png',
	'Chimera' => 'chimera.png',
	'Camino' => 'camino.png',
	'Chrome' => 'chrome.png',
	'Crazy Browser' => 'crazybrowser.png',
	'Cyberdog' => 'cyberdog.png',
	'Dillo' => 'dillo.png',
	'DreamCast' => 'dreamcast.png',
	'eCatch' => 'ecatch.png',
	'Epiphany' => 'epiphany.png',
	'Ericsson' => 'ericsson.png',
	'Feeddemon' => 'feeddemon.png',
	'Feedreader' => 'feedreader.png',
	'Firefox' => 'firefox.png',
	'Flock' => 'flock.png',
	'fpexpress' => 'fpexpress.png',
	'Fresco' => 'fresco.png',
	'Galeon' => 'galeon.png',
	'Getright' => 'getright.png',
	'Gozilla' => 'gozilla.png',
	'HotJava' => 'hotjava.png',
	'ibrowse' => 'ibrowse.png',
	'iCab' => 'icab.png',
	'Iceweasel' => 'iceweasel.png',
	'java' => 'java.png',
	'jetbrains' => 'jetbrains_omea.png',
	'K-Meleon' => 'kmeleon.png',
	'Kazehakase' => 'kazehakase.png',
	'Konqueror' => 'konqueror.png',
	'lg' => 'lg.png',
	'Lotus Notes' => 'lotusnotes.png',
	'Lynx' => 'lynx.png',
	'MacWeb' => 'macweb.png',
	'MediaPlayer' => 'mediaplayer.png',
	'Minefield' => 'minefield.png',
	'Motorola' => 'motorola.png',
	'Mozilla' => 'mozilla.png',
	'Mozilla Firebird' => 'phoenix.png',
	'mplayer' => 'mplayer.png',
	'NetSurf' => 'netsurf.png',
	'IE3' => 'msie.png',
	'IE4' => 'msie.png',
	'IE5.0' => 'msie.png',
	'IE5.5' => 'msie.png',
	'IE6' => 'msie6.png',
	'IE7' => 'msie7.png',
	'IE8' => 'msie8.png',
	'IE' => 'msie.png',
	'iPhone' => 'iphone.png',
	'HTTrack' => 'httrack.png',
	'Maxthon' => 'maxthon.png',
	'Multizilla' => 'multizilla.png',
	'Mosaic' => 'ncsa_mosaic.png',
	'NetNewsWire' => 'netnewswire.png',
	'NetPositive' => 'netpositive.png',
	'Netscape' => 'netscape.png',
	'netshow' => 'netshow.png',
	'newsfire' => 'newsfire.png',
	'newsgator' => 'newsgator.png',
	'newzcrawler' => 'newzcrawler.png',
	'Nintendo DS' => 'nds.png',
	'nokia' => 'nokia.png',
	'Not Available' => 'notavailable.png',
	'Off By One' => 'ob1.png',
	'OmniWeb' => 'omniweb.png',
	'Opera' => 'opera.png',
	'Panasonic' => 'panasonic.png',
	'PDA phone' => 'pdaphone.png',
	'Philips' => 'philips.png',
	'Phoenix' => 'phoenix.png',
	'Pluck' => 'pluck.png',
	'Pulpfiction' => 'pulpfiction.png',
	'Real' => 'real.png',
	'RSS' => 'rss.png',
	'RSSbandit' => 'rssbandit.png',
	'RSSowl' => 'rssowl.png',
	'RSSreader' => 'rssreader.png',
	'Safari' => 'safari.png',
	'Sagem' => 'sagem.png',
	'Samsung' => 'samsung.png',
	'Sharp' => 'sharp.png',
	'Sharp reader' => 'sharpreader.png',
	'Shiira' => 'shiira.png',
	'Shrook' => 'shrook.png',
	'Siemens' => 'siemens.png',
	'Sleipnir' => 'sleipnir.png',
	'Sony' => 'sony.png',
	'Sony Ericsson' => 'ericsson.png',
	'Stainless' => 'stainless.png',
	'Staroffice' => 'staroffice.png',
	'Sunrise' => 'sunrise.png',
	'Teleport' => 'teleport.png',
	'Trium' => 'trium.png',
	'Unknown' => 'unknown.png',
	'W3C' => 'w3c.png',
	'WebCopier' => 'webcopier.png',
	'Web TV' => 'webtv.png',
	'webzip' => 'webzip.png',
);

$osArray = array(
	'aix' => 'aix.png',
	'Amiga OS' => 'amigaos.png',
	'Apple' => 'apple.png',
	'Atari' => 'atari.png',
	'beOS' => 'beos.png',
	'BSD' => 'bsd.png',
	'BSD FreeBSD' => 'bsdfreebsd.png',
	'bsdi' => 'bsdi.png',
	'bsdnetbsd' => 'bsdnetbsd.png',
	'bsdopenbsd' => 'bsdopenbsd.png',
	'CP/m' => 'cpm.png',
	'Debian' => 'debian.png',
	'Digital' => 'digital.png',
	'DOS' => 'dos.png',
	'Dreamcast' => 'dreamcast.png',
	'Fireball Spider' => 'fireball.png',
	'Free BSD' => 'freebsd.png',
	'Googlebot' => 'google.png',
	'gnu' => 'gnu.png',
	'HP UX' => 'hpux.png',
	'IBM' => 'ibm.png',
	'iMode' => 'imode.png',
	'Inferno' => 'inferno.png',
	'iPhone' => 'iphone.png',
	'Irix' => 'irix.png',
	'Java' => 'java.png',
	'kFreeBSD' => 'kfreebsd.png',
	'Linux' => 'linux.png',
	'Linux CentOS' => 'linuxcentos.png',
	'Linux Debian' => 'linuxdebian.png',
	'Linux Fedora' => 'linuxfedora.png',
	'Linux Mandrake' => 'linuxmandr.png',
	'Linux RedHat' => 'linuxredhat.png',
	'Linux Suse' => 'linuxsuse.png',
	'Linux Ubuntu' => 'linuxubuntu.png',
	'Lycos Spider' => 'lycos.png',
	'Mac OS' => 'mac.png',
	'Macintosh' => 'macintosh.png',
	'Mac OS X' => 'macosx.png',
	'NetBSD' => 'netbsd.png',
	'Netware' => 'netware.png',
	'neXt' => 'next.png',
	'Nintendo Wii' => 'wii.png',
	'Open BSD' => 'openbsd.png',
	'OS/2' => 'os2.png',
	'osf' => 'osf.png',
	'PalmOS' => 'palm.png',
	'Playstation' => 'ps2.png',
	'Playstation 3' => 'ps3.png',
	'Playstation Portable' => 'psp.png',
	'qnx' => 'qnx.png',
	'Risc OS' => 'riscos.png',
	'SCO' => 'sco.png',
	'Sun OS' => 'sunos.png',
	'Symbian' => 'symbian.png',
	'Unix' => 'unix.png',
	'Unknown' => 'unknown.png',
	'vms' => 'vms.png',
	'webtv' => 'webtv.png',
	'Windows' => 'win.png',
	'Windows 3.x' => 'win16.png',
	'Windows 2000' => 'win2000.png',
	'Windows 2003 Server' => 'win2003.png',
	'Windows 95' => 'win95.png',
	'Windows 98' => 'win98.png',
	'Windows CE' => 'wince.png',
	'Windows ME' => 'winme.png',
	'Windows NT' => 'winnt.png',
	'Windows XP' => 'winxp.png',
	'Windows Vista' => 'winvista.png',
	'Windows 7' => 'win7.png',
);


/**
 * initialize the vars end
 */

/**
 * function defintions start
 */
function individualStatsByOS($pid='',$type='hits', $tableWidth='100%') {
      global $osArray, $CONFIG, $lang_stat_details_php, $icon_array;
       $maxBarWidth = 200;
      if (GALLERY_ADMIN_MODE == true){
        foreach ($osArray as $key => $value) {
                $query = "SELECT COUNT(*) FROM ";
                if ($type=='vote') {
                    $query .= $CONFIG['TABLE_VOTE_STATS'];
                } else {
                    $query .= $CONFIG['TABLE_HIT_STATS'];
                }
                $query .= " WHERE os = '$key'";
                if ($pid!='') {
                    $query .= " AND pid='$pid'";
                }
                // Now this is a very crude way to query the database which is bound to overload larger galleries. Should be reviewed!
                $result = cpg_db_query($query);
                $row = mysql_fetch_array($result);
                if ($row[0] != 0) {
                    $osResultArray[$key] = $row[0];
                }
        }
        array_multisort($osResultArray,SORT_DESC);
        $osTotal = array_sum($osResultArray);
        print '<a name="os"></a>';
        starttable($tableWidth, $icon_array['os'] . $lang_stat_details_php['stats_by_os'], 3);
        print <<< EOT
        <tr>
          <td class="tableh2" colspan="2">{$lang_stat_details_php['os']}</td>
          <td class="tableh2" align="left">{$lang_stat_details_php['number_of_hits']} (%)</td>
        </tr>
EOT;
        $loopCounter = 0;
        foreach ($osResultArray as $key => $value) {
          $individualBarWidth = floor(($value * $maxBarWidth) / $osTotal);
          $individualPercentage = floor(($value * 1000) / $osTotal)/10;
          if ($individualPercentage == floor($individualPercentage)) {
            $individualPercentage .= '.0';
          }
          if ($loopCounter == 0) {
            $row_style_class = 'tableb';
            $loopCounter++;
          } else {
            $row_style_class = 'tableb tableb_alternate';
            $loopCounter = 0;
          }
          print <<< EOT
          <tr>
            <td class="{$row_style_class}" width="20"><img src="images/os/{$osArray[$key]}" width="14" height="14" border="0" title="{$key}" alt="" /></td>
            <td class="{$row_style_class}">{$key}</td>
            <td class="{$row_style_class}" align="left">
EOT;
                print theme_display_bar($value,$osTotal,200,'', '', ' ('.$individualPercentage.' %)');
          print <<< EOT
            </td>
          </tr>
EOT;
        }
        print <<< EOT
        <tr>
          <td class="tablef" colspan="2">{$lang_stat_details_php['total']}</td>
          <td class="tablef" align="left">{$osTotal}</td>
        </tr>
EOT;
        endtable();

        print '<br />';
    }
}

function individualStatsByBrowser($pid='',$type='hits', $tableWidth='100%') {
      global $browserArray, $CONFIG, $lang_stat_details_php, $icon_array;
      $maxBarWidth = 200;
      if (GALLERY_ADMIN_MODE == true){
        foreach ($browserArray as $key => $value) {
                $query = "SELECT COUNT(*) FROM ";
                if ($type=='vote') {
                    $query .= $CONFIG['TABLE_VOTE_STATS'];
                } else {
                    $query .= $CONFIG['TABLE_HIT_STATS'];
                }
                $query .= " WHERE browser = '$key'";
                if ($pid!='') {
                    $query .= " AND pid='$pid'";
                }
                // Now this is a very crude way to query the database which is bound to overload larger galleries. Should be reviewed!
                $result = cpg_db_query($query);
                $row = mysql_fetch_array($result);
                if ($row[0] != 0) {
                    $browserResultArray[$key] = $row[0];
                }
        }
        array_multisort($browserResultArray,SORT_DESC);
        $browserTotal = array_sum($browserResultArray);
        print '<a name="browser"></a>';
        starttable($tableWidth, $icon_array['browser'] . $lang_stat_details_php['stats_by_browser'], 3);
        print <<< EOT
        <tr>
          <td class="tableh2" colspan="2">{$lang_stat_details_php['browser']}</td>
          <td class="tableh2" align="left">{$lang_stat_details_php['number_of_hits']} (%)</td>
        </tr>
EOT;
        $loopCounter = 0;
        foreach ($browserResultArray as $key => $value) {
          $individualBarWidth = floor(($value * $maxBarWidth) / $browserTotal);
          $individualPercentage = floor(($value * 1000) / $browserTotal)/10;
          if ($individualPercentage == floor($individualPercentage)) {
            $individualPercentage .= '.0';
          }
          if ($loopCounter == 0) {
            $row_style_class = 'tableb';
            $loopCounter++;
          } else {
            $row_style_class = 'tableb tableb_alternate';
            $loopCounter = 0;
          }
          print <<< EOT
          <tr>
            <td class="{$row_style_class}" width="20"><img src="images/browser/{$browserArray[$key]}" width="14" height="14" border="0" title="{$key}" alt="" /></td>
            <td class="{$row_style_class}">{$key}</td>
            <td class="{$row_style_class}" align="left">
EOT;
          print theme_display_bar($value,$browserTotal,200,'', '', ' ('.$individualPercentage.' %)');
          print <<< EOT
            </td>
          </tr>
EOT;
        }
        print <<< EOT
        <tr>
          <td class="tablef" colspan="2">{$lang_stat_details_php['total']}</td>
          <td class="tablef" align="left">{$browserTotal}</td>
        </tr>
EOT;
        endtable();

        print '<br />';
    }
}

/**
 * function defintions end
 */

?>