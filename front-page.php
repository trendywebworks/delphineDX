<?php get_header(); /* Template Name: Front Page */?>

  <main id="top">
    <section class="hero" aria-labelledby="hero-title">
      <video class="hero-video" autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/hero-lab-microscope.jpg"
        aria-hidden="true">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/hero-lab-microscope.mp4" type="video/mp4">
      </video>
      <div class="hero-inner">
        <div>
          <p class="eyebrow">Rapid diagnostics + AI decision support</p>
          <h1 id="hero-title">No one should die from a treatable infection.</h1>
          <p class="hero-copy">Delphine Diagnostics is building faster molecular sepsis diagnostics and machine-learning
            e                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   a                                                                                                     nabled clinical decision support to help clinicians recognize risk earlier, identify pathogens sooner, and
            treat with greater precision.</p>
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clinical-sample.png" alt="">
          </div>
          <div class="photo-stack secondary">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/assay-kit.png" alt="">
          </div>
        </div>
        <div>
          <div class="section-head">
            <p class="eyebrow">Delphine's comprehensive approach</p>
            <h2>Faster answers for a time-critical emergency.</h2>
            <p>Sepsis care is constrained by diagnostic uncertainty, slow culture workflows, and the need to choose
              effective antimicrobial treatment quickly. Delphine combines <strong>Rapid molecular testing</span> with  <strong>Clinical Risk
              intelligence</strong> to support better decisions earlier in the patient journey.</p>
          </div>
          <div class="capability-list">
            <article class="capability">
              <div class="capability-icon">01</div>
              <div>
                <h3>Rapid pathogen and resistance insight</h3>
                <p>PCR-based detection is designed to identify microbial pathogens and resistance markers directly from
                  whole blood specimens.</p>
              </div>
            </article>
            <article class="capability">
              <div class="capability-icon">02</div>
              <div>
                <h3>ML-enabled sepsis risk prediction</h3>
                <p>ClinSight uses an ensemble of models to support near real-time risk signals using vitals, lab
                  results, and observations.</p>
              </div>
            </article>
            <article class="capability">
              <div class="capability-icon">03</div>
              <div>
                <h3>Personalized clinical direction</h3>
                <p>Combined diagnostic and decision-support data can help reduce broad-spectrum overtreatment and
                  shorten the path to targeted care.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="products" id="products">
      <div class="section-inner">
        <div class="section-head">
          <p class="eyebrow">Products and services</p>
          <h2>A connected portfolio for infection diagnosis and treatment support.</h2>
          <p>Explore Delphine's diagnostic, decision-support, and research-use product areas.</p>
        </div>
        <div class="product-carousel" aria-label="Products carousel">
          <div class="product-carousel-controls">
            <button class="product-carousel-button product-carousel-prev" type="button" aria-label="Previous product"></button>
            <button class="product-carousel-button product-carousel-next" type="button" aria-label="Next product"></button>
          </div>
          <div class="product-grid" tabindex="0">
            <a class="product-card" href="<?php echo esc_url( home_url( '/' ) ); ?>products/delphine-ai-ml-healthcare-platform/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clinical-team.jpeg" alt="">
              <h3>ClinSight Sepsis Prediction Using ML Tool</h3>
              <p>ML-enabled clinical decision support for real-time sepsis risk signals and care workflow context.</p>
              <span class="product-card-link">Read More</span>
            </a>
            <a class="product-card" href="<?php echo esc_url( home_url( '/' ) ); ?>products/delphine-sepsis-diagnostic-assay/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/assay-kit.png" alt="">
              <h3>Delphine Sepsis Diagnostic Assay</h3>
              <p>Real-time PCR assay concept for pathogen and resistance marker detection from whole blood.</p>
              <span class="product-card-link">Read More</span>
            </a>
            <a class="product-card" href="<?php echo esc_url( home_url( '/' ) ); ?>products/delphine-ai-ml-healthcare-platform/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lab-scientist.jpeg" alt="">
              <h3>Delphine AI/ML Healthcare Platform</h3>
              <p>Healthcare intelligence platform designed to connect clinical data, models, and recommendations.</p>
              <span class="product-card-link">Read More</span>
            </a>
            <a class="product-card" href="<?php echo esc_url( home_url( '/' ) ); ?>products/ruo-pathogen-identification-test-kits/">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clinical-sample.png" alt="">
              <h3>RUO Pathogen Identification Test Kits</h3>
              <p>Real-time PCR assays for research use in pathogen detection, monitoring, and microbiology studies.</p>
              <span class="product-card-link">Read More</span>
            </a>
            <a class="product-card" href="#contact">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sepsis-alliance.jpeg" alt="">
              <h3>RUO Resistance Marker Identification Test Kits</h3>
              <p>Research-use assay roadmap focused on antimicrobial resistance marker identification and insight.</p>
              <span class="product-card-link">Read More</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="rapid-support" id="rapid-support">
      <div class="section-inner rapid-support-grid">
        <div class="section-head">
          <p class="eyebrow">Rapid Diagnostics + AI Decision Support</p>
          <h2>Earlier pathogen insight paired with clinical risk intelligence.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis vestibulum.
            Suspendisse potenti. Donec non sem sed sapien fermentum efficitur.</p>
        </div>
        <div class="rapid-support-cards">
          <article>
            <span>01</span>
            <h3>Rapid molecular diagnostics</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae sem at lorem interdum
              sollicitudin.</p>
          </article>
          <article>
            <span>02</span>
            <h3>AI decision support</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae sem at lorem interdum
              sollicitudin.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Connected clinical workflow</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae sem at lorem interdum
              sollicitudin.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="workflow" id="workflow">
      <div class="section-inner">
        <div class="section-head">
          <p class="eyebrow">Workflow comparison</p>
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
          <p class="eyebrow">Vision &amp; Mission</p>
          <h2>Best-in-class, affordable products for diagnosis and treatment.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis vestibulum.
            Suspendisse potenti.</p>
        </div>
        <div class="mission-grid">
          <article class="mission-card">
            <span>Vision</span>
            <h3>Enhance human healthcare.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis
              vestibulum.</p>
          </article>
          <article class="mission-card">
            <span>Mission</span>
            <h3>Deliver reliable diagnostics and insight.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis
              vestibulum.</p>
          </article>
          <article class="mission-card">
            <span>Purpose</span>
            <h3>Support earlier, better decisions.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis
              vestibulum.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="cta" id="contact">
      <div class="section-inner">
        <div class="cta-box">
          <p class="eyebrow">Join Delphine's mission</p>
          <h2>Help bring faster sepsis diagnosis closer to the point of care.</h2>
          <p>Delphine is interested in hearing from future customers, clinical partners, laboratories, and healthcare
            organizations about diagnostic targets, compatible equipment, and workflow needs.</p>
          <div class="hero-actions">
            <a class="button" href="contact.html">Contact us</a>
            <a class="button secondary" href="#products">Review products</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
