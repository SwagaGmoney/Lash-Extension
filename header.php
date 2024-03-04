<?php

/**
 * 
 * Main header theme
 * 
 * @package LashExtension
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="lashextension" />

<head>
    <!-- SITE TITLE -->
    <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.ico'); ?>"
        type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.ico'); ?>"
        type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon"
        href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon.png'); ?>">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon.png'); ?>"
        type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Enqueue stylesheets -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- PAGE CONTENT
		============================================= -->

    <!-- HEADER -->
    <header id="header" class="header white-menu navbar-dark">
        <div class="header-wrapper">
            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
                <span class="smllogo"><img src="<?php echo get_template_directory_uri() . '/images/logo-01.png'; ?>"
                        width="170" height="50" alt="mobile-logo" /></span>
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            </div>
            <div class="top-bar bg-color-06 text-white py-2 font-weight-bold">
                <div class="container">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-md-5">
                            <span class="top-bar-item">
                                <i class="fas fa-envelope mr-1"></i> <a class="text-white"
                                    href="mailto:contact@ashextensionsbyfiona.com">contact@ashextensionsbyfiona.com</a>
                            </span>
                        </div>
                        <div class="col-md-4 text-right">
                            <span class="top-bar-item">
                                <i class="fas fa-phone mr-1"></i> <a class="text-white"
                                    href="tel:+17133920281">(713)-392-0281</a> | Sugar Land, TX
                            </span>
                        </div>
                        <div class="col-md-3 text-right">
                            <span class="top-bar-item">
                                <i class="fas fa-phone mr-1"></i> <a class="text-white"
                                    href="tel:(281)-690-3563">(281)-690-3563</a> | Galleria, TX
                            </span>
                        </div>
                    </div>
                </div>
            </div>












            <!-- NAVIGATION MENU -->
            <div class="wsmainfull menu clearfix">
                <div class="wsmainwp clearfix">
                    <!-- LOGO IMAGE -->
                    <div class="desktoplogo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-black">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-01.png" width="170"
                                height="50" alt="header-logo">
                        </a>
                    </div>
                    <div class="desktoplogo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-white">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" width="170"
                                height="50" alt="header-logo">
                        </a>
                    </div>
                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix">
                        <?php
                    // Output WordPress menu
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'ul',
                        'container_class' => 'wsmainwp clearfix',
                        'menu_class' => 'wsmenu-list'
                    ));
                    ?>
                    </nav><!-- END MAIN MENU -->
                </div>
            </div><!-- END NAVIGATION MENU -->
        </div><!-- End header-wrapper -->
    </header><!-- END HEADER -->