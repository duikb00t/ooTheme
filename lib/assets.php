<?php
// Load css into the website's Front-end

function ooTheme_enqueue_style() {
    // This is loading our sass compiled CSS file.
    wp_enqueue_style( 'ooTheme-style-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'ooTheme-style', get_template_directory_uri().'/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'ooTheme_enqueue_style' );
