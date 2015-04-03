<?php
/**
 * create a new Product List taxonomy
 */
// function product_init() {
//     $labels = array(
//         'all_items' => __( 'All Product Categories' ),
//         'edit_item' => __( 'Edit Product Category' ),
//         'view_item' => __( 'View Product Category' ),
//         'update_item' => __( 'Update Product Category' ),
//         'add_new_item' => __( 'Add New Product Category' ),
//         'new_item_item' => __( 'New Product Category Name' ),
//         'not_found' => __( 'No product categories found.' )
//     );
//     register_taxonomy(
//         'product',
//         'page',
//         array(
//             'label' => __( 'Product Categories' ),
//             'labels' => $labels,
//             'show_ui' => true,
//             'show_admin_column' => true,
//             'hierarchical' => true,
//             'query_var', true,
//             'rewrite' => array( 'slug' => 'product' )
//         )
//     );
// }
// add_action( 'init', 'product_init' );

add_action( 'init', 'product_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function product_init() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name', 'vgc' ),
        'singular_name'      => _x( 'Product', 'post type singular name', 'vgc' ),
        'menu_name'          => _x( 'Products', 'admin menu', 'vgc' ),
        'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'vgc' ),
        'add_new'            => _x( 'Add New', 'product', 'vgc' ),
        'add_new_item'       => __( 'Add New Product', 'vgc' ),
        'new_item'           => __( 'New Product', 'vgc' ),
        'edit_item'          => __( 'Edit Product', 'vgc' ),
        'view_item'          => __( 'View Product', 'vgc' ),
        'all_items'          => __( 'All Products', 'vgc' ),
        'search_items'       => __( 'Search Products', 'vgc' ),
        'parent_item_colon'  => __( 'Parent Products:', 'vgc' ),
        'not_found'          => __( 'No products found.', 'vgc' ),
        'not_found_in_trash' => __( 'No products found in Trash.', 'vgc' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'product' ),
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'product', $args );
}

function vgc_rewrite_flush() {
    product_init();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'vgc_rewrite_flush' );