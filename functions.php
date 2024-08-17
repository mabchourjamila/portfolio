<?php 

add_action( 'wp_enqueue_scripts', 'webtion_enqueue_styles' );
function webtion_enqueue_styles() {
    wp_enqueue_style( 'webtion-parent-style', get_template_directory_uri() . '/style.css' );

}