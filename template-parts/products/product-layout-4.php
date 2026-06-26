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
          <h2>Clean, comparable assay information for four bacterial targets.</h2>
        </div>
        <div class="ruo-intro-copy">
          <p>Each kit entry includes ordering information, kit configuration details, recommended real-time PCR platforms,
            documentation notes, and pathogen background.</p>
          <p>Current RUO assays include <i>Escherichia coli</i>, <i>Staphylococcus aureus</i>,
            <i>Klebsiella pneumoniae</i>, and <i>Acinetobacter baumannii</i>.</p>
        </div>
      </div>
    </section>

    <nav class="ruo-product-nav" aria-label="RUO product links">
      <div class="section-inner">
        <?php foreach ($ruo_products as $product) : ?>
          <a href="#<?php echo esc_attr(sanitize_title($product['name'])); ?>">
            <?php echo esc_html($product['name']); ?>
          </a>
        <?php endforeach; ?>
      </div>
    </nav>

    <section class="ruo-products" id="ruo-products" aria-label="RUO products">
      <?php foreach ($ruo_products as $index => $product) : ?>
        <article class="ruo-product<?php echo $index % 2 === 1 ? ' reverse' : ''; ?>" id="<?php echo esc_attr(sanitize_title($product['name'])); ?>">
          <div class="section-inner ruo-product-grid">
            <div class="ruo-product-media">
              <figure class="ruo-pathogen-image">
                <img src="<?php echo esc_url($ruo_image_base . $product['image']); ?>" alt="<?php echo esc_attr($product['caption']); ?>">
                <figcaption><?php echo esc_html($product['caption']); ?></figcaption>
              </figure>
              <figure class="ruo-kit-image">
                <img src="<?php echo esc_url($ruo_image_base . $product['kit_image']); ?>" alt="<?php echo esc_attr($product['name'] . ' real-time PCR assay kit'); ?>">
              </figure>
            </div>

            <div class="ruo-product-content">
              <p class="eyebrow">Real-time PCR Assay</p>
              <h2><?php echo esc_html($product['assay']); ?></h2>
              <p class="ruo-product-code">Product code: <?php echo esc_html($product['code']); ?></p>

              <div class="ruo-toggle-list">
                <details class="ruo-toggle" open>
                  <summary>Ordering Information</summary>
                  <div>
                    <ul>
                      <li>Product code: <?php echo esc_html($product['code']); ?></li>
                      <li>Lead time, if applicable</li>
                    </ul>
                  </div>
                </details>

                <details class="ruo-toggle">
                  <summary>Ordering Details</summary>
                  <div>
                    <ul>
                      <li>Available in 50 or 100 reaction kits.</li>
                      <li>Contact us regarding pricing and availability.</li>
                    </ul>
                  </div>
                </details>

                <details class="ruo-toggle">
                  <summary>Recommended Equipment</summary>
                  <div>
                    <p>Compatible with most standard real-time PCR platforms including ABI, Bio-Rad, Roche, and Qiagen.</p>
                  </div>
                </details>

                <details class="ruo-toggle">
                  <summary>Documentation</summary>
                  <div>
                    <ul>
                      <li>Product inserts</li>
                      <li>SDS (Safety Data Sheet)</li>
                    </ul>
                  </div>
                </details>
              </div>

              <div class="ruo-pathogen-info">
                <p class="eyebrow">Pathogen information</p>
                <h3><?php echo esc_html($product['name']); ?></h3>
                <p><?php echo esc_html($product['description']); ?></p>
                <p><?php echo esc_html($product['use']); ?></p>
              </div>

              <a class="button secondary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Click for more Information</a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
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
