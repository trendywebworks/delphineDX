<?php
$layout = get_post_meta( get_the_ID(), 'product_layout', true );

$allowed_layouts = array(
    'product-layout-1',
    'product-layout-2',
    'product-layout-3',
    'product-layout-4',
    'pathoseek-escherichia-coli',
    'pathoseek-staphylococcus-aureus',
    'pathoseek-klebsiella-pneumoniae',
    'pathoseek-acinetobacter-baumannii',
);

$pathoseek_slug_layouts = array(
    'ruo-pathogen-identification-test-kits'          => 'product-layout-4',
    'escherichia-coli-real-time-pcr-assay'          => 'pathoseek-escherichia-coli',
    'staphylococcus-aureus-real-time-pcr-assay'     => 'pathoseek-staphylococcus-aureus',
    'klebsiella-pneumoniae-real-time-pcr-assay'     => 'pathoseek-klebsiella-pneumoniae',
    'acinetobacter-baumannii-real-time-pcr-assay'   => 'pathoseek-acinetobacter-baumannii',
);

$product_slug = get_post_field( 'post_name', get_the_ID() );

if ( ! $layout && isset( $pathoseek_slug_layouts[ $product_slug ] ) ) {
    $layout = $pathoseek_slug_layouts[ $product_slug ];
}

if ( ! in_array( $layout, $allowed_layouts, true ) ) {
    $layout = 'default';
}

get_template_part( 'template-parts/products/' . $layout );
