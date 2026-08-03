const toggle = document.querySelector(".menu-toggle");
const navLinks = document.querySelector("#navLinks");

toggle.addEventListener("click", () => {
  const isOpen = navLinks.classList.toggle("open");
  toggle.setAttribute("aria-expanded", String(isOpen));
});

navLinks.addEventListener("click", (event) => {
  if (event.target.tagName === "A") {
    navLinks.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  }
});

const animateCounters = () => {
  $(".counter").each(function () {
    const $counter = $(this);

    if ($counter.data("counted")) {
      return;
    }

    $counter.data("counted", true);

    const target = Number($counter.data("target"));
    const prefix = $counter.data("prefix") || "";
    const suffix = $counter.data("suffix") || "";

    $({
      value: 0
    }).animate({
      value: target
    }, {
      duration: 1700,
      easing: "swing",
      step(now) {
        $counter.text(prefix + Math.floor(now) + suffix);
      },
      complete() {
        $counter.text(prefix + target + suffix);
      }
    });
  });
};

const statsSection = document.querySelector(".stats");

if ("IntersectionObserver" in window && statsSection) {
  const statsObserver = new IntersectionObserver((entries) => {
    if (entries.some((entry) => entry.isIntersecting)) {
      animateCounters();
      statsObserver.disconnect();
    }
  }, {
    threshold: 0.35
  });

  statsObserver.observe(statsSection);
} else {
  animateCounters();
}

const revealSelectors = [
  ".hero-inner > div",
  ".stats-grid",
  ".section-head",
  ".approach-visual",
  ".capability",
  ".product-card",
  ".portfolio-product-card",
  ".workflow-card",
  ".workflow-infographic",
  ".workflow-steps li",
  ".mission-card",
  ".sepseek-video-frame",
  ".partners-allies h2",
  ".logo-carousel",
  ".cta-box",
  ".about-hero-copy",
  ".about-hero-visual",
  ".about-prose",
  ".purpose-card",
  ".difference-media",
  ".values-list article",
  ".roadmap-card",
  ".team-card",
  ".advisor-card",
  ".contact-intro .section-inner",
  ".contact-detail-card",
  ".contact-panel-heading",
  ".contact-form",
  ".contact-map",
  ".career-hero-copy",
  ".career-hero-visual",
  ".career-value-grid article",
  ".job-card",
  ".career-interest",
  ".blog-hero-copy",
  ".post-card",
  ".article-hero-inner",
  ".article-featured",
  ".article-content",
  ".article-side-card",
  ".article-next .section-inner",
  ".assay-hero-copy",
  ".assay-hero-visual",
  ".assay-overview-grid",
  ".assay-benefit-grid article",
  ".assay-development-figure",
  ".target-grid article",
  ".assay-roadmap-grid",
  ".assay-partner-box",
  ".ai-hero-copy",
  ".ai-hero-visual",
  ".ai-overview-grid",
  ".ai-use-case-grid article",
  ".ai-models-grid",
  ".ai-roadmap-figure",
  ".ai-integration-grid",
  ".ai-partner-box",
  ".ruo-hero-copy",
  ".ruo-hero-visual",
  ".ruo-intro-grid",
  ".ruo-product-nav .section-inner",
  ".ruo-product-grid",
  ".ruo-toggle",
  ".ruo-partner-box",
  ".sepsis-hero-copy",
  ".sepsis-hero-visual",
  ".sepsis-definition-grid",
  ".sepsis-story-block",
  ".sepsis-progression-flow",
  ".sepsis-sign-grid article",
  ".sepsis-platform-copy",
  ".sepsis-signal-panel",
  ".sepsis-mission-photo",
  ".sepsis-mission-copy",
  ".sepsis-risk-grid",
  ".sepsis-response-grid article",
  ".sepsis-prevention-grid",
  ".sepsis-sources-box"
];

const revealItems = [...document.querySelectorAll(revealSelectors.join(","))];

revealItems.forEach((item, index) => {
  item.classList.add("reveal");
  item.style.setProperty("--reveal-delay", `${Math.min(index % 6, 5) * 80}ms`);

  if (item.matches(".approach-visual, .difference-media")) {
    item.classList.add("from-left");
  }

  if (item.matches(".about-hero-visual, .contact-form, .contact-map, .assay-hero-visual, .ai-hero-visual, .ruo-hero-visual, .sepsis-hero-visual")) {
    item.classList.add("from-right");
  }
});

if ("IntersectionObserver" in window) {
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        revealObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.16,
    rootMargin: "0px 0px -8% 0px"
  });

  revealItems.forEach((item) => revealObserver.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add("is-visible"));
}

const productCarousel = document.querySelector(".product-carousel");

