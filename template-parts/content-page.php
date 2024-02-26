<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LashExtension
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="bg-fixed wide-100  page-hero-section division"
        style="background-image: url('<?php echo get_template_directory_uri() . '/images/lashes-03.jpg'; ?>'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                    <div class="hero-txt text-center white-color">
                        <?php the_title( '<h2 class="h2-lg">', '</h2>' ); ?>
                    </div>
                </div>
            </div>

            <!-- BREADCRUMB -->
            <div id="breadcrumb">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                                    </li>
                                    <?php if (is_single()) : ?>
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php single_post_title(); ?>
                                    </li>
                                    <?php elseif (is_page()) : ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php single_post_title(); ?>
                                    </li>
                                    <?php endif; ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div> <!-- END BREADCRUMB -->
        </div> <!-- End container -->
    </section> <!-- END PAGE HERO -->
</article>


<!--End Page Title-->

<?php lash_extension_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->