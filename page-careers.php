<?php /* Template Name: Careers */ get_header(); ?>

  <main>
    <section class="career-hero" aria-labelledby="career-title">
      <div class="section-inner career-hero-grid">
        <div class="career-hero-copy">
          <p class="eyebrow">Careers at Delphine</p>
          <h1 id="career-title">Build what healthcare needs next.</h1>
          <p>Join a mission-driven team combining molecular diagnostics, data, and artificial intelligence to help
            clinicians act faster when every hour matters.</p>
          <a class="button" href="#open-positions">View open positions</a>
        </div>
        <div class="career-hero-visual">
          <img src="assets/images/lab-scientist.jpeg" alt="Scientist working in a diagnostics laboratory">
          <div class="career-hero-note">
            <span>Our shared mission</span>
            <strong>No one should die from a treatable infection.</strong>
          </div>
        </div>
      </div>
    </section>

    <section class="career-values" aria-label="Why work at Delphine">
      <div class="section-inner">
        <div class="career-values-heading">
          <p class="eyebrow">Why Delphine</p>
          <h2>Meaningful science. Small-team ownership. Real patient impact.</h2>
        </div>
        <div class="career-value-grid">
          <article>
            <span>01</span>
            <h3>Mission-led work</h3>
            <p>Contribute to diagnostic products designed to accelerate effective treatment for infectious disease.</p>
          </article>
          <article>
            <span>02</span>
            <h3>Cross-disciplinary team</h3>
            <p>Work alongside experts in molecular biology, diagnostics, machine learning, quality, and healthcare.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Build from the ground up</h3>
            <p>Help shape products, processes, and scientific decisions in a growing New Jersey life sciences startup.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="open-positions" id="open-positions" aria-labelledby="positions-title">
      <div class="section-inner">
        <div class="positions-heading">
          <div>
            <p class="eyebrow">Current opportunities</p>
            <h2 id="positions-title">Open positions</h2>
          </div>
          <p>Review our current opening below. Select the position to see the complete description and application
            details.</p>
        </div>

        <div class="job-list">
          <article class="job-card">
            <div class="job-card-department">Research &amp; Development</div>
            <div class="job-card-main">
              <div>
                <h3>Research and Development Scientist</h3>
                <div class="job-meta">
                  <span>Union County, New Jersey</span>
                  <span>Life Sciences</span>
                  <span>On-site laboratory</span>
                </div>
              </div>
              <p>Support the development and commercialization of molecular diagnostic products for infectious disease
                and sepsis care.</p>
            </div>
            <button class="job-card-button" type="button" data-job="rd-scientist"
              data-title="Research and Development Scientist" data-department="Research &amp; Development"
              data-location="Union County, New Jersey">
              View position
              <span aria-hidden="true">↗</span>
            </button>
          </article>
        </div>

        <div class="career-interest">
          <div>
            <p class="eyebrow">Future opportunities</p>
            <h2>Don't see your role?</h2>
            <p>We welcome introductions from people passionate about diagnostics, clinical technology, laboratory
              science, quality, and healthcare AI.</p>
          </div>
          <a class="button secondary" href="mailto:customerservice@delphinedx.com?subject=Career%20Interest%20at%20Delphine%20Diagnostics">Introduce yourself</a>
        </div>
      </div>
    </section>
  </main>

  <dialog class="job-modal" id="jobModal" aria-labelledby="jobModalTitle">
    <button class="job-modal-close" type="button" aria-label="Close job description">&times;</button>
    <div class="job-modal-header">
      <p class="eyebrow" id="jobModalDepartment"></p>
      <h2 id="jobModalTitle"></h2>
      <div class="job-modal-location" id="jobModalLocation"></div>
    </div>
    <div class="job-modal-body" id="jobModalBody"></div>
  </dialog>

  <template id="job-rd-scientist">
    <p>Delphine Diagnostics is a New Jersey-based life sciences startup passionate about creating high-quality
      diagnostic products that accelerate effective treatment for patients with infectious diseases.</p>
    <p>The company is advancing a bundled offering that combines a PCR diagnostic panel with an artificial
      intelligence and machine learning interpretation engine. The goal is to identify and recommend the next best
      action for clinical decision-making, helping clinicians support patients at risk of developing sepsis.</p>
    <h3>About the opportunity</h3>
    <p>As a Research and Development Scientist, you will contribute to the scientific work required to develop,
      evaluate, and advance molecular diagnostic products. This role is suited to someone who enjoys hands-on
      laboratory work and collaborating within a focused, growing team.</p>
    <h3>Working environment</h3>
    <ul>
      <li>Mission-driven life sciences startup focused on infectious disease diagnostics</li>
      <li>Cross-functional collaboration with molecular biology, clinical, data, quality, and business teams</li>
      <li>Research and development laboratory based at the Institute for Life Science Entrepreneurship at Kean
        University in Union County, New Jersey</li>
    </ul>
    <h3>How to apply</h3>
    <p>Send your resume and a short introduction describing your relevant research or diagnostics experience to
      Delphine Diagnostics.</p>
    <a class="button job-apply-button"
      href="mailto:customerservice@delphinedx.com?subject=Application%20-%20Research%20and%20Development%20Scientist">Apply by email</a>
  </template>

<?php get_footer(); ?>