if (productCarousel) {
  const productTrack = productCarousel.querySelector(".product-grid");
  const previousButton = productCarousel.querySelector(".product-carousel-prev");
  const nextButton = productCarousel.querySelector(".product-carousel-next");

  const getProductScrollAmount = () => {
    const firstCard = productTrack.querySelector(".product-card");
    const gap = Number.parseFloat(getComputedStyle(productTrack).columnGap) || 0;

    return firstCard ? firstCard.getBoundingClientRect().width + gap : productTrack.clientWidth;
  };

  const updateProductControls = () => {
    const maxScroll = productTrack.scrollWidth - productTrack.clientWidth;
    const hasOverflow = maxScroll > 2;

    previousButton.disabled = !hasOverflow || productTrack.scrollLeft <= 2;
    nextButton.disabled = !hasOverflow || productTrack.scrollLeft >= maxScroll - 2;
  };

  previousButton.addEventListener("click", () => {
    productTrack.scrollBy({
      left: -getProductScrollAmount(),
      behavior: "smooth"
    });
  });

  nextButton.addEventListener("click", () => {
    productTrack.scrollBy({
      left: getProductScrollAmount(),
      behavior: "smooth"
    });
  });

  productTrack.addEventListener("scroll", updateProductControls, {
    passive: true
  });
  window.addEventListener("resize", updateProductControls);
  updateProductControls();
}

document.querySelectorAll("[data-logo-carousel]").forEach((carousel) => {
  const track = carousel.querySelector(".logo-carousel-track");
  const dotsWrap = carousel.querySelector(".logo-carousel-dots");

  if (!track || !dotsWrap) {
    return;
  }

  const getPageCount = () => Math.max(1, Math.ceil(track.scrollWidth / track.clientWidth));

  const setActiveDot = () => {
    const maxScroll = Math.max(1, track.scrollWidth - track.clientWidth);
    const maxIndex = Math.max(0, dotsWrap.children.length - 1);
    const index = Math.round((track.scrollLeft / maxScroll) * maxIndex);

    [...dotsWrap.children].forEach((dot, dotIndex) => {
      const isActive = dotIndex === index;
      dot.classList.toggle("is-active", isActive);
      dot.setAttribute("aria-current", isActive ? "true" : "false");
    });
  };

  const renderDots = () => {
    const pageCount = getPageCount();

    dotsWrap.replaceChildren();

    for (let index = 0; index < pageCount; index += 1) {
      const dot = document.createElement("button");
      dot.className = "logo-carousel-dot";
      dot.type = "button";
      dot.setAttribute("aria-label", `Show logo group ${index + 1}`);
      dot.addEventListener("click", () => {
        track.scrollTo({
          left: index * track.clientWidth,
          behavior: "smooth"
        });
      });
      dotsWrap.append(dot);
    }

    dotsWrap.hidden = pageCount < 2;
    setActiveDot();
  };

  track.addEventListener("scroll", setActiveDot, {
    passive: true
  });
  window.addEventListener("resize", renderDots);
  renderDots();
});

const teamModal = document.querySelector("#teamModal");
const teamModalName = document.querySelector("#teamModalName");
const teamModalRole = document.querySelector("#teamModalRole");
const teamModalImage = document.querySelector("#teamModalImage");
const teamModalDetails = document.querySelector("#teamModalDetails");
const teamModalClose = document.querySelector(".team-modal-close");
let activeTeamTrigger = null;

const closeTeamModal = () => {
  if (teamModal?.open) {
    teamModal.close();
  }
};

document.querySelectorAll("[data-team-member]").forEach((button) => {
  button.addEventListener("click", () => {
    const profile = document.querySelector(`#profile-${button.dataset.teamMember}`);

    if (!teamModal || !profile) {
      return;
    }

    activeTeamTrigger = button;
    teamModalName.textContent = button.dataset.name;
    teamModalRole.textContent = button.dataset.role;
    teamModalImage.src = button.dataset.image;
    teamModalImage.alt = button.dataset.name;
    teamModalDetails.replaceChildren(profile.content.cloneNode(true));
    document.body.classList.add("team-modal-open");
    teamModal.showModal();
  });
});

teamModalClose?.addEventListener("click", closeTeamModal);

teamModal?.addEventListener("click", (event) => {
  if (event.target === teamModal) {
    closeTeamModal();
  }
});

teamModal?.addEventListener("close", () => {
  document.body.classList.remove("team-modal-open");
  activeTeamTrigger?.focus();
});

const jobModal = document.querySelector("#jobModal");
const jobModalTitle = document.querySelector("#jobModalTitle");
const jobModalLocation = document.querySelector("#jobModalLocation");
const jobModalBody = document.querySelector("#jobModalBody");
const jobModalClose = document.querySelector(".job-modal-close");
let activeJobTrigger = null;

const closeJobModal = () => {
  if (jobModal?.open) {
    jobModal.close();
  }
};

document.querySelectorAll("[data-job]").forEach((button) => {
  button.addEventListener("click", () => {
    const description = document.querySelector(`#job-${button.dataset.job}`);

    if (!jobModal || !description) {
      return;
    }

    activeJobTrigger = button;
    jobModalTitle.textContent = button.dataset.title;
    jobModalLocation.textContent = button.dataset.location;
    jobModalBody.replaceChildren(description.content.cloneNode(true));
    document.body.classList.add("job-modal-open");
    jobModal.showModal();
  });
});

jobModalClose?.addEventListener("click", closeJobModal);

jobModal?.addEventListener("click", (event) => {
  if (event.target === jobModal) {
    closeJobModal();
  }
});

jobModal?.addEventListener("close", () => {
  document.body.classList.remove("job-modal-open");
  activeJobTrigger?.focus();
});
