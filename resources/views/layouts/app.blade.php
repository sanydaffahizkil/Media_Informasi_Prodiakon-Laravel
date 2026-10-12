<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodiakon Paroki Santo Bonaventura Pulomas | Media Informasi</title>
    <meta name="description" content="Media Informasi Resmi Paguyuban Prodiakon Gereja Santo Bonaventura Paroki Pulomas Keuskupan Agung Jakarta Periode 2025 - 2028.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Top Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollProgressBar"></div>
    </div>

    <!-- Sticky Navigation Bar -->
    <nav class="main-nav">
        <div class="nav-container">
            <a href="#hero" class="nav-brand">
                <div class="brand-cross-icon">☩</div>
                <div class="brand-text">
                    <span class="brand-title">ST. BONAVENTURA</span>
                    <span class="brand-sub">PRODIAKON PULOMAS</span>
                </div>
            </a>

            <button class="mobile-toggle" id="mobileNavToggle" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <ul class="nav-links" id="navLinks">
                <li><a href="#sambutan" class="nav-link">Sambutan</a></li>
                <li><a href="#makna-vandel" class="nav-link">Makna Vandel</a></li>
                <li><a href="#moto" class="nav-link">Moto</a></li>
                <li><a href="#pelindung" class="nav-link">Pelindung</a></li>
                <li><a href="#pengurus" class="nav-link">Pengurus</a></li>
                <li><a href="#tugas" class="nav-link">Tugas</a></li>
                <li><a href="#sasaran" class="nav-link">Sasaran</a></li>
                <li><a href="#data-prodiakon" class="nav-link btn-nav-action"><i class="bi bi-people-fill me-1"></i> Data Wilayah</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Yield -->
    <main>
        @yield('content')
    </main>

    <!-- Modal Popup Detail Prodiakon -->
    <div class="modal-backdrop" id="detailModal">
        <div class="modal-card">
            <div class="modal-header-luxury">
                <div>
                    <span style="font-size: 0.72rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700; text-transform: uppercase;">Profil Pelayan Altar</span>
                    <h3 id="modalProdiakonName">Nama Prodiakon</h3>
                </div>
                <button type="button" class="modal-close-btn close-modal-trigger" aria-label="Tutup">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-profile-header">
                    <div class="modal-profile-avatar" id="modalProdiakonAvatar">PD</div>
                    <div class="modal-profile-name">
                        <span class="modal-profile-tag" id="modalProdiakonRole">Pelayan Altar</span>
                        <div style="font-size: 0.8rem; color: #16a34a; margin-top: 4px; font-weight: 600;">
                            <i class="bi bi-patch-check-fill"></i> Terdaftar Aktif
                        </div>
                    </div>
                </div>

                <ul class="modal-info-list">
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-geo-alt me-1 text-gold"></i> Wilayah Paroki</span>
                        <span class="modal-info-val" id="modalProdiakonWilayah">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-house-door me-1 text-gold"></i> Lingkungan</span>
                        <span class="modal-info-val" id="modalProdiakonLingkungan">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-calendar-check me-1 text-gold"></i> Periode Masa Bakti</span>
                        <span class="modal-info-val" id="modalProdiakonMasaBakti">2025 - 2028</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-clock me-1 text-gold"></i> Jadwal Pelayanan</span>
                        <span class="modal-info-val" id="modalProdiakonJadwal">-</span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-primary-gold close-modal-trigger" style="padding: 10px 24px; font-size: 0.85rem;">
                    Tutup Detail
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                        <span style="font-size: 1.4rem; color: var(--accent-gold);">☩</span>
                        <h3 style="margin: 0;">Gereja Santo Bonaventura</h3>
                    </div>
                    <p>Paguyuban Prodiakon Paroki Pulomas - Keuskupan Agung Jakarta.</p>
                    <p style="margin-top: 8px;">Mewujudkan pelayanan altar yang kudus, bersatu dalam Ekaristi, dan berbuah dalam kasih pastoral bagi seluruh umat beriman.</p>
                </div>

                <div class="footer-links">
                    <h4>Navigasi Informasi</h4>
                    <ul class="footer-nav">
                        <li><a href="#sambutan"><i class="bi bi-chevron-right me-1 text-gold"></i> Sambutan Romo</a></li>
                        <li><a href="#makna-vandel"><i class="bi bi-chevron-right me-1 text-gold"></i> Makna Lambang Vandel</a></li>
                        <li><a href="#moto"><i class="bi bi-chevron-right me-1 text-gold"></i> Moto 2025 - 2028</a></li>
                        <li><a href="#pelindung"><i class="bi bi-chevron-right me-1 text-gold"></i> Santo Pelindung</a></li>
                        <li><a href="#pengurus"><i class="bi bi-chevron-right me-1 text-gold"></i> Struktur Pengurus</a></li>
                        <li><a href="#data-prodiakon"><i class="bi bi-chevron-right me-1 text-gold"></i> Data Prodiakon Wilayah</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Sekretariat Paroki</h4>
                    <div class="footer-contact-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Jl. Pacuan Kuda No. 1, Pulo Mas, Jakarta Timur 13210</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-telephone-fill"></i>
                        <span>(021) 489-1301</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-globe"></i>
                        <a href="https://stbonaventura.org" target="_blank" rel="noopener" style="color: var(--accent-gold); text-decoration: none;">stbonaventura.org</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Paguyuban Prodiakon Santo Bonaventura Pulomas. Dikembangkan untuk kemuliaan Allah yang lebih besar (AMDG).</p>
            </div>
        </div>
    </footer>

    <!-- Floating Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Kembali ke atas">
        <svg class="progress-ring" width="50" height="50">
            <circle class="progress-ring-bg" stroke="rgba(203, 162, 88, 0.2)" stroke-width="3" fill="transparent" r="20" cx="25" cy="25"/>
            <circle class="progress-ring-indicator" id="progressRingCircle" stroke="var(--accent-gold)" stroke-width="3" stroke-dasharray="125.66" stroke-dashoffset="125.66" fill="transparent" r="20" cx="25" cy="25"/>
        </svg>
        <i class="bi bi-chevron-up ring-arrow"></i>
    </button>

    <!-- Main JavaScript -->
    <script src="/js/main.js"></script>
</body>
</html>
