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

/**
 * Inspekt Cage - main source file
 *
 * @author Chris Shiflett <chris@shiflett.org>
 * @author Ed Finkler <coj@funkatron.com>
 *
 * @package Inspekt
 */

if (!defined('IN_COPPERMINE')) {
    die('Not in Coppermine...');
}

/**
 * require main Inspekt file
 */
require_once 'include/inspekt.php';


define ('ISPK_ARRAY_PATH_SEPARATOR', '/');

/**
 * @package Inspekt
 */
class Inspekt_Cage
{
    /**
     * {@internal The raw source data.  Although tempting, NEVER EVER
     * EVER access the data directly using this property!  Unfortunately,
     * we can't deny access to this in PHP4}
     *
     * Don't try to access this.  ever.
     *
     * @var array
     */
    var $_source = NULL;


    /**
     *
     * @return Inspekt_Cage
     */
    function Inspekt_Cage() {
        // placeholder -- we're using a factory here
    }



    /**
     * Takes an array and wraps it inside an object.  If $strict is not set to
     * FALSE, the original array will be destroyed, and the data can only be
     * accessed via the object's accessor methods
     *
     * @param array $source
     * @param boolean $strict
     * @return Inspekt_Cage
     *
     * @static
     */
    function Factory(&$source, $strict = TRUE) {

        if (!is_array($source)) {
            Inspekt_Error::raiseError('$source is not an array', E_USER_ERROR);
        }

        $cage = new Inspekt_Cage();
        $cage->_setSource($source);

        if ($strict) {
            $source = NULL;
        }

        return $cage;
    }




    /**
     * {@internal we use this to set the data array in Factory()}
     *
     * @see Factory()
     * @param array $newsource
     */
    function _setSource(&$newsource) {

        if (!is_array($newsource)) {
            Inspekt_Error::raiseError('$source is not an array', E_USER_ERROR);
        }

        $this->_source = $newsource;
    }



    /**
     * Returns only the alphabetic characters in value.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function getAlpha($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getAlpha($this->_getValue($key));
    }

    /**
     * Returns only the alphabetic characters and digits in value.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function getAlnum($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getAlnum($this->_getValue($key));
    }

    /**
     * Returns only the digits in value. This differs from getInt().
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function getDigits($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getDigits($this->_getValue($key));
    }

    /**
     * Returns dirname(value).
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function getDir($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getDir($this->_getValue($key));
    }

    /**
     * Returns (int) value.
     *
     * @param mixed $key
     * @return int
     *
     * @tag filter
     */
    function getInt($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getInt($this->_getValue($key));
    }

    /**
     * Returns realpath(value).
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function getPath($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getPath($this->_getValue($key));
    }

    /**
     * Returns value.
     *
     * @param string $key
     * @return mixed
     *
     * @tag filter
     */
    function getRaw($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return $this->_getValue($key);
    }

    /**
     * Returns the value escaped with mysql_real_escape_string.
     *
     * @param mixed $value
     * @return string
     *
     * @tag filter
     */
    function getEscaped($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getEscaped($this->_getValue($key));
    }

