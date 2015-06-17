<?php
// load css into the website's front-end

function ooTheme_enqueue_style() {
    // This is loading our sass compiled CSS file.
    wp_enqueue_style( 'ooTheme-style', get_template_directory_uri().'/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'ooTheme_enqueue_style' );
