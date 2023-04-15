<?php
/*
Plugin Name: Pashmak
Plugin URI: https://welearn.site
Description: our first plugin
Author: welearn team
Version: 1.0
Author URI: https://welearn.site
Text Domain: wl-pashmak
*/

function wl_pashmak_setup_post_type()
{
	$args = array(
		'label'             => 'books',
		'public'             => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'supports'           => array( 'title', 'editor', 'author' )
	);
	register_post_type( 'book', $args );
	
}
add_action( 'init', 'wl_pashmak_setup_post_type' );

function wl_pashmak_install()
{
    wl_pashmak_setup_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'wl_pashmak_install' );



function wl_pashmak_deactivation()
{
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'wl_pashmak_deactivation' );
