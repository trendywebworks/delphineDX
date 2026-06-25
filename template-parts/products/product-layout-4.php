<?php
$ruo_products = array(
    array(
        'name'        => 'Escherichia coli',
        'assay'       => 'Escherichia coli real-time PCR Assay',
        'code'        => 'DDN-EC-001',
        'image'       => 'escherichia-coli.webp',
        'kit_image'   => 'e-coli-kit.jpg',
        'caption'     => 'Escherichia coli',
        'description' => 'Escherichia coli is a Gram-negative bacterium, commonly found in the lower intestine of warm-blooded organisms. While many strains are harmless and part of a healthy gut microbiome, certain pathogenic strains are responsible for a wide range of human and animal diseases. The pathogenic strains can lead to diarrheal diseases, urinary tract infections, and more severe systemic infections.',
        'use'         => 'This kit is suitable for use in environmental monitoring, food safety research, and microbiological studies.',
    ),
    array(
        'name'        => 'Staphylococcus aureus',
        'assay'       => 'Staphylococcus aureus real-time PCR Assay',
        'code'        => 'DDN-SA-002',
        'image'       => 'staphylococcus-aureus.webp',
        'kit_image'   => 'st-aureus-kit.jpg',
        'caption'     => 'Staphylococcus Aureus',
        'description' => 'Staphylococcus aureus is a Gram-positive bacterium commonly found on skin and mucous membranes. S. aureus is notorious for causing a wide spectrum of infections, ranging from skin and soft tissue infections to more severe conditions like pneumonia, endocarditis, and sepsis. Additionally, multi-drug resistant strains such as methicillin-resistant S. aureus (MRSA) and vancomycin-resistant S. aureus (VRSA) have emerged.',
        'use'         => 'While this kit is not designed to detect specific antimicrobial resistance, it is useful for microbiological research, contamination control studies, and tracking the prevalence of S. aureus in environmental or clinical research samples.',
    ),
    array(
        'name'        => 'Klebsiella pneumoniae',
        'assay'       => 'Klebsiella pneumoniae real-time PCR Assay',
        'code'        => 'DDN-KP-003',
        'image'       => 'klebsiella-pneumoniae.webp',
        'kit_image'   => 'k-pneumoniae-kit.jpg',
        'caption'     => 'Klebsiella Pneumoniae',
        'description' => 'Klebsiella pneumoniae is a significant Gram-negative bacterium frequently encountered in healthcare settings, known for its ability to cause a range of infections, from pneumonia and bloodstream infections to urinary tract infections. Research on K. pneumoniae is critical due to the increasing prevalence of multi-drug-resistant strains.',
        'use'         => 'This kit enables detection of K. pneumoniae DNA within a sample for use in environmental microbiology, contamination studies, and experimental research models involving microbial pathogens.',
    ),
    array(
        'name'        => 'Acinetobacter baumannii',
        'assay'       => 'Acinetobacter baumannii real-time PCR Assay',
        'code'        => 'DDN-AB-004',
        'image'       => 'acinetobacter-baumannii.webp',
        'kit_image'   => 'a-baumannii-kit.jpg',
        'caption'     => 'Acinetobacter Baumannii',
        'description' => 'Acinetobacter baumannii is a Gram-negative bacterium, notorious for causing severe healthcare-associated infections, including ventilator-associated pneumonia, bloodstream infections, and wound infections. A. baumannii is known for developing antibiotic resistance and surviving on surfaces, making it difficult to control, and can have mortality rates of up to 70%.',
        'use'         => 'This kit helps detect A. baumannii and is suitable for environmental monitoring, infection control research, and experimental models of bacterial transmission.',
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
          <h1 id="ruo-title">RUO Pathogen Identification Test Kits</h1>
          <p>Real-time PCR assay kits for research applications focused on selected bacterial pathogens, including
            environmental monitoring, food safety research, microbiological studies, contamination control, and infection
            control research.</p>
          <div class="hero-actions">
            <a class="button" href="#ruo-catalog">View RUO kits</a>
            <a class="button secondary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>
          </div>
          <div class="ruo-status">
            <span>RUO</span>
            <strong>Available in 50 or 100 reaction kits. Contact us regarding pricing and availability.</strong>
          </div>
        </div>
        <div class="ruo-hero-visual">
          <div class="ruo-lab-card">
            <img src="<?php echo esc_url($ruo_image_base . 'escherichia-coli.webp'); ?>" alt="Escherichia coli RUO pathogen target">
            <div><span>Product code</span><strong>DDN-EC-001</strong></div>
          </div>
          <div class="ruo-hero-stat">
            <strong>4</strong>
            <span>RUO real-time PCR assays</span>
          </div>
          <div class="ruo-hero-stat secondary">
            <strong>50 / 100</strong>
            <span>Reaction kit configurations</span>
          </div>
        </div>
      </div>
    </section>

    <section class="ruo-overview" id="ruo-overview">
      <div class="section-inner ruo-overview-grid">
        <div class="section-head">
          <p class="eyebrow">Product overview</p>
          <h2>Pathogen-specific real-time PCR assays for research workflows.</h2>
        </div>
        <div class="ruo-overview-copy">
          <p>Each RUO kit includes product documentation such as product inserts and SDS (Safety Data Sheet). The kits are
            compatible with most standard real-time PCR platforms including ABI, Bio-Rad, Roche, and Qiagen.</p>
          <p>The current RUO catalog includes assays for <i>Escherichia coli</i>, <i>Staphylococcus aureus</i>,
            <i>Klebsiella pneumoniae</i>, and <i>Acinetobacter baumannii</i>.</p>
        </div>
      </div>
    </section>

    <section class="ruo-specs" aria-label="RUO kit details">
      <div class="section-inner">
        <div class="ruo-spec-grid">
          <article><span>01</span><h3>Ordering information</h3><p>Product code and lead time details are provided for each assay.</p></article>
          <article><span>02</span><h3>Ordering details</h3><p>Available in 50 or 100 reaction kits. Contact us regarding pricing and availability.</p></article>
          <article><span>03</span><h3>Recommended equipment</h3><p>Compatible with most standard real-time PCR platforms including ABI, Bio-Rad, Roche, and Qiagen.</p></article>
          <article><span>04</span><h3>Documentation</h3><p>Product inserts and SDS (Safety Data Sheet) documentation are listed for each product.</p></article>
        </div>
      </div>
    </section>

    <section class="ruo-catalog" id="ruo-catalog">
      <div class="section-inner">
        <div class="ruo-catalog-heading">
          <div>
            <p class="eyebrow">RUO catalog</p>
            <h2>Four real-time PCR assays for selected bacterial targets.</h2>
          </div>
          <p>Each product entry below follows the source RUO page structure: assay name, product code, ordering details,
            recommended equipment, documentation, and pathogen information.</p>
        </div>

        <div class="ruo-product-list">
          <?php foreach ($ruo_products as $index => $product) : ?>
            <article class="ruo-product<?php echo $index % 2 === 1 ? ' reverse' : ''; ?>">
              <div class="ruo-product-image">
                <div class="ruo-product-image-stack">
                  <img src="<?php echo esc_url($ruo_image_base . $product['image']); ?>" alt="<?php echo esc_attr($product['caption']); ?>">
                  <img src="<?php echo esc_url($ruo_image_base . $product['kit_image']); ?>" alt="<?php echo esc_attr($product['name'] . ' kit graphic'); ?>">
                </div>
                <span><?php echo esc_html($product['caption']); ?></span>
              </div>
              <div class="ruo-product-content">
                <p class="eyebrow">Pathogen information</p>
                <h3><?php echo esc_html($product['assay']); ?></h3>
                <p class="ruo-product-code">Product code: <?php echo esc_html($product['code']); ?></p>
                <div class="ruo-product-meta">
                  <span>50 or 100 reaction kits</span>
                  <span>Real-time PCR</span>
                  <span>Research Use Only</span>
                </div>
                <div class="ruo-product-detail-grid">
                  <article><strong>Ordering information</strong><p>Product code: <?php echo esc_html($product['code']); ?><br>Lead time (if applicable)</p></article>
                  <article><strong>Ordering details</strong><p>Available in 50 or 100 reaction kits. Contact us regarding pricing and availability.</p></article>
                  <article><strong>Recommended equipment</strong><p>Compatible with most standard real-time PCR platforms including ABI, Bio-Rad, Roche, and Qiagen.</p></article>
                  <article><strong>Documentation</strong><p>Product inserts and SDS (Safety Data Sheet).</p></article>
                </div>
                <h4><?php echo esc_html($product['name']); ?></h4>
                <p><?php echo esc_html($product['description']); ?></p>
                <p><?php echo esc_html($product['use']); ?></p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Click for more Information</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="ruo-workflow">
      <div class="section-inner">
        <div class="ruo-workflow-heading">
          <div>
            <p class="eyebrow">Common ordering path</p>
            <h2>From product code to supporting documentation.</h2>
          </div>
          <p>The source RUO page repeats the same ordering framework across all four assays, making the catalog easy to
            compare and request.</p>
        </div>
        <ol class="ruo-steps">
          <li><span>01</span><strong>Select assay</strong><p>Choose the pathogen-specific real-time PCR assay and product code.</p></li>
          <li><span>02</span><strong>Choose kit size</strong><p>Discuss 50 or 100 reaction kit availability with Delphine Diagnostics.</p></li>
          <li><span>03</span><strong>Confirm platform</strong><p>Review compatibility with standard real-time PCR platforms.</p></li>
          <li><span>04</span><strong>Request documentation</strong><p>Access product inserts and SDS information for research workflows.</p></li>
        </ol>
      </div>
    </section>

    <section class="ruo-partner">
      <div class="section-inner ruo-partner-box">
        <div>
          <p class="eyebrow">Pricing and availability</p>
          <h2>Contact Delphine Diagnostics for RUO kit information.</h2>
          <p>Use the contact page to request pricing, availability, lead time details, and documentation for the RUO
            pathogen identification test kits.</p>
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
