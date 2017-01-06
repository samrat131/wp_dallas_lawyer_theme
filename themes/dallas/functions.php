<?php
/**
 * Dallas TX Criminal Lawyer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dallas_TX_Criminal_Lawyer
 */

if ( ! function_exists( 'dallas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dallas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Dallas TX Criminal Lawyer, use a find and replace
	 * to change 'dallas' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dallas', get_template_directory() . '/languages' );

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

	add_image_size( 'blog-thumb', 385, 180, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'dallas' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dallas_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'dallas_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dallas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dallas_content_width', 684 );
}
add_action( 'after_setup_theme', 'dallas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dallas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dallas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dallas' ),
		'before_widget' => '<div id="%1$s" class="widget practice-areas %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dallas' ),
		'id'            => 'sidebar-blog',
		'description'   => esc_html__( 'Add Blog widgets here.', 'dallas' ),
		'before_widget' => '<div id="%1$s" class="widget blog-list-body %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dallas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dallas_scripts() {
	wp_enqueue_style( 'dallas-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dallas-style-print', get_template_directory_uri().'/css/print.css', array(), false, 'print' );
	wp_enqueue_style( 'dallas-style-reset', get_template_directory_uri().'/css/reset.css' );
	wp_enqueue_style( 'dallas-style-navigation', get_template_directory_uri().'/css/navigation.css' );
	wp_enqueue_style( 'dallas-style-icon', get_template_directory_uri().'/css/icon.css' );
	wp_enqueue_style( 'dallas-style-media-queries', get_template_directory_uri().'/css/media-queries.css' );
	wp_enqueue_style( 'dallas-style-override', get_template_directory_uri().'/css/override.css' );
	
	wp_enqueue_script( 'dallas-navigation', get_template_directory_uri() . '/js/nav-script.js', array(), '20151215', true );
	wp_enqueue_script( 'dallas-jqueryslidemenu', get_template_directory_uri() . '/js/jqueryslidemenu.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'dallas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dallas_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*
//$mainPage = array('Home', 'About', 'Practice Areas', 'FAQs', 'Articles', 'Blog', 'Testimonials', 'Results', 'Sitemap', 'Contact', 'Other Resources' );
$subPage = array('Alcohol Offenses', 'Assault and Battery Offenses', 'Drug Offenses', 'Expunction', 'Gun Crimes', 'Juvenile Offenses', 'Sex Crimes', 'Texas Open Carry Violations', 'Theft and Robbery Offenses');

if ( !defined( 'DOING_AJAX' ) && !defined( 'DOING_CRON' ) )
{
	foreach ($subPage as $key) {
		$page_attr = array(
		    'post_title'    => trim($key),
		    //'post_content'  => '',
		    'post_status'   => 'publish',
		    'post_author'   => 1,
		    'post_type'		=> 'page'
		);
		//wp_insert_post( $page_attr );	
	}    
}*/

