<?php
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Plugin Name:  Teknopark Core 
 * Plugin URI: selmantunc.com.tr
 * Description:  Erciyes Teknopark temasının arayüzü ve çekirdek fonksiyonları 
 * Author: Selman TUNÇ
 * Author URI: http://selmantunc.com.tr
 * Version: 1.2.0
 * Release Date: Fri-Sep-1-2023
 *
 */



function stncCore_main_enqueue_style()
{
    wp_enqueue_style( "stnc-style-boot",plugins_url("assets/css/stncCore.css", __FILE__) ,"","1.2.0" );

}
add_action('wp_enqueue_scripts', 'stncCore_main_enqueue_style');
