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
              effective antimicrobial treatment quickly. Delphine combines rapid molecular testing with clinical risk
              intelligence to support better decisions earlier in the patient journey.</p>
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
          <p>Delphine's roadmap includes SepSeek, ClinSight, a broader AI/ML healthcare platform, and RUO pathogen
            identification assays.</p>
        </div>
        <div class="product-grid">
          <article class="product-card featured">
            <span class="tag">Diagnostic assay</span>
            <h3>SepSeek Sepsis Diagnostic Test Kits</h3>
            <p>A PCR-based assay concept for rapid detection of pathogen and host markers to support personalized
              patient care.</p>
            <ul>
              <li>Targets pathogen identification</li>
              <li>Plans for resistance marker expansion</li>
              <li>Designed around standard clinical lab equipment</li>
            </ul>
            <a class="product-card-link" href="delphine-sepsis-diagnostic-assay.html">Explore the assay</a>
          </article>
          <article class="product-card">
            <span class="tag">Decision support</span>
            <h3>ClinSight Sepsis Prediction</h3>
            <p>Machine-learning software intended to help clinicians identify patients at risk of developing sepsis or
              readmission.</p>
            <ul>
              <li>EHR-embedded alert vision</li>
              <li>Explainable risk context</li>
              <li>Snapshot and forecast modeling</li>
            </ul>
            <a class="product-card-link" href="delphine-ai-ml-healthcare-platform.html">Explore the platform</a>
          </article>
          <article class="product-card">
            <span class="tag">Research use</span>
            <h3>RUO Pathogen Identification Kits</h3>
            <p>Real-time PCR assays for organisms including E. coli, S. aureus, K. pneumoniae, and A. baumannii.</p>
            <ul>
              <li>Environmental monitoring</li>
              <li>Food safety research</li>
              <li>Microbiological studies</li>
            </ul>
            <a class="product-card-link" href="ruo-pathogen-identification-test-kits.html">Explore the RUO kits</a>
          </article>
        </div>
      </div>
    </section>

    <section class="workflow" id="workflow">
      <div class="section-inner">
        <div class="section-head">
          <p class="eyebrow">Workflow comparison</p>
          <h2>From days of uncertainty toward same-shift molecular answers.</h2>
          <p>The SepSeek workflow is designed to reduce the time from blood collection to pathogen and resistance
            insight compared with conventional blood culture.</p>
        </div>
        <div class="timeline">
          <article class="timeline-card">
            <span class="time">48-72 hrs</span>
            <h3>Conventional blood culture</h3>
            <ul class="steps">
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 3h10"></path><path d="M8 3v5l-3.8 8.1A3.4 3.4 0 0 0 7.3 21h9.4a3.4 3.4 0 0 0 3.1-4.9L16 8V3"></path><path d="M6.4 15h11.2"></path></svg></span>
                <span>Blood collection</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M9 2h6"></path><path d="M10 2v6.5L5.5 18a2.8 2.8 0 0 0 2.5 4h8a2.8 2.8 0 0 0 2.5-4L14 8.5V2"></path><path d="M8 15h8"></path></svg></span>
                <span>Blood culture</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"></circle><circle cx="9" cy="10" r="1"></circle><circle cx="14" cy="9" r="1"></circle><circle cx="15" cy="14" r="1"></circle><circle cx="10" cy="15" r="1"></circle></svg></span>
                <span>Bacteria culture</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m9 11 2 2 4-5"></path><path d="M5 4h14v16H5z"></path><path d="M8 17h8"></path></svg></span>
                <span>Bacteria ID</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M10 21 21 10"></path><path d="m14 7 3-3a2.1 2.1 0 0 1 3 3l-3 3"></path><path d="M4 20c4-1 7-4 8-8"></path><path d="M3 14h6"></path></svg></span>
                <span>Antimicrobial sensitivity</span>
              </li>
            </ul>
          </article>
          <article class="timeline-card fast">
            <span class="time">6-8 hrs</span>
            <h3>SepSeek PCR-based workflow</h3>
            <ul class="steps">
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M7 3h10"></path><path d="M8 3v5l-3.8 8.1A3.4 3.4 0 0 0 7.3 21h9.4a3.4 3.4 0 0 0 3.1-4.9L16 8V3"></path><path d="M7 16h10"></path></svg></span>
                <span>Small-volume blood collection</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M6 3c5 0 7 4 12 4"></path><path d="M6 21c5 0 7-4 12-4"></path><path d="M6 7c5 0 7 10 12 10"></path><path d="M6 17c5 0 7-10 12-10"></path></svg></span>
                <span>DNA extraction</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M10 3h4"></path><path d="M11 3v6l-5 8a3 3 0 0 0 2.5 4h7a3 3 0 0 0 2.5-4l-5-8V3"></path><path d="M8 16h8"></path><path d="M9 19h6"></path></svg></span>
                <span>Multiplex RT-PCR</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 19V5"></path><path d="M4 19h16"></path><path d="M8 16v-5"></path><path d="M12 16V8"></path><path d="M16 16v-7"></path></svg></span>
                <span>Data analysis and interpretation</span>
              </li>
              <li>
                <span class="step-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"></path><path d="M4 20h16"></path><path d="M4 4h16"></path></svg></span>
                <span>Pathogen ID + resistance markers</span>
              </li>
            </ul>
          </article>
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
