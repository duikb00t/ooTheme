<?php

function ooTheme_setup() {

  // Register wp_nav_menu();
  register_nav_menus(array(
    'primary_navigation'  =>  __('Primary Navigation' , 'ooTheme')
  ));

  // Enable post thumbnails
  add_theme_support('post-thumbnails');

  // Remove Emoij support
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
}

add_action('after_setup_theme', 'ooTheme_setup');
