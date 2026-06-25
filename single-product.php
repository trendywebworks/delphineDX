<?php
$layout = get_post_meta( get_the_ID(), 'product_layout', true );

$allowed_layouts = array(
    'product-layout-1',
    'product-layout-2',
    'product-layout-3',
    'product-layout-4',
);

if ( ! $layout && get_post_field( 'post_name', get_the_ID() ) === 'ruo-pathogen-identification-test-kits' ) {
    $layout = 'product-layout-4';
}

if ( ! in_array( $layout, $allowed_layouts, true ) ) {
    $layout = 'default';
}

get_template_part( 'template-parts/products/' . $layout );
