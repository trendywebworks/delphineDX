<?php
if ( ! isset( $pathoseek_product ) || ! is_array( $pathoseek_product ) ) {
    return;
}

$pathoseek_image_base = get_stylesheet_directory_uri() . '/assets/images/products/ruo/';
$pathoseek_common_features = isset( $pathoseek_product['common_features'] ) && is_array( $pathoseek_product['common_features'] )
    ? $pathoseek_product['common_features']
    : array();
$pathoseek_panel = isset( $pathoseek_product['panel'] ) && is_array( $pathoseek_product['panel'] )
    ? $pathoseek_product['panel']
    : array();
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

    <?php if ( ! empty( $pathoseek_panel ) ) : ?>
      <section class="pathoseek-panel-context" aria-label="PathoSeek panel context">
        <div class="section-inner pathoseek-panel-context-grid">
          <div class="section-head">
            <h2><?php echo esc_html( $pathoseek_panel['title'] ); ?></h2>
          </div>
          <div class="pathoseek-panel-card">
            <span><?php echo esc_html( $pathoseek_panel['number'] ); ?></span>
            <dl>
              <dt>Targets</dt>
              <dd><?php echo esc_html( $pathoseek_panel['targets'] ); ?></dd>
              <dt>Description</dt>
              <dd><?php echo esc_html( $pathoseek_panel['description'] ); ?></dd>
              <dt>Key note</dt>
              <dd><?php echo esc_html( $pathoseek_panel['note'] ); ?></dd>
            </dl>
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
