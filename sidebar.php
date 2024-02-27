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
<aside id="sidebar" class="col-lg-4">
    <div class="sidebar bg-color-05 mt-100 ml-60  shadow">
        <h6 class="text-center h6-lg txt-color-01 p-4">Content Table</h6>
        <ul class="tracking-wider ml-20 font-weight-bold">
            <li class="list-item p-2">The Art of Eyebrow Waxing</li>
            <li class="list-item p-2">How Does Eyebrow Waxing Work?</li>
            <li class="list-item p-2">Waxing vs. Threading: Which is Better?</li>
            <li class="list-item p-2">The Eyebrow Waxing Experience at Lash Extensions by Fiona</li>
        </ul>
    </div>
</aside>