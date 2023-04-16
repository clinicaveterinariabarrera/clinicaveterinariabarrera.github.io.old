<?php
/**
 * my_script.php
 *
 */
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function custom_scripts() {
    wp_enqueue_script( 'my_script', get_stylesheet_directory_uri() . '/js/my_script.js', array('jquery'), '1.0' );
} ?>