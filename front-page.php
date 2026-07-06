<?php get_header(); /* Template Name: Front Page */?>

  <main id="top">
    <section class="hero" aria-labelledby="hero-title">
      <video class="hero-video" autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/hero-lab-microscope.jpg"
        aria-hidden="true">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/hero-lab-microscope.mp4" type="video/mp4">
      </video>
      <div class="hero-inner">
        <div>
          <h1 id="hero-title">No one should die from a treatable infection.</h1>
          <p class="hero-copy">Delphine Diagnostics is building rapid molecular diagnostics and AI/ML-enabled clinical
            decision support to help clinicians recognize sepsis risk earlier, identify pathogens and resistance markers
            sooner, and treat patients with greater precision.</p>
          <div class="hero-actions">
            <a class="button" href="#products">Explore solutions</a>
            <a class="button secondary" href="#workflow">See the workflow</a>
          </div>
        </div>
      </div>
    </section>

    <section class="stats" aria-label="Sepsis impact statistics">
      <div class="section-inner">
        <div class="stats-grid">
          <div class="stat"><b class="counter" data-target="1" data-prefix="#">#1</b><span>Cause of death in U.S.
              hospitals</span></div>
          <div class="stat"><b class="counter" data-target="80" data-suffix="%">80%</b><span>Of deaths may be
              preventable with timely care</span></div>
          <div class="stat"><b class="counter" data-target="8" data-suffix="%">8%</b><span>Mortality increase for every
              hour of delay</span></div>
          <div class="stat"><b class="counter" data-target="350" data-suffix="K">350K</b><span>U.S. deaths per year
              attributed to sepsis</span></div>
        </div>

        <p class="source-details"><strong>Source: US CDC</strong></p>
      </div>
    </section>

    <section class="approach" id="approach">
      <div class="section-inner approach-grid">
        <div class="approach-visual" aria-hidden="true">
          <div class="photo-stack primary">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-approach.webp" alt="">
          </div>
          <div class="photo-stack secondary">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/assay-kit.png" alt="">
          </div>
        </div>
        <div>
          <div class="section-head">
            <h2>Uniting rapid pathogen identification with improved risk prediction.</h2>
            <p>Delphine brings together a sepsis diagnostic panel and ML prediction software to deliver pathogen and
              resistance-marker identification 6-9 times faster than standard of care, while enabling earlier detection
              of sepsis risk and smarter treatment decisions.</p>
          </div>
          <div class="capability-list">
            <article class="capability">
              <div class="capability-icon">01</div>
              <div>
                <h3>Sepsis diagnostic panel</h3>
                <p>SepSeek is designed for rapid pathogen and resistance-marker identification directly from whole blood
                  specimens.</p>
              </div>
            </article>
            <article class="capability">
              <div class="capability-icon">02</div>
              <div>
                <h3>ML prediction software tool</h3>
                <p>ClinSight supports earlier sepsis risk detection using clinical features such as vitals, lab results,
                  and observations.</p>
              </div>
            </article>
            <article class="capability">
              <div class="capability-icon">03</div>
              <div>
                <h3>Faster, smarter treatment</h3>
                <p>Combining diagnostic and decision-support data can reduce uncertainty, support targeted therapy, and
                  improve outcomes.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="outcomes" aria-labelledby="outcomes-title">
      <div class="section-inner">
        <div class="section-head">
          <h2 id="outcomes-title">Faster, targeted treatment can change the patient journey.</h2>
        </div>
        <div class="outcome-grid">
          <article class="outcome-card">
            <span>01</span>
            <h3>Improve and save patient lives</h3>
            <p>Faster, targeted treatment means a better chance of survival, fewer complications, and safer recovery
              with less exposure to unnecessary antibiotics.</p>
          </article>
          <article class="outcome-card">
            <span>02</span>
            <h3>Reduce diagnostic uncertainty</h3>
            <p>Rapid answers and early risk signals empower clinicians to intervene sooner, choose the right therapy,
              and reduce diagnostic uncertainty.</p>
          </article>
          <article class="outcome-card">
            <span>03</span>
            <h3>Improve outcomes and lower cost of care</h3>
            <p>Preventing deterioration and avoiding broad-spectrum overtreatment can reduce high-cost admissions,
              readmissions, and downstream complications.</p>
          </article>
          <article class="outcome-card">
            <span>04</span>
            <h3>Shorten length of stay and improve quality</h3>
            <p>Earlier detection and optimized antibiotic use can lower ICU burden, shorten length of stay, reduce
              readmissions, and improve quality metrics.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="products" id="products">
      <div class="section-inner">
        <div class="section-head">
          <h2>A connected portfolio for infection diagnosis and treatment support.</h2>
          <p>Explore Delphine's diagnostic, decision-support, and research-use product areas.</p>
        </div>
        <div class="product-carousel" aria-label="Products carousel">
          <div class="product-carousel-controls">
            <button class="product-carousel-button product-carousel-prev" type="button" aria-label="Previous product"></button>
            <button class="product-carousel-button product-carousel-next" type="button" aria-label="Next product"></button>
          </div>
          <div class="product-grid" tabindex="0">
            <?php
            $homepage_products = new WP_Query(
              array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'title',
                'order'          => 'ASC',
              )
            );
            ?>
            <?php if ( $homepage_products->have_posts() ) : ?>
              <?php while ( $homepage_products->have_posts() ) : $homepage_products->the_post(); ?>
                <?php
                $product_summary = wp_trim_words( get_the_excerpt() ?: get_the_content(), 18, '...' );

                if ( $product_summary === '' ) {
                  $product_summary = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis.';
                }
                ?>
                <a class="product-card" href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'delphine-card' ); ?>
                  <?php else : ?>
                    <?php delphine_fallback_featured_image( get_the_title() ); ?>
                  <?php endif; ?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php echo esc_html( $product_summary ); ?></p>
                  <span class="product-card-link">Read More</span>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <article class="product-card">
                <?php delphine_fallback_featured_image( 'Delphine Diagnostics fallback image' ); ?>
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis.</p>
                <span class="product-card-link">Read More</span>
              </article>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="workflow" id="workflow">
      <div class="section-inner">
        <div class="section-head">
          <h2>Sepsis Test Workflow Comparison</h2>
          <p>The SepSeek PCR based assay for bacterial, viral and fungal pathogen identification and resistance
            biomarkers is 6-9 times faster than conventional blood culture.</p>
        </div>

        <div class="workflow-compare">
          <article class="workflow-card">
            <div class="workflow-card-head">
              <div class="workflow-icon microbe-icon" aria-hidden="true">
                <span></span><span></span><span></span><span></span><span></span>
              </div>
              <div>
                <span class="workflow-label">Conventional blood culture</span>
                <h3>Most common turn around time</h3>
                <p>Conventional blood culture can take 1-7 days for results.</p>
              </div>
            </div>
            <div class="workflow-time">
              <svg viewBox="0 0 44 44" aria-hidden="true">
                <circle cx="22" cy="22" r="18"></circle>
                <path d="M22 10v13l9 6"></path>
              </svg>
              <strong>48-72 Hrs</strong>
            </div>
            <ol class="workflow-steps" aria-label="Conventional blood culture workflow">
              <li><span>01</span>Blood Collection (20ml)</li>
              <li><span>02</span>Blood Culture</li>
              <li><span>03</span>Bacteria Culture</li>
              <li><span>04</span>Bacteria ID</li>
              <li><span>05</span>Antimicrobial Sensitivity</li>
              <li><span>06</span>Pathogen ID + Resistance</li>
            </ol>
          </article>

          <article class="workflow-card workflow-card-fast">
            <div class="workflow-card-head">
              <div class="workflow-icon dna-icon" aria-hidden="true"></div>
              <div>
                <span class="workflow-label">SepSeek PCR based workflow</span>
                <h3>Most common turn around time</h3>
                <p>SepSeek results are available in under 8 hours.</p>
              </div>
            </div>
            <div class="workflow-time">
              <svg viewBox="0 0 44 44" aria-hidden="true">
                <circle cx="22" cy="22" r="18"></circle>
                <path d="M22 10v13l9 6"></path>
              </svg>
              <strong>6-8 Hrs</strong>
            </div>
            <ol class="workflow-steps" aria-label="SepSeek PCR based workflow">
              <li><span>01</span>Blood Collection (1ml)</li>
              <li><span>02</span>DNA Extraction</li>
              <li><span>03</span>Multiplex RT-PCR</li>
              <li><span>04</span>Data Analysis and Interpretation</li>
              <li><span>05</span>Pathogen ID + Resistance</li>
            </ol>
          </article>
        </div>
      </div>
    </section>

    <section class="traction" id="traction">
      <div class="section-inner">
        <div class="section-head">
          <h2>Best-in-class, affordable products for diagnosis and treatment.</h2>
        </div>
        <div class="mission-grid">
          <article class="mission-card">
            <span>Our Vision</span>
            <h3>Enhance human healthcare.</h3>
            <p>Our vision is to enhance human healthcare by engaging in the development and supply of best-in-class,
              affordable products for diagnosis and treatment.</p>
          </article>
          <article class="mission-card">
            <span>Our Mission</span>
            <h3>Speed effective diagnosis and treatment.</h3>
            <p>Delphine Diagnostics, a New Jersey-based startup, is passionate in its efforts to deliver top-tier
              diagnostic products and supplemental data insights capabilities to speed effective diagnosis and treatment
              for patients with infectious diseases. The affordability and reliability of our innovative products guide
              our journey.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="cta" id="contact">
      <div class="section-inner">
        <div class="cta-box">
          <h2>Help bring faster sepsis diagnosis closer to the point of care.</h2>
          <p>Delphine is interested in hearing from future customers, clinical partners, laboratories, and healthcare
            organizations about diagnostic targets, compatible equipment, and workflow needs.</p>
          <div class="hero-actions">
            <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact us</a>
            <a class="button secondary" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View Products</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
