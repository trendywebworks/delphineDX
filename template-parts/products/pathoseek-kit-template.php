<?php
if ( ! isset( $pathoseek_product ) || ! is_array( $pathoseek_product ) ) {
    return;
}

$pathoseek_image_base = get_stylesheet_directory_uri() . '/assets/images/products/ruo/';
?>

<?php get_header(); ?>

  <main>
    <section class="pathoseek-hero" aria-labelledby="pathoseek-title">
      <div class="section-inner pathoseek-hero-grid">
        <div class="pathoseek-hero-copy">
          <p class="eyebrow">PathoSeek RUO Kit</p>
          <h1 id="pathoseek-title"><?php echo esc_html( $pathoseek_product['assay'] ); ?></h1>
          <p><?php echo esc_html( $pathoseek_product['summary'] ); ?></p>
          <div class="pathoseek-meta">
            <span>Product code: <?php echo esc_html( $pathoseek_product['code'] ); ?></span>
            <span>Research Use Only</span>
          </div>
          <div class="hero-actions">
            <a class="button" href="#ifu">View IFU sections</a>
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
            <p>Available in 50 or 100 reaction kit configurations. Contact Delphine Diagnostics for pricing and availability.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Recommended equipment</h3>
            <p>Designed for use with standard real-time PCR workflows. Platform-specific compatibility should be confirmed before ordering.</p>
          </article>
          <article>
            <span>04</span>
            <h3>Documentation</h3>
            <p>Product insert, Safety Data Sheet, and approved Instructions for Use can be provided with product documentation.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="pathoseek-pathogen" aria-label="Pathogen information">
      <div class="section-inner pathoseek-pathogen-grid">
        <figure>
          <img src="<?php echo esc_url( $pathoseek_image_base . $pathoseek_product['pathogen_image'] ); ?>" alt="<?php echo esc_attr( $pathoseek_product['name'] ); ?>">
          <figcaption><?php echo esc_html( $pathoseek_product['name'] ); ?></figcaption>
        </figure>
        <div>
          <p class="eyebrow">Pathogen information</p>
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
          <p class="eyebrow">Instructions for Use</p>
          <h2 id="ifu-title">IFU sections requested for this PathoSeek kit.</h2>
          <p>These sections are ready for the approved kit-specific IFU content. Final reaction volumes, cycling
            conditions, component quantities, storage temperatures, and troubleshooting guidance should be populated from
            the official IFU document.</p>
        </div>
        <div class="pathoseek-ifu-grid">
          <article>
            <span>Reaction setup</span>
            <h3>Reaction setup volumes and total reaction volume</h3>
            <p>Awaiting approved IFU values for reagent volumes, sample input, controls, and final reaction volume.</p>
          </article>
          <article>
            <span>Thermal cycling</span>
            <h3>Temperature profile and cycle counts</h3>
            <p>Awaiting approved IFU values for activation, denaturation, annealing/extension temperatures, hold times, and cycle counts.</p>
          </article>
          <article>
            <span>Kit components</span>
            <h3>Vials, quantities, and storage temperatures</h3>
            <p>Awaiting approved IFU component list, vial quantities, shipping conditions, storage temperature ranges, and stability details.</p>
          </article>
          <article>
            <span>Troubleshooting</span>
            <h3>Troubleshooting table</h3>
            <p>Awaiting approved IFU troubleshooting causes, recommended corrective actions, and acceptance criteria.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="pathoseek-cta">
      <div class="section-inner pathoseek-cta-box">
        <div>
          <p class="eyebrow">Pricing and availability</p>
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
