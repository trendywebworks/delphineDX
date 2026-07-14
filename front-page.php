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
            <h2>Faster answers for a time critical emergency.</h2>
            <p>Sepsis care is constrained by diagnostic uncertainty, slow culture workflows, and the need to choose effective antimicrobial treatment quickly. Delphine combines <strong>rapid molecular testing</strong> with <strong>clinical risk intelligence</strong> to support better decisions earlier in the patient journey.</p>
          </div>
          <div class="capability-list">
            <article class="capability">
              <div class="capability-icon">01</div>
              <div>
                <h3>Sepsis Diagnostic Panel</h3>
                <p>Pathogen and resistance marker identification  6-9 times faster than standard of care</p>
              </div>
            </article>
            <article class="capability">
              <div class="capability-icon">02</div>
              <div>
                <h3>ML Prediction software tool</h3>
                <p>Our Goal: Early detection of sepsis risk enabling 50% reduction in readmission rate</p>
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
          <p>Delphine's roadmap includes SepSeek, ClinSight, and RUO pathogen identification assays.</p>
        </div>
        <div class="portfolio-products-grid" aria-label="Delphine product areas">
          <article class="portfolio-product-card portfolio-product-card-featured">
            <span class="portfolio-product-eyebrow">Diagnostic Assay</span>
            <h3>SepSeek Sepsis Diagnostic Test Kits</h3>
            <p>A PCR-based assay concept for rapid detection of pathogen and host markers to support personalized
              patient care.</p>
            <ul>
              <li>Targets pathogen identification</li>
              <li>Plans for resistance marker expansion</li>
              <li>Designed around standard clinical lab equipment</li>
            </ul>
            <a class="portfolio-product-link" href="<?php echo esc_url( home_url( '/products/delphine-sepsis-diagnostic-assay/' ) ); ?>">Explore the assay</a>
          </article>

          <article class="portfolio-product-card">
            <span class="portfolio-product-eyebrow">Decision Support</span>
            <h3>ClinSight Sepsis Prediction</h3>
            <p>Machine-learning software intended to help clinicians identify patients at risk of developing sepsis or
              readmission.</p>
            <ul>
              <li>EHR-embedded alert vision</li>
              <li>Explainable risk context</li>
              <li>Snapshot and forecast modeling</li>
            </ul>
            <a class="portfolio-product-link" href="<?php echo esc_url( home_url( '/products/delphine-ai-ml-healthcare-platform/' ) ); ?>">Explore the platform</a>
          </article>

          <article class="portfolio-product-card">
            <span class="portfolio-product-eyebrow">Research Use</span>
            <h3>RUO Pathogen Identification Kits</h3>
            <p>Real-time PCR assays for organisms including E. coli, S. aureus, K. pneumoniae, and A. baumannii.</p>
            <ul>
              <li>Environmental monitoring</li>
              <li>Food safety research</li>
              <li>Microbiological studies</li>
            </ul>
            <a class="portfolio-product-link" href="<?php echo esc_url( home_url( '/products/ruo-pathogen-identification-test-kits/' ) ); ?>">Explore the RUO kits</a>
          </article>
        </div>
      </div>
    </section>

    <section class="workflow" id="workflow">
      <div class="section-inner">
        <div class="section-head">
          <h2>SepSeek Workflow Comparison</h2>
          <p>SepSeek is Delphine's PCR-based assay concept for bacterial, viral and fungal pathogen identification and
            resistance biomarkers. The workflow is designed to be 6-9 times faster than conventional blood culture.</p>
        </div>

        <div class="workflow-infographics">
          <article class="workflow-infographic" aria-labelledby="culture-workflow-title">
            <div class="workflow-infographic-head">
              <div>
                <h3 id="culture-workflow-title">Conventional Blood Culture</h3>
                <p>Conventional blood culture can take 1-7 days for results</p>
              </div>
              <div class="workflow-time-badge">
                <svg viewBox="0 0 44 44" aria-hidden="true">
                  <circle cx="22" cy="22" r="18"></circle>
                  <path d="M22 10v13l9 6"></path>
                </svg>
                <strong>48-72 Hrs</strong>
              </div>
            </div>
            <div class="workflow-infographic-body">
              <div class="workflow-symbol microbe-icon" aria-hidden="true">
                <span></span><span></span><span></span><span></span><span></span>
              </div>
              <ol class="workflow-flow" aria-label="Conventional blood culture workflow">
                <li>Blood Collection (20ml)</li>
                <li>Blood Culture</li>
                <li>Bacteria Culture</li>
                <li>Bacteria ID</li>
                <li>Antimicrobial Sensitivity</li>
                <li>Pathogen ID + Resistance</li>
              </ol>
            </div>
          </article>

          <article class="workflow-infographic workflow-infographic-fast" aria-labelledby="sepseek-workflow-title">
            <div class="workflow-infographic-head">
              <div>
                <h3 id="sepseek-workflow-title">SepSeek PCR Workflow</h3>
                <p>SepSeek results are available in under 8 hours</p>
              </div>
              <div class="workflow-time-badge">
                <svg viewBox="0 0 44 44" aria-hidden="true">
                  <circle cx="22" cy="22" r="18"></circle>
                  <path d="M22 10v13l9 6"></path>
                </svg>
                <strong>6-8 Hrs</strong>
              </div>
            </div>
            <div class="workflow-infographic-body">
              <div class="workflow-symbol dna-icon" aria-hidden="true"></div>
              <ol class="workflow-flow" aria-label="SepSeek PCR based workflow">
                <li>Blood Collection (1ml)</li>
                <li>DNA Extraction</li>
                <li>Multiplex RT-PCR</li>
                <li>Data Analysis and Interpretation</li>
                <li>Pathogen ID + Resistance</li>
              </ol>
            </div>
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
