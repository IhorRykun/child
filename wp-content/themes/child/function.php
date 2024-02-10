<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri( ) );
    wp_enqueue_style( 'style-header', get_template_directory_uri( ) . "assets/style/header.css" );
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri( ) . 'assets/js/main.min.js', array(), null, true);
    wp_enqueue_script('jquery_my', 'https://code.jquery.com/jquery-3.0.0.min.js');
};

?>  