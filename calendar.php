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

define('IN_COPPERMINE', true);
define('CALENDAR_PHP', true);

require('include/init.inc.php');

// function definitions

class MyCalendar extends Calendar {
    
    function getCalendarLink($month, $year)
    {
        return "calendar.php?month=$month&amp;year=$year";
    }

    function getDateLink($day, $month, $year)
    {
        global $CONFIG, $lang_calendar_php, $FORBIDDEN_SET;

        $date = sprintf('%d-%02d-%02d', $year, $month, $day);
      
        $sql = "SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} AS p WHERE approved = 'YES' AND DATE(FROM_UNIXTIME(ctime)) = '$date' $FORBIDDEN_SET";
        $result = cpg_db_query($sql);
        list($nb_pics) = mysql_fetch_row($result);

        if ($nb_pics) {
            $link = '<a href="#" onclick="sendDate(\'' . $month . '\', \'' . $day . '\', \'' . $year . '\');" class="user_thumb_infobox" title="' . $nb_pics . ' ' . $lang_calendar_php['files'] . '">';
        } else {
            $link = '';
        }
      
        return $link;
    }
}

js_include('js/calendar.js');

pageheader_mini($lang_calendar_php['title'], true);

$today = getdate();

if ($superCage->get->testInt('month')) {
    $month = $superCage->get->getInt('month');
} else {
    $month = $today['mon'];
}

if ($superCage->get->testInt('year')) {
    $year = $superCage->get->getInt('year');
} else {
    $year = $today['year'];
}

$cal = new MyCalendar;
$cal->setMonthNames($lang_month);
$cal->setDayNames($lang_day_of_week);
$cal->setStartDay(1);

echo $cal->getMonthView($month, $year, false);

pagefooter_mini();


/////////////////////////////////////////////////////////////////////////////////////////
// PHP Calendar Class Version 1.4 (5th March 2001)
//
// Copyright David Wilkinson 2000 - 2001. All Rights reserved.
//
// This software may be used, modified and distributed freely
// providing this copyright notice remains intact at the head
// of the file.
//
// This software is freeware. The author accepts no liability for
// any loss or damages whatsoever incurred directly or indirectly
// from the use of this script. The author of this software makes
// no claims as to its fitness for any purpose whatsoever. If you
// wish to use this software you should first satisfy yourself that
// it meets your requirements.
//
// URL:   http://www.cascade.org.uk/software/php/calendar/
// Email: davidw@cascade.org.uk

class Calendar
{
    /* Constructor for the Calendar class */
    function Calendar() {
    }


    /* Get the array of strings used to label the days of the week. This array contains seven elements, one for each day of the week. The first entry in this array represents Sunday. */
    function getDayNames() {
        return $this->dayNames;
    }


    /* Set the array of strings used to label the days of the week. This array must contain seven elements, one for each day of the week. The first entry in this array represents Sunday. */
    function setDayNames($names)
    {
        $this->dayNames = $names;
    }

    /* Get the array of strings used to label the months of the year. This array contains twelve elements, one for each month of the year. The first entry in this array represents January. */
    function getMonthNames() {
        return $this->monthNames;
    }

    /* Set the array of strings used to label the months of the year. This array must contain twelve elements, one for each month of the year. The first entry in this array represents January. */
    function setMonthNames($names) {
        $this->monthNames = $names;
    }



    /* Gets the start day of the week. This is the day that appears in the first column of the calendar. Sunday = 0. */
      function getStartDay() {
        return $this->startDay;
    }

    /* Sets the start day of the week. This is the day that appears in the first column of the calendar. Sunday = 0. */
    function setStartDay($day) {
        $this->startDay = $day;
    }


    /* Gets the start month of the year. This is the month that appears first in the year view. January = 1. */
    function getStartMonth() {
        return $this->startMonth;
    }

    /* Sets the start month of the year. This is the month that appears first in the year view. January = 1. */
    function setStartMonth($month) {
        $this->startMonth = $month;
    }


