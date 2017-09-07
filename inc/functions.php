<?php

############### Convert 2010-12-23 14:10:46 to TimeStamp ###############
## convert this return to jalali jdate("Y/m/d H:i:s", $timestamp);
function convert_datetime_to_timestamp($str)
{

    list($date, $time) = explode(' ', $str);
    list($year, $month, $day) = explode('-', $date);
    list($hour, $minute, $second) = explode(':', $time);

    $timestamp = mktime($hour, $minute, $second, $month, $day, $year);

    return $timestamp;
}


############### Convert Date 1395-1-1 to 1395/01/01
function two_digits_date($date, $delimiter, $new_delimiter = false)
{

    $date_arr = explode($delimiter, $date);
    if (strlen($date_arr[1]) < 2) $date_arr[1] = '0' . $date_arr[1];
    if (strlen($date_arr[2]) < 2) $date_arr[2] = '0' . $date_arr[2];

    if($new_delimiter != false)
        return $date_arr[0] .$new_delimiter. $date_arr[1] .$new_delimiter. $date_arr[2];
    else
        return $date_arr[0] . $date_arr[1] . $date_arr[2];
}
