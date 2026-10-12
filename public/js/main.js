/**
 * Web Media Informasi Prodiakon Paroki Santo Bonaventura Pulomas
 * Modern Animation & Micro-Interactions Engine
 */

document.addEventListener('DOMContentLoaded', () => {
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

  backToTopBtn?.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

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

  // Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileNavToggle');
  const navLinks = document.getElementById('navLinks');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('show');
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('show');
      });
    });
  }

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
  // 7. MODAL DETAIL PRODIAKON (WITH ENHANCED POPUP ANIMATION)
  // =========================================================================
  const modalBackdrop = document.getElementById('detailModal');
  const modalCloseBtns = document.querySelectorAll('.close-modal-trigger');
  const detailButtons = document.querySelectorAll('.btn-detail-modal');

  const modalName = document.getElementById('modalProdiakonName');
  const modalAvatar = document.getElementById('modalProdiakonAvatar');
  const modalRole = document.getElementById('modalProdiakonRole');
  const modalWilayah = document.getElementById('modalProdiakonWilayah');
  const modalLingkungan = document.getElementById('modalProdiakonLingkungan');
  const modalMasaBakti = document.getElementById('modalProdiakonMasaBakti');
  const modalJadwal = document.getElementById('modalProdiakonJadwal');

  detailButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const nama = btn.getAttribute('data-nama') || '-';
      const lingkungan = btn.getAttribute('data-lingkungan') || '-';
      const wilayah = btn.getAttribute('data-wilayah-nama') || '-';
      const masaBakti = btn.getAttribute('data-masa-bakti') || '2025 - 2028';
      const tugasKhusus = btn.getAttribute('data-tugas') || 'Pelayan Altar';
      const jadwal = btn.getAttribute('data-jadwal') || 'Sesuai Jadwal Paroki';

      if (modalName) modalName.textContent = nama;
      if (modalRole) modalRole.textContent = tugasKhusus;
      if (modalWilayah) modalWilayah.textContent = wilayah;
      if (modalLingkungan) modalLingkungan.textContent = lingkungan;
      if (modalMasaBakti) modalMasaBakti.textContent = masaBakti;
      if (modalJadwal) modalJadwal.textContent = jadwal;

      if (modalAvatar) {
        const initials = nama.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase();
        modalAvatar.textContent = initials || 'PD';
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

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalBackdrop?.classList.contains('show')) {
      closeModal();
    }
  });
});
