<?php
$pathoseek_product = array(
    'name'           => 'Escherichia coli',
    'assay'          => 'Escherichia coli real-time PCR Assay',
    'code'           => 'DDN-EC-001',
    'kit_image'      => 'e-coli-kit.jpg',
    'pathogen_image' => 'escherichia-coli.webp',
    'summary'        => 'A PathoSeek research-use real-time PCR assay for detecting E. coli DNA in research and monitoring workflows.',
    'common_features' => array(
        'Multiplex, qualitative real-time PCR using TaqMan hydrolysis-probe chemistry.',
        'All targets are detected simultaneously in a single reaction and reported as detected or not detected.',
        '50 reactions per kit.',
        'High sensitivity: detects fewer than 100 copies of target with greater than 95% priming efficiency.',
        'Results in a few hours compared with several days for traditional culture.',
        'Built-in positive, negative, and RNase P internal controls.',
        'Runs on standard real-time PCR platforms including ABI 7500, Bio-Rad CFX96, Roche LightCycler, and Rotor-Gene Q.',
    ),
    'panel'          => array(
        'number'      => '01',
        'title'       => 'Bacterial Pathogen Detection',
        'targets'     => 'Escherichia coli, Acinetobacter baumannii, Staphylococcus aureus',
        'description' => 'A real-time PCR panel for rapid detection of three widely studied bacterial pathogens associated with healthcare-associated infections, environmental contamination, and antimicrobial-resistance research. Suited to infection-control studies, environmental monitoring, and microbial-persistence models.',
        'note'        => 'Detects bacterial DNA only and does not identify resistance markers, including methicillin resistance.',
    ),
    'pathogen_copy'  => array(
        'Escherichia coli is a Gram-negative bacterium, commonly found in the lower intestine of warm-blooded organisms. While many strains are harmless and part of a healthy gut microbiome, certain pathogenic strains are responsible for a wide range of human and animal diseases. The pathogenic strains can lead to diarrheal diseases, urinary tract infections, and more severe systemic infections.',
        'This kit is suitable for use in environmental monitoring, food safety research, and microbiological studies.',
    ),
);

require __DIR__ . '/pathoseek-kit-template.php';