    /* Return the URL to link to in order to display a calendar for a given month/year. You must override this method if you want to activate the "forward" and "back" feature of the calendar.
       Note: If you return an empty string from this function, no navigation link will be displayed. This is the default behaviour. If the calendar is being displayed in "year" view, $month will be set to zero. */
    //function getCalendarLink($month, $year)
    //{
    //    return "";
    //}

    /* Return the URL to link to  for a given date. You must override this method if you want to activate the date linking
        feature of the calendar. Note: If you return an empty string from this function, no navigation link will be displayed. This is the default behaviour. */
    function getDateLink($day, $month, $year) {
        return "";
    }


    /* Return the HTML for the current month */
    function getCurrentMonthView() {
        $d = getdate(localised_timestamp());
        return $this->getMonthView($d["mon"], $d["year"]);
    }


    /* Return the HTML for the current year */
    function getCurrentYearView() {
        $d = getdate(localised_timestamp());
        return $this->getYearView($d["year"]);
    }


    /* Return the HTML for a specified month */
    function getMonthView($month, $year, $only_future_dates) {
        return $this->getMonthHTML($month, $year, 1, $only_future_dates);
    }


    /* Return the HTML for a specified year */
    function getYearView($year) {
        return $this->getYearHTML($year);
    }



    /********************************************************************************
        The rest are private methods. No user-servicable parts inside.
        You shouldn't need to call any of these functions directly.
    *********************************************************************************/


    /* Calculate the number of days in a month, taking into account leap years. */
    function getDaysInMonth($month, $year) {
        if ($month < 1 || $month > 12)
        {
            return 0;
        }

        $d = $this->daysInMonth[$month - 1];

        if ($month == 2)
        {
            // Check for leap year
            // Forget the 4000 rule, I doubt I'll be around then...

            if ($year%4 == 0)
            {
                if ($year%100 == 0)
                {
                    if ($year%400 == 0)
                    {
                        $d = 29;
                    }
                }
                else
                {
                    $d = 29;
                }
            }
        }

        return $d;
    }


    /* Generate the HTML for a given month */
    function getMonthHTML($m, $y, $showYear = 1, $only_future_dates) {
        global $LINEBREAK;
        $s = "";

        $a = $this->adjustDate($m, $y);
        $month = $a[0];
        $year = $a[1];

      $daysInMonth = $this->getDaysInMonth($month, $year);
      $date = getdate(mktime(12, 0, 0, $month, 1, $year));

      $first = $date["wday"];
      $monthName = $this->monthNames[$month - 1];

      $prev = $this->adjustDate($month - 1, $year);
      $next = $this->adjustDate($month + 1, $year);

      if ($showYear == 1)
      {
          $prevMonth = $this->getCalendarLink($prev[0], $prev[1]);
          $nextMonth = $this->getCalendarLink($next[0], $next[1]);
      }
      else
      {
          $prevMonth = "";
          $nextMonth = "";
      }

      $header = $monthName . (($showYear > 0) ? " " . $year : "");

      $s .= '<table class="maintable" align="center">' . $LINEBREAK;
      $s .= '<tr>' . $LINEBREAK;
      $s .= '<td align="center" valign="top">' . (($prevMonth == '') ? '&nbsp;' : '<a href="'.$prevMonth.'" class="user_thumb_infobox">&laquo;</a>')  . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1" colspan="5">'.$header.'</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top">' . (($nextMonth == '') ? '&nbsp;' : '<a href="'.$nextMonth.'" class="user_thumb_infobox">&raquo;</a>')  . '</td>' . $LINEBREAK;
      $s .= '</tr>' . $LINEBREAK;

      $s .= '<tr>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+1)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+2)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+3)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+4)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+5)%7] . '</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" class="tableh1">' . $this->dayNames[($this->startDay+6)%7] . '</td>' . $LINEBREAK;
      $s .= '</tr>' . $LINEBREAK;

      // We need to work out what date to start at so that the first appears in the correct column
      $d = $this->startDay + 1 - $first;
      while ($d > 1)
      {
          $d -= 7;
      }

        // Make sure we know when today is, so that we can use a different CSS style
        $today = getdate(time());

      while ($d <= $daysInMonth)
      {
          $s .= '<tr>' . $LINEBREAK;

          for ($i = 0; $i < 7; $i++)
          {
              $class = ($year == $today["year"] && $month == $today["mon"] && $d == $today["mday"]) ? "tableb" : "tableh2";
              $s .= "<td class=\"$class\" align=\"right\" valign=\"top\">";
              if ($d > 0 && $d <= $daysInMonth)
              {
                  if($this->needs_link($year, $month, $d, $today, $only_future_dates)) {
                      $link = $this->getDateLink($d, $month, $year);
                  } else {
                      $link = '';
                  }
                  $s .= (($link == '') ? $d : $link.$d.'</a>');
              }
              else
              {
                  $s .= '&nbsp;';
              }
                $s .= '</td>' . $LINEBREAK;
              $d++;
          }
          $s .= '</tr>' . $LINEBREAK;
      }

      $s .= '</table>' . $LINEBREAK;

      return $s;
    }


