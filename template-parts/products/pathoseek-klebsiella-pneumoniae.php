<?php
$pathoseek_product = array(
    'name'           => 'Klebsiella pneumoniae',
    'assay'          => 'Klebsiella pneumoniae real-time PCR Assay',
    'code'           => 'DDN-KP-003',
    'kit_image'      => 'k-pneumoniae-kit.jpg',
    'pathogen_image' => 'klebsiella-pneumoniae.webp',
    'summary'        => 'A PathoSeek research-use real-time PCR assay for K. pneumoniae DNA detection in environmental microbiology and research models.',
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
        'number'      => '02',
        'title'       => 'Respiratory Pathogen Detection',
        'targets'     => 'Klebsiella pneumoniae, Streptococcus pneumoniae, Haemophilus influenzae',
        'description' => 'A real-time PCR panel targeting three major bacteria linked to pneumonia, bloodstream infections, and meningitis. Supports research into bacterial persistence, transmission pathways, and environmental contamination.',
        'note'        => 'Does not provide antimicrobial-resistance or virulence-factor data.',
    ),
    'pathogen_copy'  => array(
        'Klebsiella pneumoniae is a significant Gram-negative bacterium frequently encountered in healthcare settings, known for its ability to cause a range of infections, from pneumonia and bloodstream infections to urinary tract infections.',
        'Research on K. pneumoniae is critical due to the increasing prevalence of multi-drug-resistant strains. This kit enables detection of K. pneumoniae DNA within a sample for use in environmental microbiology, contamination studies, and experimental research models involving microbial pathogens.',
    ),
);

require __DIR__ . '/pathoseek-kit-template.php';
