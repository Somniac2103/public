<?php
/**
 * Theme Functions
 * 
 * @package Aquila
 */

use AQUILA_THEME\inc\AQUILA_THEME;

if ( ! defined( 'AQUILA_DIR_PATH')) {
  define( 'AQUILA_DIR_PATH', untrailingslashit( get_template_directory()));
}
 require_once AQUILA_DIR_PATH . '/inc/helpers/autoloaders.php';

 function auila_get_theme_instance(){
  \AQUILA_THEME\inc\AQUILA_THEME::get_instance();
 }
auila_get_theme_instance();

 function aquila_enqueue_scripts(){


  // wp_enqueue_style('styles-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
  // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory()), true );

  
  //Register Styles
  wp_register_style('styles-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
  wp_register_style('bootstrap-css', get_template_directory_uri() . "/assets/src/library/css/bootstrap.min.css", [], false, 'all');

  //Register scripts
  wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory()), true );
  wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [], false , true );

  //Enqueue Styles
  wp_enqueue_style( 'style-css' );
  wp_enqueue_style( 'bootstrap-css' );

  //Enqueue Scripts
  wp_enqueue_script('main-js');
  wp_enqueue_script('bootstrap-js');
 }

 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
