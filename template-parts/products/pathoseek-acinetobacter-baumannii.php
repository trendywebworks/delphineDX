<?php
$pathoseek_product = array(
    'name'           => 'Acinetobacter baumannii',
    'assay'          => 'Acinetobacter baumannii real-time PCR Assay',
    'code'           => 'DDN-AB-004',
    'kit_image'      => 'a-baumannii-kit.jpg',
    'pathogen_image' => 'acinetobacter-baumannii.webp',
    'summary'        => 'A PathoSeek research-use real-time PCR assay for A. baumannii detection in environmental monitoring and infection-control research.',
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
        'Acinetobacter baumannii is a Gram-negative bacterium, notorious for causing severe healthcare-associated infections, including ventilator-associated pneumonia, bloodstream infections, and wound infections.',
        'A. baumannii is known for developing antibiotic resistance and surviving on surfaces, making it difficult to control, and can have mortality rates of up to 70%. This kit helps detect A. baumannii and is suitable for environmental monitoring, infection control research, and experimental models of bacterial transmission.',
    ),
);

require __DIR__ . '/pathoseek-kit-template.php';
