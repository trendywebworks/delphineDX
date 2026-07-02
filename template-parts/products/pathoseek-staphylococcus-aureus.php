<?php
$pathoseek_product = array(
    'name'           => 'Staphylococcus aureus',
    'assay'          => 'Staphylococcus aureus real-time PCR Assay',
    'code'           => 'DDN-SA-002',
    'kit_image'      => 'st-aureus-kit.jpg',
    'pathogen_image' => 'staphylococcus-aureus.webp',
    'summary'        => 'A PathoSeek research-use real-time PCR assay for S. aureus detection in microbiological research and contamination-control studies.',
    'pathogen_copy'  => array(
        'Staphylococcus aureus is a Gram-positive bacterium commonly found on skin and mucous membranes. S. aureus is notorious for causing a wide spectrum of infections, ranging from skin and soft tissue infections to more severe conditions like pneumonia, endocarditis, and sepsis. Additionally, multi-drug resistant strains such as methicillin-resistant S. aureus (MRSA) and vancomycin-resistant S. aureus (VRSA) have emerged.',
        'While this kit is not designed to detect specific antimicrobial resistance, it is useful for microbiological research, contamination control studies, and tracking the prevalence of S. aureus in environmental or clinical research samples.',
    ),
);

require __DIR__ . '/pathoseek-kit-template.php';