    /* needs_link()
    *
    * @param int $year
    * @param int $month
    * @param int $day
    * @param array $today
    * @param bool $only_future_dates
    *
    * @return bool $needs_link
    */
    function needs_link($year, $month, $day, $today, $only_future_dates) {
        if($only_future_dates) {
            if($year >= $today['year']) {
                if($month >= $today['mon']) {
                    if($day >= $today['mday']) {
                        return true;
                    }
                }
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    /* Generate the HTML for a given year */
    function getYearHTML($year) {
        $s = '';
      $prev = $this->getCalendarLink(0, $year - 1);
      $next = $this->getCalendarLink(0, $year + 1);

        $s .= '<table class="maintable" border="0">' . $LINEBREAK;
        $s .= '<tr>';
      $s .= '<td align="center" valign="top" align="left">' . (($prev == '') ? '&nbsp;' : '<a href="'.$prev.'">&lt;&lt;</a>')  . '</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top" align="center">' . (($this->startMonth > 1) ? $year . ' - ' . ($year + 1) : $year) .'</td>' . $LINEBREAK;
      $s .= '<td align="center" valign="top" align="right">' . (($next == '') ? '&nbsp;' : '<a href="'.$next.'">&gt;&gt;</a>')  . '</td>' . $LINEBREAK;
        $s .= '</tr>' . $LINEBREAK;
        $s .= '<tr>';
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(0 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(1 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(2 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '</tr>' . $LINEBREAK;
        $s .= '<tr>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(3 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(4 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(5 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '</tr>' . $LINEBREAK;
        $s .= '<tr>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(6 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(7 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(8 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '</tr>' . $LINEBREAK;
        $s .= '<tr>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(9 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(10 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '<td class="tableh1" valign="top">' . $this->getMonthHTML(11 + $this->startMonth, $year, 0) .'</td>' . $LINEBREAK;
        $s .= '</tr>' . $LINEBREAK;
        $s .= '</table>' . $LINEBREAK;

        return $s;
    }

    /* Adjust dates to allow months > 12 and < 0. Just adjust the years appropriately. e.g. Month 14 of the year 2001 is actually month 2 of year 2002. */
    function adjustDate($month, $year) {
        $a = array();
        $a[0] = $month;
        $a[1] = $year;

        while ($a[0] > 12)
        {
            $a[0] -= 12;
            $a[1]++;
        }

        while ($a[0] <= 0)
        {
            $a[0] += 12;
            $a[1]--;
        }

        return $a;
    }

    /* The start day of the week. This is the day that appears in the first column of the calendar. Sunday = 0. */
    var $startDay = 0;

    /* The start month of the year. This is the month that appears in the first slot of the calendar in the year view. January = 1. */
    var $startMonth = 1;

    /* The labels to display for the days of the week. The first entry in this array represents Sunday. */
    var $dayNames = array("S", "M", "T", "W", "T", "F", "S");

    /* The labels to display for the months of the year. The first entry in this array represents January. */
    var $monthNames = array("January", "February", "March", "April", "May", "June",
                            "July", "August", "September", "October", "November", "December");


    /* The number of days in each month. You're unlikely to want to change this... The first entry in this array represents January.  */
    var $daysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

}

?>