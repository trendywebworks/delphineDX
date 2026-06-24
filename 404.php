<?php get_header(); ?>

<main id="main-content">
  <section class="not-found" aria-labelledby="not-found-title">
    <div class="section-inner not-found-inner">
      <p class="not-found-code" aria-hidden="true">404</p>
      <p class="eyebrow">Page not found</p>
      <h1 id="not-found-title">This page has moved beyond our reach.</h1>
      <p>Sorry, the page you are looking for does not exist or may have been moved. Let’s get you back to the information you need.</p>
      <div class="not-found-actions">
        <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Return home</a>
        <a class="button secondary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact us</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
