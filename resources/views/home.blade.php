@extends('layouts.app')

@section('content')

    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <section class="hero-section" id="hero">
        <!-- Multi-Slide Full Landscape Widescreen Carousel -->
        <div class="hero-slider" id="heroSlider">
            <div class="hero-slide active" data-index="0" data-caption="Fasad Luar Gereja Santo Bonaventura Pulomas">
                <div class="hero-slide-bg" style="background-image: url('/images/hero-slide-1.jpg');"></div>
            </div>
            <div class="hero-slide" data-index="1" data-caption="Patung Suci Hati Kudus Yesus">
                <div class="hero-slide-bg" style="background-image: url('/images/hero-slide-2.jpg');"></div>
            </div>
            <div class="hero-slide" data-index="2" data-caption="Patung Suci Bunda Maria">
                <div class="hero-slide-bg" style="background-image: url('/images/hero-slide-3.jpg');"></div>
            </div>
        </div>

        <div class="hero-bg-overlay"></div>
        <div class="hero-glow-orb hero-glow-1"></div>
        <div class="hero-glow-orb hero-glow-2"></div>
        <div class="hero-particles"></div>

        <!-- Slider Navigation Arrows -->
        <button class="hero-slider-arrow hero-arrow-prev" id="heroPrevSlide" aria-label="Foto Sebelumnya">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="hero-slider-arrow hero-arrow-next" id="heroNextSlide" aria-label="Foto Berikutnya">
            <i class="bi bi-chevron-right"></i>
        </button>

        <!-- Main Center Hero Content -->
        <div class="hero-content">
            <h1 class="hero-title" data-reveal="fade-up">
                Pelayanan Cinta Kasih &amp; <span class="text-gold-gradient">Pengabdian Altar</span>
            </h1>
            <div class="hero-actions" data-reveal="fade-up" data-delay="150">
                <a href="#data-prodiakon" class="btn-primary-gold btn-pulse">
                    <i class="bi bi-people-fill"></i> Data Prodiakon Wilayah
                </a>
                <a href="#sambutan" class="btn-outline-light">
                    <i class="bi bi-arrow-down-circle"></i> Jelajahi Informasi
                </a>
            </div>
        </div>

        <!-- Floating Slider Footer (Caption Badge & Interactive Indicators) -->
        <div class="hero-slider-footer">
            <div class="hero-slide-badge" id="heroSlideBadge">
                <i class="bi bi-camera-fill text-gold me-1"></i>
                <span id="heroSlideCaptionText">Fasad Luar Gereja Santo Bonaventura Pulomas</span>
            </div>
            <div class="hero-slider-indicators" id="heroSliderIndicators">
                <button class="slider-dot active" data-index="0" aria-label="Foto 1: Fasad Gereja">
                    <span class="dot-num">01</span>
                    <span class="dot-name">Fasad Gereja</span>
                    <div class="dot-progress-track"><div class="dot-progress-fill"></div></div>
                </button>
                <button class="slider-dot" data-index="1" aria-label="Foto 2: Hati Kudus Yesus">
                    <span class="dot-num">02</span>
                    <span class="dot-name">Hati Kudus Yesus</span>
                    <div class="dot-progress-track"><div class="dot-progress-fill"></div></div>
                </button>
                <button class="slider-dot" data-index="2" aria-label="Foto 3: Bunda Maria">
                    <span class="dot-num">03</span>
                    <span class="dot-name">Bunda Maria</span>
                    <div class="dot-progress-track"><div class="dot-progress-fill"></div></div>
                </button>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         STATS COUNTER RIBBON (ANIMATED 4-CARD METRICS)
         ========================================================================= -->
    <div class="stats-ribbon-wrapper" data-reveal="fade-up">
        <div class="container">
            <div class="stats-ribbon-grid">
                <div class="stat-box shimmer-card">
                    <div class="stat-icon-glow"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="stat-number-wrap">
                        <span class="stat-counter" data-target="11">0</span>
                    </div>
                    <div class="stat-label">Wilayah Paroki</div>
                    <div class="stat-sub">Cakupan Pastoral Pulomas</div>
                </div>

                <div class="stat-box shimmer-card">
                    <div class="stat-icon-glow"><i class="bi bi-calendar-check-fill"></i></div>
                    <div class="stat-number-wrap">
                        <span class="stat-text-highlight">2025–2028</span>
                    </div>
                    <div class="stat-label">Masa Pengabdian</div>
                    <div class="stat-sub">Semangat Cinta Kasih Ilahi</div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================================================================
         2. SAMBUTAN ROMO PAROKI
         ========================================================================= -->
    <section class="section" id="sambutan">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-bookmark-heart"></i> Pesan Pastoral</span>
                <h2 class="section-title">SAMBUTAN ROMO PAROKI</h2>
                <p class="section-subtitle">Pesan dan berkat penggembalaan bagi para pelayan altar dan seluruh umat beriman.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="pastoral-grid">
                <div class="pastoral-photo-wrap" data-reveal="fade-right">
                    <div class="pastoral-photo-frame shimmer-card">
                        <img src="/images/romo.png" alt="{{ $content['sambutan_romo']['nama'] }}" loading="lazy">
                    </div>
                    <div class="pastoral-badge-gold">
                        <i class="bi bi-person-badge-fill me-1"></i> Romo Stephanus Royke Djakarya, Pr.
                    </div>
                </div>

                <div class="pastoral-text" data-reveal="fade-left">
                    <div class="pastoral-quote-box">
                        {{ $content['sambutan_romo']['kutipan_singkat'] }}
                    </div>

                    <div class="pastoral-paragraphs">
                        @foreach($content['sambutan_romo']['isi'] as $paragraf)
                            <p>{{ $paragraf }}</p>
                        @endforeach
                    </div>

                    <div class="pastoral-sign">
                        <div class="pastoral-name">{{ $content['sambutan_romo']['nama'] }}</div>
                        <div class="pastoral-title">{{ $content['sambutan_romo']['jabatan'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. MAKNA LAMBANG VANDEL PRODIAKON
         ========================================================================= -->
    <section class="section section-alt" id="makna-vandel">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-award-fill"></i> Lambang Kebanggaan</span>
                <h2 class="section-title">MAKNA LAMBANG VANDEL PRODIAKON</h2>
                <p class="section-subtitle">{{ $content['makna_vandel']['subjudul'] }}</p>
                <div class="divider-gold"></div>
            </div>

            <div class="vandel-grid">
                <div class="vandel-image-card shimmer-card" data-reveal="fade-right">
                    <img src="/images/vandel.png" alt="Vandel Prodiakon Paroki Santo Bonaventura" loading="lazy">
                    <div style="margin-top: 14px; font-size: 0.85rem; color: var(--text-muted); font-style: italic;">
                        Vandel Resmi Paguyuban Prodiakon Santo Bonaventura Pulomas
                    </div>
                </div>

                <div class="vandel-elements-list" data-reveal="fade-left">
                    @foreach($content['makna_vandel']['elemen'] as $index => $elemen)
                        <div class="vandel-item shimmer-card" data-reveal="fade-up" data-delay="{{ $index * 100 }}">
                            <div class="vandel-item-icon">
                                @if($elemen['icon'] === 'bi-plus-lg' || $elemen['icon'] === 'latin-cross')
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle;">
                                        <path d="M10 2h4v6h6v4h-6v10h-4V12H4V8h6V2z"/>
                                    </svg>
                                @else
                                    <i class="bi {{ $elemen['icon'] }}"></i>
                                @endif
                            </div>
                            <div style="flex: 1;">
                                <div style="display: flex; align-items: center; justify-content: space-between; gap: 12px; margin-bottom: 4px;">
                                    <h3 class="vandel-item-title" style="margin-bottom: 0;">{{ $elemen['simbol'] }}</h3>
                                    <span class="vandel-item-num">0{{ $index + 1 }}</span>
                                </div>
                                <p class="vandel-item-desc">{{ $elemen['makna'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. MOTO PRODIAKON 2025 – 2028
         ========================================================================= -->
    <section class="section section-dark" id="moto">
        <div class="container">
            <div class="moto-banner" data-reveal="zoom-in">
                <div class="moto-badge-period">
                    <i class="bi bi-calendar3 me-1"></i> MOTO PRODIAKON {{ $content['moto']['periode'] }}
                </div>
                <h2 class="moto-main-quote">
                    {{ $content['moto']['semboyan'] }}
                </h2>

                <!-- Ayat Emas Kitab Suci -->
                <div class="moto-scripture-card shimmer-card" data-reveal="fade-up">
                    <i class="bi bi-quote scripture-quote-icon"></i>
                    <p class="moto-scripture-verse">“{{ $content['moto']['ayat'] }}”</p>
                    <div class="moto-scripture-source">({{ $content['moto']['sumber_ayat'] }})</div>
                </div>

                <!-- 2 Pilar Utama Semboyan -->
                <div class="moto-pillars-grid">
                    @foreach($content['moto']['pilar'] as $index => $pilar)
                        <div class="pillar-card shimmer-card" data-reveal="fade-up" data-delay="{{ ($index + 1) * 120 }}">
                            <div class="pillar-icon">
                                <i class="bi {{ $pilar['icon'] }}"></i>
                            </div>
                            <h4>{{ $pilar['judul'] }}</h4>
                            <div class="pillar-sub">{{ $pilar['sub'] }}</div>
                            <p>{{ $pilar['keterangan'] }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Renungan & Makna Spiritual Pelayanan -->
                <div class="moto-reflection-card" data-reveal="fade-up" data-delay="300">
                    <div class="moto-reflection-header">
                        <i class="bi bi-book-half text-gold"></i>
                        <span>Renungan &amp; Penghayatan Iman Pelayanan</span>
                    </div>
                    <div class="moto-reflection-body">
                        @foreach($content['moto']['paragraf'] as $paragraf)
                            <p>{{ $paragraf }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. PELINDUNG PRODIAKON: SANTO STEFANUS
         ========================================================================= -->
    <section class="section" id="pelindung">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-shield-fill-check"></i> Teladan Kesucian</span>
                <h2 class="section-title">SANTO STEFANUS</h2>
                <p class="section-subtitle">Pelindung Para Diakon &bull; Diakon Pertama &amp; Martir Pertama Gereja Katolik (Protomartir)</p>
                <div class="divider-gold"></div>
            </div>

            <div class="stefanus-masterpiece-card shimmer-card" data-reveal="fade-up">
                <!-- Left: Sacred Framed Portrait & Identity Info -->
                <div class="stefanus-portrait-col">
                    <div class="stefanus-portrait-frame">
                        <img src="{{ asset('images/stefanus.jpg') }}" alt="Santo Stefanus - Pelindung Prodiakon" class="stefanus-img" loading="lazy">
                        <div class="stefanus-frame-badge">
                            <i class="bi bi-patch-check-fill text-gold"></i> Protomartir
                        </div>
                    </div>
                    
                    <div class="stefanus-identity-card">
                        <h3 class="stefanus-name">{{ $content['pelindung']['nama'] }}</h3>
                        <div class="stefanus-gelar">{!! $content['pelindung']['gelar'] !!}</div>
                        <div class="stefanus-meta-tags">
                            <span class="meta-tag"><i class="bi bi-calendar-event-fill text-gold"></i> Pesta Nama: {{ $content['pelindung']['pesta_nama'] }}</span>
                            <span class="meta-tag"><i class="bi bi-hourglass-split text-gold"></i> Usia: {{ $content['pelindung']['usia_wafat'] }}</span>
                            <span class="meta-tag"><i class="bi bi-geo-alt-fill text-gold"></i> Yerusalem</span>
                        </div>
                    </div>

                    <div class="stefanus-prayer-box">
                        <i class="bi bi-quote quote-icon"></i>
                        <p class="prayer-quote-text">
                            "{{ $content['pelindung']['doa_terakhir'] }}"
                        </p>
                        <div class="prayer-cite">&mdash; Doa Pengampunan Santo Stefanus saat Wafat</div>
                    </div>
                </div>

                <!-- Right: Detailed Story Chapters & Pastoral Exemplar -->
                <div class="stefanus-story-col">
                    <div class="stefanus-story-header">
                        <span class="story-tag"><i class="bi bi-journal-bookmark-fill"></i> Riwayat &amp; Kesaksian Iman</span>
                        <h3 class="story-headline">Kisah Diakon Pertama yang Dipenuhi Roh Kudus</h3>
                        <p class="story-subheadline">
                            Keteladanan pelayanan meja, keberanian iman, dan kebesaran hati dalam mengampuni sesama.
                        </p>
                    </div>

                    <!-- Story Timeline Cards -->
                    <div class="stefanus-timeline">
                        @foreach($content['pelindung']['bab_kisah'] as $bab)
                            <div class="timeline-step-card">
                                <div class="step-badge-num">{{ $bab['nomor'] }}</div>
                                <div class="step-content">
                                    <h4 class="step-title">{{ $bab['judul'] }}</h4>
                                    <p class="step-desc">{{ $bab['uraian'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Teladan Pelayanan Highlight -->
                    <div class="stefanus-reflection-box">
                        <div class="reflection-header">
                            <i class="bi bi-heart-pulse-fill text-gold"></i>
                            <h4>Keteladanan bagi Prodiakon Santo Bonaventura Pulomas</h4>
                        </div>
                        <p class="reflection-text">
                            {{ $content['pelindung']['teladan_pelayanan'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. DAFTAR PENGURUS
         ========================================================================= -->
    <section class="section section-alt" id="pengurus">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-diagram-3-fill"></i> Kepengurusan</span>
                <h2 class="section-title">DAFTAR PENGURUS</h2>
                <p class="section-subtitle">Susunan Kepengurusan Paguyuban Prodiakon Santo Bonaventura, Paroki Pulomas Periode {{ $content['pengurus']['periode'] }}.</p>
                <div class="divider-gold"></div>
                <div class="pengurus-period-badge">
                    <i class="bi bi-patch-check-fill text-gold"></i> Dokumen Resmi Periode {{ $content['pengurus']['periode'] }} &bull; Paroki Pulomas - Jakarta
                </div>
            </div>

            <!-- Tab Switcher Navigation -->
            <div class="pengurus-tabs-wrap" data-reveal="fade-up">
                <div class="pengurus-tabs-nav" role="tablist">
                    <button type="button" class="pengurus-tab-btn active" data-tab="bagan">
                        <i class="bi bi-diagram-3-fill"></i> Bagan Struktur (Hierarki)
                    </button>
                    <button type="button" class="pengurus-tab-btn" data-tab="bidang">
                        <i class="bi bi-grid-3x3-gap-fill"></i> Rincian Bidang & Seksi
                    </button>
                    <button type="button" class="pengurus-tab-btn" data-tab="wilayah">
                        <i class="bi bi-geo-alt-fill"></i> 11 Koordinator Wilayah
                    </button>
                    <button type="button" class="pengurus-tab-btn" data-tab="pembina">
                        <i class="bi bi-shield-check"></i> Pembina & Pemerhati
                    </button>
                    <button type="button" class="pengurus-tab-btn" data-tab="semua">
                        <i class="bi bi-collection-fill"></i> Tampilkan Semua
                    </button>
                </div>
            </div>

            <!-- =========================================================================
                 TAB 1: BAGAN STRUKTUR ORGANISASI (HIERARCHY ORGANOGRAM)
                 ========================================================================= -->
            <div class="pengurus-pane active" id="pane-bagan">
                <div class="bagan-card-box">
                    <div class="bagan-header">
                        <div class="bagan-title-area">
                            <span class="bagan-badge"><i class="bi bi-award-fill"></i> Bagan Struktur Resmi</span>
                            <h3 class="bagan-title">Bagan Struktur Organisasi Paguyuban Prodiakon</h3>
                            <p class="bagan-desc">Gereja Santo Bonaventura, Paroki Pulomas &bull; Periode {{ $content['pengurus']['periode'] }}</p>
                        </div>
                        <div class="bagan-header-actions">
                            <button type="button" class="btn-peta-action btn-bagan-fullscreen" id="btnOpenBaganLightbox" title="Buka Mode Layar Penuh (HD)">
                                <i class="bi bi-arrows-fullscreen"></i> Layar Penuh
                            </button>
                            <div class="bagan-zoom-pill">
                                <button type="button" class="btn-bagan-tool" id="btnInlineZoomIn" title="Perbesar"><i class="bi bi-zoom-in"></i></button>
                                <button type="button" class="btn-bagan-tool" id="btnInlineZoomOut" title="Perkecil"><i class="bi bi-zoom-out"></i></button>
                                <button type="button" class="btn-bagan-tool" id="btnInlineZoomFit" title="Pas Layar / Tampil Penuh"><i class="bi bi-arrows-angle-contract"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Organogram Interactive Viewport -->
                    <div class="organogram-viewport" id="inlineBaganViewport">
                        <div class="organogram-pan-layer" id="inlineBaganPanLayer">
                            <div class="organogram-tree" id="inlineBaganTree">
                            
                            <!-- LEVEL 1: KOORDINATOR -->
                            <div class="org-row org-row-root">
                                <div class="org-node org-node-leader">
                                    <div class="node-badge-top">KOORDINATOR</div>
                                    <div class="node-photo-slot">
                                        <img src="{{ file_exists(public_path($content['pengurus']['pimpinan_harian'][0]['foto'])) ? $content['pengurus']['pimpinan_harian'][0]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['pimpinan_harian'][0]['nama'] }}" class="node-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <h4 class="node-name">{{ $content['pengurus']['pimpinan_harian'][0]['nama'] }}</h4>
                                    <div class="node-title-sub">Koordinator Prodiakon</div>
                                </div>
                            </div>

                            <!-- VERTICAL CONNECTOR STEM -->
                            <div class="org-connector-vert"></div>

                            <!-- LEVEL 2: WA. KOORDINATOR -->
                            <div class="org-row org-row-wa">
                                <div class="org-node org-node-leader">
                                    <div class="node-badge-top">WA. KOORDINATOR</div>
                                    <div class="node-photo-slot">
                                        <img src="{{ file_exists(public_path($content['pengurus']['pimpinan_harian'][1]['foto'])) ? $content['pengurus']['pimpinan_harian'][1]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['pimpinan_harian'][1]['nama'] }}" class="node-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <h4 class="node-name">{{ $content['pengurus']['pimpinan_harian'][1]['nama'] }}</h4>
                                    <div class="node-title-sub">Wakil Koordinator Prodiakon</div>
                                </div>
                            </div>

                            <!-- STEM FROM WA. KOORDINATOR TO PEMBINA DAN PEMERHATI -->
                            <div class="org-connector-vert"></div>

                            <!-- LEVEL: PEMBINA DAN PEMERHATI (DI BAWAH WA. KOORDINATOR) -->
                            <div class="org-row org-row-pembina">
                                <div class="org-node org-node-pembina">
                                    <div class="node-badge-pembina">
                                        <i class="bi bi-shield-shaded"></i> PEMBINA DAN PEMERHATI
                                    </div>
                                    <div class="pembina-names-grid">
                                        @foreach($content['pengurus']['pembina_pemerhati'] as $pbm)
                                            <div class="pembina-chip">
                                                <div class="chip-photo-slot">
                                                    <img src="{{ file_exists(public_path($pbm['foto'])) ? $pbm['foto'] : '/images/default-avatar.svg' }}" alt="{{ $pbm['nama'] }}" class="chip-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                                </div>
                                                <div class="chip-info">
                                                    <span class="chip-name">{{ $pbm['nama'] }}</span>
                                                    <span class="chip-sub">Pembina & Pemerhati</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- STEM FROM PEMBINA TO 6 PILARS -->
                            <div class="org-connector-vert"></div>

                            <!-- HORIZONTAL DISTRIBUTION BUS (6 COLUMNS) -->
                            <div class="org-bus-line"></div>

                            <!-- LEVEL 3: 6 PILAR BIDANG RESMI SESUAI PDF -->
                            <div class="org-row org-row-pillars">
                                
                                <!-- 1. SEKRETARIS -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">SEKRETARIS</div>
                                        <div class="pillar-photo-slot">
                                            <img src="{{ file_exists(public_path($content['pengurus']['bidang'][0]['foto'])) ? $content['pengurus']['bidang'][0]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][0]['koordinator'] }}" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][0]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Administrasi, Dokumentasi & Inventaris</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people-fill"></i> 3 Seksi Pendukung</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2. BENDAHARA -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">BENDAHARA</div>
                                        <div class="pillar-photo-slot">
                                            <img src="{{ file_exists(public_path($content['pengurus']['bidang'][1]['foto'])) ? $content['pengurus']['bidang'][1]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][1]['koordinator'] }}" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][1]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Keuangan & Kas Pelayanan</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-wallet2"></i> Pengelolaan Kas</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3. LITURGI DAN TATA GERAK -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">LITURGI & TATA GERAK</div>
                                        <div class="pillar-photo-slot">
                                            <img src="{{ file_exists(public_path($content['pengurus']['bidang'][2]['foto'])) ? $content['pengurus']['bidang'][2]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][2]['koordinator'] }}" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][2]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Rubrik & Tata Gerak Altar</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people-fill"></i> 2 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4. PEMBINAAN IMAN & ROHANI -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">PEMBINAAN ROHANI</div>
                                        <div class="pillar-photo-slot">
                                            <img src="{{ file_exists(public_path($content['pengurus']['bidang'][3]['foto'])) ? $content['pengurus']['bidang'][3]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][3]['koordinator'] }}" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][3]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Pembinaan Iman & Rohani</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people-fill"></i> 2 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5. KEGIATAN DAN KEPANITIAAN -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">KEGIATAN & PANITIA</div>
                                        <div class="pillar-photo-slot">
                                            <img src="{{ file_exists(public_path($content['pengurus']['bidang'][4]['foto'])) ? $content['pengurus']['bidang'][4]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][4]['koordinator'] }}" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][4]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Acara & Kepanitiaan</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people-fill"></i> 3 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6. KOORDINATOR WILAYAH -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">KOORDINATOR WILAYAH</div>
                                        <div class="pillar-photo-slot">
                                            <img src="/images/pengurus/koor-wilayah.jpg" alt="Koordinator Wilayah" class="pillar-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <h5 class="pillar-name">Koordinator Wilayah</h5>
                                        <div class="pillar-sub">Membawahi Wilayah 1 s/d 11</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-diagram-3-fill"></i> 11 Wilayah Teritorial</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>
                        <div class="bagan-touch-hint" id="inlineBaganTouchHint">
                            <i class="bi bi-arrows-move me-1"></i> Geser & zoom untuk melihat detail bagan
                        </div>
                    </div>

                    <div class="bagan-footer-bar">
                        <div class="bagan-legend">
                            <span class="legend-dot"></span> Struktur Garis Komando & Koordinasi Pelayanan
                        </div>
                        <div class="bagan-footer-actions">
                            <button type="button" class="btn-bagan-link" id="btnOpenBaganLightboxFooter">
                                <i class="bi bi-arrows-fullscreen text-gold me-1"></i> Buka Layar Penuh (Zoom & Geser Interaktif)
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================================================
                 TAB 2: RINCIAN BIDANG & SEKSI (DETAIL CARDS SESUAI PDF RESMI)
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-bidang">
                
                <!-- Pimpinan Harian Showcase -->
                <div class="pimpinan-showcase-grid">
                    @foreach($content['pengurus']['pimpinan_harian'] as $ph)
                        <div class="pimpinan-card shimmer-card">
                            <div class="pimpinan-card-top">
                                <span class="pimpinan-badge"><i class="bi {{ $ph['icon'] }}"></i> {{ $ph['badge'] }}</span>
                                <div class="pimpinan-photo-slot photo-zoom-trigger"
                                     data-zoom-img="{{ file_exists(public_path($ph['foto'])) ? $ph['foto'] : '/images/default-avatar.svg' }}"
                                     data-zoom-nama="{{ $ph['nama'] }}"
                                     data-zoom-wilayah="Pimpinan Harian Prodiakon"
                                     data-zoom-no="{{ $ph['jabatan'] }}"
                                     title="Klik untuk melihat foto ukuran penuh"
                                     style="cursor: pointer;">
                                    <img src="{{ file_exists(public_path($ph['foto'])) ? $ph['foto'] : '/images/default-avatar.svg' }}" alt="{{ $ph['nama'] }}" class="pimpinan-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                </div>
                            </div>
                            <h3 class="pimpinan-name">{{ $ph['nama'] }}</h3>
                            <p class="pimpinan-role">{{ $ph['jabatan'] }}</p>
                            <div class="pimpinan-divider"></div>
                            <div class="pimpinan-desc">
                                Memimpin, mengkoordinir, dan mengayomi seluruh pelayanan liturgis serta karya pastoral Prodiakon Paroki Santo Bonaventura Pulomas Periode {{ $content['pengurus']['periode'] }}.
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- 5 Bidang Detail Cards (Sesuai PDF) -->
                <div class="bidang-cards-grid">
                    
                    <!-- 1. SEKRETARIAT -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-file-earmark-text-fill"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Sekretariat</span>
                                <h4 class="bidang-box-title">{{ $content['pengurus']['bidang'][0]['nama_bidang'] }}</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <div class="bidang-koor-photo-slot photo-zoom-trigger cursor-pointer"
                                 data-zoom-img="{{ file_exists(public_path($content['pengurus']['bidang'][0]['foto'])) ? $content['pengurus']['bidang'][0]['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $content['pengurus']['bidang'][0]['koordinator'] }}"
                                 data-zoom-wilayah="Bidang {{ $content['pengurus']['bidang'][0]['nama_bidang'] }}"
                                 data-zoom-no="{{ $content['pengurus']['bidang'][0]['jabatan'] }}"
                                 title="Klik untuk perbesar foto">
                                <img src="{{ file_exists(public_path($content['pengurus']['bidang'][0]['foto'])) ? $content['pengurus']['bidang'][0]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][0]['koordinator'] }}" class="bidang-koor-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <div class="bidang-koor-info">
                                <span class="koor-label">{{ $content['pengurus']['bidang'][0]['jabatan'] }}:</span>
                                <h5 class="koor-name">{{ $content['pengurus']['bidang'][0]['koordinator'] }}</h5>
                            </div>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][0]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <div class="subseksi-photo-slot photo-zoom-trigger cursor-pointer"
                                         data-zoom-img="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}"
                                         data-zoom-nama="{{ $agt['nama'] }}"
                                         data-zoom-wilayah="Bidang {{ $content['pengurus']['bidang'][0]['nama_bidang'] }}"
                                         data-zoom-no="{{ $agt['peran'] }}"
                                         title="Klik untuk perbesar foto">
                                        <img src="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}" alt="{{ $agt['nama'] }}" class="subseksi-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <div class="subseksi-text">
                                        <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                        <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 2. BENDAHARA -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Keuangan</span>
                                <h4 class="bidang-box-title">{{ $content['pengurus']['bidang'][1]['nama_bidang'] }}</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <div class="bidang-koor-photo-slot photo-zoom-trigger cursor-pointer"
                                 data-zoom-img="{{ file_exists(public_path($content['pengurus']['bidang'][1]['foto'])) ? $content['pengurus']['bidang'][1]['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $content['pengurus']['bidang'][1]['koordinator'] }}"
                                 data-zoom-wilayah="Bidang {{ $content['pengurus']['bidang'][1]['nama_bidang'] }}"
                                 data-zoom-no="{{ $content['pengurus']['bidang'][1]['jabatan'] }}"
                                 title="Klik untuk perbesar foto">
                                <img src="{{ file_exists(public_path($content['pengurus']['bidang'][1]['foto'])) ? $content['pengurus']['bidang'][1]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][1]['koordinator'] }}" class="bidang-koor-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <div class="bidang-koor-info">
                                <span class="koor-label">{{ $content['pengurus']['bidang'][1]['jabatan'] }}:</span>
                                <h5 class="koor-name">{{ $content['pengurus']['bidang'][1]['koordinator'] }}</h5>
                            </div>
                        </div>
                        @if(!empty($content['pengurus']['bidang'][1]['anggota']) && count($content['pengurus']['bidang'][1]['anggota']) > 0)
                            <div class="bidang-subseksi-list">
                                <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                                @foreach($content['pengurus']['bidang'][1]['anggota'] as $agt)
                                    <div class="subseksi-item">
                                        <div class="subseksi-photo-slot photo-zoom-trigger cursor-pointer"
                                             data-zoom-img="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}"
                                             data-zoom-nama="{{ $agt['nama'] }}"
                                             data-zoom-wilayah="Bidang {{ $content['pengurus']['bidang'][1]['nama_bidang'] }}"
                                             data-zoom-no="{{ $agt['peran'] }}"
                                             title="Klik untuk perbesar foto">
                                            <img src="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}" alt="{{ $agt['nama'] }}" class="subseksi-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                        </div>
                                        <div class="subseksi-text">
                                            <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                            <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- 3. LITURGI DAN TATA GERAK -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Liturgis Altar</span>
                                <h4 class="bidang-box-title">{{ $content['pengurus']['bidang'][2]['nama_bidang'] }}</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <div class="bidang-koor-photo-slot photo-zoom-trigger cursor-pointer"
                                 data-zoom-img="{{ file_exists(public_path($content['pengurus']['bidang'][2]['foto'])) ? $content['pengurus']['bidang'][2]['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $content['pengurus']['bidang'][2]['koordinator'] }}"
                                 data-zoom-wilayah="{{ $content['pengurus']['bidang'][2]['nama_bidang'] }}"
                                 data-zoom-no="{{ $content['pengurus']['bidang'][2]['jabatan'] }}"
                                 title="Klik untuk perbesar foto">
                                <img src="{{ file_exists(public_path($content['pengurus']['bidang'][2]['foto'])) ? $content['pengurus']['bidang'][2]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][2]['koordinator'] }}" class="bidang-koor-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <div class="bidang-koor-info">
                                <span class="koor-label">{{ $content['pengurus']['bidang'][2]['jabatan'] }}:</span>
                                <h5 class="koor-name">{{ $content['pengurus']['bidang'][2]['koordinator'] }}</h5>
                            </div>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][2]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <div class="subseksi-photo-slot photo-zoom-trigger cursor-pointer"
                                         data-zoom-img="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}"
                                         data-zoom-nama="{{ $agt['nama'] }}"
                                         data-zoom-wilayah="{{ $content['pengurus']['bidang'][2]['nama_bidang'] }}"
                                         data-zoom-no="{{ $agt['peran'] }}"
                                         title="Klik untuk perbesar foto">
                                        <img src="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}" alt="{{ $agt['nama'] }}" class="subseksi-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <div class="subseksi-text">
                                        <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                        <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 4. PEMBINAAN IMAN DAN PENGEMBANGAN ROHANI -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-book-half"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Spiritualitas</span>
                                <h4 class="bidang-box-title">{{ $content['pengurus']['bidang'][3]['nama_bidang'] }}</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <div class="bidang-koor-photo-slot photo-zoom-trigger cursor-pointer"
                                 data-zoom-img="{{ file_exists(public_path($content['pengurus']['bidang'][3]['foto'])) ? $content['pengurus']['bidang'][3]['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $content['pengurus']['bidang'][3]['koordinator'] }}"
                                 data-zoom-wilayah="{{ $content['pengurus']['bidang'][3]['nama_bidang'] }}"
                                 data-zoom-no="{{ $content['pengurus']['bidang'][3]['jabatan'] }}"
                                 title="Klik untuk perbesar foto">
                                <img src="{{ file_exists(public_path($content['pengurus']['bidang'][3]['foto'])) ? $content['pengurus']['bidang'][3]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][3]['koordinator'] }}" class="bidang-koor-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <div class="bidang-koor-info">
                                <span class="koor-label">{{ $content['pengurus']['bidang'][3]['jabatan'] }}:</span>
                                <h5 class="koor-name">{{ $content['pengurus']['bidang'][3]['koordinator'] }}</h5>
                            </div>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][3]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <div class="subseksi-photo-slot photo-zoom-trigger cursor-pointer"
                                         data-zoom-img="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}"
                                         data-zoom-nama="{{ $agt['nama'] }}"
                                         data-zoom-wilayah="{{ $content['pengurus']['bidang'][3]['nama_bidang'] }}"
                                         data-zoom-no="{{ $agt['peran'] }}"
                                         title="Klik untuk perbesar foto">
                                        <img src="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}" alt="{{ $agt['nama'] }}" class="subseksi-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <div class="subseksi-text">
                                        <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                        <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 5. KEGIATAN DAN KEPANITIAAN -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-calendar-event-fill"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Acara & Guyub</span>
                                <h4 class="bidang-box-title">{{ $content['pengurus']['bidang'][4]['nama_bidang'] }}</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <div class="bidang-koor-photo-slot photo-zoom-trigger cursor-pointer"
                                 data-zoom-img="{{ file_exists(public_path($content['pengurus']['bidang'][4]['foto'])) ? $content['pengurus']['bidang'][4]['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $content['pengurus']['bidang'][4]['koordinator'] }}"
                                 data-zoom-wilayah="{{ $content['pengurus']['bidang'][4]['nama_bidang'] }}"
                                 data-zoom-no="{{ $content['pengurus']['bidang'][4]['jabatan'] }}"
                                 title="Klik untuk perbesar foto">
                                <img src="{{ file_exists(public_path($content['pengurus']['bidang'][4]['foto'])) ? $content['pengurus']['bidang'][4]['foto'] : '/images/default-avatar.svg' }}" alt="{{ $content['pengurus']['bidang'][4]['koordinator'] }}" class="bidang-koor-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <div class="bidang-koor-info">
                                <span class="koor-label">{{ $content['pengurus']['bidang'][4]['jabatan'] }}:</span>
                                <h5 class="koor-name">{{ $content['pengurus']['bidang'][4]['koordinator'] }}</h5>
                            </div>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][4]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <div class="subseksi-photo-slot photo-zoom-trigger cursor-pointer"
                                         data-zoom-img="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}"
                                         data-zoom-nama="{{ $agt['nama'] }}"
                                         data-zoom-wilayah="{{ $content['pengurus']['bidang'][4]['nama_bidang'] }}"
                                         data-zoom-no="{{ $agt['peran'] }}"
                                         title="Klik untuk perbesar foto">
                                        <img src="{{ file_exists(public_path($agt['foto'])) ? $agt['foto'] : '/images/default-avatar.svg' }}" alt="{{ $agt['nama'] }}" class="subseksi-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                    </div>
                                    <div class="subseksi-text">
                                        <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                        <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <!-- =========================================================================
                 TAB 3: 11 KOORDINATOR WILAYAH (SESUAI PDF RESMI)
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-wilayah">
                <div class="koor-wilayah-intro">
                    <div class="intro-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h4 style="color: var(--primary-navy); margin-bottom: 4px;">Koordinator Wilayah 1 sampai 11</h4>
                        <p style="color: var(--text-muted); font-size: 0.92rem; margin: 0;">Para pelayan pastoral yang mengkoordinir penugasan liturgis dan pelayanan orang sakit di 11 Wilayah Paroki Santo Bonaventura Pulomas.</p>
                    </div>
                </div>

                <div class="koor-wilayah-grid">
                    @foreach($content['pengurus']['koordinator_wilayah'] as $kw)
                        <div class="koor-wilayah-card shimmer-card">
                            <div class="kw-header">
                                <span class="kw-badge">{{ $kw['wilayah'] }}</span>
                                <span class="kw-role-pill"><i class="bi bi-person-badge-fill me-1"></i> Koordinator</span>
                            </div>
                            <div class="kw-photo-slot photo-zoom-trigger"
                                 data-zoom-img="{{ file_exists(public_path($kw['foto'])) ? $kw['foto'] : '/images/default-avatar.svg' }}"
                                 data-zoom-nama="{{ $kw['nama'] }}"
                                 data-zoom-wilayah="{{ $kw['wilayah'] }}"
                                 data-zoom-no="{{ $kw['peran'] }}"
                                 title="Klik untuk melihat foto ukuran penuh"
                                 style="cursor: pointer;">
                                <img src="{{ file_exists(public_path($kw['foto'])) ? $kw['foto'] : '/images/default-avatar.svg' }}" alt="{{ $kw['nama'] }}" class="kw-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                            </div>
                            <h4 class="kw-name">{{ $kw['nama'] }}</h4>
                            <div class="kw-role">{{ $kw['peran'] }}</div>
                            <a href="#data-prodiakon" class="kw-action-link" data-wilayah="{{ $kw['kode'] }}">
                                <span>Lihat Data Wilayah</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- =========================================================================
                 TAB 4: TIM PEMBINA & PEMERHATI
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-pembina">
                <!-- Tim Pembina dan Pemerhati Showcase (Foto Besar & Proporsional) -->
                <div class="pembina-section-wrap">
                    <div class="pembina-section-header">
                        <div class="pembina-header-icon"><i class="bi bi-people-fill"></i></div>
                        <div>
                            <h4 class="pembina-section-title">Tim Pembina dan Pemerhati</h4>
                            <span class="pembina-section-sub">Pendampingan Pastoral Paguyuban Periode {{ $content['pengurus']['periode'] }}</span>
                        </div>
                    </div>

                    <div class="pembina-cards-grid">
                        @foreach($content['pengurus']['pembina_pemerhati'] as $pbm)
                            <div class="pembina-card shimmer-card">
                                <div class="pembina-badge-row">
                                    <span class="pembina-card-badge"><i class="bi bi-shield-check"></i> Pembina & Pemerhati</span>
                                </div>
                                <div class="pembina-photo-slot photo-zoom-trigger"
                                     data-zoom-img="{{ file_exists(public_path($pbm['foto'])) ? $pbm['foto'] : '/images/default-avatar.svg' }}"
                                     data-zoom-nama="{{ $pbm['nama'] }}"
                                     data-zoom-wilayah="Tim Pembina & Pemerhati"
                                     data-zoom-no="{{ $pbm['jabatan'] }}"
                                     title="Klik untuk melihat foto ukuran penuh"
                                     style="cursor: pointer;">
                                    <img src="{{ file_exists(public_path($pbm['foto'])) ? $pbm['foto'] : '/images/default-avatar.svg' }}" alt="{{ $pbm['nama'] }}" class="pembina-photo-img" onerror="this.src='/images/default-avatar.svg';" loading="lazy">
                                </div>
                                <h4 class="pembina-card-name">{{ $pbm['nama'] }}</h4>
                                <div class="pembina-card-role">{{ $pbm['jabatan'] }}</div>
                                <div class="pembina-card-divider"></div>
                                <div class="pembina-card-desc">
                                    Pendampingan pastoral serta pembinaan kerohanian bagi seluruh pelayan altar Paguyuban Prodiakon Santo Bonaventura.
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         7. DESKRIPSI TUGAS PRODIAKON PAROKI
         ========================================================================= -->
    <section class="section" id="tugas">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-briefcase-fill"></i> Uraian Amanah Pelayanan</span>
                <h2 class="section-title">DESKRIPSI TUGAS PRODIAKON PAROKI</h2>
                <p class="section-subtitle">Rincian wewenang, tanggung jawab, dan koordinasi kepengurusan Paguyuban Prodiakon Gereja Santo Bonaventura Paroki Pulo Mas.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="tugas-grid">
                @foreach($content['tugas_pengurus'] as $index => $t)
                    <div class="tugas-card shimmer-card" data-reveal="fade-up" data-delay="{{ ($index % 4) * 100 }}">
                        <div class="tugas-card-header">
                            <div class="tugas-card-icon">
                                <i class="bi {{ $t['icon'] ?? 'bi-journal-bookmark-fill' }}"></i>
                            </div>
                            <div style="flex: 1; display: flex; align-items: center; justify-content: space-between; gap: 8px; flex-wrap: wrap;">
                                <h3>{{ $t['jabatan'] }}</h3>
                                @if(!empty($t['kategori']))
                                    <span class="tugas-badge">{{ $t['kategori'] }}</span>
                                @endif
                            </div>
                        </div>

                        <ul class="tugas-list">
                            @foreach($t['poin'] as $point)
                                @if(is_array($point))
                                    <li class="tugas-sub-container" style="display: block; padding: 0;">
                                        <div class="tugas-sub-block">
                                            <div class="tugas-sub-title">
                                                <i class="bi bi-chevron-right text-gold me-1"></i> {{ $point['sub'] }}
                                            </div>
                                            <ul class="tugas-list" style="margin-top: 8px;">
                                                @foreach($point['items'] as $item)
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        <span>{{ $item }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>{{ $point }}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
         8. SASARAN PRODIAKON
         ========================================================================= -->
    <section class="section section-alt" id="sasaran">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-compass-fill"></i> Rencana Strategis</span>
                <h2 class="section-title">SASARAN PRODIAKON</h2>
                <p class="section-subtitle">{{ $content['sasaran']['subjudul'] }}</p>
                <div class="divider-gold"></div>
            </div>

            <div class="sasaran-showcase">
                <!-- Sisi Kiri: Pengantar, Foto Sakral & Doa Penutup -->
                <div class="sasaran-visual-col" data-reveal="fade-right">
                    <div class="sasaran-intro-box shimmer-card">
                        <div class="sasaran-ardas-badge">
                            <i class="bi bi-compass-fill text-gold"></i> Arah Dasar KAJ 2022 – 2026
                        </div>
                        <p class="sasaran-lead-text">{{ $content['sasaran']['pengantar'] }}</p>
                    </div>

                    <div class="sasaran-image-frame shimmer-card">
                        <img src="{{ $content['sasaran']['foto'] }}" alt="Ilustrasi Sasaran Pelayanan Prodiakon Pulomas" loading="lazy">
                    </div>

                    <div class="sasaran-prayer-card shimmer-card">
                        <i class="bi bi-quote quote-icon"></i>
                        <p class="sasaran-prayer-text">"{{ $content['sasaran']['doa_penutup'] }}"</p>
                    </div>
                </div>

                <!-- Sisi Kanan: 5 Komitmen Pelayanan -->
                <div class="sasaran-commitments-list" data-reveal="fade-left">
                    @foreach($content['sasaran']['komitmen'] as $index => $k)
                        <div class="sasaran-item-card shimmer-card" data-reveal="fade-up" data-delay="{{ $index * 100 }}">
                            <div class="sasaran-item-icon">
                                <i class="bi {{ $k['icon'] }}"></i>
                            </div>
                            <div class="sasaran-item-body">
                                <div class="sasaran-item-header">
                                    <h3 class="sasaran-item-title">{{ $k['judul'] }}</h3>
                                    <span class="sasaran-item-num">{{ $k['nomor'] }}</span>
                                </div>
                                <p class="sasaran-item-desc">{{ $k['deskripsi'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         9. DATA PRODIAKON PULO MAS (Interaktif Wilayah I - XI + Modal Detail)
         ========================================================================= -->
    <section class="section" id="data-prodiakon">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-pin-map-fill"></i> Direktori Pelayan</span>
                <h2 class="section-title">DATA PRODIAKON PULO MAS</h2>
                <p class="section-subtitle">Pilih wilayah di bawah ini atau cari langsung nama pelayan altar dan lingkungan secara instan.</p>
                <div class="divider-gold"></div>
            </div>

            <!-- Instant Search Bar -->
            <div class="prodiakon-search-container" data-reveal="fade-up">
                <div class="search-input-wrapper">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" id="prodiakonSearchInput" class="search-prodiakon-input" placeholder="Cari nama prodiakon atau lingkungan (cth: Michael, Fransiskus, Antonius)..." autocomplete="off">
                    <button type="button" id="clearSearchBtn" class="clear-search-btn" title="Hapus pencarian"><i class="bi bi-x-circle-fill"></i></button>
                </div>
                <div id="searchFeedback" class="search-feedback-badge" style="display: none;"></div>
            </div>

            <!-- Interaktif Tab Wrapper (Meniru persis tampilan navigasi di foto user) -->
            <div class="data-wilayah-wrapper">
                
                <!-- Left Sidebar / Mobile Top Pill Strip: Wilayah Pelayanan -->
                <aside class="wilayah-sidebar">
                    <div class="wilayah-sidebar-header">
                        <div class="wilayah-header-title-box">
                            <i class="bi bi-geo-alt-fill text-gold me-2"></i>
                            <h3>Wilayah Pelayanan</h3>
                        </div>
                        <span class="wilayah-mobile-swipe-badge"><i class="bi bi-arrows-expand me-1"></i> Geser Pilihan</span>
                    </div>
                    <ul class="wilayah-nav-list">
                        @foreach($content['data_wilayah'] as $index => $w)
                            <li class="wilayah-nav-item">
                                <button type="button" 
                                        class="wilayah-nav-btn {{ $index === 0 ? 'active' : '' }} {{ $w['kode'] === 'peta' ? 'peta-nav-btn' : '' }}" 
                                        data-wilayah="{{ $w['kode'] }}">
                                    <span>
                                        @if($w['kode'] === 'peta')
                                            <i class="bi bi-map-fill text-gold me-2"></i><strong>Peta</strong>
                                        @else
                                            {{ $w['nama'] }}
                                        @endif
                                    </span>
                                    <span class="count-badge {{ $w['kode'] === 'peta' ? 'count-badge-peta' : '' }}">
                                        @if($w['kode'] === 'peta')
                                            <i class="bi bi-compass"></i>
                                        @else
                                            {{ $w['total_prodiakon'] }}
                                        @endif
                                    </span>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                <!-- Right Content Panel -->
                <div class="wilayah-content-area">
                    @foreach($content['data_wilayah'] as $index => $w)
                        <div class="wilayah-panel" id="panel-{{ $w['kode'] }}" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                            
                            @if($w['kode'] === 'peta')
                                <!-- =========================================================
                                     KHUSUS VIEW PETA WILAYAH PAROKI (HIGH-DEFINITION INTERACTIVE)
                                     ========================================================= -->
                                <div class="peta-showcase-container">
                                    @php
                                        $realWilayahList = array_filter($content['data_wilayah'] ?? [], fn($item) => ($item['kode'] ?? '') !== 'peta');
                                        $realTotalWilayah = count($realWilayahList);
                                        $realTotalProdiakon = 0;
                                        foreach ($realWilayahList as $item) {
                                            $realTotalProdiakon += count($item['daftar_prodiakon'] ?? []);
                                        }
                                    @endphp

                                    <!-- Header Peta -->
                                    <div class="peta-header-card shimmer-card">
                                        <div class="peta-header-content">
                                            <div class="peta-badge-tag">
                                                <i class="bi bi-compass-fill"></i> Teritori Pastoral Paroki Pulomas
                                            </div>
                                            <h3 class="peta-main-title">PETA {{ $realTotalWilayah }} WILAYAH GEREJA SANTO BONAVENTURA</h3>
                                            <p class="peta-main-desc">
                                                Peta pembagian teritorial pastoral mencakup {{ $realTotalWilayah }} Wilayah Pelayanan dan 52 Lingkungan di bawah naungan Paroki Pulomas, Keuskupan Agung Jakarta.
                                            </p>
                                        </div>
                                        <div class="peta-header-actions">
                                            <button type="button" class="btn-peta-action" id="btnOpenMapLightbox">
                                                <i class="bi bi-arrows-fullscreen"></i> Layar Penuh
                                            </button>
                                            <a href="/images/peta.png" download="Peta-Paroki-Santo-Bonaventura-Pulomas.png" class="btn-peta-action btn-peta-download">
                                                <i class="bi bi-download"></i> Unduh HD
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Interactive Map Viewer Frame -->
                                    <div class="peta-map-frame shimmer-card" id="petaMainFrame" title="Klik untuk membuka layar penuh">
                                        <div class="peta-map-church-pin">
                                            <i class="bi bi-geo-alt-fill text-gold me-1"></i> Gereja Katolik St. Bonaventura (Pusat Paroki)
                                        </div>
                                        <div class="peta-map-img-wrapper">
                                            <picture>
                                                <source srcset="/images/peta.webp" type="image/webp">
                                                <img src="/images/peta.png" alt="Peta Teritori Paroki Santo Bonaventura Pulomas" class="peta-main-img" id="mainPetaImage" width="3588" height="2019" loading="lazy">
                                            </picture>
                                        </div>
                                        <div class="peta-map-footer-hint">
                                            <i class="bi bi-zoom-in text-gold me-1"></i> Klik gambar peta untuk memperbesar dalam mode Layar Penuh (HD)
                                        </div>
                                    </div>

                                    <!-- Legend / Key Teritorial -->
                                    <div class="peta-legend-grid">
                                        <div class="peta-legend-item">
                                            <div class="peta-legend-icon" style="background: rgba(203, 162, 88, 0.15); color: var(--accent-gold);">
                                                <i class="bi bi-shield-shaded"></i>
                                            </div>
                                            <div>
                                                <h4>Gereja Induk</h4>
                                                <p>Jl. Pacuan Kuda No. 1, Pulomas</p>
                                            </div>
                                        </div>
                                        <div class="peta-legend-item">
                                            <div class="peta-legend-icon" style="background: rgba(37, 99, 235, 0.15); color: #2563eb;">
                                                <i class="bi bi-map"></i>
                                            </div>
                                            <div>
                                                <h4>{{ $realTotalWilayah }} Wilayah Pelayanan</h4>
                                                <p>Tersebar di Wilayah I hingga XI</p>
                                            </div>
                                        </div>
                                        <div class="peta-legend-item">
                                            <div class="peta-legend-icon" style="background: rgba(22, 163, 74, 0.15); color: #16a34a;">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div>
                                                <h4>{{ $realTotalProdiakon }} Pelayan Altar</h4>
                                                <p>Melayani liturgi dan orang sakit</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Quick Jump to Wilayah Pills -->
                                    <div class="peta-jump-navigator">
                                        <div class="peta-jump-header">
                                            <i class="bi bi-cursor-fill text-gold me-2"></i>
                                            <strong>Pilih Wilayah untuk Melihat Data Prodiakon:</strong>
                                        </div>
                                        <div class="peta-pills-container">
                                            @foreach($content['data_wilayah'] as $otherW)
                                                @if($otherW['kode'] !== 'peta')
                                                    <button type="button" class="btn-jump-pill" data-target-wilayah="{{ $otherW['kode'] }}">
                                                        <span class="jump-pill-name">{{ $otherW['nama'] }}</span>
                                                        <span class="jump-pill-sub">{{ $otherW['nama_pelindung'] }}</span>
                                                        <span class="jump-pill-count"><i class="bi bi-person-fill me-1"></i>{{ $otherW['total_prodiakon'] }}</span>
                                                    </button>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            @else
                                <!-- =========================================================
                                     VIEW WILAYAH STANDAR (WILAYAH I - XI)
                                     ========================================================= -->
                                <!-- Wilayah Header Banner -->
                                <div class="wilayah-header-card shimmer-card">
                                    <div class="wilayah-header-info">
                                        <h3>{{ $w['nama'] }} <span style="font-size: 1.1rem; color: var(--accent-gold); font-weight: 600;">({{ $w['nama_pelindung'] }})</span></h3>
                                        <p><i class="bi bi-geo-alt-fill text-gold me-1"></i> Cakupan: {{ $w['cakupan'] }}</p>
                                        <p style="margin-top: 4px; font-size: 0.85rem; color: #475569;">{{ $w['deskripsi'] }}</p>
                                    </div>
                                    <div class="wilayah-header-actions-right">
                                        <div class="wilayah-badge-info">
                                            <div class="badge-stat">
                                                <div class="val">{{ $w['total_prodiakon'] }}</div>
                                                <div class="lbl">Prodiakon</div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-back-to-map" data-target-wilayah="peta">
                                            <i class="bi bi-map-fill text-gold me-1"></i> Lihat Peta
                                        </button>
                                    </div>
                                </div>

                                <!-- Kartu Koordinator Wilayah Pelayanan (Dengan Foto & Data Lengkap) -->
                                <div class="wilayah-koor-card shimmer-card">
                                    <div class="koor-card-photo-slot photo-zoom-trigger"
                                         data-zoom-img="{{ (!empty($w['koordinator_foto']) && file_exists(public_path($w['koordinator_foto']))) ? $w['koordinator_foto'] : '/images/default-avatar.svg' }}"
                                         data-zoom-nama="{{ $w['koordinator'] }}"
                                         data-zoom-wilayah="{{ $w['nama'] }} ({{ $w['nama_pelindung'] }})"
                                         data-zoom-no="{{ $w['koordinator_jabatan'] ?? 'Koordinator Wilayah' }}"
                                         title="Klik untuk melihat foto ukuran penuh"
                                         style="cursor: pointer;">
                                        <img src="{{ (!empty($w['koordinator_foto']) && file_exists(public_path($w['koordinator_foto']))) ? $w['koordinator_foto'] : '/images/default-avatar.svg' }}" 
                                             alt="{{ $w['koordinator'] }}" 
                                             class="koor-card-photo-img" 
                                             onerror="this.src='/images/default-avatar.svg';" 
                                             loading="lazy">
                                    </div>
                                    <div class="koor-card-content">
                                        <div class="koor-card-badge-row">
                                            <span class="koor-badge"><i class="bi bi-person-badge-fill me-1"></i> KOORDINATOR {{ strtoupper($w['nama']) }}</span>
                                            <span class="koor-saint-badge">{{ $w['nama_pelindung'] }}</span>
                                        </div>
                                        <h3 class="koor-card-name">{{ $w['koordinator'] }}</h3>
                                        <div class="koor-card-role">
                                            <i class="bi bi-shield-check text-gold me-1"></i> {{ $w['koordinator_jabatan'] ?? 'Koordinator Wilayah' }} &bull; Penanggung Jawab Teritorial
                                        </div>
                                        <p class="koor-card-desc">
                                            Mengkoordinir seluruh penugasan pelayanan altar, perayaan ekaristi, serta karya pastoral komuni orang sakit di lingkungan naungan {{ $w['nama'] }}.
                                        </p>
                                    </div>
                                </div>

                                <div class="prodiakon-section-divider">
                                    <div class="prodiakon-section-title-wrap">
                                        <i class="bi bi-people-fill text-gold me-2"></i>
                                        <h4>Daftar Pelayan Altar {{ $w['nama'] }}</h4>
                                    </div>
                                    <span class="prodiakon-count-badge">{{ count($w['daftar_prodiakon']) }} Pelayan Terlantik</span>
                                </div>

                                <!-- Grid Cards of Prodiakon in this Wilayah -->
                                <div class="prodiakon-cards-grid">
                                    @foreach($w['daftar_prodiakon'] as $pd)
                                        <div class="prodiakon-card shimmer-card" data-nama="{{ strtolower($pd['nama']) }}" data-lingkungan="{{ strtolower($pd['wilayah_romawi']) }}">
                                            <div>
                                                <!-- Foto Profil Prodiakon (Besar & Jelas: Rasio Portrait Gallery) -->
                                                <div class="prodiakon-photo-banner-wrap" 
                                                     data-zoom-img="{{ (!empty($pd['foto']) && file_exists(public_path($pd['foto']))) ? $pd['foto'] : '/images/default-avatar.svg' }}"
                                                     data-zoom-nama="{{ $pd['nama'] }}"
                                                     data-zoom-wilayah="Wilayah {{ $pd['wilayah_romawi'] }}"
                                                     data-zoom-no="Pelayan Altar {{ $w['nama'] }}"
                                                     title="Klik untuk melihat foto ukuran penuh">
                                                    <div class="prodiakon-photo-container">
                                                        @php
                                                            $hasRealPhoto = (!empty($pd['foto']) && file_exists(public_path($pd['foto'])));
                                                            $photoSrc = $hasRealPhoto ? $pd['foto'] : '/images/default-avatar.svg';
                                                        @endphp
                                                        @if($hasRealPhoto)
                                                            <img src="{{ $photoSrc }}" class="prodiakon-img-backdrop" alt="" aria-hidden="true">
                                                        @endif
                                                        <img src="{{ $photoSrc }}" 
                                                             alt="{{ $pd['nama'] }}" 
                                                             class="prodiakon-img" 
                                                             onerror="this.src='/images/default-avatar.svg'; const b=this.parentElement.querySelector('.prodiakon-img-backdrop'); if(b) b.remove();" 
                                                             loading="lazy">
                                                        
                                                        <!-- Floating Badges di atas Foto (Nomor dihapus sesuai instruksi) -->
                                                        <div class="prodiakon-floating-badges">
                                                            <span class="badge-wilayah">Wil. {{ $pd['wilayah_romawi'] }}</span>
                                                        </div>

                                                        <!-- Bottom Glass Bar: Tombol Zoom -->
                                                        <div class="avatar-photo-slot-bar">
                                                            <span class="slot-zoom-hint"><i class="bi bi-arrows-fullscreen"></i> Perbesar</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="prodiakon-name-title">
                                                    <h4>{{ $pd['nama'] }}</h4>
                                                    <div class="prodiakon-baptis-title">
                                                        <i class="bi bi-droplet-fill text-gold me-1"></i> {{ $pd['nama_baptis'] ?: '-' }}
                                                    </div>
                                                </div>

                                                <div class="prodiakon-meta">
                                                    <div class="prodiakon-meta-row">
                                                        <i class="bi bi-fire text-gold"></i>
                                                        <span><strong>Krisma:</strong> {{ $pd['nama_krisma'] ?: '-' }}</span>
                                                    </div>
                                                    <div class="prodiakon-meta-row">
                                                        <i class="bi bi-heart-fill text-gold"></i>
                                                        <span><strong>Istri:</strong> {{ $pd['istri'] ?: '-' }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol Klik Detail sesuai instruksi User -->
                                            <button type="button" 
                                                    class="btn-detail-modal"
                                                    data-no="Pelayan Altar {{ $w['nama'] }}"
                                                    data-wilayah-tag="Wilayah {{ $pd['wilayah_romawi'] }}"
                                                    data-nama="{{ $pd['nama'] }}"
                                                    data-inisial="{{ $pd['inisial'] }}"
                                                    data-foto="{{ $pd['foto'] }}"
                                                    data-foto-istri="{{ $pd['foto_istri'] ?? '' }}"
                                                    data-wilayah-nama="Wilayah {{ $pd['wilayah_romawi'] }} - {{ $w['nama_pelindung'] ?? 'St. Bonaventura' }}"
                                                    data-tempat-lahir="{{ $pd['tempat_lahir'] ?: '-' }}"
                                                    data-nama-baptis="{{ $pd['nama_baptis'] ?: '-' }}"
                                                    data-tempat-baptis="{{ $pd['tempat_baptis'] ?: '-' }}"
                                                    data-tgl-baptis="{{ $pd['tgl_baptis'] ?: '-' }}"
                                                    data-nama-krisma="{{ $pd['nama_krisma'] ?: '-' }}"
                                                    data-tempat-krisma="{{ $pd['tempat_krisma'] ?: '-' }}"
                                                    data-tgl-krisma="{{ $pd['tgl_krisma'] ?: '-' }}"
                                                    data-istri="{{ $pd['istri'] ?: '-' }}"
                                                    data-tempat-lahir-istri="{{ $pd['tempat_lahir_istri'] ?: '-' }}"
                                                    data-baptis-istri="{{ $pd['nama_baptis_istri'] ?: '-' }}"
                                                    data-krisma-istri="{{ $pd['nama_krisma_istri'] ?: '-' }}"
                                                    @php
                                                        $nikahTempat = (!empty($pd['tempat_perkawinan']) && trim($pd['tempat_perkawinan']) !== '-') ? trim($pd['tempat_perkawinan']) : '';
                                                        $nikahTgl = (!empty($pd['tgl_perkawinan']) && trim($pd['tgl_perkawinan']) !== '-') ? trim($pd['tgl_perkawinan']) : '';
                                                        $nikahParts = array_filter([$nikahTempat, $nikahTgl]);
                                                        $nikahFinal = !empty($nikahParts) ? implode(', ', $nikahParts) : '-';
                                                    @endphp
                                                    data-nikah="{{ $nikahFinal }}">
                                                <i class="bi bi-info-circle-fill text-gold"></i> Detail Profil
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection
