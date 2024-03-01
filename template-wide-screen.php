<?php

/** 
 * 
 * Template Name: Wide Screen
 * 
 * 
 */


get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('template-parts/content', 'page'); ?>

<section id="terms-1" class="bg-color-01 wide-60 terms-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="terms-box">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'No posts found.', 'text-domain' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="banner-5" class="bg-fixed bg-image mt-80 banner-section division">
    <div>
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    </div>
</section>


<?php get_footer(); ?>