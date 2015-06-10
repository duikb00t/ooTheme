<?php
class Theme_Base extends Theme_Base {

  public function __construct() {
    // Register Action Hooks
    add_action('wp_enqueue_scripts', array( $this, 'action_wp_enqueue_scripts'), 1000);
  }

  public function action_wp_enqueue_scripts() {
    wp_localize_script( 'ooTheme_js', 'themes_path', substr( get_template_directory(), strpos( get_template_directory(), 'wp-content/' ) ) );
  }
}
