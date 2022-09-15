<?php
/**
 * loads the JavaScript for the nav bar toggle
 */

add_action('wp_enqueue_scripts', 'ybp_wp_enque_scripts' );

function ybp_wp_enque_scripts() {
  $version = wp_get_theme()->Version;

  global $post;

    //registered files
   wp_register_script('header_script', get_stylesheet_directory_uri() .'/src/js/header-script.js', $version, true );

    // included files
   wp_enqueue_script('header_script', '', '', '', true );
  }