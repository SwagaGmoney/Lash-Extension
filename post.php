<?php
/**
 * The default template for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lash Extensions
 */

get_header();
?>

<?php get_template_part( 'template-parts/content-page', get_post_type() ); ?>


<section id="single-post" class="bg-color-01 wide-90 blog-page-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog-post pr-30">
                    <?php 
                    while ( have_posts() ) : the_post(); 
                        if ( has_post_thumbnail() ) { 
                            ?>
                    <div class="blog-post-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php 
                        } 
                    ?>
                    <div class="single-post-title meta">
                        <span class="txt-color-06"><?php the_category(', '); ?></span>
                        <h3 class="txt-color-01"><?php the_title(); ?></h3>
                        <p class="post-author txt-color-01"><?php the_author(); ?> - <?php the_time('d M. Y'); ?></p>
                    </div>
                    <div class="single-post-txt mt-30">
                        <div class="txt-color-05">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="row post-share-links d-flex align-items-center">
                        <div class="col-md-3 col-xl-4 post-share-listt">
                            <ul class="share-social-icons text-center clearfix txt-color-05">
                                <li><a href="https://www.facebook.com/ilashfiona " class="share-ico ico-facebook"><i
                                            class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.tiktok.com/@lashextension.by" class="share-ico ico-tiktok"><i
                                            class="fab fa-tiktok"></i></a></li>
                                <li><a href="https://www.instagram.com/lashextensionbyfiona_galleria/"
                                        class="share-ico ico-instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    
                    endwhile;
                    ?>
            <!--Sidebar-->
            <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>
            <!--End Sidebar-->
            <!-- BANNER-5  -->
            <?php get_template_part( 'template-parts/content', 'banner' ); ?>
            <?php get_footer(); ?>