<?php

/* CSS */
function mytheme_enqueue_styles() {

    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

/* JS */
function mytheme_enqueue_assets() {

    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'mytheme-script',
        get_template_directory_uri() . '/assets/js/scripts.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

/* CUSTOM POST TYPE */

function delphine_register_custom_post_types() {

    /* =========================
     * 1. PRODUCTS CPT
     * ========================= */
    $product_labels = array(
        'name'               => 'Products',
        'singular_name'      => 'Product',
        'menu_name'          => 'Products',
        'name_admin_bar'     => 'Product',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Product',
        'new_item'           => 'New Product',
        'edit_item'          => 'Edit Product',
        'view_item'          => 'View Product',
        'all_items'          => 'All Products',
        'search_items'       => 'Search Products',
        'not_found'          => 'No products found',
        'not_found_in_trash' => 'No products found in Trash',
    );

    $product_args = array(
        'labels'             => $product_labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'products'),
        'show_in_rest'       => true,
    );

    register_post_type('product', $product_args);


    /* =========================
     * 2. RESOURCES CPT
     * ========================= */
    $resource_labels = array(
        'name'               => 'Resources',
        'singular_name'      => 'Resource',
        'menu_name'          => 'Resources',
        'name_admin_bar'     => 'Resource',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Resource',
        'new_item'           => 'New Resource',
        'edit_item'          => 'Edit Resource',
        'view_item'          => 'View Resource',
        'all_items'          => 'All Resources',
        'search_items'       => 'Search Resources',
        'not_found'          => 'No resources found',
        'not_found_in_trash' => 'No resources found in Trash',
    );

    $resource_args = array(
        'labels'             => $resource_labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'resources'),
        'show_in_rest'       => true,
    );

    register_post_type('resource', $resource_args);
}

add_action('init', 'delphine_register_custom_post_types');