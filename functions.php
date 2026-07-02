<?php

/* Theme setup */
function delphine_theme_setup() {
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'delphine-card', 720, 500, true );
    add_image_size( 'delphine-mega-card', 480, 320, true );
    add_image_size( 'delphine-article-featured', 1440, 720, true );
}
add_action( 'after_setup_theme', 'delphine_theme_setup' );

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

function delphine_fallback_featured_image( $alt = '' ) {
    printf(
        '<img src="%s" alt="%s">',
        esc_url( get_stylesheet_directory_uri() . '/assets/images/fall-back.webp' ),
        esc_attr( $alt )
    );
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

    add_rewrite_rule(
        '^education/what-is-sepsis/?$',
        'index.php?post_type=education&name=what-is-sepsis',
        'top'
    );
}

add_action('init', 'delphine_register_custom_post_types');

function delphine_migrate_resource_posts_to_education() {
    if ( get_option( 'delphine_resource_to_education_migrated' ) ) {
        return;
    }

    global $wpdb;

    $wpdb->update(
        $wpdb->posts,
        array( 'post_type' => 'education' ),
        array( 'post_type' => 'resource' )
    );

    update_option( 'delphine_resource_to_education_migrated', '1' );
}
add_action( 'init', 'delphine_migrate_resource_posts_to_education', 20 );

function delphine_flush_rewrite_rules_once() {
    $rewrite_version = '20260625_education_cpt';

    if ( get_option( 'delphine_rewrite_version' ) === $rewrite_version ) {
        return;
    }

    flush_rewrite_rules( false );
    update_option( 'delphine_rewrite_version', $rewrite_version );
}
add_action( 'init', 'delphine_flush_rewrite_rules_once', 30 );

function delphine_product_layout_options() {
    return array(
        ''                 => 'Default layout',
        'product-layout-1' => 'Product layout 1',
        'product-layout-2' => 'Product layout 2',
        'product-layout-3' => 'Product layout 3',
        'product-layout-4' => 'Product layout 4',
        'pathoseek-escherichia-coli'        => 'PathoSeek - Escherichia coli',
        'pathoseek-staphylococcus-aureus'   => 'PathoSeek - Staphylococcus aureus',
        'pathoseek-klebsiella-pneumoniae'   => 'PathoSeek - Klebsiella pneumoniae',
        'pathoseek-acinetobacter-baumannii' => 'PathoSeek - Acinetobacter baumannii',
    );
}

function delphine_add_product_layout_meta_box() {
    add_meta_box(
        'delphine_product_layout',
        'Product Layout',
        'delphine_render_product_layout_meta_box',
        'product',
        'side',
        'default'
    );
}
add_action( 'add_meta_boxes', 'delphine_add_product_layout_meta_box' );

function delphine_render_product_layout_meta_box( $post ) {
    $selected_layout = get_post_meta( $post->ID, 'product_layout', true );

    wp_nonce_field( 'delphine_save_product_layout', 'delphine_product_layout_nonce' );
    ?>
    <p>
        <label for="delphine_product_layout_select">Choose the layout used for this product page.</label>
    </p>
    <select id="delphine_product_layout_select" name="delphine_product_layout" style="width: 100%;">
        <?php foreach ( delphine_product_layout_options() as $layout_value => $layout_label ) : ?>
            <option value="<?php echo esc_attr( $layout_value ); ?>" <?php selected( $selected_layout, $layout_value ); ?>>
                <?php echo esc_html( $layout_label ); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php
}

function delphine_save_product_layout_meta( $post_id ) {
    if (
        ! isset( $_POST['delphine_product_layout_nonce'] ) ||
        ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['delphine_product_layout_nonce'] ) ), 'delphine_save_product_layout' )
    ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $layout = isset( $_POST['delphine_product_layout'] )
        ? sanitize_key( wp_unslash( $_POST['delphine_product_layout'] ) )
        : '';

    $allowed_layouts = array_keys( delphine_product_layout_options() );

    if ( ! in_array( $layout, $allowed_layouts, true ) ) {
        $layout = '';
    }

    if ( $layout === '' ) {
        delete_post_meta( $post_id, 'product_layout' );
        return;
    }

    update_post_meta( $post_id, 'product_layout', $layout );
}
add_action( 'save_post_product', 'delphine_save_product_layout_meta' );
