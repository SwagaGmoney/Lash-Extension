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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'lash-extension' ),
		)
	);

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
			'name'          => esc_html__( 'Sidebar', 'purple-rose' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'purple-rose' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
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


add_filter( 'the_content', 'class_up_the_paragraphs' );


	/**
 * Adds classes to all the <p> tags in the content.
 *
 * @param  string $content The post content.
 * @return string          The post content with the classes added to the <p> tags.
 */
function class_up_the_paragraphs( $content ) {
    $content = str_replace(
        '<p>',
        '<p class="txt-color-05">',
        $content
    );
    return $content;
}