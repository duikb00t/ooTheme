<?php

function ooTheme_setup() {

  // Register wp_nav_menu();
  register_nav_menus(array(
    'primary_navigation'  =>  __('Primary Navigation' , 'ooTheme')
  ));

  // Enable post thumbnails
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ooTheme_setup');
