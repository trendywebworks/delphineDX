<?php
$ruo_products = array(
    array(
        'name'        => 'Escherichia coli',
        'assay'       => 'Escherichia coli real-time PCR Assay',
        'code'        => 'DDN-EC-001',
        'kit_image'   => 'e-coli-kit.jpg',
        'description' => 'Real-time PCR assay for detecting E. coli DNA in environmental monitoring, food safety research, and microbiological studies.',
        'url'         => home_url('/products/escherichia-coli-real-time-pcr-assay/'),
    ),
    array(
        'name'        => 'Staphylococcus aureus',
        'assay'       => 'Staphylococcus aureus real-time PCR Assay',
        'code'        => 'DDN-SA-002',
        'kit_image'   => 'st-aureus-kit.jpg',
        'description' => 'Research-use real-time PCR assay for S. aureus detection in microbiological research, contamination control, and prevalence studies.',
        'url'         => home_url('/products/staphylococcus-aureus-real-time-pcr-assay/'),
    ),
    array(
        'name'        => 'Klebsiella pneumoniae',
        'assay'       => 'Klebsiella pneumoniae real-time PCR Assay',
        'code'        => 'DDN-KP-003',
        'kit_image'   => 'k-pneumoniae-kit.jpg',
        'description' => 'Real-time PCR assay for K. pneumoniae DNA detection in environmental microbiology, contamination studies, and research models.',
        'url'         => home_url('/products/klebsiella-pneumoniae-real-time-pcr-assay/'),
    ),
    array(
        'name'        => 'Acinetobacter baumannii',
        'assay'       => 'Acinetobacter baumannii real-time PCR Assay',
        'code'        => 'DDN-AB-004',
        'kit_image'   => 'a-baumannii-kit.jpg',
        'description' => 'Research-use real-time PCR assay for A. baumannii detection in environmental monitoring, infection-control research, and transmission studies.',
        'url'         => home_url('/products/acinetobacter-baumannii-real-time-pcr-assay/'),
    ),
);

$pathoseek_common_features = array(
    'Multiplex, qualitative real-time PCR using TaqMan hydrolysis-probe chemistry.',
    'All targets are detected simultaneously in a single reaction and reported as detected or not detected.',
    '50 reactions per kit.',
    'High sensitivity: detects fewer than 100 copies of target with greater than 95% priming efficiency.',
    'Results in a few hours compared with several days for traditional culture.',
    'Built-in positive, negative, and RNase P internal controls.',
    'Runs on standard real-time PCR platforms including ABI 7500, Bio-Rad CFX96, Roche LightCycler, and Rotor-Gene Q.',
);

$pathoseek_panels = array(
    array(
        'number'      => '01',
        'title'       => 'Bacterial Pathogen Detection',
        'targets'     => 'Escherichia coli, Acinetobacter baumannii, Staphylococcus aureus',
        'description' => 'A real-time PCR panel for rapid detection of three widely studied bacterial pathogens associated with healthcare-associated infections, environmental contamination, and antimicrobial-resistance research. Suited to infection-control studies, environmental monitoring, and microbial-persistence models.',
        'note'        => 'Detects bacterial DNA only and does not identify resistance markers, including methicillin resistance.',
    ),
    array(
        'number'      => '02',
        'title'       => 'Respiratory Pathogen Detection',
        'targets'     => 'Klebsiella pneumoniae, Streptococcus pneumoniae, Haemophilus influenzae',
        'description' => 'A real-time PCR panel targeting three major bacteria linked to pneumonia, bloodstream infections, and meningitis. Supports research into bacterial persistence, transmission pathways, and environmental contamination.',
        'note'        => 'Does not provide antimicrobial-resistance or virulence-factor data.',
    ),
    array(
        'number'      => '03',
        'title'       => 'Antimicrobial Resistance (AMR) Gene Detection',
        'targets'     => 'NDM, CTX-M, mecA',
        'description' => 'A real-time PCR panel for detecting three key antimicrobial-resistance genes: NDM, CTX-M, and mecA. Built for resistance surveillance, transmission-dynamics, and environmental-reservoir research.',
        'note'        => 'Detecting a resistance gene does not confirm phenotypic resistance, gene expression, or bacterial viability.',
    ),
    array(
        'number'      => '04',
        'title'       => 'Pathogen + Resistance Marker Detection',
        'targets'     => 'Candida auris, OXA-48, Van A/B',
        'description' => 'A combined real-time PCR panel detecting the emerging multidrug-resistant yeast Candida auris alongside two resistance markers: OXA-48 and vanA/vanB. Aimed at surveillance, infection-control, and AMR research.',
        'note'        => 'Detecting OXA-48 or vanA/vanB does not confirm phenotypic resistance without additional testing.',
    ),
);

