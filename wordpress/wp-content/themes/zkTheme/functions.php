<?php

include('constants.php');
include('app/autoloader.php');


add_action('init', array('Posttype', 'make_product_post_type'));

add_theme_support('post-thumbnails', array('post'));

add_action('add_meta_boxes', 'MetaBox::add_meta_box_product_price');

add_action('save_post', 'MetaBox::update_meta_box_product_price');

add_filter('manage_product_posts_columns', 'Posttype::set_product_price_columns');

add_action('manage_product_posts_custom_column', 'Posttype::custom_get_product_price_column', 10, 2);





?>