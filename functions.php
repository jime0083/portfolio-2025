<?php
function portfolio_2025_scripts() {
    wp_enqueue_style( 'portfolio-2025-style', get_stylesheet_uri() );
    
    // Enqueue Scripts
    wp_enqueue_script( 'portfolio-2025-inview', get_template_directory_uri() . '/assets/js/inview.js', array(), '1.0', true );
    wp_enqueue_script( 'portfolio-2025-main', get_template_directory_uri() . '/assets/js/main.js', array('portfolio-2025-inview'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_2025_scripts' );

function portfolio_2025_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'portfolio_2025_setup' );
