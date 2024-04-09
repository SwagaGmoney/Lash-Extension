<?php

/** 
 * 
 * Template Name: Gallery Photo Page
 * 
 */


get_header();

get_template_part('template-parts/content', 'page');

// Example query to retrieve images based on selected category
?>
<section id="gallery-1" class="bg-color-01 wide-80 gallery-section division">
    <div class="container">
        <!-- SECTION TITLE -->
        <!-- GALLERY FILTERING BUTTONS -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="masonry-filter mb-40">
                    <button data-filter="*" class="is-checked">All</button>
                    <button data-filter=".spa">Other Services</button>
                    <button data-filter=".massage">Classic lashes</button>
                    <button data-filter=".aroma">YY Lash</button>
                    <button data-filter=".herbs">Microblading</button>
                </div>
            </div>
        </div>
    </div>
    <?php
$images = get_field('gallery');

if( $images ): 


?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 gallery-items-list">
                <div class="masonry-wrap grid-loaded">
                    <?php foreach( $images as $image ): ?>
                    <div class="masonry-item spa massage">
                        <div class="hover-overlay">
                            <a href="<?php echo $image['url']; ?>">
                                <img src="<?php echo $image['sizes']['large']; ?>" class="img-fluid"
                                    alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>