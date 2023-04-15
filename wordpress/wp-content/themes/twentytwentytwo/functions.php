<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

function wl_zahra_wl_post_type(){
	$labels = array(
		'name' => 'books',
        'singular_name' => 'book',
		'add_new' => 'add book',
		'add_new_item' => 'add new book', 
		'edit_item' => 'edit book',
		'new_item' => 'new',
		'view_item' => 'view book',
		'search_items' => 'search book',
		'not_found' => 'not_found'
	);
	$argv = array( 
		 'public' => true,
		 'labels' => $labels,
		 'show_ui' =>true,
		 'show_in_nav_menu'=>true,
		 'show_in_menu'=>true,
		 'show_in_admin_bar'=>true,
		 'exclude_from_search'=>true,
		 'has_archive'=>true,
		 'menu_position'=>100,
		 'menu_icon'=>'dashicons-editor-paste-word',
		 'supports'=>array('title','editor','author','thumbnail','excerpt','trackbacks','comment','custom-fields'),
		 'taxonomies'=>array('category','post_tag'),
		 'rewrite'=>array('slug'=>'wl_book'),
		 //'capability_type'=>array('book'=>'books'),
	);
	register_post_type('books' , $argv );
}

add_action('init','wl_zahra_wl_post_type');
flush_rewrite_rules();
