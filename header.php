<?php

/**
 * The header of our theme
 * 
 * @package LashExtension
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>



<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="lashextension" />

    <!-- SITE TITLE -->
    <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon.png'); ?>">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/images/apple-touch-icon.png'); ?>" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Enqueue stylesheets -->
    <?php wp_head(); ?>

</head>




<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <!-- PRELOADER SPINNER
		============================================= -->
    <!-- <div id="loader-wrapper">
			<div id="loading">
				<div class="cssload-loader">
					<div class="fancy-spinner">
					  	<div class="ring"></div>
					  	<div class="ring"></div>
					  	<div class="dot"></div>
					</div>
				</div>
			</div>
		</div> -->








    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">




        <!-- HEADER
			============================================= -->
        <header id="header" class="header tra-menu navbar-light">
            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <span class="smllogo"><img src="images/logo-01.png" width="170" height="50" alt="mobile-logo" /></span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 346 x 100 pixels) -->
                        <div class="desktoplogo"><a href="demo-1.html#hero-1" class="logo-black"><img src="images/logo-01.png" width="170" height="50" alt="header-logo"></a></div>
                        <div class="desktoplogo"><a href="demo-1.html#hero-1" class="logo-white"><img src="images/logo-white.png" width="170" height="50" alt="header-logo"></a></div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">

                            <?php wp_nav_menu(array('menu_class' => 'wsmenu-list ', 'container' => 'ul',)); ?>


                            <!-- HEADER CALL BUTTON -->
                            <ul class="wsmenu-list ">
                                <li class="nl-simple header-phone"  aria-haspopup="true">
                                    <a href="tel:123456789"><span class="bg-color-09 white-color"><i class="fas fa-phone"></i></span>+12 9 8765 4321</a>
                                </li>
                            </ul>

                        </nav> <!-- END MAIN MENU -->

                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->