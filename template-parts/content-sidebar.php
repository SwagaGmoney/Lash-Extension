<!-- SIDEBAR -->
<aside id="sidebar" class="col-lg-4">
    <!-- TEXT WIDGET -->
    <div id="text-widget" class="sidebar-div mb-50">
        <!-- Title -->
        <h5 class="h5-sm txt-color-01">About Us</h5>
        <!-- Text -->
        <p class="txt-color-05 pb-10">When you love the way you look, your confidence grows. The
            moment you come to us, you will get the high-quality personal attention you deserve.
        </p>
        <a href="https://lashextensionsbyfiona.com/contact" class="btn btn-md btn-color-02 color-01-hover">Make an
            Appointment</a>
    </div> <!-- End Text Widget -->
    <!-- SEARCH FIELD -->
    <div id="search-field" class="sidebar-div mb-50">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                aria-describedby="search-field">
            <div class="input-group-append">
                <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <!-- BLOG CATEGORIES -->
    <div class="blog-categories sidebar-div mb-50">
        <!-- Title -->
        <h5 class="h5-sm txt-color-01">Services</h5>

        <ul class="blog-category-list txt-color-05 clearfix">
            <li><a href="https://lashextensionsbyfiona.com/services/lash-extensions/">Lash Extensions</a></li>
            <li><a href="https://lashextensionsbyfiona.com/services/microblading">Microblading</a></li>
            <li><a href="https://lashextensionsbyfiona.com/services/face-eyebrow-waxing/">Face & Eyebrow Waxing</a></li>
            <li><a href="https://lashextensionsbyfiona.com/services/lash-tinting">Lash Tinting</a></li>
        </ul>
    </div>
    <!-- POPULAR POSTS -->
    <div class="popular-posts sidebar-div mb-50">
        <!-- Title -->
        <h5 class="h5-sm txt-color-01">Latest Posts</h5>

        <ul class="popular-posts">

            <?php
        // Query latest posts
        $args = array(
            'post_type'      => 'post', // Specify post type
            'posts_per_page' => 3, // Number of posts to display
            'orderby'        => 'date', // Order by date
            'order'          => 'DESC', // Descending order
        );
        $latest_posts = new WP_Query( $args );

        // Loop through latest posts
        if ( $latest_posts->have_posts() ) :
            while ( $latest_posts->have_posts() ) :
                $latest_posts->the_post();
        ?>
            <!-- Single post -->
            <li class="clearfix d-flex align-items-center">
                <!-- Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" class="img-link">
                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-fluid', 'alt' => get_the_title() ) ); ?>

                </a>
                <?php endif; ?>
                <!-- Text -->
                <div class="post-summary">
                    <a href="<?php the_permalink(); ?>" class="txt-color-05"><?php the_title(); ?></a>
                </div>
            </li>
            <?php
            endwhile;
            wp_reset_postdata(); // Reset post data
        else :
            // No posts found
            echo '<li>No posts found</li>';
        endif;
        ?>
        </ul>

    </div>

    <!-- Social Media LINKS -->
    <!-- IMAGE WIDGET -->
    <div class=" sidebar-div mb-50">
        <div class="toc">
            <?php
  $content = get_the_content();
  preg_match_all('/<(h\d*).*?(?: id="(.*?)")?>((.*?))</',$content,$matches); $levels=$matches[1]; $anchors=$matches[2];
                $headings=$matches[3]; if ( $headings ) { echo '<div class="title">Table of Contents</div>' ; function
                collate_row($depth, $anchor, $heading) { $level=substr($depth, 1); if ( $anchor ) { return ["<a
                href='#{$anchor}' class='{$depth} toc-link'>{$heading}</a>", $level];
            } else {
            $slug = sanitize_title($heading);
            return ["<a href='#{$slug}' class='{$depth} toc-link'>{$heading}</a>", $level];
            }
            }

            $collated = array_map('collate_row', $levels, $anchors, $headings );
            $previous_level = 2;
            echo '<ol class="toc-list">';
                foreach ($collated as $key=>$row) {
                $current_level = $row[1];

                if ( $current_level == $previous_level ) {
                if ( $key === 0 ) {
                echo '<li>' . $row[0];
                    } else {
                    echo '</li>
                <li>' . $row[0];
                    }
                    } else if ( $current_level < $previous_level ) { echo str_repeat('</ol>', $previous_level -
                        $current_level) . '
                <li>'. $row[0] . '</li>';
                } else {
                echo '<ol>
                    <li>' . $row[0]. '</li>';
                    }

                    $previous_level = $row[1];

                    }

                    echo '</li>
                </ol>';

                $previous_level = $row[1];
                }
                ?>
        </div>

    </div>
</aside> <!-- END SIDEBAR -->
</div> <!-- End row -->
</div> <!-- End container -->
</section>