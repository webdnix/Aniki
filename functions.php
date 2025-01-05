<?php
// Enqueue parent and child theme styles
function aniki_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('aniki-parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme style
    wp_enqueue_style('aniki-child-style', get_stylesheet_directory_uri() . '/style.css', ['aniki-parent-style'], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'aniki_child_enqueue_styles');