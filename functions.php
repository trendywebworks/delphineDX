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

/* Reading-time label for standard Blog and News posts. */
function delphine_reading_time() {
    $word_count = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', get_the_ID() ) ) );
    $minutes = max( 1, (int) ceil( $word_count / 200 ) );

    return sprintf( _n( '%d min read', '%d min read', $minutes, 'delphine-dx' ), $minutes );
}

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
     * 2. EDUCATION CPT
     * ========================= */
    $education_labels = array(
        'name'               => 'Education',
        'singular_name'      => 'Education',
        'menu_name'          => 'Education',
        'name_admin_bar'     => 'Education',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Education',
        'new_item'           => 'New Education',
        'edit_item'          => 'Edit Education',
        'view_item'          => 'View Education',
        'all_items'          => 'All Education',
        'search_items'       => 'Search Education',
        'not_found'          => 'No education found',
        'not_found_in_trash' => 'No education found in Trash',
    );

    $education_args = array(
        'labels'             => $education_labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'education'),
        'show_in_rest'       => true,
    );

    register_post_type('education', $education_args);
}

add_action('init', 'delphine_register_custom_post_types');
