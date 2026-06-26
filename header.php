<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Delphine Diagnostics | Rapid Sepsis Diagnostics</title>
  <meta name="description"
    content="Delphine Diagnostics develops rapid molecular diagnostics and AI/ML decision support for earlier sepsis detection and targeted treatment.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <nav class="nav" aria-label="Primary navigation">
      <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Delphine Diagnostics home">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/delphine-logo.png" alt="">
        <span>Delphine Diagnostics</span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">☰</button>
      <div class="nav-links" id="navLinks">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a>
        <div class="nav-item has-dropdown">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>education/">Education</a>
          <div class="dropdown-menu" aria-label="Education submenu">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>education/what-is-sepsis/">What is Sepsis?</a>
          </div>
        </div>
        <div class="nav-item has-dropdown has-mega">
          <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
          <div class="mega-menu" aria-label="Products submenu">
            <?php
            $menu_products = new WP_Query(
              array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'orderby'        => 'title',
                'order'          => 'ASC',
              )
            );
            ?>
            <?php if ( $menu_products->have_posts() ) : ?>
              <?php while ( $menu_products->have_posts() ) : $menu_products->the_post(); ?>
                <?php
                $menu_product_summary = wp_trim_words( get_the_excerpt() ?: get_the_content(), 16, '...' );

                if ( $menu_product_summary === '' ) {
                  $menu_product_summary = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
                }
                ?>
                <a class="mega-card" href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'delphine-mega-card' ); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/clinical-sample.png' ); ?>" alt="">
                  <?php endif; ?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php echo esc_html( $menu_product_summary ); ?></p>
                  <span>Read More</span>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <a class="mega-card" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/clinical-sample.png' ); ?>" alt="">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <span>Read More</span>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/news/">News</a>
        <!--
        <div class="nav-item has-dropdown">          
          < !- -
          <div class="dropdown-menu" aria-label="News submenu">
            <a href="blog.html#year-2025">2025</a>
            <a href="blog.html#year-2024">2024</a>
            <a href="blog.html#year-2023">2023</a>
            <a href="blog.html#year-2022">2022</a>
          </div>
          - - >
        </div>
        -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers/">Career</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/blog/">Blog</a>
      </div>
      <a class="button nav-cta" href="<?php echo esc_url( home_url( '/' ) ); ?>/contact-us/">Contact Us</a>
    </nav>
  </header>
                
