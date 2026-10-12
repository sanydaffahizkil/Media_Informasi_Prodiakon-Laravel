/**
 * Main JavaScript for Prodiakon Paroki Santo Bonaventura Pulomas
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Navbar Scroll Effect
  const navbar = document.querySelector('.main-nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // 2. Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileNavToggle');
  const navLinks = document.getElementById('navLinks');
  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('show');
    });

    // Close menu when clicking link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('show');
      });
    });
  }

  // 3. ScrollSpy for Active Nav Link
  const sections = document.querySelectorAll('section[id]');
  const navItems = document.querySelectorAll('.nav-link[href^="#"]');

  window.addEventListener('scroll', () => {
    let current = '';
    const scrollPos = window.scrollY + 120;

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
  });

  // 4. Data Wilayah Selector / Tabs Switching
  const wilayahBtns = document.querySelectorAll('.wilayah-nav-btn');
  const wilayahPanels = document.querySelectorAll('.wilayah-panel');

  wilayahBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetKode = btn.getAttribute('data-wilayah');

      // Update active button
      wilayahBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // Show matching panel
      wilayahPanels.forEach(panel => {
        if (panel.getAttribute('id') === `panel-${targetKode}`) {
          panel.style.display = 'block';
        } else {
          panel.style.display = 'none';
        }
      });
    });
  });

  // 5. Modal Detail Prodiakon
  const modalBackdrop = document.getElementById('detailModal');
  const modalCloseBtns = document.querySelectorAll('.close-modal-trigger');
  const detailButtons = document.querySelectorAll('.btn-detail-modal');

  // Modal elements to fill
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

      // Set avatar initial
      if (modalAvatar) {
        const initials = nama.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase();
        modalAvatar.textContent = initials || 'PD';
      }

      // Show modal
      if (modalBackdrop) {
        modalBackdrop.classList.add('show');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  function closeModal() {
    if (modalBackdrop) {
      modalBackdrop.classList.remove('show');
      document.body.style.overflow = '';
    }
  }

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
