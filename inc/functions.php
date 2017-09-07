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

############### Convert Date 13950121 to 1395/01/21
    function delimiter_to_date($date, $delimiter)
    {

        return substr($date, 0, 4).$delimiter.substr($date, 4, 2).$delimiter.substr($date, 6, 2);
    }

############### die and dump

    function dd( $data ) {

        echo '<pre dir="ltr">';
        var_dump($data);
        echo '</pre>';
        die;
    }

############### dump

    function d( $data ) {

        echo '<pre dir="ltr">';
        var_dump($data);
        echo '</pre>';
    }

############### dump => make_hash(5)

    function make_hash( $length, $only_num = false ) {

        if( $only_num == true ) {

            $min = str_repeat(0, $length-1) . 1;
            $max = str_repeat(9, $length);
            return mt_rand($min, $max);

        } else {
            $str = "";
            $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
            $max = count($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
            return $str;
        }
    }


########################### Includes #########################
include YZES_PATH . '/inc/ajax.php';

if(get_option('ym_gump') == 1)
    include YZES_PATH . '/lib/class.gump.php';

//Jalali Date Installation
if( get_option('ym_jdf') == 1 && !function_exists('jdate') )
    include YZES_PATH . '/lib/jdf.php';

// Include SMS Class
if( get_option('ym_sms') == 1 )
    include YZES_PATH . '/inc/classes/class-yzes-sms.php';

// Include Email Class
if( get_option('ym_email') == 1 )
    include YZES_PATH . '/inc/classes/class_yzes_email.php';

