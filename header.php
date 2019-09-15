<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Resilience Academy">

    <link rel="icon" href="logo.png">
    <?php wp_head(); ?>
</head>
<body class="show-na">
<header class="layout vertical">
    <div class="flex">
        <div class="section-wrapper">
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'resilienceacademy-menu',
                    'container' => '',
                    'menu_class' => 'layout start justified'
                ));
                ?>
            </nav>
        </div>
    </div>

    <div id="logoAndMenuTrigger">
        <div class="layout center justified section-wrapper">
            <a id="logo" href="index.html" class="layout center">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" alt="">
            </a>

            <button onclick="toggleMenu()" id="menuOpener" class="layout center-center">
                <span>MENU</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            <button onclick="toggleMenu()" id="menuCloser" class="layout center-center">
                <span>CLOSE</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</header>
<main>