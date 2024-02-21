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
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="image">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="lower-content ">
                        <div class="upper-box clearfix">
                            <div class="pull-left">
                                <div class="posted-date"><?php the_time('d M. Y'); ?></div>
                            </div>
                            <div class="pull-right">
                                <ul class="post-meta">
                                    <li>By: <?php the_author_posts_link(); ?></li>
                                    <li><?php the_category(', '); ?></li>
                                    <li>Comments: <?php comments_number('0', '1', '%'); ?></li>
                                </ul>
                            </div>
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
