<?php

class Posttype
{
    public static function make_product_post_type()
    {
        $labels = array(
            'name' => _x('محصولات', 'Post type general name', 'recipe'),
            'singular_name' => _x('محصول', 'Post type singular name', 'recipe'),
            'menu_name' => _x('محصولات', 'Admin Menu text', 'recipe'),
            'name_admin_bar' => _x('محصول', 'Add New on Toolbar', 'recipe'),
            'add_new' => __('اضافه کردن', 'recipe'),
            'add_new_item' => __('اضافه کردن محصول جدید', 'recipe'),
            'new_item' => __('محصول جدید', 'recipe'),
            'edit_item' => __('ویرایش محصول', 'recipe'),
            'view_item' => __('نمایش محصول', 'recipe'),
            'all_items' => __('همه ی محصولات', 'recipe'),
            'search_items' => __('جستجو محصول', 'recipe'),
            'parent_item_colon' => __('محصول اصلی:', 'recipe'),
            'not_found' => __('محصولی یافت نشد', 'recipe'),
            'not_found_in_trash' => __('هیج موردی در سطل زباله یافت نشد.', 'recipe'),
            'featured_image' => _x('عکس کاور محصول', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'recipe'),
            'set_featured_image' => _x('گذاشتن عکس محصول', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'recipe'),
            'remove_featured_image' => _x('حذف کاور محصول', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'recipe'),
            'use_featured_image' => _x('استفاده از کاور محصول', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'recipe'),
            'archives' => _x('آرشیو محصول', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'recipe'),
            'insert_into_item' => _x('قراردادن در محصول', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'recipe'),
            'uploaded_to_this_item' => _x('آپلود کردن در این محصول', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'recipe'),
            'filter_items_list' => _x('لیست محصول را فیلتر کنید', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'recipe'),
            'items_list_navigation' => _x('Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'recipe'),
            'items_list' => _x('لیست محصولات', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'recipe'),
        );
        $args = array(
            'labels' => $labels,
            'description' => 'Recipe custom post type.',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'product'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 20,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
            'taxonomies' => array('category', 'post_tag'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-cart',
        );

        register_post_type('product', $args);
    }

    public static function set_product_price_columns($columns)
    {

        $columns['price'] = 'قیمت';
        return $columns;

    }

    public static function custom_get_product_price_column($column, $post_id)
    {

        $product_price = get_post_meta($post_id, 'product_price', true);
        echo number_format($product_price);

    }

}



?>