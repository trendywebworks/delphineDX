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
          <div class="year-heading">
            <p class="eyebrow">Education</p>
            <h2>Explore Education</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis
              vestibulum.</p>
          </div>

          <?php if ( have_posts() ) : ?>

            <div class="post-grid">
              <?php while ( have_posts() ) : the_post(); ?>

                <article <?php post_class( 'post-card archive-card' ); ?>>
                  <div class="post-media">
                    <a href="<?php the_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/sepsis-alliance.jpeg' ); ?>" alt="">
                      <?php endif; ?>
                    </a>
                  </div>

                  <div class="post-meta">
                    <span>Education</span>
                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time>
                  </div>

                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?></p>
                  <a href="<?php the_permalink(); ?>">Read more</a>
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
        <p class="eyebrow">Explore more</p>
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lorem sed arcu facilisis vestibulum.</p>
        <div class="hero-actions">
          <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a>
          <a class="button secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
