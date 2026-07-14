<?php /* Template Name: About Us */ get_header(); ?>

  <main>
    <section class="about-hero" aria-labelledby="about-title">
      <div class="about-hero-orb orb-one" aria-hidden="true"></div>
      <div class="about-hero-orb orb-two" aria-hidden="true"></div>
      <div class="section-inner about-hero-grid">
        <div class="about-hero-copy">
          <h1 id="about-title">Science, data, and determination against treatable infection.</h1>
          <p>Delphine Diagnostics is a New Jersey-based healthcare startup developing rapid molecular diagnostics and
            AI/ML-enabled clinical decision support to help clinicians identify sepsis risk earlier and move patients
            toward effective treatment faster.</p>
          <div class="hero-actions">
            <a class="button secondary" href="#team">Meet the team</a>
            <a class="button" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a>
          </div>
        </div>
        <div class="about-hero-visual" aria-label="Delphine Diagnostics team and laboratory innovation">
          <img class="about-hero-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clinical-team.jpeg"
            alt="Clinical professionals collaborating in a hospital">
        </div>
      </div>
    </section>

    <section class="about-intro" id="our-story">
      <div class="section-inner about-intro-grid">
        <div class="section-head">
          <h2>A mission-driven diagnostics company built around time-critical care.</h2>
        </div>
        <div class="about-prose">
          <p>Sepsis is a medical emergency where every hour matters. Yet clinicians often face overlapping symptoms,
            slow culture workflows, and limited information when critical treatment decisions must be made.</p>
          <p>Delphine brings together biomedical science, molecular biology, machine learning, clinical insight, data
            analytics, operations, and commercialization. Our goal is to reduce diagnostic uncertainty by uniting rapid
            pathogen and resistance-marker identification with earlier, explainable risk prediction.</p>
        </div>
      </div>
    </section>

    <section class="purpose-section" aria-label="Vision, mission, and strategic intent">
      <div class="section-inner">
        <div class="purpose-grid">
          <article class="purpose-card purpose-card-featured">
            <span class="purpose-number">01</span>
            <h2>Enhance human healthcare.</h2>
            <p>Develop and supply best-in-class, affordable products for diagnosis and treatment.</p>
          </article>
          <article class="purpose-card">
            <span class="purpose-number">02</span>
            <h2>Speed effective diagnosis and treatment.</h2>
            <p>Deliver reliable diagnostic products and supplemental data insights for patients with infectious
              diseases, guided by affordability, quality, and real-world clinical need.</p>
          </article>
          <article class="purpose-card">
            <span class="purpose-number">03</span>
            <h2>Connect trusted testing with intelligent software.</h2>
            <p>Pair certified molecular testing kits with AI/ML applications that strengthen analysis, diagnostic
              accuracy, and clinical decision support while following global best practices.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="difference-section">
      <div class="section-inner difference-grid">
        <div class="difference-media">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lab-scientist.jpeg" alt="Scientist working in a molecular diagnostics laboratory">
        </div>
        <div>
          <div class="section-head">
            <h2>Rigorous science, practical workflows, measurable impact.</h2>
            <p>Our approach starts with the needs of patients, clinicians, and laboratories, then works backward into
              product design.</p>
          </div>
          <div class="values-list">
            <article>
              <span>01</span>
              <div>
                <h3>Patient-centered</h3>
                <p>We focus on interventions that can improve survival, recovery, and quality of care.</p>
              </div>
            </article>
            <article>
              <span>02</span>
              <div>
                <h3>Clinically grounded</h3>
                <p>Our solutions are shaped around real diagnostic constraints and existing care workflows.</p>
              </div>
            </article>
            <article>
              <span>03</span>
              <div>
                <h3>Accessible by design</h3>
                <p>We aim for reliable, affordable tools that can work with standard clinical laboratory equipment.</p>
              </div>
            </article>
            <article>
              <span>04</span>
              <div>
                <h3>Built for partnership</h3>
                <p>We collaborate with hospitals, laboratories, clinicians, researchers, and commercialization allies.
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="roadmap-section">
      <div class="section-inner">
        <div class="roadmap-heading">
          <div class="section-head">
            <p class="eyebrow">OUR ROADMAP</p>
            <h2>Building a connected healthcare diagnostics enterprise.</h2>
          </div>
          <p>Delphine's long-term direction extends from rapid assays and decision support into connected laboratory services and privacy-conscious health data analytics.</p>
        </div>
        <div class="roadmap-grid">
          <article class="roadmap-card">
            <span>NOW</span>
            <h3>Advance rapid molecular testing</h3>
            <p>Develop SepSeek and RUO assays for pathogen identification, with planned expansion into resistance and additional microbial targets.</p>
          </article>
          <article class="roadmap-card">
            <span>NEXT</span>
            <h3>Embed clinical intelligence</h3>
            <p>Develop Clinsight as an explainable sepsis risk and decision-support experience designed for integration with hospital EHR systems.</p>
          </article>
          <article class="roadmap-card">
            <span>FUTURE</span>
            <h3>Connect labs and health data</h3>
            <p>Establish broader testing and analytics services through certified laboratory networks and secure, regulation- aligned health data infrastructure.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="team-section" id="team">
      <div class="section-inner">
        <div class="team-group">
          <div class="team-group-heading">
            <h3>The Core Team</h3>
          </div>
          <div class="team-grid">
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="andy-bala"
                data-name="Andy (Andiappan) Bala, MTech, MBA" data-role="Chief Executive Officer"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/andy-bala.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/andy-bala.jpg"
                    alt="Andy (Andiappan) Bala"></span>
                <span class="team-card-content">
                  <strong>Andy (Andiappan) Bala, MTech, MBA</strong>
                  <span>Chief Executive Officer</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="ravindran-kumar"
                data-name="Ravindran Kumar, PhD" data-role="Molecular Biologist"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/ravindran-kumar.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/ravindran-kumar.jpg"
                    alt="Ravindran Kumar"></span>
                <span class="team-card-content">
                  <strong>Ravindran Kumar, PhD</strong>
                  <span>Molecular Biologist</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="amy-flynn" data-name="Amy Flynn"
                data-role="Operations, Regulatory, and Quality Officer"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/amy-flynn.webp">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/amy-flynn.webp" alt="Amy Flynn"></span>
                <span class="team-card-content">
                  <strong>Amy Flynn</strong>
                  <span>Operations, Regulatory, and Quality Officer</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="gabriella-sebbag"
                data-name="Gabriella Sebbag" data-role="Laboratory Technician"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/gabriella-sebbag.webp">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/gabriella-sebbag.webp"
                    alt="Gabriella Sebbag"></span>
                <span class="team-card-content">
                  <strong>Gabriella Sebbag</strong>
                  <span>Laboratory Technician</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
          </div>
        </div>

        <div class="team-group">
          <div class="team-group-heading">
            <h3>Clinical Advisory Board</h3>
          </div>
          <div class="team-grid">
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="steven-simpson"
                data-name="Steven Simpson, MD" data-role="Head of Clinical Advisory Board"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/steven-simpson.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/steven-simpson.jpg"
                    alt="Steven Simpson"></span>
                <span class="team-card-content">
                  <strong>Steven Simpson, MD</strong>
                  <span>Head of Clinical Advisory Board</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="himanshu-bhatia"
                data-name="Himanshu Bhatia, MD, MBA" data-role="Chief Medical Advisor"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/himanshu-bhatia.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/himanshu-bhatia.jpg"
                    alt="Himanshu Bhatia"></span>
                <span class="team-card-content">
                  <strong>Himanshu Bhatia, MD, MBA</strong>
                  <span>Chief Medical Advisor</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="george-hseeh"
                data-name="George Hseeh, MD, MBA" data-role="Medical Advisor"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/george-hseeh.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/george-hseeh.jpg" alt="George Hseeh"></span>
                <span class="team-card-content">
                  <strong>George Hseeh, MD, MBA</strong>
                  <span>Medical Advisor</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
          </div>
        </div>

        <div class="team-group">
          <div class="team-group-heading">
            <h3>Advisors &amp; Consultants</h3>
          </div>
          <div class="team-grid">
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="nidhal-bouaynaya"
                data-name="Dr. Nidhal Carla Bouaynaya" data-role="ML &amp; AI Advisor"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/nidhal-bouaynaya.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/nidhal-bouaynaya.jpg"
                    alt="Dr. Nidhal Carla Bouaynaya"></span>
                <span class="team-card-content">
                  <strong>Dr. Nidhal Carla Bouaynaya</strong>
                  <span>ML &amp; AI Advisor</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="ghulam-rasool"
                data-name="Dr. Ghulam Rasool" data-role="ML Technical Consultant, CDSA"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/ghulam-rasool.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/ghulam-rasool.jpg"
                    alt="Dr. Ghulam Rasool"></span>
                <span class="team-card-content">
                  <strong>Dr. Ghulam Rasool</strong>
                  <span>ML Technical Consultant, CDSA</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="raja-duraisamy"
                data-name="Raja Duraisamy, ME" data-role="Chief Data Officer"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/raja-duraisamy.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/raja-duraisamy.jpg"
                    alt="Raja Duraisamy"></span>
                <span class="team-card-content">
                  <strong>Raja Duraisamy, ME</strong>
                  <span>Chief Data Officer</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="alfred-diorio"
                data-name="Alfred W. D'Iorio" data-role="Executive Consultant / CFO"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/alfred-diorio.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/alfred-diorio.jpg"
                    alt="Alfred W. D'Iorio"></span>
                <span class="team-card-content">
                  <strong>Alfred W. D&rsquo;Iorio</strong>
                  <span>Executive Consultant / CFO</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="todd-bailey"
                data-name="Todd Bailey, Ph.D." data-role="Director, Machine Learning"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/todd-bailey.webp">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/todd-bailey.webp" alt="Todd Bailey"></span>
                <span class="team-card-content">
                  <strong>Todd Bailey, Ph.D.</strong>
                  <span>Director, Machine Learning</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
          </div>
        </div>

        <div class="team-group">
          <div class="team-group-heading">
            <h3>Industry Advisors</h3>
          </div>
          <div class="team-grid">
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="monica-smith"
                data-name="Monica C. Smith" data-role="Senior Advisor"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/monica-smith.png">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/monica-smith.png" alt="Monica C. Smith"></span>
                <span class="team-card-content">
                  <strong>Monica C. Smith</strong>
                  <span>Senior Advisor</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
            <article class="team-card">
              <button class="team-card-button" type="button" data-team-member="raj-devalapalli"
                data-name="Raj Devalapalli" data-role="Industry Entrepreneur Advisor"
                data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/raj-devalapalli.jpg">
                <span class="team-photo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/team/raj-devalapalli.jpg"
                    alt="Raj Devalapalli"></span>
                <span class="team-card-content">
                  <strong>Raj Devalapalli</strong>
                  <span>Industry Entrepreneur Advisor</span>
                  <span class="team-card-link">View full profile</span>
                </span>
              </button>
            </article>
          </div>
        </div>
      </div>
    </section>

    <dialog class="team-modal" id="teamModal" aria-labelledby="teamModalName">
      <button class="team-modal-close" type="button" aria-label="Close profile">&times;</button>
      <div class="team-modal-layout">
        <div class="team-modal-photo"><img id="teamModalImage" src="" alt=""></div>
        <div class="team-modal-copy">
          <h2 id="teamModalName"></h2>
          <p class="team-modal-role" id="teamModalRole"></p>
          <div class="team-modal-details" id="teamModalDetails"></div>
        </div>
      </div>
    </dialog>

    <template id="profile-andy-bala">
      <p>A strategic technology leader with expertise in building high-performance global teams, managing outcomes
        that improve customer centricity, and delivering large, complex projects.</p>
      <p>Andy has added significant value to a major healthcare company and startup firms. He has held leadership
        positions in pharmaceutical, technology, and nonprofit organizations to lead strategic initiatives.</p>
      <h3>Education</h3>
      <ul>
        <li>M.Tech, Computer Science and Engineering, Indian Institute of Technology Madras</li>
        <li>MBA, Technology Management, Stevens Institute of Technology</li>
        <li>BE (Honors), Electronics and Communication Engineering, PSG College of Technology</li>
      </ul>
    </template>
    <template id="profile-ravindran-kumar">
      <p>Ravindran Kumar is a highly accomplished life sciences professional with a Ph.D. in Life Science, a master's
        degree in Genetic Engineering, a bachelor's degree in Microbiology, and a diploma in Computational Biology.</p>
      <p>With more than 15 years of hands-on experience in molecular diagnostics, he is recognized for expertise in
        microbiology, molecular biology, genetics, and molecular assay development.</p>
    </template>
    <template id="profile-amy-flynn">
      <p>Amy Flynn is the Founding Partner of CatMa Consulting, a firm focused on enabling leaders and organizations to
        drive growth and transformation. She brings extensive life sciences experience with deep expertise in
        operations, strategy, and organizational transformation.</p>
      <p>She began her career across the product value chain with Johnson &amp; Johnson, Pfizer, and Whatman Bioscience.
        She later held senior leadership roles at Grant Thornton, leading its Global Life Sciences Industry and
        National Life Sciences Operations Transformation Practice.</p>
      <p>Amy is actively involved in mentoring and leadership development, including initiatives focused on women in
        business and leadership.</p>
      <h3>Qualifications</h3>
      <ul>
        <li>Bachelor's degree in Engineering</li>
        <li>MBA, Rutgers University</li>
        <li>Master's in Education, Temple University</li>
      </ul>
    </template>
    <template id="profile-gabriella-sebbag">
      <ul>
        <li>Graduated cum laude from Rutgers University with a BA in Molecular Biology and Biochemistry.</li>
        <li>Experienced in molecular biology research, diagnostic assay development, human sample processing, DNA
          extraction, qPCR, and experimental data analysis.</li>
        <li>Contributed to Delphine's PCR-based sepsis detection assay through laboratory workflows, assay optimization,
          and research documentation.</li>
        <li>Conducted genetics, oncology, and neurobiology research resulting in a peer-reviewed publication and
          multiple research presentations.</li>
      </ul>
    </template>
    <template id="profile-steven-simpson">
      <p>Dr. Steven Simpson is certified by the American Board of Internal Medicine with subcertifications in pulmonary
        disease and critical care medicine. He completed a fellowship at Rush-Presbyterian St. Luke's Medical Center,
        earned his medical degree from the University of Kansas School of Medicine, and completed his residency at the
        University of Kansas Medical Center.</p>
    </template>
    <template id="profile-himanshu-bhatia">
      <p>Himanshu Bhatia has more than twenty years of experience in the research, development, and commercialization
        of medical devices.</p>
      <h3>Education</h3>
      <ul>
        <li>MBA, University of Rochester</li>
        <li>MS, Biochemistry, University of Texas Health Science Center</li>
        <li>MD, BJ Medical College</li>
      </ul>
    </template>
    <template id="profile-george-hseeh">
      <p>George is a professional bringing together his interests in medicine and business. Before pursuing his
        advanced studies, he served as a project manager in academia.</p>
      <h3>Education</h3>
      <ul>
        <li>MD and MBA, Rutgers University</li>
        <li>BA, Johns Hopkins University</li>
      </ul>
    </template>
    <template id="profile-nidhal-bouaynaya">
      <p>Dr. Nidhal Carla Bouaynaya is a Professor of Electrical and Computer Engineering and Director of the Machine
        &amp; Artificial Intelligence and Virtual Reality Center at Rowan University. She leads research in AI and VR
        and helps guide Rowan University's institution-wide AI strategy, interdisciplinary collaboration, ethical AI
        adoption, and innovation.</p>
      <p>She is the faculty lead for the NSF I-Corps Hub Northeast Region, Co-Founder and CTO of MRIMath LLC, and
        Founder of Deep AI Solutions, LLC. She advises Delphine Diagnostics on advanced AI technologies and precision
        healthcare solutions.</p>
    </template>
    <template id="profile-ghulam-rasool">
      <p>Dr. Ghulam Rasool works in the Department of Machine Learning at Moffitt Cancer Center, leading research at
        the intersection of AI and oncology. His work includes multimodal data integration, federated learning, and
        applying large language models to complex medical datasets.</p>
      <p>He is a technical consultant to Delphine, collaborating on CDSA, the Clinical Decision Support Assistant
        machine learning product.</p>
    </template>
    <template id="profile-raja-duraisamy">
      <p>Raja Duraisamy is an accomplished technology leader specializing in IoT, data analytics, and
        telecommunications. He has built centers of excellence and led next-generation product development for global
        markets.</p>
      <p>His experience includes commercializing remote plant-health monitoring for large farms across Asia, Europe,
        and North America, and delivering large telecommunications network rollouts in the APAC region.</p>
      <h3>Education</h3>
      <ul>
        <li>ME, Computer Science, Indian Institute of Science, Bengaluru</li>
      </ul>
    </template>
    <template id="profile-alfred-diorio">
      <p>Alfred W. D'Iorio has served as Executive Consultant and Chief Financial Officer for Delphine Diagnostics
        since November 2021. Previously, he held senior positions in public companies and private-equity portfolio
        companies across business services, retail, and drug manufacturing.</p>
      <p>As CFO at MRI Network, he strengthened business planning, budgeting, financial analysis, legal management, and
        the information needed to prepare the company for sale. At Swiss Farms, he served as President, CEO, and CFO,
        building the infrastructure for regional growth and delivering strong gains in new-product sales and customer
        spending.</p>
      <p>During 20 years with Johnson &amp; Johnson's pharmaceutical division, Al served as Financial Manager, Tax
        Manager, Controller, and General Manager. He led complex pharmaceutical and medical-device manufacturing
        operations, facility expansion, new product introductions, capacity growth, and cost reduction.</p>
      <p>Al holds a BS in Accounting from St. Joseph's University and is skilled in quality management systems and Six
        Sigma methodologies.</p>
    </template>
    <template id="profile-todd-bailey">
      <p>Todd Bailey is a technology R&amp;D leader with deep experience building teams and developing solutions in
        advanced manufacturing, AI/ML, and complex systems engineering. He has led teams focused on data collection,
        model development and application, AI/ML, and MLOps.</p>
      <p>His entrepreneurial background includes founding and contributing to early-stage real-estate investment and AI
        companies, with a focus on strategic planning, operational structure, and early execution.</p>
      <h3>Education</h3>
      <ul>
        <li>Ph.D., Chemical Engineering, University of Texas at Austin</li>
        <li>SB, Chemical Engineering, Massachusetts Institute of Technology</li>
        <li>AS, Engineering Science, Hudson Valley Community College</li>
      </ul>
    </template>
    <template id="profile-monica-smith">
      <p>Monica C. Smith is the CEO and founder of Marketsmith Inc., an award-winning performance marketing agency
        based in Whippany, New Jersey.</p>
      <p>Over more than 25 years, Monica and Marketsmith have delivered results for brands including Shark/Ninja, Tumi,
        Bluemercury, and Lovesac. She has also helped drive creative and go-to-market design for major New Jersey
        behavioral-change campaigns including GetCoveredNJ, ReachNJ, and the 988 Suicide &amp; Crisis Lifeline.</p>
      <p>Her approach combines data and artificial intelligence with human insight, experience, and creativity to
        produce consumer-centered marketing and business results.</p>
      <p>Monica holds a BA in Communication and Media Studies from the University of Mount Saint Vincent.</p>
    </template>
    <template id="profile-raj-devalapalli">
      <p>Raj Devalapalli is an experienced pharmaceutical professional, entrepreneur, and author. His education
        includes BS and MS degrees in Pharmacy, an MS in Industrial Pharmacy from Long Island University, and an MBA in
        Pharmaceutical Studies from Fairleigh Dickinson University. He is also a licensed pharmacist in New Jersey.</p>
      <p>His career has included Lupin Labs, NutriPharm, TimeRx, Penwest, Becton Dickinson, Warner-Lambert, Pfizer,
        RiconPharma, Mirror, and Ingenus. His expertise spans product and process development, scale-up, technology
        transfer, manufacturing, validation, quality, regulatory affairs, and compliance.</p>
      <p>Raj co-founded RiconPharma in 2008, helped acquire MirrorPharma in 2010, and participated in the 2014 merger
        with Ingenus Pharmaceuticals. The business expanded globally across New Jersey, Florida, Switzerland, and
        India.</p>
    </template>

    <section class="cta" id="contact">
      <div class="section-inner">
        <div class="cta-box">
          <h2>Help bring faster, smarter infection diagnostics closer to patients.</h2>
          <p>We welcome conversations with hospitals, laboratories, clinicians, researchers, strategic partners, and
            healthcare organizations working to improve infectious disease outcomes.</p>
          <div class="hero-actions">
            <a class="button" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a>
            <a class="button secondary" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View Products</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?> 
