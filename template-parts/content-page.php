<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RoseMain
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="page-title" style="background-image:url(images/background/3.jpg); ">
        <div class="auto-container">
            <div class="contents">
                <?php the_title( '<h1 class="entry-title  ">', '</h1>' ); ?>
                <ul class="page-breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <?php if (is_single()) : ?>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Blog</a></li>
                    <li><?php single_post_title(); ?></li>
                    <?php elseif (is_page()) : ?>
                    <li><?php single_post_title(); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
</article>

<!--End Page Title-->

<?php lash_extension_post_thumbnail(); ?>

<div class="entry-content">
    <?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'LashExtension' ),
                'after'  => '</div>',
            )
        );
    ?>
</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
