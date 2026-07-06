<?php get_header(); ?>

<main>

  <section class="blog-hero simple-blog-hero" aria-labelledby="blog-title">
      <div class="section-inner blog-hero-grid">
          <div class="blog-hero-copy">
              <h1 id="blog-title"><?php single_cat_title(); ?></h1>
          </div>
      </div>
  </section>

  <section class="blog-index-section">
      <div class="section-inner blog-layout">
          <div class="blog-feed">

              <?php

              $current_year = '';

              if (have_posts()) :

                  while (have_posts()) :
                      the_post();

                      $post_year = get_the_date('Y');

                      if ($current_year != $post_year) :

                          if ($current_year != '') :
                              echo '</div></section>';
                          endif;

                          $current_year = $post_year;
                          ?>

                          <section class="year-group" id="year-<?php echo esc_attr($post_year); ?>">
                              <div class="year-heading">
                                  <h2><?php echo esc_html($post_year); ?></h2>
                              </div>

                              <div class="post-grid">

                          <?php
                      endif;
                      ?>

                      <article <?php post_class('post-card'); ?>>

                          <div class="post-media">
                              <a href="<?php the_permalink(); ?>">
                                  <?php if (has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail('delphine-card'); ?>
                                  <?php else : ?>
                                      <?php delphine_fallback_featured_image( get_the_title() ); ?>
                                  <?php endif; ?>
                              </a>
                          </div>

                          <div class="post-meta">

                              <?php
                              $category = get_the_category();

                              if (!empty($category)) :
                                  ?>
                                  <span><?php echo esc_html($category[0]->name); ?></span>
                              <?php endif; ?>

                              <time datetime="<?php echo get_the_date('c'); ?>">
                                  <?php echo get_the_date('M j, Y'); ?>
                              </time>

                          </div>

                          <h3>
                              <a href="<?php the_permalink(); ?>">
                                  <?php the_title(); ?>
                              </a>
                          </h3>

                          <p>
                              <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                          </p>

                          <a href="<?php the_permalink(); ?>">
                              Read more
                          </a>

                      </article>

                      <?php

                  endwhile;

                  echo '</div></section>';

              else :
                  ?>

                  <div class="no-posts">
                      <h2>No posts found</h2>
                      <p>There are currently no posts in this category.</p>
                  </div>

              <?php endif; ?>

          </div>
      </div>
  </section>

  <section class="cta">
      <div class="section-inner">
          <div class="cta-box">
              <h2>Follow our latest updates and insights.</h2>
              <p>For media, partnership, investor, career, or customer inquiries, connect with our team.</p>

              <div class="hero-actions">
                  <a class="button" href="<?php echo esc_url(home_url('/contact')); ?>">
                      Contact Us
                  </a>

                  <a class="button secondary" href="<?php echo esc_url(home_url('/about')); ?>">
                      About Us
                  </a>
              </div>
          </div>
      </div>
  </section>

</main>

<?php get_footer(); ?>
