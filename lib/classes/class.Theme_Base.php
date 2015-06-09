<?php

class Theme_Base {

  public function __construct() {
    // Register Action Hooks
    add_action('wp_enqueue_scripts', array( $this, 'action_wp_enqueue_scripts'), 1000);
  }

  public function action_wp_enqueue_scripts() {

  }
}
