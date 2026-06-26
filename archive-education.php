<?php get_header(); ?>

<main>

  <section class="blog-hero simple-blog-hero" aria-labelledby="archive-title">
    <div class="section-inner blog-hero-grid">
      <div class="blog-hero-copy">
        <h1 id="archive-title"><?php post_type_archive_title(); ?></h1>
      </div>
    </div>
  </section>

  <section class="blog-index-section">
    <div class="section-inner blog-layout">
      <div class="blog-feed">

        <section class="year-group">          

          <?php if ( have_posts() ) : ?>

            <div class="post-grid">
              <?php while ( have_posts() ) : the_post(); ?>

                <article <?php post_class( 'post-card archive-card' ); ?>>
                  <div class="post-media">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'delphine-card' ); ?>
                      <?php else : ?>
                        <?php delphine_fallback_featured_image( get_the_title() ); ?>
                      <?php endif; ?>
                    </a>
                  </div>

                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </article>

              <?php endwhile; ?>
            </div>

          <?php else : ?>

            <div class="no-posts">
              <h2>Lorem ipsum dolor sit amet</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis
                vestibulum.</p>
            </div>

          <?php endif; ?>
        </section>

      </div>
    </div>
  </section>

  <section class="cta">
    <div class="section-inner">
      <div class="cta-box">
        <p class="eyebrow">Join Delphine's mission</p>
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