$ruo_image_base = get_stylesheet_directory_uri() . '/assets/images/products/ruo/';
?>

<?php get_header(); ?>

  <main>
    <section class="ruo-hero" aria-labelledby="ruo-title">
      <div class="section-inner ruo-hero-grid">
        <div class="ruo-hero-copy">
          <h1 id="ruo-title">PathoSeek RUO Pathogen Identification Test Kits</h1>
          <p>Real-time PCR assay kits for research applications focused on selected bacterial pathogens.</p>
          <div class="hero-actions">
            <a class="button" href="#ruo-products">View kits</a>
            <a class="button secondary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>
          </div>
        </div>
        <figure class="ruo-hero-visual">
          <img src="<?php echo esc_url($ruo_image_base . 'e-coli-kit.jpg'); ?>" alt="RUO real-time PCR assay kit package">
          <figcaption>Available in 50 or 100 reaction kits</figcaption>
        </figure>
      </div>
    </section>

    <section class="ruo-intro" aria-label="RUO product overview">
      <div class="section-inner ruo-intro-grid">
        <div>
          <h2>PathoSeek panels and RUO kit pages for research workflows.</h2>
        </div>
        <div class="ruo-intro-copy">
          <p>PathoSeek RUO Pathogen Identification Test Kits are multiplex, qualitative real-time PCR assays using
            TaqMan hydrolysis-probe chemistry. Targets are detected simultaneously in a single reaction and reported as
            detected or not detected.</p>
          <p>Use the product cards below for organism-specific pages, and review the panel summaries for the broader
            PathoSeek offering.</p>
        </div>
      </div>
    </section>

    <section class="pathoseek-common" aria-label="Info for all PathoSeek panels">
      <div class="section-inner">
        <div class="section-head">
          <h2>Shared PathoSeek assay characteristics.</h2>
        </div>
        <div class="pathoseek-common-grid">
          <?php foreach ($pathoseek_common_features as $index => $feature) : ?>
            <article>
              <span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span>
              <p><?php echo esc_html($feature); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="pathoseek-panels" aria-labelledby="pathoseek-panels-title">
      <div class="section-inner">
        <div class="section-head">
          <h2 id="pathoseek-panels-title">Four panels for pathogen and resistance-marker research.</h2>
        </div>
        <div class="pathoseek-panel-grid">
          <?php foreach ($pathoseek_panels as $panel) : ?>
            <article>
              <span><?php echo esc_html($panel['number']); ?></span>
              <h3><?php echo esc_html($panel['title']); ?></h3>
              <dl>
                <dt>Targets</dt>
                <dd><?php echo esc_html($panel['targets']); ?></dd>
                <dt>Description</dt>
                <dd><?php echo esc_html($panel['description']); ?></dd>
                <dt>Key note</dt>
                <dd><?php echo esc_html($panel['note']); ?></dd>
              </dl>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="ruo-products" id="ruo-products" aria-label="RUO products">
      <div class="section-inner">
        <div class="ruo-kit-overview-grid">
          <?php foreach ($ruo_products as $product) : ?>
            <article class="ruo-kit-overview-card">
              <img src="<?php echo esc_url($ruo_image_base . $product['kit_image']); ?>" alt="<?php echo esc_attr($product['assay'] . ' kit'); ?>">
              <div>
                <h2><?php echo esc_html($product['assay']); ?></h2>
                <p class="ruo-product-code">Product code: <?php echo esc_html($product['code']); ?></p>
                <p><?php echo esc_html($product['description']); ?></p>
                <a class="button secondary" href="<?php echo esc_url($product['url']); ?>">View product details</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="ruo-partner">
      <div class="section-inner ruo-partner-box">
        <div>
          <h2>Contact Delphine Diagnostics for RUO kit information.</h2>
          <p>Request pricing, availability, lead time details, product inserts, and SDS information for the RUO pathogen
            identification test kits.</p>
        </div>
        <div class="ruo-partner-actions">
          <a class="button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>
          <a href="mailto:customerservice@delphinedx.com?subject=RUO%20Pathogen%20Identification%20Test%20Kits">Email the team</a>
        </div>
      </div>
    </section>

    <section class="ruo-disclaimer">
      <div class="section-inner">
        <strong>Research Use Only</strong>
        <p>These RUO pathogen identification test kits are presented for research use only and are not described here as
          diagnostic products for clinical decision-making.</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
