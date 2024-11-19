<?php

// Add theme support for various features.
if (function_exists("add_theme_support")) {
	add_theme_support('admin-bar', array('callback' => '__return_false')); // Hide admin bar
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
	add_theme_support('post-formats', array('standard', 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
}

// Register custom menus
function register_my_menus() {
	register_nav_menus(array(
		'main-nav' => 'Main Navigation',
	));
}
add_action('init', 'register_my_menus');

// Register theme template URL shortcode
add_shortcode('template_url', 'theme_template_url');
function theme_template_url() {
	return get_bloginfo('template_url');
}
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in widgets

// Move JS to footer for better performance
function footer_enqueue_scripts() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('after_setup_theme', 'footer_enqueue_scripts');

// Add 'active' class to current menu item
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active';
	}
	return $classes;
}

// Disable WordPress generator meta tag for security reasons
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

// Disable XML-RPC to prevent remote publishing and attacks
add_filter('xmlrpc_enabled', '__return_false');

// Set image quality for thumbnails
function my_prefix_regenerate_thumbnail_quality() {
	return 70; // Set JPEG quality to 70%
}
add_filter('jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');

// Clean up the WordPress dashboard by removing unnecessary widgets
add_action('wp_dashboard_setup', 'clear_wp_dash');
function clear_wp_dash() {
	$dash_side = &$GLOBALS['wp_meta_boxes']['dashboard']['side']['core'];
	$dash_normal = &$GLOBALS['wp_meta_boxes']['dashboard']['normal']['core'];

	unset($dash_side['dashboard_quick_press']);
	unset($dash_side['dashboard_primary']);
	unset($dash_side['dashboard_secondary']);
	unset($dash_normal['dashboard_incoming_links']);
	unset($dash_normal['dashboard_recent_comments']);
	unset($dash_normal['dashboard_plugins']);
	unset($dash_normal['dashboard_activity']);
}

// Register a custom post type for 'section' on pages
register_post_type('section', array(
	'labels' => array(
		'name' => _x('Sections for Pages', 'post type general name'),
		'singular_name' => _x('Section for Home', 'post type singular name'),
		'add_new' => _x('Add Section', 'add'),
		'add_new_item' => __('Add Section'),
		'edit_item' => __('Edit Section'),
		'new_item' => __('New Section'),
		'view_item' => __('View Section'),
		'search_items' => __('Search Section'),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Not found in the Trash'),
	),
	'public' => false,
	'show_ui' => true,
	'hierarchical' => true,
	'menu_position' => 7,
	'menu_icon' => 'dashicons-admin-home',
	'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes'),
));

// Remove editor for specific page templates
add_action('admin_init', 'hide_editor');
function hide_editor() {
	if (isset($_GET['post']) || isset($_POST['post_ID'])) {
		$post_id = isset($_GET['post']) ? $_GET['post'] : $_POST['post_ID'];

		$template_file = get_post_meta($post_id, '_wp_page_template', true);

		if (in_array($template_file, array('page-about.php', 'index.php', 'page-services.php', 'page-resources.php', 'page-contacts.php'))) {
			remove_post_type_support('page', 'editor');
		}
	}
}

?>
