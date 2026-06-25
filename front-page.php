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

        <p><strong>Source: US CDC</strong></p>
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
            <a class="product-card" href="#platform">
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

    <section class="workflow" id="workflow">
      <div class="workflow-slide">
        <div class="workflow-slide-header">
          <h2>Sepsis Test Workflow Comparison</h2>
          <p>The SepSeek PCR based assay for bacterial, viral and fungal pathogen identification and resistance
            biomarkers is 6-9 times faster than conventional blood culture</p>
        </div>

        <div class="workflow-panel">
          <div class="workflow-row">
            <div class="workflow-icon microbe-icon" aria-hidden="true">
              <span></span><span></span><span></span><span></span><span></span>
            </div>
            <div class="workflow-content">
              <div class="workflow-copy">
                <div>
                  <h3>MOST COMMON TURN AROUND TIME :</h3>
                  <p>Conventional blood culture&nbsp; can take 1-7 days for results</p>
                </div>
                <span class="workflow-time">
                  <svg viewBox="0 0 44 44" aria-hidden="true">
                    <circle cx="22" cy="22" r="18"></circle>
                    <path d="M22 10v13l9 6"></path>
                  </svg>
                  48-72 Hrs
                </span>
              </div>
              <ol class="workflow-steps" aria-label="Conventional blood culture workflow">
                <li>Blood<br>Collection<br>(20ml)</li>
                <li>Blood Culture</li>
                <li>Bacteria<br>Culture</li>
                <li>Bacteria ID</li>
                <li>Antimicrobial<br>Sensitivity</li>
                <li>Pathogen ID +<br>Resistance</li>
              </ol>
            </div>
          </div>

          <div class="workflow-row">
            <div class="workflow-icon dna-icon" aria-hidden="true"></div>
            <div class="workflow-content">
              <div class="workflow-copy">
                <div>
                  <h3>MOST COMMON TURN AROUND TIME :</h3>
                  <p>SepSeek results are available in under 8 hours</p>
                </div>
                <span class="workflow-time">
                  <svg viewBox="0 0 44 44" aria-hidden="true">
                    <circle cx="22" cy="22" r="18"></circle>
                    <path d="M22 10v13l9 6"></path>
                  </svg>
                  6-8 Hrs
                </span>
              </div>
              <ol class="workflow-steps sepseek-steps" aria-label="SepSeek PCR based workflow">
                <li>Blood<br>Collection (1ml)</li>
                <li>DNA Extraction</li>
                <li>Multiplex RT-<br>PCR</li>
                <li>Data Analysis<br>and<br>Interpretation</li>
                <li>Pathogen ID +<br>Resistance</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="platform">
      <div class="section-inner platform-grid">
        <div>
          <div class="section-head">
            <p class="eyebrow">Delphine AI/ML healthcare platform</p>
            <h2>Risk signals that meet clinicians inside the care workflow.</h2>
            <p>ClinSight is planned as a clinical decision support assistant that integrates with EHR systems and uses
              patient vitals, blood tests, metabolic panels, observations, and lab results to produce sepsis risk and
              clinical recommendations.</p>
          </div>
          <a class="button" href="#contact">Partner with Delphine</a>
        </div>
        <div class="signal-panel" aria-label="ClinSight sample risk context">
          <div class="signal-row">
            <span class="signal-label">Vitals</span>
            <div class="bar"><span style="width: 68%"></span></div>
          </div>
          <div class="signal-row">
            <span class="signal-label">CBC</span>
            <div class="bar warning"><span style="width: 82%"></span></div>
          </div>
          <div class="signal-row">
            <span class="signal-label">CMP</span>
            <div class="bar"><span style="width: 58%"></span></div>
          </div>
          <div class="signal-row">
            <span class="signal-label">Observations</span>
            <div class="bar warning"><span style="width: 74%"></span></div>
          </div>
          <div class="signal-row">
            <span class="signal-label">Inference</span>
            <div class="bar"><span style="width: 91%"></span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="traction" id="traction">
      <div class="section-inner traction-grid">
        <div class="traction-card">
          <div class="traction-card-content">
            <p class="eyebrow">Vision and mission</p>
            <h3>Best-in-class, affordable products for diagnosis and treatment.</h3>
            <p>Delphine Diagnostics is committed to reliable diagnostics and data insights that speed effective care for
              patients with infectious diseases.</p>
          </div>
        </div>
        <div class="traction-content">
          <div class="section-head">
            <h2>Built by industry-experienced, mission-driven teams.</h2>
            <p>The company brings together expertise across biomedical science, molecular biology, data analytics,
              market development, clinical advisory, and commercialization.</p>
          </div>
          <div class="mission-grid">
            <article class="mission-card">
              <span>Vision</span>
              <p>Enhance human healthcare by developing and supplying best-in-class, affordable products for diagnosis
                and treatment.</p>
            </article>
            <article class="mission-card">
              <span>Mission</span>
              <p>Deliver top-tier diagnostic products and supplemental data insights that help speed effective diagnosis
                and treatment.</p>
            </article>
          </div>
          <div class="proof-grid">
            <div class="proof"><b>150+</b><span>Years of combined field experience</span></div>
            <div class="proof"><b>4</b><span>Hospital NDAs signed</span></div>
            <div class="proof"><b>3</b><span>Competitive grants noted in early traction</span></div>
          </div>
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
