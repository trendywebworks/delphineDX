<?php /* Template Name: Contact Us */ get_header(); ?>

  <main class="contact-main">
    <section class="contact-intro" aria-labelledby="contact-title">
      <div class="section-inner">
        <div class="contact-intro-heading">
          <div>
            <p class="eyebrow">Contact us</p>
            <h1 id="contact-title">Let's start a conversation.</h1>
          </div>
          <p>Whether you are exploring a clinical partnership, laboratory collaboration, investment opportunity, or
            career with Delphine, our team would be happy to hear from you.</p>
        </div>

        <div class="contact-details-list" aria-label="Contact details">
          <a class="contact-detail-card" href="mailto:customerservice@delphinedx.com">
            <span class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M3 5h18v14H3V5Zm2 2v.5l7 5 7-5V7H5Zm14 10V9.9l-7 5-7-5V17h14Z"></path>
              </svg>
            </span>
            <span class="contact-detail-copy">
              <span class="contact-detail-label">Email</span>
              <strong>customerservice@delphinedx.com</strong>
              <span>Send us a message</span>
            </span>
            <span class="contact-detail-arrow" aria-hidden="true">↗</span>
          </a>
          <a class="contact-detail-card" href="tel:+16096690510">
            <span class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path
                  d="M7.1 3h3l1.2 5-2 1.3a15.7 15.7 0 0 0 5.4 5.4l1.3-2 5 1.2v3A4.1 4.1 0 0 1 16.9 21 13.9 13.9 0 0 1 3 7.1 4.1 4.1 0 0 1 7.1 3Zm1.3 2H7.1A2.1 2.1 0 0 0 5 7.1 11.9 11.9 0 0 0 16.9 19a2.1 2.1 0 0 0 2.1-2.1v-1.3l-2-.5-1.6 2.4-.8-.4a17.8 17.8 0 0 1-7.7-7.7l-.4-.8L8.9 7l-.5-2Z">
                </path>
              </svg>
            </span>
            <span class="contact-detail-copy">
              <span class="contact-detail-label">Phone</span>
              <strong>(609) 669-0510</strong>
              <span>Call our team</span>
            </span>
            <span class="contact-detail-arrow" aria-hidden="true">↗</span>
          </a>
          <a class="contact-detail-card"
            href="https://www.google.com/maps/search/?api=1&amp;query=211+Warren+Street+Newark+NJ+07103"
            target="_blank" rel="noopener noreferrer">
            <span class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path
                  d="M12 2a7 7 0 0 1 7 7c0 4.8-5.4 11.2-6.1 12l-.9 1-.9-1C10.4 20.2 5 13.8 5 9a7 7 0 0 1 7-7Zm0 2a5 5 0 0 0-5 5c0 3.2 3.2 7.7 5 10 1.8-2.3 5-6.8 5-10a5 5 0 0 0-5-5Zm0 2.5A2.5 2.5 0 1 1 12 11a2.5 2.5 0 0 1 0-5Zm0 2a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1Z">
                </path>
              </svg>
            </span>
            <span class="contact-detail-copy">
              <span class="contact-detail-label">Address</span>
              <strong>VentureLink, 211 Warren Street</strong>
              <span>Newark, NJ 07103</span>
            </span>
            <span class="contact-detail-arrow" aria-hidden="true">↗</span>
          </a>
        </div>
      </div>
    </section>

    <section class="contact-workspace" aria-label="Contact form and location">
      <div class="section-inner contact-workspace-grid">
        <div class="contact-form-wrap">
          <div class="contact-panel-heading">
            <div>
              <p class="eyebrow">Write to us</p>
              <h2>Send a message</h2>
              <p>Tell us a little about your inquiry and the right member of our team will follow up.</p>
            </div>
          </div>
          <form class="contact-form" id="contact-form" action="mailto:customerservice@delphinedx.com" method="post"
            enctype="text/plain">
            <div class="form-field">
              <label for="name">Name</label>
              <input type="text" id="name" name="Name" autocomplete="name" placeholder="Your full name" required>
            </div>
            <div class="form-field">
              <label for="email">Email</label>
              <input type="email" id="email" name="Email" autocomplete="email" placeholder="you@company.com" required>
            </div>
            <div class="form-field">
              <label for="message">Message</label>
              <textarea id="message" name="Message" rows="6" placeholder="How can we help?" required></textarea>
            </div>
            <button class="button form-submit" type="submit">Send message <span aria-hidden="true">→</span></button>
          </form>
        </div>
        <div class="contact-map">
          <div class="contact-panel-heading">
            <div>
              <p class="eyebrow">Our location</p>
              <h2>Find us in Newark</h2>
              <p>Located at VentureLink, part of New Jersey's active technology and life sciences ecosystem.</p>
            </div>
          </div>
          <div class="contact-map-frame">
            <iframe
              src="https://www.google.com/maps?q=211+Warren+Street,+Newark,+NJ+07103&amp;output=embed"
              title="Map showing Delphine Diagnostics at 211 Warren Street, Newark, New Jersey"
              loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a class="contact-map-link"
              href="https://www.google.com/maps/search/?api=1&amp;query=211+Warren+Street+Newark+NJ+07103"
              target="_blank" rel="noopener noreferrer">
              <span>
                <strong>Delphine Diagnostics Inc.</strong>
                <small>211 Warren Street, Newark, NJ</small>
              </span>
              <span aria-hidden="true">Open map ↗</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>