/**
 * Web Media Informasi Prodiakon Paroki Santo Bonaventura Pulomas
 * Modern Animation & Micro-Interactions Engine
 */

document.addEventListener('DOMContentLoaded', () => {
  // =========================================================================
  // 0. LUXURY SACRED OPENING CURTAIN (DISSOLVE ON ENTRY)
  // =========================================================================
  const welcomeCurtain = document.getElementById('welcomeCurtain');
  if (welcomeCurtain) {
    const dismissCurtain = () => {
      welcomeCurtain.classList.add('hide-curtain');
      setTimeout(() => {
        if (welcomeCurtain.parentNode) {
          welcomeCurtain.parentNode.removeChild(welcomeCurtain);
        }
      }, 850);
    };

    welcomeCurtain.addEventListener('click', dismissCurtain);

    // Automatically dissolve smoothly after initial sacred presentation
    setTimeout(dismissCurtain, 900);
  }

  // =========================================================================
  // 0.1 HERO BACKGROUND SLIDESHOW ENGINE (CROSSFADE & PROGRESS BARS)
  // =========================================================================
  const heroSlider = document.getElementById('heroSlider');
  const heroSlides = heroSlider ? heroSlider.querySelectorAll('.hero-slide') : [];
  const heroDots = document.querySelectorAll('#heroSliderIndicators .slider-dot');
  const heroCaption = document.getElementById('heroSlideCaptionText');
  const heroPrevBtn = document.getElementById('heroPrevSlide');
  const heroNextBtn = document.getElementById('heroNextSlide');
  const heroSec = document.getElementById('hero');

  let activeSlideIdx = 0;
  let heroTimer = null;
  const slideDurationMs = 6000; // 6 seconds per photo
  let progressStart = 0;
  let progressReq = null;

  const switchToSlide = (targetIdx) => {
    if (!heroSlides.length) return;

    // Reset progress bar on all indicator dots
    heroDots.forEach(dot => {
      const fillBar = dot.querySelector('.dot-progress-fill');
      if (fillBar) fillBar.style.width = '0%';
      dot.classList.remove('active');
    });

    // Remove active class from old slide
    heroSlides[activeSlideIdx]?.classList.remove('active');

    // Update target index safely with modulo
    activeSlideIdx = (targetIdx + heroSlides.length) % heroSlides.length;

    // Set active class on new slide
    const currentSlide = heroSlides[activeSlideIdx];
    if (currentSlide) {
      currentSlide.classList.add('active');

      // Update slide caption badge
      if (heroCaption) {
        const newCaption = currentSlide.getAttribute('data-caption') || '';
        heroCaption.style.opacity = '0';
        setTimeout(() => {
          heroCaption.textContent = newCaption;
          heroCaption.style.opacity = '1';
        }, 180);
      }
    }

    // Set active indicator dot
    if (heroDots[activeSlideIdx]) {
      heroDots[activeSlideIdx].classList.add('active');
    }

    triggerProgressFill();
  };

  const triggerProgressFill = () => {
    cancelAnimationFrame(progressReq);
    progressStart = performance.now();

    const frameStep = (now) => {
      const elapsed = now - progressStart;
      const progressPercent = Math.min(100, (elapsed / slideDurationMs) * 100);

      const activeDot = heroDots[activeSlideIdx];
      const fillBar = activeDot?.querySelector('.dot-progress-fill');
      if (fillBar) {
        fillBar.style.width = `${progressPercent}%`;
      }

      if (elapsed < slideDurationMs) {
        progressReq = requestAnimationFrame(frameStep);
      }
    };

    progressReq = requestAnimationFrame(frameStep);
  };

  const startHeroAutoplay = () => {
    stopHeroAutoplay();
    triggerProgressFill();
    heroTimer = setInterval(() => {
      switchToSlide(activeSlideIdx + 1);
    }, slideDurationMs);
  };

  const stopHeroAutoplay = () => {
    if (heroTimer) clearInterval(heroTimer);
    cancelAnimationFrame(progressReq);
  };

  // Attach interactive click on dots
  heroDots.forEach((dot, dotIdx) => {
    dot.addEventListener('click', () => {
      switchToSlide(dotIdx);
      startHeroAutoplay();
    });
  });

  // Next and Previous controls
  heroPrevBtn?.addEventListener('click', () => {
    switchToSlide(activeSlideIdx - 1);
    startHeroAutoplay();
  });

  heroNextBtn?.addEventListener('click', () => {
    switchToSlide(activeSlideIdx + 1);
    startHeroAutoplay();
  });

  if (heroSlides.length > 0) {
    startHeroAutoplay();
  }

  // =========================================================================
  // 1. TOP SCROLL PROGRESS BAR & FLOATING BACK-TO-TOP BUTTON
  // =========================================================================
  const scrollProgressBar = document.getElementById('scrollProgressBar');
  const backToTopBtn = document.getElementById('backToTop');
  const progressRingCircle = document.getElementById('progressRingCircle');
  const circumference = 2 * Math.PI * 20; // ~125.66

  const handleScrollProgress = () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = docHeight > 0 ? (scrollTop / docHeight) : 0;

    // Update top progress bar
    if (scrollProgressBar) {
      scrollProgressBar.style.width = `${Math.min(100, scrollPercent * 100)}%`;
    }

    // Update circular SVG indicator
    if (progressRingCircle) {
      const offset = circumference - (scrollPercent * circumference);
      progressRingCircle.style.strokeDashoffset = offset;
    }

    // Show/hide floating back-to-top button
    if (backToTopBtn) {
      if (scrollTop > 320) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    }
  };

  window.addEventListener('scroll', handleScrollProgress, { passive: true });
  handleScrollProgress();

  // =========================================================================
  backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // Mobile Navigation Drawer Toggle
  const mobileNavToggle = document.getElementById('mobileNavToggle');
  const navLinks = document.getElementById('navLinks');

  if (mobileNavToggle && navLinks) {
    mobileNavToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = navLinks.classList.toggle('mobile-open');
      mobileNavToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      mobileNavToggle.innerHTML = isOpen ? '<i class="bi bi-x-lg"></i>' : '<i class="bi bi-list"></i>';
    });

    // Close mobile nav drawer when clicking any nav link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('mobile-open');
        mobileNavToggle.setAttribute('aria-expanded', 'false');
        mobileNavToggle.innerHTML = '<i class="bi bi-list"></i>';
      });
    });

    // Close when clicking outside
    document.addEventListener('click', (e) => {
      if (!navLinks.contains(e.target) && !mobileNavToggle.contains(e.target)) {
        if (navLinks.classList.contains('mobile-open')) {
          navLinks.classList.remove('mobile-open');
          mobileNavToggle.setAttribute('aria-expanded', 'false');
          mobileNavToggle.innerHTML = '<i class="bi bi-list"></i>';
        }
      }
    });
  }

  // Fast, instant-response navigation for all internal anchor links (#)
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const targetId = anchor.getAttribute('href');
      if (targetId === '#' || !targetId) return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();

        // Exact offset for fixed navbar (74px) + comfortable margin
        const navHeight = 78;
        const targetPosition = Math.max(0, targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight);

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        if (history.pushState) {
          history.pushState(null, null, targetId);
        }
      }
    });
  });

  // =========================================================================
  // MULTI-LAYER HERO PARALLAX ON SCROLL DOWN
  // =========================================================================
  const heroSection = document.getElementById('hero');
  const heroOverlay = heroSection?.querySelector('.hero-bg-overlay');
  const heroContent = heroSection?.querySelector('.hero-content');
  const heroGlow1 = heroSection?.querySelector('.hero-glow-1');
  const heroGlow2 = heroSection?.querySelector('.hero-glow-2');

  let parallaxTicking = false;
  window.addEventListener('scroll', () => {
    if (!parallaxTicking) {
      window.requestAnimationFrame(() => {
        const scrolled = window.pageYOffset;
        if (heroSection && scrolled <= window.innerHeight * 1.2) {
          if (heroSlider) {
            heroSlider.style.transform = `translate3d(0, ${scrolled * 0.28}px, 0)`;
          }
          if (heroOverlay) {
            heroOverlay.style.transform = `translate3d(0, ${scrolled * 0.32}px, 0) scale(1.02)`;
          }
          if (heroContent) {
            const fade = Math.max(0, 1 - (scrolled / (window.innerHeight * 0.82)));
            heroContent.style.transform = `translate3d(0, ${scrolled * 0.18}px, 0)`;
            heroContent.style.opacity = fade;
          }
          if (heroGlow1) {
            heroGlow1.style.transform = `translate3d(0, ${scrolled * 0.15}px, 0)`;
          }
          if (heroGlow2) {
            heroGlow2.style.transform = `translate3d(0, ${-scrolled * 0.08}px, 0)`;
          }
        }
        parallaxTicking = false;
      });
      parallaxTicking = true;
    }
  }, { passive: true });

  // =========================================================================
  // 2. NAVBAR SCROLL EFFECT & SPY
  // =========================================================================
  const navbar = document.querySelector('.main-nav');
  const sections = document.querySelectorAll('section[id]');
  const navItems = document.querySelectorAll('.nav-link[href^="#"]');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }

    // ScrollSpy active link
    let current = '';
    const scrollPos = window.scrollY + 130;

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });

    navItems.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  }, { passive: true });


  // =========================================================================
  // 3. INTERSECTION OBSERVER SCROLL REVEAL (AOS STYLE)
  // =========================================================================
  const revealElements = document.querySelectorAll('[data-reveal]');
  
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const delay = parseInt(entry.target.getAttribute('data-delay'), 10) || 0;
          if (delay > 0) {
            setTimeout(() => {
              entry.target.classList.add('is-revealed');
            }, delay);
          } else {
            entry.target.classList.add('is-revealed');
          }
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.08,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    // Fallback for older browsers
    revealElements.forEach(el => el.classList.add('is-revealed'));
  }

  // =========================================================================
  // 4. ANIMATED STATS NUMBER COUNTERS
  // =========================================================================
  const statCounters = document.querySelectorAll('.stat-counter');
  let statsStarted = false;

  const startStatsCounters = () => {
    if (statsStarted) return;
    statsStarted = true;

    statCounters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
      let count = 0;
      const duration = 1600; // ms
      const startTime = performance.now();

      const updateCounter = (currentTime) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        // EaseOutQuart easing
        const ease = 1 - Math.pow(1 - progress, 4);
        count = Math.floor(ease * target);

        counter.textContent = count;

        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };

      requestAnimationFrame(updateCounter);
    });
  };

  const statsWrapper = document.querySelector('.stats-ribbon-wrapper');
  if (statsWrapper && 'IntersectionObserver' in window) {
    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          startStatsCounters();
          statsObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.25 });

    statsObserver.observe(statsWrapper);
  } else {
    startStatsCounters();
  }

  // =========================================================================
  // 5. DATA WILAYAH TABS SWITCHING
  // =========================================================================
  const wilayahBtns = document.querySelectorAll('.wilayah-nav-btn');
  const wilayahPanels = document.querySelectorAll('.wilayah-panel');

  wilayahBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetKode = btn.getAttribute('data-wilayah');

      // Update active button state
      wilayahBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Reset search if active
      const searchInput = document.getElementById('prodiakonSearchInput');
      if (searchInput && searchInput.value) {
        searchInput.value = '';
        const searchFeedback = document.getElementById('searchFeedback');
        const clearBtn = document.getElementById('clearSearchBtn');
        if (searchFeedback) searchFeedback.style.display = 'none';
        if (clearBtn) clearBtn.style.display = 'none';
        document.querySelectorAll('.prodiakon-card').forEach(c => c.style.display = 'flex');
      }

      // Smooth switch panel with entrance transition
      wilayahPanels.forEach(panel => {
        if (panel.getAttribute('id') === `panel-${targetKode}`) {
          panel.style.display = 'block';
          panel.style.animation = 'none';
          void panel.offsetWidth; // Trigger reflow
          panel.style.animation = 'fadeIn 0.35s ease';
        } else {
          panel.style.display = 'none';
        }
      });
    });
  });

  // =========================================================================
  // 6. INSTANT LIVE SEARCH FOR DATA PRODIAKON
  // =========================================================================
  const searchInput = document.getElementById('prodiakonSearchInput');
  const clearSearchBtn = document.getElementById('clearSearchBtn');
  const searchFeedback = document.getElementById('searchFeedback');
  const allProdiakonCards = document.querySelectorAll('.prodiakon-card');

  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const query = searchInput.value.trim().toLowerCase();

      if (clearSearchBtn) {
        clearSearchBtn.style.display = query.length > 0 ? 'flex' : 'none';
      }

      if (query.length === 0) {
        if (searchFeedback) searchFeedback.style.display = 'none';
        const activeBtn = document.querySelector('.wilayah-nav-btn.active');
        const activeKode = activeBtn ? activeBtn.getAttribute('data-wilayah') : 'wilayah-1';

        wilayahPanels.forEach(p => {
          p.style.display = (p.id === `panel-${activeKode}`) ? 'block' : 'none';
        });
        allProdiakonCards.forEach(c => {
          c.style.display = 'flex';
        });
        return;
      }

      let totalMatches = 0;
      wilayahPanels.forEach(panel => {
        const cardsInPanel = panel.querySelectorAll('.prodiakon-card');
        let panelHasMatch = false;

        cardsInPanel.forEach(card => {
          const name = (card.getAttribute('data-nama') || '').toLowerCase();
          const lingkungan = (card.getAttribute('data-lingkungan') || '').toLowerCase();

          if (name.includes(query) || lingkungan.includes(query)) {
            card.style.display = 'flex';
            panelHasMatch = true;
            totalMatches++;
          } else {
            card.style.display = 'none';
          }
        });

        panel.style.display = panelHasMatch ? 'block' : 'none';
      });

      if (searchFeedback) {
        searchFeedback.style.display = 'inline-block';
        if (totalMatches > 0) {
          searchFeedback.innerHTML = `<i class="bi bi-check-circle-fill text-gold me-1"></i> Ditemukan <strong>${totalMatches}</strong> pelayan altar untuk pencarian "${query}"`;
        } else {
          searchFeedback.innerHTML = `<i class="bi bi-exclamation-circle me-1" style="color: #ef4444;"></i> Tidak ditemukan data untuk kata kunci "${query}"`;
        }
      }
    });

    clearSearchBtn?.addEventListener('click', () => {
      searchInput.value = '';
      searchInput.dispatchEvent(new Event('input'));
      searchInput.focus();
    });
  }

  // =========================================================================
  // 7. MODAL DETAIL PRODIAKON (WITH PHOTO CONTAINER & SACRAMENTAL DETAILS)
  // =========================================================================
  const modalBackdrop = document.getElementById('detailModal');
  const modalCloseBtns = document.querySelectorAll('.close-modal-trigger');
  const detailButtons = document.querySelectorAll('.btn-detail-modal');

  const modalName = document.getElementById('modalProdiakonName');
  const modalNamaVal = document.getElementById('modalProdiakonNamaVal');
  const modalImg = document.getElementById('modalProdiakonImg');
  const modalIstriImg = document.getElementById('modalIstriImg');
  const modalWilayahTag = document.getElementById('modalProdiakonWilayahTag');
  const modalNoTag = document.getElementById('modalProdiakonNoTag');
  const modalWilayah = document.getElementById('modalProdiakonWilayah');
  const modalTempatLahir = document.getElementById('modalProdiakonTempatLahir');
  const modalBaptis = document.getElementById('modalProdiakonBaptis');
  const modalKrisma = document.getElementById('modalProdiakonKrisma');
  const modalIstri = document.getElementById('modalProdiakonIstri');
  const modalTempatLahirIstri = document.getElementById('modalProdiakonTempatLahirIstri');
  const modalBaptisIstri = document.getElementById('modalProdiakonBaptisIstri');
  const modalKrismaIstri = document.getElementById('modalProdiakonKrismaIstri');
  const modalNikah = document.getElementById('modalProdiakonNikah');

  detailButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const nama = btn.getAttribute('data-nama') || '-';
      const noTag = btn.getAttribute('data-no') || 'No. 00';
      const wilayahTag = btn.getAttribute('data-wilayah-tag') || 'Wilayah';
      const foto = btn.getAttribute('data-foto') || '';
      const fotoIstri = btn.getAttribute('data-foto-istri') || '';
      const wilayahNama = btn.getAttribute('data-wilayah-nama') || '-';
      
      // Data Suami
      const tempatLahir = btn.getAttribute('data-tempat-lahir') || '-';
      const namaBaptis = btn.getAttribute('data-nama-baptis') || '-';
      const tempatBaptis = btn.getAttribute('data-tempat-baptis') || '-';
      const tglBaptis = btn.getAttribute('data-tgl-baptis') || '-';
      const namaKrisma = btn.getAttribute('data-nama-krisma') || '-';
      const tempatKrisma = btn.getAttribute('data-tempat-krisma') || '-';
      const tglKrisma = btn.getAttribute('data-tgl-krisma') || '-';
      
      // Data Istri
      const istri = btn.getAttribute('data-istri') || '-';
      const tempatLahirIstri = btn.getAttribute('data-tempat-lahir-istri') || '-';
      const baptisIstri = btn.getAttribute('data-baptis-istri') || '-';
      const krismaIstri = btn.getAttribute('data-krisma-istri') || '-';
      
      // Data Pernikahan
      const nikah = btn.getAttribute('data-nikah') || '-';

      if (modalName) modalName.textContent = nama;
      if (modalNamaVal) modalNamaVal.textContent = nama;
      if (modalNoTag) modalNoTag.textContent = noTag;
      if (modalWilayahTag) modalWilayahTag.textContent = wilayahTag;
      if (modalWilayah) modalWilayah.textContent = wilayahNama;
      if (modalTempatLahir) modalTempatLahir.textContent = tempatLahir;

      // Format Baptis Suami
      let baptisFull = namaBaptis;
      const extraBaptis = [tempatBaptis !== '-' ? tempatBaptis : '', tglBaptis !== '-' ? tglBaptis : ''].filter(Boolean).join(', ');
      if (extraBaptis) {
        baptisFull += ` (${extraBaptis})`;
      }
      if (modalBaptis) modalBaptis.textContent = baptisFull || '-';

      // Format Krisma Suami
      let krismaFull = namaKrisma;
      const extraKrisma = [tempatKrisma !== '-' ? tempatKrisma : '', tglKrisma !== '-' ? tglKrisma : ''].filter(Boolean).join(', ');
      if (extraKrisma) {
        krismaFull += ` (${extraKrisma})`;
      }
      if (modalKrisma) modalKrisma.textContent = krismaFull || '-';

      // Symmetrical Data Istri (Tanpa tanggal lahir)
      if (modalIstri) modalIstri.textContent = istri;
      if (modalTempatLahirIstri) modalTempatLahirIstri.textContent = tempatLahirIstri;
      if (modalBaptisIstri) modalBaptisIstri.textContent = baptisIstri;
      if (modalKrismaIstri) modalKrismaIstri.textContent = krismaIstri;

      // Matrimonial Details (Tetap dibiarkan)
      if (modalNikah) modalNikah.textContent = nikah;

      // Photo Slot Handling Suami (Wadah Foto Suami)
      if (modalImg) {
        modalImg.src = (foto && foto.trim() !== '') ? foto : '/images/default-avatar.svg';
        modalImg.onerror = function() {
          this.src = '/images/default-avatar.svg';
        };
      }

      // Photo Slot Handling Istri (Wadah Foto Istri)
      if (modalIstriImg) {
        modalIstriImg.src = (fotoIstri && fotoIstri.trim() !== '') ? fotoIstri : '/images/default-avatar-wife.svg';
        modalIstriImg.onerror = function() {
          this.src = '/images/default-avatar-wife.svg';
        };
      }

      if (modalBackdrop) {
        modalBackdrop.classList.add('show');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  const closeModal = () => {
    if (modalBackdrop) {
      modalBackdrop.classList.remove('show');
      document.body.style.overflow = '';
    }
  };

  modalCloseBtns.forEach(btn => {
    btn.addEventListener('click', closeModal);
  });

  if (modalBackdrop) {
    modalBackdrop.addEventListener('click', (e) => {
      if (e.target === modalBackdrop) {
        closeModal();
      }
    });
  }

  // =========================================================================
  // 8. QUICK JUMP TO WILAYAH / PETA HANDLER
  // =========================================================================
  const jumpButtons = document.querySelectorAll('[data-target-wilayah]');
  jumpButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetKode = btn.getAttribute('data-target-wilayah');
      const targetBtn = document.querySelector(`.wilayah-nav-btn[data-wilayah="${targetKode}"]`);
      if (targetBtn) {
        targetBtn.click();
        const wilayahSection = document.getElementById('data-prodiakon');
        if (wilayahSection) {
          const yOffset = -70;
          const y = wilayahSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
          window.scrollTo({ top: y, behavior: 'smooth' });
        }
      }
    });
  });

  // =========================================================================
  // 9. MAP LIGHTBOX MODAL & INTERACTIVE PAN, DRAG, PINCH-TO-ZOOM ENGINE
  // =========================================================================
  const mapLightboxModal = document.getElementById('mapLightboxModal');
  const btnOpenMapLightbox = document.getElementById('btnOpenMapLightbox');
  const petaMainFrame = document.getElementById('petaMainFrame');
  const btnCloseMapLightbox = document.getElementById('btnCloseMapLightbox');
  const mapViewport = document.getElementById('mapViewport');
  const mapPanLayer = document.getElementById('mapPanLayer');
  const mapZoomableImg = document.getElementById('mapZoomableImg');
  const mapTouchHint = document.getElementById('mapTouchHint');
  const btnZoomIn = document.getElementById('btnZoomIn');
  const btnZoomOut = document.getElementById('btnZoomOut');
  const btnZoomReset = document.getElementById('btnZoomReset');

  let currentScale = 1;
  let panX = 0;
  let panY = 0;

  let isDragging = false;
  let dragStartX = 0;
  let dragStartY = 0;

  // Touch Pinch Variables
  let initialPinchDistance = 0;
  let initialScaleOnPinch = 1;
  let isPinching = false;
  let lastTouchTime = 0;

  const clampPan = (newX, newY, scale) => {
    if (!mapViewport || scale <= 1) return { x: 0, y: 0 };
    const vp = mapViewport.getBoundingClientRect();
    const contentW = vp.width * scale;
    const contentH = vp.height * scale;

    // Allow generous margin so edge names & boundaries are 100% visible
    const maxX = Math.max(0, (contentW - vp.width) / 2 + 180);
    const maxY = Math.max(0, (contentH - vp.height) / 2 + 180);

    return {
      x: Math.min(Math.max(newX, -maxX), maxX),
      y: Math.min(Math.max(newY, -maxY), maxY)
    };
  };

  const applyMapTransform = (animate = false) => {
    if (!mapPanLayer) return;

    if (currentScale <= 1) {
      panX = 0;
      panY = 0;
    } else {
      const clamped = clampPan(panX, panY, currentScale);
      panX = clamped.x;
      panY = clamped.y;
    }

    if (animate) {
      mapPanLayer.classList.remove('no-transition');
    } else {
      mapPanLayer.classList.add('no-transition');
    }

    mapPanLayer.style.transform = `translate3d(${panX}px, ${panY}px, 0) scale(${currentScale})`;

    if (mapViewport) {
      mapViewport.style.cursor = currentScale > 1 ? (isDragging ? 'grabbing' : 'grab') : 'default';
    }

    // Hide touch hint after first interaction
    if (currentScale > 1 || panX !== 0 || panY !== 0) {
      if (mapTouchHint) mapTouchHint.style.opacity = '0';
    }
  };

  const zoomAtPoint = (targetScale, originX, originY) => {
    const clampedScale = Math.min(Math.max(targetScale, 1), 4.5);
    if (clampedScale === currentScale) return;

    if (!mapViewport) {
      currentScale = clampedScale;
      applyMapTransform(true);
      return;
    }

    const vp = mapViewport.getBoundingClientRect();
    const cx = originX !== undefined ? (originX - vp.left - vp.width / 2) : 0;
    const cy = originY !== undefined ? (originY - vp.top - vp.height / 2) : 0;

    const scaleRatio = clampedScale / currentScale;
    panX = (panX - cx) * scaleRatio + cx;
    panY = (panY - cy) * scaleRatio + cy;
    currentScale = clampedScale;

    applyMapTransform(true);
  };

  const resetMap = () => {
    currentScale = 1;
    panX = 0;
    panY = 0;
    applyMapTransform(true);
    if (mapTouchHint) mapTouchHint.style.opacity = '1';
  };

  // --- MOUSE DRAGGING (Desktop) ---
  if (mapViewport) {
    mapViewport.addEventListener('mousedown', (e) => {
      if (e.button !== 0) return; // only left click
      isDragging = true;
      dragStartX = e.clientX - panX;
      dragStartY = e.clientY - panY;
      mapViewport.classList.add('is-dragging');
      mapPanLayer?.classList.add('no-transition');
    });

    window.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      panX = e.clientX - dragStartX;
      panY = e.clientY - dragStartY;
      applyMapTransform(false);
    });

    window.addEventListener('mouseup', () => {
      if (!isDragging) return;
      isDragging = false;
      mapViewport.classList.remove('is-dragging');
      mapPanLayer?.classList.remove('no-transition');
      applyMapTransform(true);
    });

    // --- MOUSE WHEEL ZOOM (Desktop) ---
    mapViewport.addEventListener('wheel', (e) => {
      e.preventDefault();
      const zoomFactor = e.deltaY < 0 ? 1.25 : 0.8;
      zoomAtPoint(currentScale * zoomFactor, e.clientX, e.clientY);
    }, { passive: false });

    // --- DOUBLE CLICK ZOOM (Desktop) ---
    mapViewport.addEventListener('dblclick', (e) => {
      e.preventDefault();
      if (currentScale > 1.2) {
        resetMap();
      } else {
        zoomAtPoint(2.2, e.clientX, e.clientY);
      }
    });

    // --- TOUCH EVENTS (Mobile & Tablet: 1-finger drag & 2-finger pinch) ---
    mapViewport.addEventListener('touchstart', (e) => {
      const now = Date.now();

      if (e.touches.length === 1) {
        // Check double-tap
        if (now - lastTouchTime < 300) {
          e.preventDefault();
          const t = e.touches[0];
          if (currentScale > 1.2) {
            resetMap();
          } else {
            zoomAtPoint(2.2, t.clientX, t.clientY);
          }
          lastTouchTime = 0;
          return;
        }
        lastTouchTime = now;

        isDragging = true;
        isPinching = false;
        dragStartX = e.touches[0].clientX - panX;
        dragStartY = e.touches[0].clientY - panY;
        mapPanLayer?.classList.add('no-transition');
      } else if (e.touches.length === 2) {
        isDragging = false;
        isPinching = true;
        const dx = e.touches[0].clientX - e.touches[1].clientX;
        const dy = e.touches[0].clientY - e.touches[1].clientY;
        initialPinchDistance = Math.hypot(dx, dy);
        initialScaleOnPinch = currentScale;
        mapPanLayer?.classList.add('no-transition');
      }
    }, { passive: false });

    mapViewport.addEventListener('touchmove', (e) => {
      e.preventDefault(); // prevent browser pull-to-refresh & page scroll
      if (isDragging && e.touches.length === 1) {
        panX = e.touches[0].clientX - dragStartX;
        panY = e.touches[0].clientY - dragStartY;
        applyMapTransform(false);
      } else if (isPinching && e.touches.length === 2) {
        const dx = e.touches[0].clientX - e.touches[1].clientX;
        const dy = e.touches[0].clientY - e.touches[1].clientY;
        const dist = Math.hypot(dx, dy);
        if (initialPinchDistance > 0) {
          const pinchFactor = dist / initialPinchDistance;
          currentScale = Math.min(Math.max(initialScaleOnPinch * pinchFactor, 1), 4.5);
          applyMapTransform(false);
        }
      }
    }, { passive: false });

    mapViewport.addEventListener('touchend', (e) => {
      if (e.touches.length === 0) {
        isDragging = false;
        isPinching = false;
        mapPanLayer?.classList.remove('no-transition');
        applyMapTransform(true);
      } else if (e.touches.length === 1) {
        isPinching = false;
        isDragging = true;
        dragStartX = e.touches[0].clientX - panX;
        dragStartY = e.touches[0].clientY - panY;
      }
    });
  }

  // Button Zoom Handlers
  btnZoomIn?.addEventListener('click', () => zoomAtPoint(currentScale * 1.35));
  btnZoomOut?.addEventListener('click', () => zoomAtPoint(currentScale / 1.35));
  btnZoomReset?.addEventListener('click', resetMap);

  const openMapLightbox = () => {
    if (mapLightboxModal) {
      mapLightboxModal.classList.add('show');
      document.body.style.overflow = 'hidden';
      resetMap();
    }
  };

  const closeMapLightbox = () => {
    if (mapLightboxModal) {
      mapLightboxModal.classList.remove('show');
      document.body.style.overflow = '';
      resetMap();
    }
  };

  petaMainFrame?.addEventListener('click', openMapLightbox);
  btnOpenMapLightbox?.addEventListener('click', openMapLightbox);
  btnCloseMapLightbox?.addEventListener('click', closeMapLightbox);

  mapLightboxModal?.addEventListener('click', (e) => {
    if (e.target === mapLightboxModal) {
      closeMapLightbox();
    }
  });

  // =========================================================================
  // PENGURUS SECTION: TABS & INTERACTION
  // =========================================================================
  const pengurusTabBtns = document.querySelectorAll('.pengurus-tab-btn');
  const pengurusPanes = document.querySelectorAll('.pengurus-pane');

  pengurusTabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetTab = btn.getAttribute('data-tab');

      // Update button active states
      pengurusTabBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      if (targetTab === 'semua') {
        pengurusPanes.forEach(pane => {
          pane.classList.remove('active');
          pane.classList.add('show-all-mode');
          pane.querySelectorAll('[data-reveal]').forEach(el => el.classList.add('is-revealed'));
        });
      } else {
        pengurusPanes.forEach(pane => {
          pane.classList.remove('show-all-mode');
          if (pane.id === `pane-${targetTab}`) {
            pane.classList.add('active');
            pane.querySelectorAll('[data-reveal]').forEach(el => el.classList.add('is-revealed'));
          } else {
            pane.classList.remove('active');
          }
        });
      }
    });
  });

  // Jump from Koordinator Wilayah card to Data Prodiakon section
  const kwLinks = document.querySelectorAll('.kw-action-link[data-wilayah]');
  kwLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetWilayah = link.getAttribute('data-wilayah');
      const targetBtn = document.querySelector(`.wilayah-nav-btn[data-wilayah="${targetWilayah}"]`);
      if (targetBtn) {
        targetBtn.click();
      }
      const dataSection = document.getElementById('data-prodiakon');
      if (dataSection) {
        dataSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // =========================================================================
  // 12. FULLSCREEN PHOTO LIGHTBOX VIEWER
  // =========================================================================
  const photoLightbox = document.getElementById('photoLightboxModal');
  const lightboxImg = document.getElementById('lightboxPhotoImg');
  const lightboxName = document.getElementById('lightboxPhotoName');
  const lightboxWilayahTag = document.getElementById('lightboxPhotoWilayahTag');
  const lightboxNoTag = document.getElementById('lightboxPhotoNoTag');
  const lightboxSub = document.querySelector('.photo-lightbox-sub');
  const closePhotoLightboxBtns = document.querySelectorAll('.close-photo-lightbox');

  const openPhotoLightbox = (imgSrc, name, wilayah, no, roleSub = 'Pelayan Altar • Paroki Santo Bonaventura Pulomas') => {
    if (!photoLightbox || !lightboxImg) return;
    lightboxImg.src = imgSrc || '/images/default-avatar.svg';
    lightboxImg.onerror = function() {
      this.src = '/images/default-avatar.svg';
    };
    if (lightboxName) lightboxName.textContent = name || 'Foto Prodiakon';
    if (lightboxWilayahTag) lightboxWilayahTag.textContent = wilayah || 'Wilayah Paroki';
    if (lightboxNoTag) lightboxNoTag.textContent = no || '';
    if (lightboxSub) {
      lightboxSub.innerHTML = `<i class="bi bi-shield-check text-gold me-1"></i> ${roleSub}`;
    }

    photoLightbox.classList.add('show');
    document.body.style.overflow = 'hidden';
  };

  const closePhotoLightbox = () => {
    if (!photoLightbox) return;
    photoLightbox.classList.remove('show');
    if (!modalBackdrop?.classList.contains('show')) {
      document.body.style.overflow = '';
    }
  };

  // Clicks on prodiakon photo banners in cards
  document.querySelectorAll('.prodiakon-photo-banner-wrap').forEach(wrap => {
    wrap.addEventListener('click', () => {
      const img = wrap.getAttribute('data-zoom-img');
      const name = wrap.getAttribute('data-zoom-nama');
      const wilayah = wrap.getAttribute('data-zoom-wilayah');
      const no = wrap.getAttribute('data-zoom-no');
      openPhotoLightbox(img, name, wilayah, no);
    });
  });

  // Clicks on pimpinan & koordinator wilayah photo slots
  document.querySelectorAll('.photo-zoom-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const img = trigger.getAttribute('data-zoom-img');
      const name = trigger.getAttribute('data-zoom-nama');
      const wilayah = trigger.getAttribute('data-zoom-wilayah');
      const no = trigger.getAttribute('data-zoom-no');
      openPhotoLightbox(img, name, wilayah, no);
    });
  });

  // Zoom button inside detail modal
  const btnZoomModalAction = document.getElementById('btnZoomModalAction');
  const btnZoomWifeAction = document.getElementById('btnZoomWifeAction');
  const modalPhotoTrigger = document.getElementById('modalPhotoTrigger');
  const modalWifePhotoTrigger = document.getElementById('modalWifePhotoTrigger');

  const triggerModalZoom = () => {
    const currentImg = modalImg ? modalImg.src : '/images/default-avatar.svg';
    const currentName = modalName ? modalName.textContent : 'Foto Prodiakon';
    const currentWilayah = modalWilayahTag ? modalWilayahTag.textContent : 'Wilayah Paroki';
    const currentNo = modalNoTag ? modalNoTag.textContent : '';
    openPhotoLightbox(currentImg, currentName, currentWilayah, currentNo, 'Prodiakon (Suami) • Paroki Santo Bonaventura Pulomas');
  };

  const triggerWifeZoom = () => {
    const currentImg = modalIstriImg ? modalIstriImg.src : '/images/default-avatar-wife.svg';
    const currentName = modalIstri ? modalIstri.textContent : 'Foto Istri Prodiakon';
    const currentWilayah = modalWilayahTag ? modalWilayahTag.textContent : 'Wilayah Paroki';
    const currentNo = modalNoTag ? modalNoTag.textContent : '';
    openPhotoLightbox(currentImg, currentName, currentWilayah, currentNo, 'Istri Prodiakon • Paroki Santo Bonaventura Pulomas');
  };

  if (btnZoomModalAction) btnZoomModalAction.addEventListener('click', triggerModalZoom);
  if (modalPhotoTrigger) modalPhotoTrigger.addEventListener('click', triggerModalZoom);
  if (btnZoomWifeAction) btnZoomWifeAction.addEventListener('click', triggerWifeZoom);
  if (modalWifePhotoTrigger) modalWifePhotoTrigger.addEventListener('click', triggerWifeZoom);

  // Close handlers
  closePhotoLightboxBtns.forEach(btn => btn.addEventListener('click', closePhotoLightbox));
  if (photoLightbox) {
    photoLightbox.addEventListener('click', (e) => {
      if (e.target === photoLightbox) closePhotoLightbox();
    });
  }

  // Global ESC Key Listener
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      if (photoLightbox?.classList.contains('show')) {
        closePhotoLightbox();
      } else if (modalBackdrop?.classList.contains('show')) {
        closeModal();
      } else if (mapLightboxModal?.classList.contains('show')) {
        closeMapLightbox();
      }
    }
  });
});
