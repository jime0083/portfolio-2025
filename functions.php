<?php
function portfolio_2025_scripts() {
    wp_enqueue_style( 'portfolio-2025-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'portfolio_2025_scripts' );

function portfolio_2025_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'portfolio_2025_setup' );
