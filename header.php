<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="loading-screen" class="loading-screen">
    <div class="loading-bars">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div class="loading-text">Loading<span class="loading-dots"></span></div>
</div>
<div class="transition-overlay-1"></div>
<div class="transition-overlay-2"></div>
<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>">Hajime Kurita</a></p>
        </div>
        
        <!-- PC Navigation -->
        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/work')); ?>">Work</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Icon -->
        <div class="header-menu-icon" id="mobile-menu-toggle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png" alt="Menu">
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <nav id="mobile-navigation" class="mobile-navigation">
        <div class="mobile-menu-close" id="mobile-menu-close">
            <span>&times;</span>
        </div>
        <div class="mobile-menu-content">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/work')); ?>">Work</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
            <div class="mobile-sns-links">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x-red 1.png" alt="X">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/github-red 1.png" alt="GitHub">
                </a>
            </div>
        </div>
    </nav>
</header>
