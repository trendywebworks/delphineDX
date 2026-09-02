<?php /* Template Name: Careers */ get_header(); ?>

  <main>
    <section class="career-hero" aria-labelledby="career-title">
      <div class="section-inner career-hero-grid">
        <div class="career-hero-copy">
          <h1 id="career-title">Build what healthcare needs next.</h1>
          <p>Join a mission-driven team combining molecular diagnostics, data, and artificial intelligence to help
            clinicians act faster when every hour matters.</p>
          <a class="button" href="#open-positions">View open positions</a>
        </div>
        <div class="career-hero-visual">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers.webp" alt="Scientist working in a diagnostics laboratory">          
        </div>
      </div>        
    </section>

    <section class="career-values" aria-label="Why work at Delphine">
      <div class="section-inner">
        <div class="career-values-heading">
          <h2>Why Delphine</h2>
        </div>
        <div class="career-value-grid">
          <article>
            <span>01</span>
            <h3>Mission-led work</h3>
            <p>Contribute to diagnostic products designed to accelerate effective treatment for infectious disease.</p>
          </article>
          <article>
            <span>02</span>
            <h3>Cross-disciplinary team</h3>
            <p>Work alongside experts in molecular biology, diagnostics, machine learning, quality, and healthcare.</p>
          </article>
          <article>
            <span>03</span>
            <h3>Build from the ground up</h3>
            <p>Help shape products, processes, and scientific decisions in a growing New Jersey life sciences startup.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="open-positions" id="open-positions" aria-labelledby="positions-title">
      <div class="section-inner">
        <div class="positions-heading">
          <div>
            <h2 id="positions-title">Open positions</h2>
          </div>
          <p>Review our current opening below. Select the position to see the complete description and application
            details.</p>
        </div>

        <div class="job-list">
          <article class="job-card">
            <div class="job-card-department">Laboratory Technician</div>
            <div class="job-card-main">
              <div>
                <h3>Laboratory Technician</h3>
                <div class="job-meta">
                  <span>NJIT Newark</span>
                  <span>Research &amp; Development – Molecular Diagnostics</span>
                  <span>Laboratory Technician</span>
                </div>
              </div>
              <p>We are looking for a Laboratory Technician to support our Research &amp; Development activities in real-time PCR sepsis diagnostic kit development and validation.</p>
            </div>
            <button class="job-card-button" type="button" data-job="laboratory-technician"
              data-title="Laboratory Technician" data-department="Laboratory Technician"
              data-location="NJIT Newark">
              View position
              <span aria-hidden="true">↗</span>
            </button>
          </article>
        </div>

        <div class="job-list">
          <article class="job-card">
            <div class="job-card-department">Research &amp; Development</div>
            <div class="job-card-main">
              <div>
                <h3>Research and Development Scientist</h3>
                <div class="job-meta">
                  <span>Union County, New Jersey</span>
                  <span>Life Sciences</span>
                  <span>On-site laboratory</span>
                </div>
              </div>
              <p>Support the development and commercialization of molecular diagnostic products for infectious disease
                and sepsis care.</p>
            </div>
            <button class="job-card-button" type="button" data-job="rd-scientist"
              data-title="Research and Development Scientist" data-department="Research &amp; Development"
              data-location="Union County, New Jersey">
              View position
              <span aria-hidden="true">↗</span>
            </button>
          </article>
        </div>

        <div class="career-interest">
          <div>
            <h2>Don't see your role?</h2>
            <p>We welcome introductions from people passionate about diagnostics, clinical technology, laboratory
              science, quality, and healthcare AI.</p>
          </div>
          <a class="button secondary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Introduce yourself</a>
        </div>
      </div>
    </section>
  </main>

  <dialog class="job-modal" id="jobModal" aria-labelledby="jobModalTitle">
    <button class="job-modal-close" type="button" aria-label="Close job description">&times;</button>
    <div class="job-modal-header">
      <h2 id="jobModalTitle"></h2>
      <div class="job-modal-location" id="jobModalLocation"></div>
    </div>
    <div class="job-modal-body" id="jobModalBody"></div>
  </dialog>

  <template id="job-laboratory-technician">

    <p><strong>Molecular Biology / Molecular Diagnostics R&amp;D</strong></p>
    <p><strong>Position:</strong> Laboratory Technician</p>
    <p><strong>Job location:</strong> NJIT Newark</p>
    <p><strong>Department:</strong> Research &amp; Development – Molecular Diagnostics</p>
    <p><strong>Experience:</strong> 1–3 years of relevant hands-on laboratory experience</p>
    <p><strong>Education:</strong> B.Sc./B.Tech. in Biotechnology, Microbiology, Biochemistry, Molecular Biology,
    Life Sciences, or related field. M.Sc. / Ph.D. candidates currently pursuing their degree are
    also eligible.</p>

    <p>We are looking for a Laboratory Technician to support our Research &amp; Development activities in real-time PCR sepsis diagnostic kit development and validation.</p>
    <p>The candidate will work closely with scientists and senior R&amp;D personnel on molecular biology experiments, sample preparation, DNA/RNA extraction, PCR/qPCR testing, assay optimization, and documentation. The role is highly hands-on and requires candidates who are comfortable working in a laboratory environment and following experimental protocols accurately.</p>

    <h3>Key Responsibilities</h3>
    <ul>
      <li>Perform DNA extraction from whole blood and other biological samples using manual and automated extraction methods.</li>
      <li>Perform RNA extraction where required for assay development.</li>
      <li>Prepare and process samples for molecular biology experiments.</li>
      <li>Prepare PCR/qPCR master mixes, reagents, primers, probes, and other assay components under supervision.</li>
      <li>Set up and perform real-time PCR experiments for R&amp;D activities.</li>
      <li>Support real-time PCR kit development, optimization, and validation.</li>
      <li>Assist in evaluating assay performance, including parameters such as amplification efficiency, specificity, sensitivity, reproducibility, and precision.</li>
      <li>Perform serial dilutions and preparation of standards/control materials as required.</li>
      <li>Run positive, negative, and internal controls as part of experimental workflows.</li>
      <li>Operate and maintain real-time PCR instruments and other routine molecular biology equipment.</li>
      <li>Maintain strict pre-PCR/post-PCR separation and contamination-control practices.</li>
      <li>Accurately record experimental observations, raw data, sample information, and results.</li>
      <li>Maintain laboratory notebooks, experiment sheets, reagent records, and equipment logs.</li>
      <li>Assist scientists in troubleshooting experimental issues and optimizing laboratory workflows.</li>
      <li>Follow established SOPs, experimental protocols, biosafety procedures, and laboratory quality practices.</li>
      <li>Maintain laboratory cleanliness, organization, and inventory of reagents and consumables.</li>
      <li>Support routine R&amp;D experiments and other molecular biology activities as assigned by the project team.</li>
    </ul>

    <h3>Required Qualifications</h3>
    <ul>
      <li>B.Sc./B.Tech. in Biotechnology, Microbiology, Biochemistry, Molecular Biology, Life Sciences, or a related field.</li>
      <li>M.Sc. candidates currently pursuing their degree are also eligible.</li>
      <li>1–3 years of hands-on laboratory experience in molecular biology, molecular diagnostics R&amp;D, biotechnology, research, or a related laboratory environment.</li>
      <li>Practical experience with blood sample processing and DNA extraction is preferred.</li>
      <li>Hands-on experience with PCR/real-time PCR is strongly preferred.</li>
      <li>Good understanding of basic molecular biology principles.</li>
      <li>Ability to accurately follow experimental protocols and SOPs.</li>
      <li>Strong attention to detail and good laboratory documentation skills.</li>
    </ul>

    <h3>Preferred Technical Experience</h3>
    <p>Experience in one or more of the following will be an advantage:</p>
    <ul>
      <li>DNA extraction from whole blood</li>
      <li>RNA extraction</li>
      <li>PCR and real-time PCR</li>
      <li>Primer and probe handling</li>
      <li>PCR master mix preparation</li>
      <li>Serial dilution and standard preparation</li>
      <li>Assay optimization</li>
      <li>PCR troubleshooting</li>
      <li>Analytical sensitivity and specificity studies</li>
      <li>Repeatability/reproducibility experiments</li>
      <li>Internal and external controls</li>
      <li>DNA quantification</li>
      <li>Gel electrophoresis</li>
      <li>Molecular assay development</li>
      <li>Real-time PCR kit development or validation</li>
    </ul>

    <h3>Candidate Profile</h3>
    <p>The ideal candidate should be:</p>
    <ul>
      <li>Hands-on and laboratory-oriented.</li>
      <li>Comfortable performing repetitive molecular biology experiments with accuracy.</li>
      <li>Detail-oriented and careful with sample and reagent handling.</li>
      <li>Able to maintain clear and complete experimental records.</li>
      <li>Willing to learn new molecular techniques and R&amp;D workflows.</li>
      <li>Comfortable working under the supervision of scientists while independently performing routine laboratory tasks.</li>
      <li>Able to work effectively in a fast-paced R&amp;D environment.</li>
    </ul>

    <h3>Stipend / Compensation</h3>
    <p>Stipend will be provided based on the availability and allotment of project/grant funding. The position is supported through research and development grant funding, and the stipend/compensation will be determined based on the applicable grant provisions, candidate qualifications, and relevant laboratory experience.</p>

    <h3>Note</h3>
    <p>This is an R&D laboratory position focused on molecular assay and real-time PCR kit development, not a routine clinical diagnostic testing role. Candidates with genuine hands-on experience in blood DNA extraction, PCR/qPCR, and molecular biology laboratory workflows will be preferred.</p>
    
    <h3>How to apply</h3>
    <p>Send your resume and a short introduction describing your relevant research or diagnostics experience to
      Delphine Diagnostics.</p>
    <a class="button job-apply-button"
      href="mailto:customerservice@delphinedx.com?subject=Application%20-%20Laboratory%20Technician">Apply by email</a>
  </template>



  <template id="job-rd-scientist">
    <p>Delphine Diagnostics is a New Jersey-based life sciences startup passionate about creating high-quality
      diagnostic products that accelerate effective treatment for patients with infectious diseases.</p>
    <p>The company is advancing a bundled offering that combines a PCR diagnostic panel with an artificial
      intelligence and machine learning interpretation engine. The goal is to identify and recommend the next best
      action for clinical decision-making, helping clinicians support patients at risk of developing sepsis.</p>
    <h3>About the opportunity</h3>
    <p>As a Research and Development Scientist, you will contribute to the scientific work required to develop,
      evaluate, and advance molecular diagnostic products. This role is suited to someone who enjoys hands-on
      laboratory work and collaborating within a focused, growing team.</p>
    <h3>Working environment</h3>
    <ul>
      <li>Mission-driven life sciences startup focused on infectious disease diagnostics</li>
      <li>Cross-functional collaboration with molecular biology, clinical, data, quality, and business teams</li>
      <li>Research and development laboratory based at the Institute for Life Science Entrepreneurship at Kean
        University in Union County, New Jersey</li>
    </ul>
    <h3>How to apply</h3>
    <p>Send your resume and a short introduction describing your relevant research or diagnostics experience to
      Delphine Diagnostics.</p>
    <a class="button job-apply-button"
      href="mailto:customerservice@delphinedx.com?subject=Application%20-%20Research%20and%20Development%20Scientist">Apply by email</a>
  </template>

<?php get_footer(); ?>
