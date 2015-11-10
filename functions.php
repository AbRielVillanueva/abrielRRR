<?php

/**
	===================================================
*			Include Scripts css, js, jquery
	===================================================
*/

	function leirba_enqueque_style_assets()
	{
		//css
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.5', 'all');
		wp_enqueue_style('fontawesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.4.0', 'all');
		wp_enqueue_style('customstyle', get_template_directory_uri().'/css/AbRiel.css', array(), '1.2.4', 'all');
		
		

		
		
		//script
		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.5', true);
		wp_enqueue_script('customjs', get_template_directory_uri().'/js/AbRiel.js', array(), '1.2.4', true);
		
	}
	add_action('wp_enqueue_scripts', 'leirba_enqueque_style_assets');
	
	
/**
	===================================================
*				Head Function Appearance
	===================================================
*/
function AbRiel_remove_wpversion() {
	return '';
}
add_filter('the_generator', 'AbRiel_remove_wpversion');

	
/**
	===================================================
*				Activate Menus and buttons
	===================================================
*/
	
	function AbRiel_theme_setup()
	{
		add_theme_support('menus');
		register_nav_menu('primary', 'primary header');//primary menu
		register_nav_menu('secondary', 'secondary nav');//secondary
		register_nav_menu('custom-links', 'custom links');//secondary

	}
	add_action('init', 'AbRiel_theme_setup');
		
/**
	===================================================
*		Theme Support function "wordpress function" 
*	 •background, header, post-thumbnails, 
*	 post-formats"image, aside, video"
	===================================================
*/
		
		add_theme_support('custom-background');//background of the wp
		add_theme_support('custom-header');//header of the wp
		add_theme_support('post-thumbnails');//thumbnails of the wp
		add_theme_support('post-formats', array('aside','image','video','quote','status','gallery',)); //post-formats of the wp
		add_theme_support('html5', array('search-form'));
		
		
		
		
		
/*		
===================================================
			sidebar-function activate sidebar
===================================================
*/
function AbRiel_widgets_setup() {
	register_sidebar(array(
				'name' 			=>	'Sidebar',
				'id' 			=>	'sidebar-1',
				'class'			=>	'custom',
				'description' 	=>	'Standard Sidebar',
				'before_widget'	=>	'<aside id="%1$s" class="widget %2$s">',
				'after_widget'	=>	'</aside>',
				'before_title'	=>	'<h1 class="widget-title">',
				'after_title'	=>	'</h1>',

			));
			
			register_sidebar(array(
				'name' 			=>	'Sidebar-2',
				'id' 			=>	'sidebar-2',
				'class'			=>	'custom',
				'description' 	=>	'Standard Sidebar',
				'before_widget'	=>	'<aside id="%1$s" class="widget %2$s">',
				'after_widget'	=>	'</aside>',
				'before_title'	=>	'<h1 class="widget-title">',
				'after_title'	=>	'</h1>',

			));
}
add_action('widgets_init','AbRiel_widgets_setup');

	


/* Modify the read more link on the_excerpt() */
 
function abriel_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'abriel_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function abriel_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>';
}
add_filter('excerpt_more', 'abriel_excerpt_more');





/**
	===================================================
*				Custom Post Type
	===================================================
*/
function abriel_post_type(){
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'bot_found_in_trash' => 'No item found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array ('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false	
	);
	register_post_type('portfolio', $args);
}
 	add_action('init', 'abriel_post_type');
	
	
	
	


