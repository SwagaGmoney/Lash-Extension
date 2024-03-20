<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LashExtension
 */

?>
<!-- INNER PAGE WRAPPER
			============================================= -->
<div class="inner-page-wrapper">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section class="single-post-page bg-fixed wide-100  page-hero-section division"
            style="background-image: url('<?php echo get_template_directory_uri() . '/images/lashes-03.jpg'; ?>'); ">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <div class="hero-txt text-center white-color">
                            <?php the_title( '<h1 class="h1-lg ">', '</h1>' ); ?>
                        </div>

                    </div>
                </div>
            </div> <!-- End container -->
        </section> <!-- END PAGE HERO -->
        <!--End Page Title-->