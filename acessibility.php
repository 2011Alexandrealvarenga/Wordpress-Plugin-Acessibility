<?php
/*
 * Plugin Name: Acessibility Plugin
 * Description: Plugin that have somes function to acessibilily
 * Version: 2.0
 * Author: Alexandre Alvarenga
 * Plugin URI: 
 * Author URI: 
 */

 if(!function_exists('add_action')){
  echo 'Hi, I am a plugin, i cannot call directly!';
  exit;
}
// setup
define('WP_ACESSIBILITY_PLUGIN_URL', __FILE__);
include('enqueue.php');
include('callhtml.php');


add_action('wp_enqueue_scripts', 'wp_acessibility_enqueue_css');
add_action('wp_footer', 'wp_acessibility_html');
// add_action('wp_footer', 'wp_acessibility_enqueue_js');
add_action('wp_footer', 'wp_script_acessibility');