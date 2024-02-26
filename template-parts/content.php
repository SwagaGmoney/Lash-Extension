<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RoseMain
 */
?>

<!--Content Side / Blog Classic -->
<div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
    <div class="blog-classic padding-right  ">

        <?php
        // Define our WP Query Parameters
        $the_query = new WP_Query('posts_per_page=5');

        // Start our WP Query
        while ($the_query->have_posts()) : $the_query->the_post();
            // Display the Post Title with Hyperlink
            ?>

        <!--News Block Two -->
        <div class="col-lg-8">
            <div class="single-blog-post pr-30">
                <div class="blog-post-img">
                    <!-- BLOG POST IMAGE -->
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                </div>

                <!-- SINGLE POST TITLE -->
                <div class="single-post-title">
                    <!-- Post Data -->
                    <span class="txt-color-06"><?php the_category(', '); ?></span>
                    <!-- Post Title -->
                    <h3 class="txt-color-01"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <!-- Post Author -->
                    <p class="post-author txt-color-01"> By: <?php the_author_posts_link(); ?></p>
                    <div class="posted-date"><?php the_time('d M. Y'); ?></div>

                </div>
                <div class="lower-box">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <div class="text"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink() ?>" class="read-more">Continue Reading</a>
                </div>
            </div>
        </div>
    </div>

    <?php
            // Repeat the process and reset once it hits the limit
        endwhile;
        wp_reset_postdata();
        ?>

    <!--Styled Pagination-->
    <ul class="styled-pagination">
        <?php
            // Posts Pagination
            if (get_next_posts_link()) {
                echo '<li>';
                next_posts_link('<span class="fa fa-angle-left"></span>');
                echo '</li>';
            }
            if (get_previous_posts_link()) {
                echo '<li>';
                previous_posts_link('<span class="fa fa-angle-right"></span>');
                echo '</li>';
            }
            ?>
    </ul>
    <!--End Styled Pagination-->

</div>
</div>