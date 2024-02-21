<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LashExtension
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
    <aside class="sidebar style-two">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
    </aside>
</div>

<div class="sidebar-widget search-box">
    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="form-group">
            <input type="search" name="s" value="<?php get_search_query(); ?>"
                placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'mytheme'); ?>" required>
            <button type="submit"><span class="icon fa fa-search"></span></button>
        </div>
    </form>
</div>