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

$ruo_image_base = get_stylesheet_directory_uri() . '/assets/images/products/ruo/';
?>

<?php get_header(); ?>

  <main>
    <section class="ruo-hero" aria-labelledby="ruo-title">
      <div class="section-inner ruo-hero-grid">
        <div class="ruo-hero-copy">
          <p class="eyebrow">Research Use Only</p>
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
          <p class="eyebrow">Product overview</p>
          <h2>Four RUO pathogen identification kits for research workflows.</h2>
        </div>
        <div class="ruo-intro-copy">
          <p>PathoSeek RUO Pathogen Identification Test Kits are real-time PCR assays for selected bacterial targets.
            Choose a kit below to review product-specific details and instructions for use.</p>
          <p>Current RUO assays include <i>Escherichia coli</i>, <i>Staphylococcus aureus</i>,
            <i>Klebsiella pneumoniae</i>, and <i>Acinetobacter baumannii</i>.</p>
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
                <p class="eyebrow">PathoSeek RUO Kit</p>
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
          <p class="eyebrow">Pricing and availability</p>
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
