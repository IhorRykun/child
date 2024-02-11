<?php
add_action('wp_enqueue_scripts', 'childhood_style');
add_action('wp_enqueue_scripts', 'childhood_script');

function childhood_script() {
 wp_enqueue_script('childhood-scripts', get_template_directory_uri(  ) . '/js/main.min.js', array(), null, true);
};


function childhood_style() {
 wp_enqueue_style('childhood-style', get_stylesheet_uri() );
 wp_enqueue_style('style-header', get_stylesheet_directory() . 'assets/style/header.css' );
}
;
?>


