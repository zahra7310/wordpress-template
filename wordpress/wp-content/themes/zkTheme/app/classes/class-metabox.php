<?php

class MetaBox
{
    public static function add_meta_box_product_price()
    {
        add_meta_box('product_price_meta_tag', 'قیمت محصول', 'MetaBox::add_product_price', 'product', $context = 'side');
    }

    public static function add_product_price($post)
    {
        $post_price = (int) get_post_meta($post->ID, 'product_price', true);
        View::render_by_include('admin.metabox.product.productprice', array('post_price' => $post_price));
    }

    public static function update_meta_box_product_price($post_id)
    {
        if (isset($_POST['product_price']) && intval($_POST['product_price']) > 0) {

            echo $_POST['product_price'];
            update_post_meta($post_id, 'product_price', intval($_POST['product_price']));

        }

    }

}