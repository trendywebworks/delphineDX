<?php get_header(); ?>

<main id="main-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php
      $categories = get_the_category();
      $author_initial = substr( get_the_author(), 0, 1 );
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-post' ); ?>>
      <header class="article-hero">
        <div class="section-inner article-hero-inner">
          <nav class="article-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span aria-hidden="true">/</span>
            <?php if ( ! empty( $categories ) ) : ?>
              <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a>
              <span aria-hidden="true">/</span>
            <?php endif; ?>
            <span aria-current="page"><?php echo esc_html( get_the_title() ); ?></span>
          </nav>

          <?php if ( ! empty( $categories ) ) : ?>
            <a class="article-category" href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a>
          <?php endif; ?>

          <h1><?php the_title(); ?></h1>

          <div class="article-byline">
            <span class="article-author-mark" aria-hidden="true"><?php echo esc_html( strtoupper( $author_initial ) ); ?></span>
            <div>
              <span><?php the_author(); ?></span>
              <div class="article-date">
                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
                <span aria-hidden="true">•</span>
                <span><?php echo esc_html( delphine_reading_time() ); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="section-inner article-featured-wrap">
        <figure class="article-featured">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full' ); ?>
          <?php else : ?>
            <?php delphine_fallback_featured_image( get_the_title() ); ?>
          <?php endif; ?>
        </figure>
      </div>

      <section class="article-body-section">
        <div class="section-inner article-layout article-layout-single">
          <div class="article-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<nav class="article-page-links">Pages: ', 'after' => '</nav>' ) ); ?>
          </div>
        </div>
      </section>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
