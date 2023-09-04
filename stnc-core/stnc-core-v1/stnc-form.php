<?php
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Plugin Name:  Teknopark Core 
 * Plugin URI: selmantunc.com.tr
 * Description:  Erciyes Teknopark temasının arayüzü ve çekirdek fonksiyonları 
 * Author: Selman tunÇ
 * Author URI: http://selmantunc.com.tr
 * Version: 1.0.0
 *
 */

/*
function stncForm_register_js()
{
    // Register the JS file with a unique handle, file location, and an array of dependencies
    wp_enqueue_script("dropzone",  plugins_url('../assets/js/dropzone.min.js', __FILE__), array('jquery'));



    // localize the script to your domain name, so that you can reference the url to admin-ajax.php file easily
    wp_localize_script('dropzone', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

    // enqueue jQuery library and the script you registered above
    wp_enqueue_script('jquery');
    wp_enqueue_script('dropzone');
    //     wp_enqueue_script('dropzone.dict');
    //   wp_enqueue_script('stnc_upload');
}

add_action('wp_enqueue_scripts', 'stncForm_register_js');
*/
/*
// load css into the website's front-end
function stncForm_enqueue_style()
{
    if ((isset($_GET['page'])) && ($_GET['page'] === 'stncTekForm')) {
    wp_enqueue_style('stnc-style', plugins_url('../assets/css/stnc.css', __FILE__));
    }
}
add_action('admin_enqueue_scripts', 'stncForm_enqueue_style');
*/

function stncCore_main_enqueue_style()
{
    wp_enqueue_style('stnc-core-style', plugins_url('assets/css/stncCore.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'stncCore_main_enqueue_style');



