<?php
add_action('wp_enqueue_scripts', 'child_scripts');

function child_scripts( ) {
    wp_enqueue_style('child-style', get_stylesheet_uri() );

    wp_enqueue_script('child-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

?>