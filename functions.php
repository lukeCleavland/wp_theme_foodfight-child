<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', '', '2.0' );
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/child.css', '', '2.0' );
}

?>