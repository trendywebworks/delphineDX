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
          <div class="mega-menu products-mega-menu" aria-label="Products submenu">
            <div class="mega-section mega-section-platforms">
              <div class="mega-section-head">
                <span>Product platforms</span>
                <p>Diagnostics and clinical decision-support products</p>
              </div>
              <div class="mega-link-list">
                <a href="<?php echo esc_url( home_url( '/products/sepseek-delphine-sepsis-diagnostic-test-kit/' ) ); ?>">
                  <strong>SepSeek Sepsis Diagnostic Test Kit</strong>
                  <span>Rapid sepsis diagnostic assay for pathogen and resistance-marker identification.</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/clin-sight-sepsis-prediction-using-ml-tool/' ) ); ?>">
                  <strong>ClinSight Sepsis Prediction Tool</strong>
                  <span>Machine-learning decision support for sepsis risk prediction.</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/delphine-ai-ml-healthcare-platform/' ) ); ?>">
                  <strong>Delphine AI/ML Healthcare Platform</strong>
                  <span>Healthcare software platform for clinical risk and workflow intelligence.</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/ruo-pathogen-identification-test-kits/' ) ); ?>">
                  <strong>PathoSeek RUO Pathogen ID Kits</strong>
                  <span>Overview of the four research-use pathogen identification kits.</span>
                </a>
              </div>
            </div>

            <div class="mega-section mega-section-kits">
              <div class="mega-section-head">
                <span>PathoSeek test kits</span>
                <p>Individual RUO pathogen identification assays</p>
              </div>
              <div class="mega-kit-grid">
                <a href="<?php echo esc_url( home_url( '/products/escherichia-coli-real-time-pcr-assay/' ) ); ?>">
                  <span>DDN-EC-001</span>
                  <strong><i>Escherichia coli</i></strong>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/staphylococcus-aureus-real-time-pcr-assay/' ) ); ?>">
                  <span>DDN-SA-002</span>
                  <strong><i>Staphylococcus aureus</i></strong>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/klebsiella-pneumoniae-real-time-pcr-assay/' ) ); ?>">
                  <span>DDN-KP-003</span>
                  <strong><i>Klebsiella pneumoniae</i></strong>
                </a>
                <a href="<?php echo esc_url( home_url( '/products/acinetobacter-baumannii-real-time-pcr-assay/' ) ); ?>">
                  <span>DDN-AB-004</span>
                  <strong><i>Acinetobacter baumannii</i></strong>
                </a>
              </div>
              <a class="mega-overview-link" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View all products</a>
            </div>
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
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>careers/">Careers</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/blog/">Blog</a>
      </div>
      <a class="button nav-cta" href="<?php echo esc_url( home_url( '/' ) ); ?>/contact-us/">Contact Us</a>
    </nav>
  </header>
                
