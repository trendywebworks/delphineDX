<?php
if ( ! isset( $pathoseek_product ) || ! is_array( $pathoseek_product ) ) {
    return;
}

$pathoseek_image_base = get_stylesheet_directory_uri() . '/assets/images/products/ruo/';
$pathoseek_common_features = isset( $pathoseek_product['common_features'] ) && is_array( $pathoseek_product['common_features'] )
    ? $pathoseek_product['common_features']
    : array();
$pathoseek_default_panels = array(
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
        'description' => 'A real-time PCR panel for detecting three key antimicrobial-resistance genes: NDM (resistance to many last-line antibiotics, including carbapenems), CTX-M (resistance to penicillins and broad-spectrum cephalosporins), and mecA (the primary marker associated with MRSA). Built for resistance surveillance, transmission-dynamics, and environmental-reservoir research.',
        'note'        => 'Detecting a resistance gene does not confirm phenotypic resistance, gene expression, or bacterial viability.',
    ),
    array(
        'number'      => '04',
        'title'       => 'Pathogen + Resistance Marker Detection',
        'targets'     => 'Candida auris, OXA-48, Van A/B',
        'description' => 'A combined real-time PCR panel detecting the emerging multidrug-resistant yeast Candida auris alongside two resistance markers: OXA-48 (carbapenem resistance) and vanA/vanB (vancomycin resistance). Aimed at surveillance, infection-control, and AMR research.',
        'note'        => 'Detecting OXA-48 or vanA/vanB does not confirm phenotypic resistance without additional testing.',
    ),
);
$pathoseek_panels = isset( $pathoseek_product['panels'] ) && is_array( $pathoseek_product['panels'] )
    ? $pathoseek_product['panels']
    : $pathoseek_default_panels;
?>

