<?php

function wlticke_post_type(){
    global $WLTICKER;
        $labels = array(
            'name'               => _x( ' Ticker', 'wlticker' ),
            'singular_name'      => _x( 'Ticker', 'wlticker' ),
            'menu_name'          => _x( 'Ticker', 'wlticker' ),
            'name_admin_bar'     => _x( 'Ticker', 'wlticker' ),
            'add_new'            => _x( 'New Ticker', 'wlticker' ),
            'add_new_item'       => __( 'New Ticker', 'wlticker' ),
            'new_item'           => __( 'Add Ticker', 'wlticker' ),
            'edit_item'          => __( 'Edit Ticker', 'wlticker' ),
            'view_item'          => __( 'Viwe Ticker ', 'wlticker' ),
            'all_items'          => __( 'All Ticker', 'wlticker' ),
            'search_items'       => __( 'Search Ticker ', 'wlticker' ),
            'not_found'          => __( 'not found ticker', 'wlticker' ),
            'not_found_in_trash' => __( 'not found ticker in trash ', 'wlticker' )
          );

          $args = array(
            'labels'             => $labels,
                'description'        => __( 'wlticker is plugin for view posts', 'wlticker' ),
            'public'             => true,//if this option sets to false, this custom post type will be hidden in your menu
              'publicly_queryable' => true,
              'show_ui'            => true,
              'show_in_menu'       => true,
              'query_var'          => true,
              'rewrite'            => array( 'slug' => 'wlticker' ),
              'capability_type'    => 'post',
                'menu_icon'          => 'dashicons-book',//022- add dashicon
              'has_archive'        => true,
              'hierarchical'       => true,
              'menu_position'      => null,
                'taxonomies'        => array('post_tag','category'),
              'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
          );

          register_post_type( 'wlticker', $args );
}
add_action( 'init', 'wlticke_post_type' );


?>