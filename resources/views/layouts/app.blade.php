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
    <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
    <link rel="icon" type="image/png" href="/images/logo.png">
</head>
<body>
    <!-- Luxury Sacred Opening Curtain -->
    <div class="welcome-curtain" id="welcomeCurtain" onclick="this.classList.add('hide-curtain'); setTimeout(() => this.remove(), 700);" aria-hidden="true">
        <div class="welcome-curtain-glow"></div>
        <div class="welcome-curtain-box">
            <div class="welcome-curtain-logo">
                <img src="/images/logo.png" alt="Logo Paroki Santo Bonaventura">
            </div>
            <div class="welcome-curtain-badge">Selamat Datang di Portal Resmi</div>
            <h2 class="welcome-curtain-title">Gereja Santo Bonaventura</h2>
            <p class="welcome-curtain-sub">Paroki Pulo Mas &bull; Keuskupan Agung Jakarta</p>
            <div class="welcome-curtain-bar">
                <div class="welcome-curtain-progress"></div>
            </div>
        </div>
    </div>

    <!-- Top Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollProgressBar"></div>
    </div>

    <!-- Sticky Navigation Bar -->
    <nav class="main-nav">
        <div class="nav-container">
            <a href="#hero" class="nav-brand">
                <img src="/images/logo.png" alt="Logo Paroki Santo Bonaventura Pulomas" class="brand-logo-img">
                <div class="brand-text">
                    <span class="brand-line-1">Gereja</span>
                    <span class="brand-line-2">Santo Bonaventura</span>
                    <span class="brand-line-3">Paroki Pulo Mas</span>
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

    <!-- Modal Popup Detail Prodiakon (Dengan Wadah Foto & Data Lengkap Excel) -->
    <div class="modal-backdrop" id="detailModal" role="dialog" aria-modal="true" aria-labelledby="modalProdiakonName">
        <div class="modal-card">
            <div class="modal-header-luxury">
                <div>
                    <span style="font-size: 0.72rem; letter-spacing: 0.15em; color: var(--accent-gold); font-weight: 700; text-transform: uppercase;">
                        <i class="bi bi-shield-fill-check me-1"></i> Data Resmi Prodiakon Paroki
                    </span>
                    <h3 id="modalProdiakonName">Nama Prodiakon</h3>
                </div>
                <button type="button" class="modal-close-btn close-modal-trigger" aria-label="Tutup">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Wadah Foto Profil Pasangan: Prodiakon & Istri (Besar & Jelas) -->
                <div class="modal-couple-header">
                    <div class="modal-couple-photos-grid">
                        <!-- Foto Prodiakon (Suami) -->
                        <div class="modal-partner-photo-card">
                            <div class="modal-partner-role-pill">
                                <i class="bi bi-person-fill text-gold"></i> Prodiakon (Suami)
                            </div>
                            <div class="modal-photo-container" id="modalPhotoTrigger" title="Klik untuk melihat foto Prodiakon (HD)" style="cursor: pointer;">
                                <img src="/images/default-avatar.svg" alt="Foto Prodiakon" id="modalProdiakonImg" class="modal-real-photo" onerror="this.src='/images/default-avatar.svg';">
                                <span class="modal-photo-slot-hint"><i class="bi bi-camera"></i> Wadah Foto</span>
                                <div class="modal-photo-zoom-badge"><i class="bi bi-arrows-fullscreen"></i> HD</div>
                            </div>
                            <button type="button" class="btn-zoom-modal-action" id="btnZoomModalAction" title="Perbesar Foto Suami">
                                <i class="bi bi-arrows-fullscreen text-gold me-1"></i> Foto Suami
                            </button>
                        </div>

                        <!-- Foto Istri Prodiakon -->
                        <div class="modal-partner-photo-card">
                            <div class="modal-partner-role-pill">
                                <i class="bi bi-person-heart text-gold"></i> Istri Prodiakon
                            </div>
                            <div class="modal-photo-container" id="modalWifePhotoTrigger" title="Klik untuk melihat foto Istri (HD)" style="cursor: pointer;">
                                <img src="/images/default-avatar-wife.svg" alt="Foto Istri Prodiakon" id="modalIstriImg" class="modal-real-photo" onerror="this.src='/images/default-avatar-wife.svg';">
                                <span class="modal-photo-slot-hint"><i class="bi bi-camera"></i> Wadah Foto</span>
                                <div class="modal-photo-zoom-badge"><i class="bi bi-arrows-fullscreen"></i> HD</div>
                            </div>
                            <button type="button" class="btn-zoom-modal-action" id="btnZoomWifeAction" title="Perbesar Foto Istri">
                                <i class="bi bi-arrows-fullscreen text-gold me-1"></i> Foto Istri
                            </button>
                        </div>
                    </div>

                    <!-- Status Paroki & Tag Wilayah -->
                    <div class="modal-couple-meta-bar">
                        <div class="modal-badge-group">
                            <span class="modal-profile-tag" id="modalProdiakonWilayahTag">Wilayah I</span>
                            <span class="modal-no-tag" id="modalProdiakonNoTag" style="display: none;"></span>
                        </div>
                        <div class="modal-status-active">
                            <i class="bi bi-patch-check-fill text-gold"></i> Terdaftar di Buku Induk Paroki &amp; Reksa Pastoral
                        </div>
                    </div>
                </div>

                <!-- Bagian 1: Data Diri & Sakramen Prodiakon (Suami) -->
                <div class="modal-section-title">
                    <i class="bi bi-person-badge-fill text-gold me-1"></i> Data Diri &amp; Sakramen Prodiakon (Suami)
                </div>
                <ul class="modal-info-list">
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-person-fill me-1 text-gold"></i> Nama Lengkap</span>
                        <span class="modal-info-val" id="modalProdiakonNamaVal">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-geo-alt-fill me-1 text-gold"></i> Tempat Lahir</span>
                        <span class="modal-info-val" id="modalProdiakonTempatLahir">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-droplet-fill me-1 text-gold"></i> Sakramen Baptis</span>
                        <span class="modal-info-val" id="modalProdiakonBaptis">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-fire me-1 text-gold"></i> Sakramen Krisma</span>
                        <span class="modal-info-val" id="modalProdiakonKrisma">-</span>
                    </li>
                </ul>

                <!-- Bagian 2: Data Diri & Sakramen Istri -->
                <div class="modal-section-title mt-3">
                    <i class="bi bi-person-heart text-gold me-1"></i> Data Diri &amp; Sakramen Istri
                </div>
                <ul class="modal-info-list">
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-person-heart me-1 text-gold"></i> Nama Lengkap Istri</span>
                        <span class="modal-info-val" id="modalProdiakonIstri">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-geo-alt-fill me-1 text-gold"></i> Tempat Lahir Istri</span>
                        <span class="modal-info-val" id="modalProdiakonTempatLahirIstri">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-droplet-fill me-1 text-gold"></i> Sakramen Baptis Istri</span>
                        <span class="modal-info-val" id="modalProdiakonBaptisIstri">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-fire me-1 text-gold"></i> Sakramen Krisma Istri</span>
                        <span class="modal-info-val" id="modalProdiakonKrismaIstri">-</span>
                    </li>
                </ul>

                <!-- Bagian 3: Data Sakramen Perkawinan Katolik & Wilayah -->
                <div class="modal-section-title mt-3">
                    <i class="bi bi-heart-fill text-gold me-1"></i> Data Sakramen Perkawinan Katolik &amp; Wilayah
                </div>
                <ul class="modal-info-list">
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-building-check me-1 text-gold"></i> Tempat &amp; Tgl Nikah</span>
                        <span class="modal-info-val" id="modalProdiakonNikah">-</span>
                    </li>
                    <li class="modal-info-row">
                        <span class="modal-info-label"><i class="bi bi-geo me-1 text-gold"></i> Wilayah Paroki</span>
                        <span class="modal-info-val" id="modalProdiakonWilayah">-</span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-primary-gold close-modal-trigger" style="padding: 10px 24px; font-size: 0.85rem;">
                    Tutup Profil
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Lightbox Foto Prodiakon Fullscreen -->
    <div class="modal-backdrop photo-lightbox-backdrop" id="photoLightboxModal" role="dialog" aria-modal="true" aria-labelledby="lightboxPhotoName">
        <div class="photo-lightbox-card">
            <button type="button" class="photo-lightbox-close close-photo-lightbox" aria-label="Tutup Foto">&times;</button>
            <div class="photo-lightbox-img-wrap">
                <img src="/images/default-avatar.svg" id="lightboxPhotoImg" alt="Foto Prodiakon Fullscreen" class="photo-lightbox-img">
            </div>
            <div class="photo-lightbox-caption">
                <div class="photo-lightbox-tags">
                    <span class="photo-lightbox-badge" id="lightboxPhotoWilayahTag">Wilayah I</span>
                    <span class="photo-lightbox-no" id="lightboxPhotoNoTag">No. 01</span>
                </div>
                <h3 class="photo-lightbox-name" id="lightboxPhotoName">Nama Prodiakon</h3>
                <span class="photo-lightbox-sub"><i class="bi bi-shield-check text-gold me-1"></i> Pelayan Altar &bull; Paroki Santo Bonaventura Pulomas</span>
            </div>
        </div>
    </div>
    <div class="modal-backdrop map-lightbox-backdrop" id="mapLightboxModal" role="dialog" aria-modal="true" aria-label="Peta Teritori Wilayah Paroki">
        <div class="map-lightbox-card">
            <div class="map-lightbox-header">
                <div class="map-lightbox-title-wrap">
                    <i class="bi bi-map-fill text-gold me-2"></i>
                    <div>
                        <h3 class="map-lightbox-title">Peta Wilayah Paroki Santo Bonaventura Pulomas (HD)</h3>
                        <span class="map-lightbox-sub">Keuskupan Agung Jakarta &bull; Wilayah I sampai XI</span>
                    </div>
                </div>
                <div class="map-lightbox-tools">
                    <button type="button" class="btn-map-tool" id="btnZoomIn" title="Perbesar"><i class="bi bi-zoom-in"></i></button>
                    <button type="button" class="btn-map-tool" id="btnZoomOut" title="Perkecil"><i class="bi bi-zoom-out"></i></button>
                    <button type="button" class="btn-map-tool" id="btnZoomReset" title="Reset Ukuran"><i class="bi bi-arrows-angle-contract"></i></button>
                    <a href="/images/peta.png" download="Peta-Paroki-Santo-Bonaventura-Pulomas.png" class="btn-map-tool" title="Unduh Peta HD"><i class="bi bi-download"></i></a>
                    <button type="button" class="btn-map-close" id="btnCloseMapLightbox" title="Tutup">&times;</button>
                </div>
            </div>
            <div class="map-lightbox-viewport" id="mapViewport">
                <div class="map-pan-layer" id="mapPanLayer">
                    <picture>
                        <source srcset="/images/peta.webp" type="image/webp">
                        <img src="/images/peta.png" alt="Peta Paroki Pulomas Fullscreen" class="map-zoomable-img" id="mapZoomableImg" draggable="false">
                    </picture>
                </div>
                <div class="map-touch-hint" id="mapTouchHint">
                    <i class="bi bi-arrows-move me-1"></i> Geser/drag untuk menjelajah &bull; Cubit 2 jari (pinch) di HP atau roda mouse untuk zoom
                </div>
            </div>
            <div class="map-lightbox-footer">
                <span><i class="bi bi-info-circle me-1 text-gold"></i> Gunakan tombol zoom di atas atau cubit/geser untuk melihat nama jalan dan batas teritori lingkungan secara mendetail.</span>
            </div>
        </div>
    </div>

    <!-- Bagan Struktur Organisasi Fullscreen Lightbox Modal -->
    <div class="modal-backdrop map-lightbox-backdrop" id="baganLightboxModal" role="dialog" aria-modal="true" aria-label="Bagan Struktur Organisasi">
        <div class="map-lightbox-card">
            <div class="map-lightbox-header">
                <div class="map-lightbox-title-wrap">
                    <i class="bi bi-diagram-3-fill text-gold me-2"></i>
                    <div>
                        <h3 class="map-lightbox-title">Bagan Struktur Organisasi Paguyuban Prodiakon (HD)</h3>
                        <span class="map-lightbox-sub">Gereja Santo Bonaventura Pulomas &bull; Periode 2022 – 2025</span>
                    </div>
                </div>
                <div class="map-lightbox-tools">
                    <button type="button" class="btn-map-tool" id="btnModalBaganZoomIn" title="Perbesar"><i class="bi bi-zoom-in"></i></button>
                    <button type="button" class="btn-map-tool" id="btnModalBaganZoomOut" title="Perkecil"><i class="bi bi-zoom-out"></i></button>
                    <button type="button" class="btn-map-tool" id="btnModalBaganZoomFit" title="Pas Layar / Reset"><i class="bi bi-arrows-angle-contract"></i></button>
                    <button type="button" class="btn-map-close" id="btnCloseBaganLightbox" title="Tutup">&times;</button>
                </div>
            </div>
            <div class="map-lightbox-viewport" id="baganModalViewport">
                <div class="map-pan-layer bagan-modal-pan-layer" id="baganModalPanLayer">
                    <!-- Cloned organogram-tree rendered dynamically here -->
                </div>
                <div class="map-touch-hint" id="baganModalTouchHint">
                    <i class="bi bi-arrows-move me-1"></i> Geser/drag untuk menjelajah &bull; Cubit 2 jari (pinch) di HP atau gunakan tombol zoom
                </div>
            </div>
            <div class="map-lightbox-footer">
                <span><i class="bi bi-info-circle me-1 text-gold"></i> Gunakan tombol zoom di atas atau cubit/geser layar untuk melihat rincian hierarki dan setiap seksi pelayanan.</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 12px;">
                        <img src="/images/logo.png" alt="Logo Gereja Santo Bonaventura" class="footer-logo-img">
                        <div class="brand-text">
                            <span class="brand-line-1">Gereja</span>
                            <span class="brand-line-2">Santo Bonaventura</span>
                            <span class="brand-line-3">Paroki Pulo Mas</span>
                        </div>
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
                <p>&copy; {{ date('Y') }} Made With Love ❤️</p>
            </div>
        </div>
    </footer>

    <!-- Floating Back to Top Button -->
    <button type="button" class="back-to-top" id="backToTop" aria-label="Kembali ke atas">
        <svg class="progress-ring" viewBox="0 0 50 50" aria-hidden="true">
            <circle class="progress-ring-bg" stroke="rgba(203, 162, 88, 0.2)" stroke-width="3" fill="transparent" r="20" cx="25" cy="25"/>
            <circle class="progress-ring-indicator" id="progressRingCircle" stroke="var(--accent-gold)" stroke-width="3" stroke-dasharray="125.66" stroke-dashoffset="125.66" fill="transparent" r="20" cx="25" cy="25"/>
        </svg>
        <i class="bi bi-chevron-up ring-arrow"></i>
    </button>

    <!-- Main JavaScript -->
    <script src="/js/main.js?v={{ time() }}"></script>
</body>
</html>
