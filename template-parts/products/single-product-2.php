<?php get_header(); ?>

  <main>
    <section class="ai-hero" aria-labelledby="ai-title">
      <div class="section-inner ai-hero-grid">
        <div class="ai-hero-copy">
          <p class="eyebrow">Clinical intelligence platform</p>
          <h1 id="ai-title">Delphine AI/ML Healthcare Platform</h1>
          <p>A development-stage software platform designed to bring machine-learning risk signals into hospital
            workflows, beginning with patients at risk of developing sepsis.</p>
          <div class="hero-actions">
            <a class="button" href="#ai-overview">Explore the platform</a>
            <a class="button secondary" href="contact.html">Discuss a collaboration</a>
          </div>
          <div class="ai-status">
            <span>Initial clinical focus</span>
            <strong>Sepsis risk and readmission prediction</strong>
          </div>
        </div>
        <div class="ai-hero-visual" aria-label="Conceptual clinical intelligence dashboard">
          <div class="ai-dashboard">
            <div class="ai-dashboard-top">
              <span>Patient risk overview</span>
              <span class="ai-live-dot">Model signal</span>
            </div>
            <div class="ai-score">
              <div><span>Sepsis risk</span><strong>Elevated</strong></div>
              <b>78</b>
            </div>
            <div class="ai-chart" aria-hidden="true">
              <span style="height: 26%"></span><span style="height: 34%"></span><span style="height: 31%"></span>
              <span style="height: 48%"></span><span style="height: 55%"></span><span style="height: 72%"></span>
              <span style="height: 84%"></span>
            </div>
            <div class="ai-dashboard-signals">
              <span>Vitals</span><span>Blood tests</span><span>Clinical observations</span>
            </div>
          </div>
          <div class="ai-model-note"><strong>3</strong><span>Model families described in the initial ensemble</span></div>
        </div>
      </div>
    </section>

    <section class="ai-overview" id="ai-overview">
      <div class="section-inner ai-overview-grid">
        <div class="section-head">
          <p class="eyebrow">From data to timely context</p>
          <h2>Help care teams recognize risk before deterioration becomes obvious.</h2>
        </div>
        <div class="ai-overview-copy">
          <p>Healthcare systems generate a continuous stream of vitals, laboratory results, observations, and patient
            history. The challenge is turning those signals into clear, timely context without adding more noise to a
            clinician's workflow.</p>
          <p>Delphine is developing a machine-learning platform intended to analyze clinical features, estimate sepsis
            risk, and ultimately support additional applications across the patient journey.</p>
        </div>
      </div>
    </section>

    <section class="ai-use-cases" aria-labelledby="use-cases-title">
      <div class="section-inner">
        <div class="ai-section-heading">
          <div>
            <p class="eyebrow">Initial applications</p>
            <h2 id="use-cases-title">One platform, a growing set of clinical questions.</h2>
          </div>
          <p>The product roadmap begins with risk prediction and expands toward treatment support informed by clinical
            and molecular diagnostic data.</p>
        </div>
        <div class="ai-use-case-grid">
          <article class="featured">
            <span>01 / In-hospital risk</span>
            <h3>Identify patients at risk of developing sepsis.</h3>
            <p>Use clinical features such as vital signs and blood-test results to produce an earlier risk signal for
              patients in the hospital setting.</p>
          </article>
          <article>
            <span>02 / Discharge planning</span>
            <h3>Estimate sepsis-related readmission risk.</h3>
            <p>Apply the model before discharge to help identify patients who may be at risk of returning because of
              sepsis.</p>
          </article>
          <article>
            <span>03 / Future phase</span>
            <h3>Support treatment decisions.</h3>
            <p>Future applications are intended to combine clinical context with pathogen findings from Delphine's
              molecular diagnostic program.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="ai-models">
      <div class="section-inner ai-models-grid">
        <div class="ai-models-copy">
          <p class="eyebrow">Ensemble intelligence</p>
          <h2>Different models, combined for a more useful signal.</h2>
          <p>The source product roadmap describes an ensemble approach that brings together established statistical
            methods and machine-learning architectures.</p>
        </div>
        <div class="ai-model-stack">
          <article><span>01</span><div><h3>Logistic Regression</h3><p>Interpretable statistical modeling for estimating clinical risk.</p></div></article>
          <article><span>02</span><div><h3>Random Forest</h3><p>Tree-based learning for nonlinear relationships and feature interactions.</p></div></article>
          <article><span>03</span><div><h3>Neural Networks</h3><p>Flexible learning architectures for patterns across complex clinical data.</p></div></article>
          <div class="ai-model-output"><span>Combined output</span><strong>Patient-level risk context</strong></div>
        </div>
      </div>
    </section>

    <section class="ai-roadmap">
      <div class="section-inner">
        <div class="ai-roadmap-heading">
          <div>
            <p class="eyebrow">Machine-learning lifecycle</p>
            <h2>Development is more than training a model.</h2>
          </div>
          <p>The referenced roadmap illustrates a continuous process spanning problem definition, data preparation,
            model development, evaluation, deployment, and monitoring.</p>
        </div>
        <figure class="ai-roadmap-figure">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/ml-roadmap.png"
            alt="Roadmap for machine-learning systems from problem definition through deployment and monitoring">
          <figcaption>Source graphic referenced by Delphine Diagnostics: “Roadmap for machine learning systems,”
            Frontiers in Medicine.</figcaption>
        </figure>
      </div>
    </section>

    <section class="ai-integration">
      <div class="section-inner ai-integration-grid">
        <div>
          <p class="eyebrow">Designed for connected care</p>
          <h2>Meet clinicians inside the hospital workflow.</h2>
          <p>Delphine's roadmap calls for its software products to integrate with hospital electronic medical record
            systems, helping risk signals appear alongside the clinical data used to make care decisions.</p>
        </div>
        <ol class="ai-integration-flow">
          <li><span>01</span><div><strong>Clinical data</strong><p>Vitals, blood-test results, observations, and relevant patient context.</p></div></li>
          <li><span>02</span><div><strong>Model ensemble</strong><p>Multiple analytical approaches evaluate patterns associated with risk.</p></div></li>
          <li><span>03</span><div><strong>Workflow context</strong><p>Risk information is intended to connect with the hospital EMR environment.</p></div></li>
          <li><span>04</span><div><strong>Future diagnostic insight</strong><p>Planned treatment support may incorporate pathogen-identification results.</p></div></li>
        </ol>
      </div>
    </section>

    <section class="ai-partner">
      <div class="section-inner ai-partner-box">
        <div>
          <p class="eyebrow">Clinical and technology collaboration</p>
          <h2>Build useful intelligence around real care environments.</h2>
          <p>Delphine welcomes conversations with hospitals, clinical teams, data partners, and healthcare technology
            organizations interested in sepsis prediction and workflow integration.</p>
        </div>
        <div class="ai-partner-actions">
          <a class="button" href="contact.html">Partner with Delphine</a>
          <a href="mailto:customerservice@delphinedx.com?subject=AI%2FML%20Healthcare%20Platform%20Collaboration">Email the team</a>
        </div>
      </div>
    </section>

    <section class="ai-disclaimer">
      <div class="section-inner">
        <strong>Development-stage software</strong>
        <p>The Delphine AI/ML Healthcare Platform is described as being under development and is not presented here as
          commercially available, clinically validated, or cleared for clinical use.</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>