<?php
/*
Plugin Name: Bauserman Date Display
Description: Plugin designed for automatically updating the dates [bg_date display="" text_before="" text_after=""]. Please refer to this <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank"> documentation </a> for variables to pass into display. Make sure to set Wordpress to the correct time zone Settings > General
Author: Jaycob Jones
Author URI: mailto:jonesjaycob@gmail.com
Version: 2.0
*/



function get_date_time($atts)
{
    extract(shortcode_atts(array(
        'display' => '',
        'text_before' => '',
        'text_after' => '',
    ), $atts));


    $displaydate = $display;
     $beforetext = $text_before;
    $aftertext = $text_after;


    $output = $beforetext;
    $output .= '&nbsp;';
    $output .= current_time($displaydate);
    $output .= '&nbsp;';
    $output .= $aftertext;


    return $output;
}

add_shortcode('bg_date','get_date_time');


