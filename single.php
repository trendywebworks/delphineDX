<?php get_header(); ?>

<main id="main-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php
      $categories = get_the_category();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-post' ); ?>>
      <header class="article-hero<?php echo has_post_thumbnail() ? '' : ' article-hero-no-image'; ?>">
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

          <div class="article-meta">
            <?php if ( ! empty( $categories ) ) : ?>
              <a class="article-category" href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a>
            <?php endif; ?>
            <time class="article-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          </div>

          <h1><?php the_title(); ?></h1>
        </div>
      </header>

      <?php if ( has_post_thumbnail() ) : ?>
      <div class="section-inner article-featured-wrap">
        <figure class="article-featured">
          <?php the_post_thumbnail( 'full' ); ?>
        </figure>
      </div>
      <?php endif; ?>

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
