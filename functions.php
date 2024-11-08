<?php

function techub_theme_sepport(){
 // Add support for featured images
 add_theme_support('post-thumbnails');

 // Add Multi Language Support
 load_theme_textdomain('pedro', get_template_directory_uri() . '/languages');
 
 // Add Title Tag
 add_theme_support('title-tag');

 // cusomize selective refresh widgets
 add_theme_support( 'customize-selective-refresh-widgets' );

  // add post formet support
 add_theme_support( 'post-formats', array(
     'aside',
     'image',
     'gallery',
     'video',
     'audio',
     'link',
     'quote',
     'status'
    ));

  // Add support for HTML5
  add_theme_support('html5', array(
     'comment-list',
     'comment-form',
     'search-form',
     'gallery',
     'caption',
     'style',
     'script',
 ));

 // register nav menu
 register_nav_menus(array(
   'main-menu' => __('Main Menu', 'techub')
 ));


}

add_action('after_setup_theme', 'techub_theme_sepport');



/**
 *  scripts 
*/
include_once('inc/common/scripts.php');


/**
 * Template Function 
 */
include_once('inc/template-function.php');

/**
 * Template Function 
 */
include_once('inc/nav-walker.php');


/**
 *  kirki customizer 
*/
if(class_exists('kirki')){
  include_once('inc/techub-kirki.php');
}

