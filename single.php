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

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side / Blog Single -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">

                <div class="blog-single padding-right">
                    <?php 
                    while ( have_posts() ) : the_post(); 
                        // Check if the post has a Post Thumbnail assigned to it.
                        if ( has_post_thumbnail() ) { 
                            ?>
                    <div class="image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php 
                        } 
                    ?>

                    <div class="inner-box">
                        <div class="lower-content">
                            <div class="upper-box clearfix">
                                <div class="posted-date pull-left"><?php the_time('d M. Y'); ?></div>
                                <ul class="post-meta pull-right">
                                    <li>By: <?php the_author(); ?></li>
                                    <li><?php the_category(', '); ?></li>
                                    <li>Comments: <?php comments_number('0', '1', '%'); ?></li>
                                </ul>
                            </div>
                            <div class="lower-box">
                                <h3><?php the_title(); ?></h3>
                                <div class="text">
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
</div>

<?php get_footer(); ?>