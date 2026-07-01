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
          <p class="eyebrow">Sepsis awareness</p>
          <h1 id="sepsis-title">What is Sepsis?</h1>
          <p>Sepsis is the body's <strong>extreme response</strong> to an infection, which if left undiagnosed and
            untreated can lead to tissue damage, organ failure, and death.</p>
          <p>Anyone with an infection, severe injury, or serious non-communicable disease is at risk for sepsis.</p>
        </div>
        <div class="sepsis-hero-visual">
          <img class="sepsis-hero-image" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/education/what-is-sepsis.webp'); ?>" alt="Sepsis problem and urgency statistics">
        </div>
      </div>
    </section>

    <section class="sepsis-live-content" id="understand-sepsis">
      <div class="section-inner sepsis-live-layout">
        <div class="sepsis-live-copy">
          <ul class="sepsis-live-list">
            <li>Sepsis is the body's <strong>extreme response</strong> to an infection, which if left undiagnosed and
              untreated can lead to tissue damage, organ failure, and death.</li>
            <li>Anyone with an infection, severe injury, or serious non-communicable disease is at risk for sepsis.</li>
          </ul>

          <div class="section-head">
            <p class="eyebrow">Problem &amp; Urgency</p>
            <h2>Sepsis is a significant threat globally, nationally, and locally.</h2>
          </div>

          <figure class="sepsis-live-figure sepsis-live-figure-wide">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/education/problem-and-urgency.png'); ?>" alt="Problem and urgency statistics about sepsis">
          </figure>

          <ul class="sepsis-live-list">
            <li>Sepsis is a significant threat globally, nationally, and locally.</li>
          </ul>

          <figure class="sepsis-live-figure sepsis-live-figure-compact">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/education/sepsis-impact-chart.png'); ?>" alt="Sepsis impact chart">
          </figure>

          <ul class="sepsis-live-list">
            <li>Early diagnosis is key for rapid recovery.</li>
          </ul>

          <figure class="sepsis-live-figure sepsis-live-figure-wide">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/education/sepsis-reference-graphic.png'); ?>" alt="Sepsis educational reference graphic">
          </figure>
        </div>
      </div>
    </section>

    <section class="sepsis-sources">
      <div class="section-inner sepsis-sources-box">
        <div>
          <p class="eyebrow">References</p>
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
