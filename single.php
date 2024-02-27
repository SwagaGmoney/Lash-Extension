<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Purple_Rose
 */

get_header();
?>

<?php
/**
 * The template for displaying all single posts
 *
 * @package LashExtension
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content-page', get_post_type() ); ?>


<section id="single-post" class="bg-color-01 wide-90 blog-page-section division">
    <div class="container">
        <div class="row">
            <!-- POST CONTENT -->
            <div class="col-lg-8">
                <div class="single-blog-post pr-30">
                    <?php 
                    while ( have_posts() ) : the_post(); 
                        // Check if the post has a Post Thumbnail assigned to it.
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
                        <p class="post-author txt-color-01"><?php the_author(); ?> - <?php the_time('d M. Y'); ?>
                        </p>


                        <div class="single-post-txt">

                            <div class="txt-color-05">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    
                    endwhile; // End of the loop.
                    ?>
            </div>
        </div>

        <!--Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->

    </div>
    </div>
    <!-- BANNER-5 ============================================= -->
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>

    </div>

    <?php get_footer(); ?>