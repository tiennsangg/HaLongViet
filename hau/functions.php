<?php

/**
 * hazo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hazo
 */
$random_ver = rand(1, 1000000000);
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', $random_ver);
}

if (!function_exists('hazo_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hazo_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hazo, use a find and replace
		 * to change 'hazo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('hazo', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Menu Chính', 'hazo'),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'hazo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hazo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hazo_content_width', 640);
}
add_action('after_setup_theme', 'hazo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hazo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'hazo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'hazo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'hazo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hazo_scripts()
{
	wp_enqueue_style('hazo-style', get_stylesheet_uri(), array(), _S_VERSION);
	if (is_404()) {
		wp_enqueue_style('hazo-404', get_template_directory_uri() . '/css/404.min.css', array(), _S_VERSION);
	}
	if (class_exists('WooCommerce')) {
		wp_enqueue_style('hazo-woo', get_template_directory_uri() . '/css/woocommerce.min.css', array(), _S_VERSION);
	}
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	if (class_exists('WPCF7')) {
		wp_enqueue_style('hazo-alert', get_template_directory_uri() . '/assets/alert/css/cf7simplepopup-core.css', array(), _S_VERSION);
	}
	wp_enqueue_script('hazo-jquery', get_template_directory_uri() . '/assets/fe-library/jquery.min.js', array(), _S_VERSION, true);
	if (class_exists('WPCF7')) {
		wp_enqueue_script('hazo-jquery_alert', get_template_directory_uri() . '/assets/alert/js/cf7simplepopup-core.js', array(), _S_VERSION, true);
		wp_enqueue_script('hazo-jquery_alert_main', get_template_directory_uri() . '/assets/alert/js/sweetalert2.all.min.js', array(), _S_VERSION, true);
	}
	//css
	wp_enqueue_style('hazo-bootstrap', get_template_directory_uri() . '/assets/fe-library/bootstrap.min.css');
	wp_enqueue_style('hazo-flickity', get_template_directory_uri() . '/assets/fe-library/flickity.min.css');
	wp_enqueue_style('hazo-fancybox', get_template_directory_uri() . '/assets/fe-library/jquery.fancybox.min.css');
	wp_enqueue_style('hazo-style-main', get_template_directory_uri() . '/assets/scss/style.css', array(), _S_VERSION);
	wp_enqueue_style('hazo-fontawesome', get_template_directory_uri() . '/assets/fe-library/font-awesome.all.min.css', array(), _S_VERSION);
	wp_enqueue_style('hazo-animate', get_template_directory_uri() . '/assets/fe-library/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style('hazo-style-main2', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	//js
	wp_enqueue_script('hazo-wow', get_template_directory_uri() . '/assets/fe-library/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-bootstrap', get_template_directory_uri() . '/assets/fe-library/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-flickity', get_template_directory_uri() . '/assets/fe-library/flickity.pkgd.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-fancybox', get_template_directory_uri() . '/assets/fe-library/jquery.fancybox.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-fontawesome', get_template_directory_uri() . '/assets/fe-library/font-awesome.all.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('hazo-js-cuttr', get_template_directory_uri() . '/assets/fe-library/cuttr.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('hazo-js-main', get_template_directory_uri() . '/assets/js/index.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'hazo_scripts');


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer Wordpress.
 */
require get_template_directory() . '/inc/customizer-wp.php';


require get_template_directory() . '/custom-login-admin.php';
/**
 * Customizer Widget.
 */
require get_template_directory() . '/inc/customizer-widget.php';


if (class_exists('WooCommerce')) {
	/**
	 * Customizer Woocommerce.
	 */
	require get_template_directory() . '/inc/customizer-woo.php';
}

function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep) {
    return '<span class="breadcrumb-separate"></span>';
};

// add the filter
add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);