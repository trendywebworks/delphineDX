<?php get_header(); ?>

  <main class="ai-product-page">
    <section class="ai-hero" aria-labelledby="ai-title">
      <div class="section-inner ai-hero-grid">
        <div class="ai-hero-copy">
          <h1 id="ai-title">Delphine AI/ML Healthcare Platform</h1>
          <p>A development-stage software platform designed to bring machine-learning risk signals into hospital
            workflows, beginning with patients at risk of developing sepsis.</p>
          <div class="hero-actions">
            <a class="button" href="#ai-overview">Explore the platform</a>
            <a class="button secondary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Discuss a collaboration</a>
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
        </div>
      </div>
    </section>

    <section class="ai-overview" id="ai-overview">
      <div class="section-inner ai-overview-grid">
        <div class="section-head">
          <h2>Help care teams recognize risk before deterioration becomes obvious.</h2>
        </div>
        <div class="ai-overview-copy">
          <p>Artificial intelligence and related technologies are increasingly prevalent in business and society and
            are beginning to be applied to healthcare. These technologies can potentially transform many aspects of
            patient care and administrative processes within providers, payers, and pharmaceutical organizations.</p>
          <p>Healthcare systems generate a continuous stream of vitals, laboratory results, observations, and patient
            history. The challenge is turning those signals into clear, timely context without adding more noise to a
            clinician's workflow.</p>
          <p>Delphine Diagnostics is in the process of developing a machine-learning-based healthcare software platform
            and multiple software applications based on the AI/ML healthcare platform. The first set of products
            addresses the need for improving patient outcomes for patients at risk of developing sepsis in the hospital
            setting.</p>
        </div>
      </div>
    </section>

    <section class="ai-healthcare-context" aria-labelledby="ai-healthcare-context-title">
      <div class="section-inner">
        <div class="ai-section-heading">
          <div>
            <h2 id="ai-healthcare-context-title">A collection of technologies, applied to specific clinical tasks.</h2>
          </div>
          <p>AI is not one technology, but a family of analytical methods. Machine learning is one of the most common
            forms, using data to train statistical models that learn patterns relevant to defined tasks.</p>
        </div>
        <div class="ai-context-grid">
          <article>
            <span>Clinical potential</span>
            <p>Research studies already suggest that AI can perform as well as or better than humans at key healthcare
              tasks, including disease diagnosis.</p>
          </article>
          <article>
            <span>Current evidence</span>
            <p>Algorithms are already outperforming radiologists at spotting malignant tumors and helping researchers
              construct cohorts for costly clinical trials.</p>
          </article>
          <article>
            <span>Task-specific support</span>
            <p>Most AI technologies have immediate relevance to healthcare, but the processes and tasks they support
              vary widely across clinical and operational workflows.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="ai-use-cases" aria-labelledby="use-cases-title">
      <div class="section-inner">
        <div class="ai-section-heading">
          <div>
            <h2 id="use-cases-title">One platform, a growing set of clinical questions.</h2>
          </div>
          <p>The product roadmap begins with in-hospital and discharge-stage risk prediction, then expands toward
            treatment support informed by clinical and molecular diagnostic data.</p>
        </div>
        <div class="ai-use-case-grid">
          <article class="featured">
            <span>01 / In-hospital risk</span>
            <h3>Identify patients at risk of developing sepsis.</h3>
            <p>Use a set of clinical features, including vital signs and blood-test results, to predict whether a
              patient is at risk of developing sepsis in the hospital setting.</p>
          </article>
          <article>
            <span>02 / Discharge planning</span>
            <h3>Estimate sepsis-related readmission risk.</h3>
            <p>Apply the same product just before discharge to help predict whether a patient is at risk of readmission
              due to sepsis.</p>
          </article>
          <article>
            <span>03 / Future phase</span>
            <h3>Support treatment decisions.</h3>
            <p>The next phase is intended to assist clinicians with treatment for patients who already have sepsis,
              using pathogen-identification findings from Delphine's Sepsis Diagnostics kit.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="ai-models">
      <div class="section-inner ai-models-grid">
        <div class="ai-models-copy">
          <h2>Different models, combined for a more useful signal.</h2>
          <p>This product makes use of an ensemble of machine-learning models, bringing together established
            statistical methods and machine-learning architectures.</p>
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
          <h2>Meet clinicians inside the hospital workflow.</h2>
          <p>Both the sepsis-risk and treatment-support products are planned to integrate with the electronic medical
            record systems of the hospitals where Delphine's AI/ML model solution is used.</p>
        </div>
        <ol class="ai-integration-flow">
          <li><span>01</span><div><strong>Clinical data</strong><p>Vitals, blood-test results, observations, and relevant patient context.</p></div></li>
          <li><span>02</span><div><strong>Model ensemble</strong><p>Multiple analytical approaches evaluate patterns associated with risk.</p></div></li>
          <li><span>03</span><div><strong>Workflow context</strong><p>Risk information is intended to connect with the hospital EMR environment.</p></div></li>
          <li><span>04</span><div><strong>Future diagnostic insight</strong><p>Planned treatment support may incorporate pathogens, fungi, viruses, and bacteria identification results from Delphine's Sepsis Diagnostics kit.</p></div></li>
        </ol>
      </div>
    </section>

    <section class="ai-partner">
      <div class="section-inner ai-partner-box">
        <div>
          <h2>Build useful intelligence around real care environments.</h2>
          <p>Delphine welcomes conversations with hospitals, clinical teams, data partners, and healthcare technology
            organizations interested in sepsis prediction and workflow integration.</p>
        </div>
        <div class="ai-partner-actions">
          <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Partner with Delphine</a>
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
