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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="Spa Magic - Spa, Hair & Beauty Salon Landing Page Template" />
    <meta name="keywords" content="Jthemes, Beauty, Cosmetic, Girly, Health, Healthy Care, Massage, Make Up, Salon, Spa, Skincare, Wellness">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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




<body>




    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loader-wrapper">
        <div id="loading">
            <div class="cssload-loader">
                <div class="fancy-spinner">
                    <div class="ring"></div>
                    <div class="ring"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div>




    <!-- PAGE CONTENT
		============================================= -->
    <div id="page" class="page">




        <!-- HEADER
			============================================= -->
        <header id="header" class="header tra-menu navbar-light">
            <!-- Top bar  -->

            <div class="top-bar" style="background-color: #7982d5;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12" >
                            <!-- Email icon with link -->
                            <a href="mailto:fiona160715@yahoo.com"  style="color: white;">
                                <i class="fas fa-envelope"></i> fiona160715@yahoo.com
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <!-- Location icon with address -->
                            <span class="top-bar-link"  style="color: white;">
                                <i class="fas fa-map-marker-alt"></i> 4131 Highway 6 Sugar Land, 77478
                            </span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <!-- Call icon with phone number -->
                            <a href="tel:2816903563"  style="color: white;">
                                <i class="fas fa-phone"></i> +1(281)-690-3563
                            </a>
                        </div>
                    </div>
                </div>
            </div>








            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <span class="smllogo"><img src="<?php echo get_template_directory_uri() . '/images/logo-01.png'; ?>" width="200" alt="mobile-logo" /></span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 346 x 100 pixels) -->
                        <div class="desktoplogo"><a href="/" class="logo-black"><img src="<?php echo get_template_directory_uri() . '/images/logo-01.png'; ?>" width="200" alt="header-logo"></a></div>
                        <div class="desktoplogo"><a href="/" class="logo-white"><img src="<?php echo get_template_directory_uri() . '/images/logo-white.png'; ?>" width="200" alt="header-logo"></a></div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu clearfix">
                            <?php wp_nav_menu(array('menu_class' => 'wsmenu-list', 'container' => 'ul',)); ?>

                            <ul class="wsmenu-list">
                                <!-- HEADER CALL BUTTON -->
                                <li class="nl-simple header-phone" aria-haspopup="true">
                                    <a href="about.html#" class="btn btn-color-02 tra-01-hover last-link rounded-pill">Book Now</a>
                                </li>
                            </ul>
                        </nav> <!-- END MAIN MENU -->

                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->