<!-- SIDEBAR -->
<aside id="sidebar" class="col-lg-4">
    <!-- TEXT WIDGET -->
    <div id="text-widget" class="sidebar-div mb-50">

        <!-- Title -->
        <h5 class="h5-sm txt-color-01">About Us</h5>

        <!-- Text -->
        <p class="txt-color-05 pb-10">Mauris id class aptent taciti nostra, per eget gravida donec enim ipsum porta
            justo
            integer
            at velna auctor vitae magna, vitae suscipit
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
            <li><a href="https://lashextensionsbyfiona.com/face-eyebrow-waxing/">Face & Eyebrow Waxing</a></li>
            <li><a href="https://lashextensionsbyfiona.com/microblading">Microblading</a></li>
            <li><a href="https://lashextensionsbyfiona.com/brow-eyelash/">Eyebrow & Lashes</a></li>
            <li><a href="https://lashextensionsbyfiona.com/lash-tinting">Lash Tinting</a></li>
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
                    <p class="txt-color-03"><?php echo get_comments_number(); ?> Comments</p>
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



    <!-- TAGS CLOUD -->
    <div class="tags-cloud sidebar-div mb-50">

        <!-- Title -->
        <h5 class="h5-sm txt-color-01">Tags</h5>

        <span class="badge"><a href="single-post.html#">Massage</a></span>
        <span class="badge"><a href="single-post.html#">Treatments</a></span>
        <span class="badge"><a href="single-post.html#">Balance</a></span>
        <span class="badge"><a href="single-post.html#">Aromatherapy</a></span>

    </div>


    <!-- INSTAGRAM LINKS -->
    <div class="sidebar-links mb-40">

        <!-- Title -->
        <h5 class="h5-sm txt-color-01">Instagram</h5>

        <!-- Instagram Images -->
        <ul class="sidebar-images text-center clearfix">
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-01.jpg"
                        alt="insta-img"></a></li>
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-02.jpg"
                        alt="insta-img"></a></li>
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-03.jpg"
                        alt="insta-img"></a></li>
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-04.jpg"
                        alt="insta-img"></a></li>
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-05.jpg"
                        alt="insta-img"></a></li>
            <li><a href="single-post.html#" target="_blank"><img class="insta-img" src="images/instagram/img-06.jpg"
                        alt="insta-img"></a></li>
        </ul>

    </div>


    <!-- IMAGE WIDGET -->
    <div class="image-widget sidebar-div mb-50">

        <!-- Title -->
        <h5 class="h5-sm txt-color-01">Image Widget</h5>

        <!-- Link -->
        <a href="single-post.html#"><img class="img-fluid" src="images/blog/image-widget.jpg" alt="image-widget" /></a>

    </div>
</aside> <!-- END SIDEBAR -->
</div> <!-- End row -->
</div> <!-- End container -->
</section>