<?php
/**
 * Purple Rose functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LashExtension
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lash_extension_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Purple Rose, use a find and replace
		* to change 'purple-rose' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lash-extension', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lash_extension_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
			'flex-height' => true,

			
		)
	);
}
add_action( 'after_setup_theme', 'lash_extension_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lash_extension_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lash_extension_content_width', 640 );
}
add_action( 'after_setup_theme', 'lash_extension_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lash_extension_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lash_extensio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lash_extensio' ),
			'before_widget' => '<div id="%1$s sidebar" class="sidebar-div mb-50 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lash_extension_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lash_extension_scripts() {
	
     // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
     // Enqueue Font Awesome CSS
	 wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
 
     // Enqueue other stylesheets
     wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css' );
     wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
     wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
     wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
     wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
     wp_enqueue_style( 'datetimepicker', get_template_directory_uri() . '/css/jquery.datetimepicker.min.css' );
     wp_enqueue_style( 'pink-theme', get_template_directory_uri() . '/css/pink-theme.css' );
     wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	 

     wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );

      // Enqueue JS files
    wp_enqueue_script( 'jquery-3.4.1', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'modernizr-custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), null, true );
    wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js', array(), null, true );
    wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), null, true );
    wp_enqueue_script( 'jquery.scrollto', get_template_directory_uri() . '/js/jquery.scrollto.js', array(), null, true );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array(), null, true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.js', array(), null, true );
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/tweenmax.min.js', array(), null, true );
    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/slideshow.js', array(), null, true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), null, true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), null, true );
    wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), null, true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true );
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true );
    wp_enqueue_script( 'hero-form', get_template_directory_uri() . '/js/hero-form.js', array(), null, true );
    wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/contact-form.js', array(), null, true );
    wp_enqueue_script( 'comment-form', get_template_directory_uri() . '/js/comment-form.js', array(), null, true );
    wp_enqueue_script( 'booking-form', get_template_directory_uri() . '/js/booking-form.js', array(), null, true );
    wp_enqueue_script( 'jquery.datetimepicker.full', get_template_directory_uri() . '/js/jquery.datetimepicker.full.js', array(), null, true );
    wp_enqueue_script( 'jquery.validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), null, true );
    wp_enqueue_script( 'jquery.ajaxchimp', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), null, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), null, true );
    wp_enqueue_script( 'changer', get_template_directory_uri() . '/js/changer.js', array(), null, true );
    wp_enqueue_script( 'styleswitch', get_template_directory_uri() . '/js/styleswitch.js', array(), null, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lash_extension_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.ss
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);
function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        function( $class){ 
                 return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) ); }
             );
        
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
    }


	add_post_type_support( 'page', 'excerpt' );




	/**
 * Adds classes to all the tags in the content.
 *
 * @param  string $content The post content.
 * @return string          The post content with the classes added to the <p> tags.
 */


add_filter( 'the_content', 'custom_classes' );

function custom_classes( $content ) {
    $classes = array(
        'h1' => 'h1-class',
        'h2' => 'single-post-txt',
        'h3' => 'single-post-txt h5-md txt-color-01',
        'h4' => 'h4-class',
        'h5' => 'h5-class',
        'h6' => 'h6-class',
		'p'  => 'txt-color-05',
		'ul' => 'simple-list txt-color-05',
        'li' => 'list-item'
    );

    foreach ($classes as $tag => $class) {
        $content = str_replace(
            "<$tag>",
            "<$tag class=\"$class\">",
            $content
        );
    }

    return $content;
}

add_image_size( 'latest-post-thumbnail', 100, 100, true ); // Adjust dimensions as needed


add_action('admin_init', function () {
// Redirect any user trying to access comments page
global $pagenow;

if ($pagenow === 'comments.php') {
    wp_redirect(admin_url());
    exit;
}

/*
*
* Disables comments functionality.
* 
*/

// Remove comments metabox from dashboard
remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

// Disable support for comments and trackbacks in post types
foreach (get_post_types() as $post_type) {
    if (post_type_supports($post_type, 'comments')) {
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
    }
}
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
if (is_admin_bar_showing()) {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
}
});


add_filter('the_content', function ($content) {
    global $tableOfContents, $headings_order;
    $tableOfContents = "
        <h5 class='h5-sm text-center txt-color-01'>
            Table of Contents
        </h5>
        <ol class='items'>"; // Open <ol> tag here
    $headings_order = []; // Array to store the order of headings
    $index = 1;
    // Insert the IDs and create the TOC.
    $content = preg_replace_callback('#<(h[1-6])(.*?)>(.*?)</\1>#si', function ($matches) use (&$index, &$tableOfContents, &$headings_order) {
        $tag = $matches[1];
        $title = strip_tags($matches[3]);
        $hasId = preg_match('/id=(["\'])(.*?)\1[\s>]/si', $matches[2], $matchedIds);
        $id = $hasId ? $matchedIds[2] : $index++ . '-' . sanitize_title($title);
        // Add the heading and its ID to the order array
        $headings_order[] = array('title' => $title, 'id' => $id);
        $tableOfContents .= "<li class='item-$tag'><a href='#$id'>$title</a></li>";
        if ($hasId) {
            return $matches[0];
        }
        return sprintf('<%s%s id="%s">%s</%s>', $tag, $matches[2], $id, $matches[3], $tag);
    }, $content);
    $tableOfContents .= '</ol>'; // Close <ol> tag here
    // Sort the headings in the order they appear in the content
    usort($headings_order, function($a, $b) {
        return strnatcasecmp($a['id'], $b['id']);
    });
    return $content;
});


function get_the_table_of_contents()
{
    global $tableOfContents;
    return $tableOfContents;
}

function theme_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'theme' ), // Primary menu
    ) );
}
add_action( 'after_setup_theme', 'theme_register_menus' );