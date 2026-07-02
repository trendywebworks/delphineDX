<?php get_header(); ?>

  <main class="assay-product-page">
    <section class="assay-hero" aria-labelledby="assay-title">
      <div class="section-inner assay-hero-grid">
        <div class="assay-hero-copy">
          <p class="eyebrow">Molecular diagnostics</p>
          <h1 id="assay-title">Delphine Sepsis Diagnostic Assay</h1>
          <p>A concept-stage real-time PCR assay designed to detect microbial pathogens and resistance markers directly
            from whole blood specimens of patients with suspected sepsis.</p>
          <div class="hero-actions">
            <a class="button" href="#assay-overview">Explore the assay</a>
            <a class="button secondary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Discuss a partnership</a>
          </div>
          <div class="assay-status">
            <span>Development status</span>
            <strong>Concept and proof-of-concept development</strong>
          </div>
        </div>
        <div class="assay-hero-visual">
          <div class="assay-device-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/assay-kit.png" alt="Delphine molecular diagnostic assay kit concept">
          </div>
        </div>
      </div>
    </section>

    <section class="assay-overview" id="assay-overview">
      <div class="section-inner assay-overview-grid">
        <div class="section-head">
          <p class="eyebrow">The diagnostic challenge</p>
          <h2>Move from culture-dependent delay toward molecular insight.</h2>
        </div>
        <div class="assay-overview-copy">
          <p>Delphine is currently in the Concept Phase of the Product Development Process for its Sepsis Diagnostic
            Assay, a real-time polymerase chain reaction (PCR) test to detect the presence of microbial pathogens and
            resistance markers directly from whole blood specimens of patients with suspected sepsis.</p>
          <p>Conventional blood culture can take days to identify a pathogen and inform antimicrobial susceptibility.
            During that uncertainty, clinicians must make urgent treatment decisions for patients whose condition can
            deteriorate rapidly.</p>
          <p>Delphine's assay concept uses real-time polymerase chain reaction to look directly for microbial DNA in
            whole blood. The intended design aims to support earlier pathogen identification and, as the panel expands,
            resistance-marker insight.</p>
        </div>
      </div>
    </section>

    <section class="assay-benefits" aria-label="Intended assay advantages">
      <div class="section-inner">
        <div class="assay-benefit-grid">
          <article>
            <span>01</span>
            <h3>Direct from whole blood</h3>
            <p>Designed to detect microbial targets without waiting for a positive blood culture.</p>
          </article>
          <article>
            <span>02</span>
            <h3>Results within hours</h3>
            <p>Aims for a faster turnaround than conventional workflows that may require multiple days.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Higher target sensitivity</h3>
            <p>Intended to detect lower quantities of selected sepsis-causing microbes, including difficult-to-culture
              organisms.</p>
          </article>
          <article>
            <span>04</span>
            <h3>Standard lab equipment</h3>
            <p>Planned for compatibility with equipment already found in clinical laboratories to help control cost.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="assay-development">
      <div class="section-inner">
        <div class="assay-development-heading">
          <div class="section-head">
            <p class="eyebrow">Where are we now?</p>
            <h2>A structured proof of concept to demonstrate technical feasibility.</h2>
          </div>
          <p>Delphine is currently designing and validating primer sets for 11 bacterial pathogens commonly implicated
            in human infection in the United States. The PCR assay with these targets will undergo five main phases of
            initial testing, estimated to be completed by December 2024.</p>
        </div>
        <figure class="assay-development-figure">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/sepsis-assay-development-phases.png"
            alt="Five assay development phases from in-silico inclusivity through mock-sample testing">
          <figcaption>Development phases described by Delphine: in-silico inclusivity and exclusivity, in-vitro
            inclusivity and exclusivity, limit of detection, and mock-sample testing.</figcaption>
        </figure>
      </div>
    </section>

    <section class="assay-targets" aria-labelledby="targets-title">
      <div class="section-inner">
        <div class="targets-heading">
          <div>
            <p class="eyebrow">Initial panel</p>
            <h2 id="targets-title">Eleven bacterial proof-of-concept targets.</h2>
          </div>
          <p>The initial target set represents clinically important organisms associated with bloodstream infection,
            invasive disease, healthcare-associated infection, or antimicrobial resistance.</p>
        </div>
        <div class="target-grid">
          <article><span>01</span><h3><i>Staphylococcus aureus</i></h3><p>Major cause of bloodstream infection and invasive disease.</p></article>
          <article><span>02</span><h3><i>Escherichia coli</i></h3><p>Common cause of urinary, gastrointestinal, and bloodstream infections.</p></article>
          <article><span>03</span><h3><i>Klebsiella pneumoniae</i></h3><p>Important healthcare-associated pathogen with resistance concerns.</p></article>
          <article><span>04</span><h3><i>Pseudomonas aeruginosa</i></h3><p>Opportunistic pathogen associated with severe and drug-resistant infection.</p></article>
          <article><span>05</span><h3><i>Enterococcus faecalis</i></h3><p>Associated with bloodstream, urinary tract, and healthcare-related infections.</p></article>
          <article><span>06</span><h3><i>Streptococcus pneumoniae</i></h3><p>Cause of pneumonia, meningitis, and invasive pneumococcal disease.</p></article>
          <article><span>07</span><h3><i>Staphylococcus epidermidis</i></h3><p>Frequently associated with devices and healthcare-related bloodstream infection.</p></article>
          <article><span>08</span><h3><i>Streptococcus agalactiae</i></h3><p>Cause of severe infection, particularly in newborns and vulnerable adults.</p></article>
          <article><span>09</span><h3><i>Streptococcus pyogenes</i></h3><p>Associated with invasive group A streptococcal disease.</p></article>
          <article><span>10</span><h3><i>Acinetobacter baumannii</i></h3><p>Healthcare-associated organism known for multidrug resistance.</p></article>
          <article><span>11</span><h3><i>Haemophilus influenzae</i></h3><p>Cause of invasive respiratory and bloodstream infection.</p></article>
        </div>
        <div class="assay-target-table-wrap" aria-label="Eleven bacterial targets included in Delphine's proof of concept">
          <table class="assay-target-table">
            <caption>Table 1. The Eleven Bacterial Targets Included in Delphine's Proof of Concept</caption>
            <thead>
              <tr>
                <th scope="col">Organism</th>
                <th scope="col">Justification</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><i>Staphylococcus aureus</i></th>
                <td>The CDC has reported that, in 2017, more than 119,000 people in the United States had bloodstream <i>S. aureus</i> infections and nearly 20,000 of them died [1].</td>
              </tr>
              <tr>
                <th scope="row"><i>Escherichia coli</i></th>
                <td>According to the North Carolina Department of Health and Human Services, <i>E. coli</i> infections cause an estimated 265,000 illnesses and about 30 deaths in the United States each year [2].</td>
              </tr>
              <tr>
                <th scope="row"><i>Klebsiella pneumoniae</i></th>
                <td>Statistics from Tufts University School of Medicine suggest that there were over 73,000 nosocomial <i>K. pneumoniae</i> infections and 4,800 related deaths in the United States in 2011 [3].</td>
              </tr>
              <tr>
                <th scope="row"><i>Pseudomonas aeruginosa</i></th>
                <td>In 2017, multidrug-resistant <i>P. aeruginosa</i> caused approximately 32,600 infections in hospitalized patients in the United States and 2,700 deaths [4].</td>
              </tr>
              <tr>
                <th scope="row"><i>Enterococcus faecalis</i></th>
                <td>Data suggests that <i>E. faecalis</i> is responsible for approximately 140,000 infections in the United States each year [5], and it is plausible that <i>E. faecalis</i> may have resulted in more than 2,000 deaths in the United States.</td>
              </tr>
              <tr>
                <th scope="row"><i>Streptococcus pneumoniae</i></th>
                <td>According to the CDC, <i>S. pneumoniae</i> causes over 2 million infections, 150,000 hospitalizations, and 6,000 deaths annually in the United States [8].</td>
              </tr>
              <tr>
                <th scope="row"><i>Staphylococcus epidermidis</i></th>
                <td>Data suggests that annually in the United States there are over 55,000 bloodstream infections [9], [10] and 1,500 deaths [9], [11] related to <i>S. epidermidis</i>.</td>
              </tr>
              <tr>
                <th scope="row"><i>Streptococcus agalactiae</i></th>
                <td>In 2016, there were about 31,000 severe <i>S. agalactiae</i> infections in the United States, 1,700 of which resulted in death, according to the CDC [12].</td>
              </tr>
              <tr>
                <th scope="row"><i>Streptococcus pyogenes</i></th>
                <td>The CDC has reported that <i>S. pyogenes</i> causes more than 12,500 invasive infections and 1,250 deaths in the United States each year [13].</td>
              </tr>
              <tr>
                <th scope="row"><i>Acinetobacter baumannii</i></th>
                <td>Data suggests that there were likely around 13,000 <i>A. baumannii</i> infections in the United States in 2017 and more than 700 deaths [14], [15], [16].</td>
              </tr>
              <tr>
                <th scope="row"><i>Haemophilus influenzae</i></th>
                <td>According to the CDC, there were an estimated 7,550 cases of invasive <i>H. influenzae</i> infection and 910 related deaths in the United States in 2017 [17].</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="assay-roadmap">
      <div class="section-inner assay-roadmap-grid">
        <div class="assay-roadmap-copy">
          <p class="eyebrow">Where are we going?</p>
          <h2>Toward a broader, more comprehensive sepsis diagnostic.</h2>
          <p>While the proof of concept includes 11 bacterial targets, Delphine plans to subsequently expand the panel
            to include resistance markers as well as other pathogens, including additional bacteria, viruses, fungi, and
            parasites.</p>
        </div>
        <div class="assay-expansion-grid">
          <article><span>Bacteria</span><strong>Additional clinically relevant bacterial targets</strong></article>
          <article><span>Resistance</span><strong>Markers associated with antimicrobial resistance</strong></article>
          <article><span>Viruses</span><strong>Viral targets relevant to severe systemic infection</strong></article>
          <article><span>Fungi &amp; parasites</span><strong>Broader microbial coverage for complex cases</strong></article>
          <article><span>Host response</span><strong>Future exploration of host-based biomarkers</strong></article>
        </div>
      </div>
    </section>

    <section class="assay-partner">
      <div class="section-inner assay-partner-box">
        <div>
          <p class="eyebrow">We need you</p>
          <h2>Help shape the assay around real user needs.</h2>
          <p>Delphine is passionate in its efforts to deliver best-in-class products to speed effective diagnosis for
            patients with infectious diseases. We are always interested in hearing from future customers about the
            attributes they are looking for in a diagnostic product, including included targets, compatible equipment,
            nucleic-acid extraction methods, PCR instruments, and future host-based biomarkers.</p>
        </div>
        <div class="assay-partner-actions">
          <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Partner with Delphine</a>
          <a href="mailto:customerservice@delphinedx.com?subject=Sepsis%20Diagnostic%20Assay%20Partnership">Email the team</a>
        </div>
      </div>
    </section>

    <section class="assay-references" aria-labelledby="assay-references-title">
      <div class="section-inner">
        <div class="section-head">
          <p class="eyebrow">References</p>
          <h2 id="assay-references-title">Sources for proof-of-concept target justifications.</h2>
        </div>
        <ol class="assay-reference-list">
          <li><a href="https://www.cdc.gov/media/releases/2019/p0305-deadly-staph-infections.html" target="_blank" rel="noopener noreferrer">CDC: Deadly staph infections</a></li>
          <li><a href="https://epi.dph.ncdhhs.gov/cd/diseases/ecoli.html" target="_blank" rel="noopener noreferrer">North Carolina DHHS: E. coli infection</a></li>
          <li><a href="https://doi.org/10.1128/mmbr.00078-15" target="_blank" rel="noopener noreferrer">Microbiology and Molecular Biology Reviews</a></li>
          <li><a href="https://www.cdc.gov/hai/organisms/pseudomonas.html" target="_blank" rel="noopener noreferrer">CDC: Pseudomonas aeruginosa in healthcare settings</a></li>
          <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2640141/pdf/9621194.pdf" target="_blank" rel="noopener noreferrer">Enterococcal infections reference</a></li>
          <li><a href="https://www.cdc.gov/hai/organisms/vre/vre.html" target="_blank" rel="noopener noreferrer">CDC: Vancomycin-resistant Enterococci</a></li>
          <li><a href="https://doi.org/10.1086/661599" target="_blank" rel="noopener noreferrer">Clinical Infectious Diseases reference</a></li>
          <li><a href="https://www.cdc.gov/drugresistance/pdf/threats-report/strep-pneumoniae-508.pdf" target="_blank" rel="noopener noreferrer">CDC: Streptococcus pneumoniae threat report</a></li>
          <li><a href="https://doi.org/10.1080/07853890802337045" target="_blank" rel="noopener noreferrer">Annals of Medicine reference</a></li>
          <li><a href="https://doi.org/10.1038/nrmicro2182" target="_blank" rel="noopener noreferrer">Nature Reviews Microbiology reference</a></li>
          <li><a href="https://doi.org/10.1007/s00281-011-0296-2" target="_blank" rel="noopener noreferrer">Seminars in Immunopathology reference</a></li>
          <li><a href="https://www.cdc.gov/drugresistance/pdf/threats-report/gbs-508.pdf" target="_blank" rel="noopener noreferrer">CDC: Group B Streptococcus threat report</a></li>
          <li><a href="https://www.cdc.gov/drugresistance/pdf/threats-report/gas-508.pdf" target="_blank" rel="noopener noreferrer">CDC: Group A Streptococcus threat report</a></li>
          <li><a href="https://www.cdc.gov/hai/organisms/acinetobacter.html" target="_blank" rel="noopener noreferrer">CDC: Acinetobacter in healthcare settings</a></li>
          <li><a href="https://arpsp.cdc.gov/profile/antibiotic-resistance/carbapenem-resistant-acinetobacter?year-select-resistance-by-state=year305&amp;year-select-resistance-by-state-and-region=year302" target="_blank" rel="noopener noreferrer">CDC AR Patient Safety Portal: Carbapenem-resistant Acinetobacter</a></li>
          <li><a href="https://doi.org/10.1371/journal.pone.0054287" target="_blank" rel="noopener noreferrer">PLOS ONE reference</a></li>
          <li><a href="https://www.cdc.gov/abcs/bact-facts-interactive-dashboard.html" target="_blank" rel="noopener noreferrer">CDC ABCs bacterial facts dashboard</a></li>
        </ol>
      </div>
    </section>

    <section class="assay-disclaimer">
      <div class="section-inner">
        <strong>Development-stage product</strong>
        <p>The Delphine Sepsis Diagnostic Assay is described as a concept/proof-of-concept product and is not presented
          here as commercially available or cleared for clinical use.</p>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
