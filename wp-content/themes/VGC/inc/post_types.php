<?php
$taxSpecie = new \app\models\Taxonomy();
$taxSpecie->setAttributes(array('name' => 'specie', 'object_type' => 'product', 'label' => 'Specie', 'label_plural' => 'Species'));
$taxSpecie->addInit();
$taxGenus = new \app\models\Taxonomy();
$taxGenus->setAttributes(array('name' => 'genus', 'object_type' => 'product', 'label' => 'Genus', 'label_plural' => 'Genera'));
$taxGenus->addInit();
$taxBrand = new \app\models\Taxonomy();
$taxBrand->setAttributes(array('name' => 'brand', 'object_type' => 'product', 'label' => 'Brand', 'label_plural' => 'Brands'));
$taxBrand->addInit();
$taxMemory = new \app\models\Taxonomy();
$taxMemory->setAttributes(array('name' => 'memory', 'object_type' => 'product', 'label' => 'Memory', 'label_plural' => 'Memories'));
$taxMemory->addInit();
$taxCollection = new \app\models\Taxonomy();
$taxCollection->setAttributes(array('name' => 'collection', 'object_type' => 'product', 'label' => 'Collection', 'label_plural' => 'Collections'));
$taxCollection->addInit();

add_action( 'init', 'initProductPostType' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function initProductPostType() {
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
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt', 'comments', 'gallery' )
    );

    register_post_type( 'product', $args );
}

add_action( 'init', 'initAccountPostType' );
/**
 * Register a Account post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function initAccountPostType() {
    $labels = array(
        'name'               => _x( 'Account Pages', 'post type general name', 'vgc' ),
        'singular_name'      => _x( 'Account Page', 'post type singular name', 'vgc' ),
        'menu_name'          => _x( 'Account Pages', 'admin menu', 'vgc' ),
        'name_admin_bar'     => _x( 'Account Page', 'add new on admin bar', 'vgc' ),
        'add_new'            => _x( 'Add New', 'account page', 'vgc' ),
        'add_new_item'       => __( 'Add New Account Page', 'vgc' ),
        'new_item'           => __( 'New Account Page', 'vgc' ),
        'edit_item'          => __( 'Edit Account Page', 'vgc' ),
        'view_item'          => __( 'View Account Page', 'vgc' ),
        'all_items'          => __( 'All Account Pages', 'vgc' ),
        'search_items'       => __( 'Search Account Pages', 'vgc' ),
        'parent_item_colon'  => __( 'Parent Account Pages:', 'vgc' ),
        'not_found'          => __( 'No account pages found.', 'vgc' ),
        'not_found_in_trash' => __( 'No account pages found in Trash.', 'vgc' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'account' ),
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'excerpt', 'comments', 'gallery' )
    );

    register_post_type( 'account-page', $args );
}

function vgc_rewrite_flush() {
    initProductPostType();
    initAccountPostType();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'vgc_rewrite_flush' );