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
  <link rel="stylesheet" href="style.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <nav class="nav" aria-label="Primary navigation">
      <a class="brand" href="#top" aria-label="Delphine Diagnostics home">
        <img src="assets/images/delphine-logo.png" alt="">
        <span>Delphine Diagnostics</span>
      </a>
      <button class="menu-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">☰</button>
      <div class="nav-links" id="navLinks">
        <a href="#top">Home</a>
        <a href="about.html">About Us</a>
        <div class="nav-item has-dropdown">
          <a href="what-is-sepsis.html">Resources</a>
          <div class="dropdown-menu" aria-label="Resources submenu">
            <a href="what-is-sepsis.html">What is Sepsis?</a>
          </div>
        </div>
        <div class="nav-item has-dropdown has-mega">
          <a href="#products">Products</a>
          <div class="mega-menu" aria-label="Products submenu">
            <a class="mega-card" href="#platform">
              <img src="assets/images/clinical-team.jpeg" alt="">
              <h3>ClinSight Sepsis Prediction Using ML Tool</h3>
              <p>ML-enabled clinical decision support for real-time sepsis risk signals and care workflow context.</p>
              <span>Read More</span>
            </a>
            <a class="mega-card" href="delphine-sepsis-diagnostic-assay.html">
              <img src="assets/images/assay-kit.png" alt="">
              <h3>Delphine Sepsis Diagnostic Assay</h3>
              <p>Real-time PCR assay concept for pathogen and resistance marker detection from whole blood.</p>
              <span>Read More</span>
            </a>
            <a class="mega-card" href="delphine-ai-ml-healthcare-platform.html">
              <img src="assets/images/lab-scientist.jpeg" alt="">
              <h3>Delphine AI/ML Healthcare Platform</h3>
              <p>Healthcare intelligence platform designed to connect clinical data, models, and recommendations.</p>
              <span>Read More</span>
            </a>
            <a class="mega-card" href="ruo-pathogen-identification-test-kits.html">
              <img src="assets/images/clinical-sample.png" alt="">
              <h3>RUO Pathogen Identification Test Kits</h3>
              <p>Real-time PCR assays for research use in pathogen detection, monitoring, and microbiology studies.</p>
              <span>Read More</span>
            </a>
            <a class="mega-card" href="#products">
              <img src="assets/images/sepsis-alliance.jpeg" alt="">
              <h3>RUO Resistance Marker Identification Test Kits</h3>
              <p>Research-use assay roadmap focused on antimicrobial resistance marker identification and insight.</p>
              <span>Read More</span>
            </a>
          </div>
        </div>
        <div class="nav-item has-dropdown">
          <a href="blog.html">News</a>
          <div class="dropdown-menu" aria-label="News submenu">
            <a href="blog.html#year-2025">2025</a>
            <a href="blog.html#year-2024">2024</a>
            <a href="blog.html#year-2023">2023</a>
            <a href="blog.html#year-2022">2022</a>
          </div>
        </div>
        <a href="career.html">Career</a>
        <a href="blog.html">Blog</a>
      </div>
      <a class="button nav-cta" href="contact.html">Contact Us</a>
    </nav>
  </header>