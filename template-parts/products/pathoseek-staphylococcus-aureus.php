<?php
$pathoseek_product = array(
    'name'           => 'Staphylococcus aureus',
    'assay'          => 'Staphylococcus aureus real-time PCR Assay',
    'code'           => 'DDN-SA-002',
    'kit_image'      => 'st-aureus-kit.jpg',
    'pathogen_image' => 'staphylococcus-aureus.webp',
    'summary'        => 'A PathoSeek research-use real-time PCR assay for S. aureus detection in microbiological research and contamination-control studies.',
    'common_features' => array(
        'Multiplex, qualitative real-time PCR using TaqMan hydrolysis-probe chemistry.',
        'All targets are detected simultaneously in a single reaction and reported as detected or not detected.',
        '50 reactions per kit.',
        'High sensitivity: detects fewer than 100 copies of target with greater than 95% priming efficiency.',
        'Results in a few hours compared with several days for traditional culture.',
        'Built-in positive, negative, and RNase P internal controls.',
        'Runs on standard real-time PCR platforms including ABI 7500, Bio-Rad CFX96, Roche LightCycler, and Rotor-Gene Q.',
    ),
    'pathogen_copy'  => array(
        'Staphylococcus aureus is a Gram-positive bacterium commonly found on skin and mucous membranes. S. aureus is notorious for causing a wide spectrum of infections, ranging from skin and soft tissue infections to more severe conditions like pneumonia, endocarditis, and sepsis. Additionally, multi-drug resistant strains such as methicillin-resistant S. aureus (MRSA) and vancomycin-resistant S. aureus (VRSA) have emerged.',
        'While this kit is not designed to detect specific antimicrobial resistance, it is useful for microbiological research, contamination control studies, and tracking the prevalence of S. aureus in environmental or clinical research samples.',
    ),
);

require __DIR__ . '/pathoseek-kit-template.php';
