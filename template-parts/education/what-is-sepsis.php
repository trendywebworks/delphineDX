<?php
/*
Template Name: What Is Sepsis
Template Post Type: education
*/
get_header(); ?>

  <main>
    <section class="sepsis-hero" aria-labelledby="sepsis-title">
      <div class="section-inner sepsis-hero-grid">
        <div class="sepsis-hero-copy">
          <span class="sepsis-kicker">Sepsis Awareness</span>
          <h1 id="sepsis-title">What is Sepsis?</h1>
          <p>Sepsis is the body's extreme response to an infection. It is a life-threatening medical emergency that can
            rapidly cause tissue damage, organ failure, and death without prompt treatment.</p>
          <div class="sepsis-hero-actions">
            <a class="button" href="#warning-signs">Know the warning signs</a>
            <a class="button secondary" href="#understand-sepsis">Understand sepsis</a>
          </div>
        </div>
        <div class="sepsis-hero-visual">
          <img src="../../assets/images/education/what-is-sepsis.webp" class="" alt="">
        </div>
      </div>
    </section>

    <section class="sepsis-definition" id="understand-sepsis">
      <div class="section-inner sepsis-story">
        <div class="sepsis-story-block">
          <div class="sepsis-story-heading">
            <span class="sepsis-light-kicker">A Dangerous Chain Reaction</span>
            <h2>When the response to infection begins damaging the body.</h2>
          </div>
          <div class="sepsis-story-copy">
            <p>An infection can trigger an overwhelming immune response throughout the body. Instead of remaining focused
              on the infection, that response can impair circulation, injure tissues, and disrupt the function of vital
              organs.</p>
            <p>Sepsis can result from bacterial, viral, fungal, or parasitic infections. Infections that lead to sepsis
              often begin in the lungs, urinary tract, gastrointestinal tract, or skin.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="sepsis-signs" id="warning-signs">
      <div class="section-inner">
        <div class="sepsis-signs-heading">
          <div class="sepsis-story-block sepsis-story-progress">
            <div class="sepsis-story-heading">
              <span class="sepsis-light-kicker">How It Can Progress</span>
              <h2>An infection can become a whole-body emergency.</h2>
            </div>
            <div class="sepsis-story-copy">
              <p>The course differs from person to person, but deterioration may occur quickly. Suspected sepsis should never
                be monitored at home while waiting for every symptom to appear.</p>
            </div>
          </div>
          <div class="sepsis-warning-heading">
            <h2>Know the warning signs that may need urgent care.</h2>
            <div class="sepsis-action-note">
              <strong>Do not wait.</strong>
              <p>Call emergency services or go to an emergency department if sepsis is suspected.</p>
            </div>
          </div>
        </div>
        <div class="sepsis-sign-grid">
          <article>
            <span>01</span>
            <h3>Confusion</h3>
            <p>New disorientation, altered awareness, or difficulty waking.</p>
          </article>
          <article>
            <span>02</span>
            <h3>Breathing difficulty</h3>
            <p>Shortness of breath or unusually rapid breathing.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Temperature changes</h3>
            <p>Fever, shivering, feeling very cold, or low body temperature.</p>
          </article>
          <article>
            <span>04</span>
            <h3>Circulation changes</h3>
            <p>High heart rate, weak pulse, or low blood pressure.</p>
          </article>
          <article>
            <span>05</span>
            <h3>Skin changes</h3>
            <p>Clammy, sweaty, pale, mottled, or unusually cold skin.</p>
          </article>
          <article>
            <span>06</span>
            <h3>Extreme discomfort</h3>
            <p>Severe pain, intense discomfort, or a sense that something is seriously wrong.</p>
          </article>
          <article>
            <span>07</span>
            <h3>Low urine output</h3>
            <p>Urinating much less than usual can signal organ dysfunction.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sepsis-platform">
      <div class="section-inner">
        <div class="sepsis-platform-copy">
          <span class="sepsis-light-kicker">ClinSight AI/ML Healthcare Platform</span>
          <h2>ClinSight: risk signals that meet clinicians inside the care workflow.</h2>
          <p>ClinSight is planned as a clinical decision support assistant that integrates with EHR systems and uses
            patient vitals, blood tests, metabolic panels, observations, and lab results to produce sepsis risk and
            clinical recommendations.</p>
          <a class="button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Partner with Delphine</a>
        </div>
        <div class="sepsis-signal-panel" aria-label="ClinSight input signal illustration">
          <div class="sepsis-signal-heading">
            <h3>ClinSight input signals</h3>
            <p>Illustrative inputs that may contribute to sepsis risk context and clinical recommendations.</p>
          </div>
          <div><span>Vitals</span><b style="--signal-width: 68%; --signal-color: var(--teal);"></b></div>
          <div><span>CBC</span><b style="--signal-width: 82%; --signal-color: var(--amber);"></b></div>
          <div><span>CMP</span><b style="--signal-width: 58%; --signal-color: var(--teal);"></b></div>
          <div><span>Observations</span><b style="--signal-width: 74%; --signal-color: var(--amber);"></b></div>
          <div><span>Inference</span><b style="--signal-width: 91%; --signal-color: var(--teal);"></b></div>
        </div>
      </div>
    </section>

    <section class="sepsis-mission">
      <div class="section-inner sepsis-mission-grid">
        <article class="sepsis-mission-photo">
          <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/clinical-team.jpeg'); ?>" alt="Clinical team reviewing a patient monitor">
          <div>
            <span>Vision and Mission</span>
            <h2>Best-in-class, affordable products for diagnosis and treatment.</h2>
            <p>Delphine Diagnostics is committed to reliable diagnostics and data insights that speed effective care for
              patients with infectious diseases.</p>
          </div>
        </article>
        <div class="sepsis-mission-copy">
          <h2>Built by industry-experienced, mission-driven teams.</h2>
          <p>We bring together expertise across biomedical science, molecular biology, data analytics, market
            development, clinical advisory, and commercialization.</p>
          <div class="sepsis-purpose-grid">
            <article>
              <span>Vision</span>
              <p>Enhance human healthcare by developing and supplying best-in-class, affordable products for diagnosis
                and treatment.</p>
            </article>
            <article>
              <span>Mission</span>
              <p>Deliver top-tier diagnostic products and supplemental data insights that help speed effective diagnosis
                and treatment.</p>
            </article>
          </div>
          <div class="sepsis-stats-row">
            <article><strong>150+</strong><span>Years of combined field experience</span></article>
            <article><strong>4</strong><span>Hospital NDAs signed</span></article>
            <article><strong>3</strong><span>Competitive grants awarded</span></article>
          </div>
        </div>
      </div>
    </section>

    <section class="sepsis-sources">
      <div class="section-inner sepsis-sources-box">
        <div>
          <h2>References</h2>
        </div>
        <div class="sepsis-source-links">
          <a href="https://www.who.int/news-room/fact-sheets/detail/sepsis" target="_blank" rel="noopener noreferrer">https://www.who.int/news-room/fact-sheets/detail/sepsis</a>
          <a href="https://www.cdc.gov/sepsis/index.html" target="_blank" rel="noopener noreferrer">https://www.cdc.gov/sepsis/index.html</a>
          <a href="https://www.nj.gov/health/cd/topics/sepsis.shtml" target="_blank" rel="noopener noreferrer">https://www.nj.gov/health/cd/topics/sepsis.shtml</a>
          <a href="https://www.sepsis.org/sepsis-basics/what-is-sepsis/" target="_blank" rel="noopener noreferrer">https://www.sepsis.org/sepsis-basics/what-is-sepsis/</a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