<?php get_header(); ?>

  <main>
    <section class="pathoseek-hero" aria-labelledby="pathoseek-title">
      <div class="section-inner pathoseek-hero-grid">
        <div class="pathoseek-hero-copy">
          <p class="eyebrow eyebrow-white">PathoSeek RUO Kit</p>
          <h1 id="pathoseek-title"><?php echo esc_html( $pathoseek_product['assay'] ); ?></h1>
          <p><?php echo esc_html( $pathoseek_product['summary'] ); ?></p>
          <div class="pathoseek-meta">
            <span>Product code: <?php echo esc_html( $pathoseek_product['code'] ); ?></span>
            <span>Research Use Only</span>
          </div>
          <div class="hero-actions">
            <a class="button" href="#ifu">View Details</a>
            <a class="button secondary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Request information</a>
          </div>
        </div>
        <figure class="pathoseek-hero-kit">
          <img src="<?php echo esc_url( $pathoseek_image_base . $pathoseek_product['kit_image'] ); ?>" alt="<?php echo esc_attr( $pathoseek_product['assay'] . ' kit package' ); ?>">
          <figcaption>Available in 50 or 100 reaction kits</figcaption>
        </figure>
      </div>
    </section>

    <section class="pathoseek-overview" aria-label="Product overview">
      <div class="section-inner pathoseek-overview-grid">
        <div class="section-head">
          <p class="eyebrow">Product information</p>
          <h2>Ordering, documentation, and research-use details.</h2>
        </div>
        <div class="pathoseek-info-grid">
          <article>
            <span>01</span>
            <h3>Ordering information</h3>
            <p>Product code: <?php echo esc_html( $pathoseek_product['code'] ); ?>. Lead time may apply.</p>
          </article>
          <article>
            <span>02</span>
            <h3>Ordering details</h3>
            <p>50 reactions per kit. Contact Delphine Diagnostics for pricing, availability, and lead time.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Recommended equipment</h3>
            <p>Runs on standard real-time PCR platforms including ABI 7500, Bio-Rad CFX96, Roche LightCycler, and Rotor-Gene Q.</p>
          </article>
          <article>
            <span>04</span>
            <h3>Documentation</h3>
            <p>Product insert, Safety Data Sheet, and approved Instructions for Use can be provided with product documentation.</p>
          </article>
        </div>
      </div>
    </section>

    <?php if ( ! empty( $pathoseek_common_features ) ) : ?>
      <section class="pathoseek-common" aria-label="Info for all PathoSeek panels">
        <div class="section-inner">
          <div class="section-head">
            <h2>Shared PathoSeek assay characteristics.</h2>
          </div>
          <div class="pathoseek-common-grid">
            <?php foreach ( $pathoseek_common_features as $index => $feature ) : ?>
              <article>
                <span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
                <p><?php echo esc_html( $feature ); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if ( ! empty( $pathoseek_panels ) ) : ?>
      <section class="pathoseek-panel-context" aria-label="PathoSeek panel options">
        <div class="section-inner">
          <div class="section-head">
            <p class="eyebrow">PathoSeek panels</p>
            <h2>Detection sections available across all four products.</h2>
          </div>
          <div class="pathoseek-panel-grid">
            <?php foreach ( $pathoseek_panels as $pathoseek_panel ) : ?>
              <article>
                <span><?php echo esc_html( $pathoseek_panel['number'] ); ?></span>
                <h3><?php echo esc_html( $pathoseek_panel['title'] ); ?></h3>
                <dl>
                  <dt>Targets</dt>
                  <dd><?php echo esc_html( $pathoseek_panel['targets'] ); ?></dd>
                  <dt>Description</dt>
                  <dd><?php echo esc_html( $pathoseek_panel['description'] ); ?></dd>
                  <dt>Key note</dt>
                  <dd><?php echo esc_html( $pathoseek_panel['note'] ); ?></dd>
                </dl>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <section class="pathoseek-pathogen" aria-label="Pathogen information">
      <div class="section-inner pathoseek-pathogen-grid">
        <figure>
          <img src="<?php echo esc_url( $pathoseek_image_base . $pathoseek_product['pathogen_image'] ); ?>" alt="<?php echo esc_attr( $pathoseek_product['name'] ); ?>">
          <figcaption><?php echo esc_html( $pathoseek_product['name'] ); ?></figcaption>
        </figure>
        <div>
          <h2><?php echo esc_html( $pathoseek_product['name'] ); ?></h2>
          <?php foreach ( $pathoseek_product['pathogen_copy'] as $paragraph ) : ?>
            <p><?php echo esc_html( $paragraph ); ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="pathoseek-ifu" id="ifu" aria-labelledby="ifu-title">
      <div class="section-inner">
        <div class="section-head">
          <h2 id="ifu-title">More Information</h2>
          <p>Client feedback requested downloadable IFU content for PathoSeek. The sections below now include available
            shared product details from the feedback document; final reaction volumes, thermal cycling values, component
            quantities, storage temperatures, and troubleshooting rows should be completed from the approved IFU PDF.</p>
        </div>
        <div class="pathoseek-ifu-grid">
          <article>
            <span>Reaction setup</span>
            <h3>Reaction setup volumes and total reaction volume</h3>
            <p>Multiplex, qualitative real-time PCR using TaqMan hydrolysis-probe chemistry. Targets are detected simultaneously in a single reaction and reported as detected or not detected.</p>
          </article>
          <article>
            <span>Thermal cycling</span>
            <h3>Temperature profile and cycle counts</h3>
            <p>Runs on standard real-time PCR platforms including ABI 7500, Bio-Rad CFX96, Roche LightCycler, and Rotor-Gene Q. Final temperature and cycle-count values should come from the approved IFU.</p>
          </article>
          <article>
            <span>Kit components</span>
            <h3>Vials, quantities, and storage temperatures</h3>
            <p>50 reactions per kit with built-in positive, negative, and RNase P internal controls. Final vial quantities and storage temperatures should come from the approved IFU.</p>
          </article>
          <article>
            <span>Troubleshooting</span>
            <h3>Troubleshooting table</h3>
            <p>High sensitivity: detects fewer than 100 copies of target with greater than 95% priming efficiency. Final troubleshooting causes, corrective actions, and acceptance criteria should come from the approved IFU.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="pathoseek-cta">
      <div class="section-inner pathoseek-cta-box">
        <div>
          <p class="eyebrow eyebrow-white">Pricing and availability</p>
          <h2>Request product details for <?php echo esc_html( $pathoseek_product['assay'] ); ?>.</h2>
          <p>Contact Delphine Diagnostics for pricing, availability, lead time, documentation, and IFU updates.</p>
        </div>
        <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a>
      </div>
    </section>

    <section class="ruo-disclaimer">
      <div class="section-inner">
        <strong>Research Use Only</strong>
        <p>This PathoSeek product is presented for research use only and is not described here as a diagnostic product for clinical decision-making.</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