    /**
     * Returns an array returned by preg_match if $pattern matches. False otherwise
     *
     * @param mixed $key
     * @param mixed $pattern
     * @return mixed
     *
     * @tag filter
     */
    function getMatched($key, $pattern)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::getMatched($this->_getValue($key), $pattern);
    }

    /**
     * Returns value if every character is alphabetic or a digit,
     * FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testAlnum($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isAlnum($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if every character is alphabetic, FALSE
     * otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testAlpha($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isAlpha($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is greater than or equal to $min and less
     * than or equal to $max, FALSE otherwise. If $inc is set to
     * FALSE, then the value must be strictly greater than $min and
     * strictly less than $max.
     *
     * @param mixed $key
     * @param mixed $min
     * @param mixed $max
     * @param boolean $inclusive
     * @return mixed
     *
     * @tag validator
     */
    function testBetween($key, $min, $max, $inc = TRUE)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isBetween($this->_getValue($key), $min, $max, $inc)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid credit card number format. The
     * optional second argument allows developers to indicate the
     * type.
     *
     * @param mixed $key
     * @param mixed $type
     * @return mixed
     *
     * @tag validator
     */
    function testCcnum($key, $type = NULL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isCcnum($this->_getValue($key), $type)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns $value if it is a valid date, FALSE otherwise. The
     * date is required to be in ISO 8601 format.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testDate($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isDate($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if every character is a digit, FALSE otherwise.
     * This is just like isInt(), except there is no upper limit.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testDigits($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isDigits($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid email format, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testEmail($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isEmail($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid float value, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testFloat($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isFloat($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is greater than $min, FALSE otherwise.
     *
     * @param mixed $key
     * @param mixed $min
     * @return mixed
     *
     * @tag validator
     */
    function testGreaterThan($key, $min = NULL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isGreaterThan($this->_getValue($key), $min)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid hexadecimal format, FALSE
     * otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testHex($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isHex($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid hostname, FALSE otherwise.
     * Depending upon the value of $allow, Internet domain names, IP
     * addresses, and/or local network names are considered valid.
     * The default is HOST_ALLOW_ALL, which considers all of the
     * above to be valid.
     *
     * @param mixed $key
     * @param integer $allow bitfield for HOST_ALLOW_DNS, HOST_ALLOW_IP, HOST_ALLOW_LOCAL
     * @return mixed
     *
     * @tag validator
     */
    function testHostname($key, $allow = ISPK_HOST_ALLOW_ALL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isHostname($this->_getValue($key), $allow)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid integer value, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testInt($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isInt($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid IP format, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testIp($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isIp($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is less than $max, FALSE otherwise.
     *
     * @param mixed $key
     * @param mixed $max
     * @return mixed
     *
     * @tag validator
     */
    function testLessThan($key, $max = NULL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isLessThan($this->_getValue($key), $max)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is one of $allowed, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testOneOf($key, $allowed = NULL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isOneOf($this->_getValue($key), $allowed)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid phone number format, FALSE
     * otherwise. The optional second argument indicates the country.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testPhone($key, $country = 'US')
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isPhone($this->_getValue($key), $country)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it matches $pattern, FALSE otherwise. Uses
     * preg_match() for the matching.
     *
     * @param mixed $key
     * @param mixed $pattern
     * @return mixed
     *
     * @tag validator
     */
    function testRegex($key, $pattern = NULL)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isRegex($this->_getValue($key), $pattern)) {
            return $this->_getValue($key);
        }

        return FALSE;
    }


    /**
     * Enter description here...
     *
     * @param unknown_type $key
     * @return unknown
     *
     * @tag validator
     */
    function testUri($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isUri($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value if it is a valid US ZIP, FALSE otherwise.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag validator
     */
    function testZip($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        if (Inspekt::isZip($this->_getValue($key))) {
            return $this->_getValue($key);
        }

        return FALSE;
    }

    /**
     * Returns value with all tags removed.
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function noTags($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::noTags($this->_getValue($key));
    }

    /**
     * Returns basename(value).
     *
     * @param mixed $key
     * @return mixed
     *
     * @tag filter
     */
    function noPath($key)
    {
        if (!$this->keyExists($key)) {
            return false;
        }
        return Inspekt::noPath($this->_getValue($key));
    }

    /**
     * Checks if a key exists
     *
     * @param mixed $key
     * @return bool
     *
     */
    function keyExists($key)
    {
        if (strpos($key, ISPK_ARRAY_PATH_SEPARATOR) !== FALSE) {
            $key = trim($key, ISPK_ARRAY_PATH_SEPARATOR);
            $keys = explode(ISPK_ARRAY_PATH_SEPARATOR, $key);
            return $this->_keyExistsRecursive($keys, $this->_source);
        } else {
            return array_key_exists($key, $this->_source);
        }
    }

    function _keyExistsRecursive($keys, $data_array) {
        $thiskey = current($keys);

        if (is_numeric($thiskey)) { // force numeric strings to be integers
            $thiskey = (int)$thiskey;
        }

        if ( array_key_exists($thiskey, $data_array) ) {
            if (sizeof($keys) == 1) {
                return true;
            } elseif ( is_array($data_array[$thiskey]) ) {
                unset($keys[key($keys)]);
                return $this->_keyExistsRecursive($keys, $data_array[$thiskey]);
            }
        } else { // if any key DNE, return false
            return false;
        }
    }


    function _getValue($key) {
        if (strpos($key, ISPK_ARRAY_PATH_SEPARATOR)!== FALSE) {
            $key = trim($key, ISPK_ARRAY_PATH_SEPARATOR);
            $keys = explode(ISPK_ARRAY_PATH_SEPARATOR, $key);
            return $this->_getValueRecursive($keys, $this->_source);
        } elseif (get_magic_quotes_gpc()) {
            return stripslashes_deep($this->_source[$key]);
        } else {
            return $this->_source[$key];
        }
    }


    function _getValueRecursive($keys, $data_array) {
        $thiskey = current($keys);

        if (is_numeric($thiskey)) { // force numeric strings to be integers
            $thiskey = (int)$thiskey;
        }

        if ( array_key_exists($thiskey, $data_array) ) {
            if (sizeof($keys) == 1) {
                return $data_array[$thiskey];
            } elseif ( is_array($data_array[$thiskey]) ) {
                unset($keys[key($keys)]);
                return $this->_getValueRecursive($keys, $data_array[$thiskey]);
            }
        } else { // if any key DNE, return false
            return false;
        }
    }


}


function stripslashes_deep($value) {
    return is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
}
