@extends('layouts.app')

@section('content')

    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <section class="hero-section" id="hero">
        <div class="hero-bg-overlay"></div>
        <div class="hero-glow-orb hero-glow-1"></div>
        <div class="hero-glow-orb hero-glow-2"></div>
        <div class="hero-particles"></div>
        <div class="hero-content">
            <div class="hero-badge" data-reveal="fade-down">
                <i class="bi bi-shield-check"></i> Paguyuban Prodiakon Periode 2025 – 2028
            </div>
            <h1 class="hero-title" data-reveal="fade-up" data-delay="100">
                Pelayanan Cinta Kasih &amp; <span class="text-gold-gradient">Pengabdian Altar</span>
            </h1>
            <p class="hero-lead" data-reveal="fade-up" data-delay="200">
                Gereja Santo Bonaventura Paroki Pulomas — Menghadirkan Tubuh Kristus dengan ketulusan hati, melayani altar, serta menjangkau umat lansia dan orang sakit di Wilayah I sampai XI.
            </p>
            <div class="hero-actions" data-reveal="fade-up" data-delay="300">
                <a href="#data-prodiakon" class="btn-primary-gold btn-pulse">
                    <i class="bi bi-people-fill"></i> Data Prodiakon Wilayah
                </a>
                <a href="#sambutan" class="btn-outline-light">
                    <i class="bi bi-arrow-down-circle"></i> Jelajahi Informasi
                </a>
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
                    <div class="stat-icon-glow"><i class="bi bi-houses-fill"></i></div>
                    <div class="stat-number-wrap">
                        <span class="stat-counter" data-target="52">0</span>
                        <span class="stat-plus">+</span>
                    </div>
                    <div class="stat-label">Komunitas Lingkungan</div>
                    <div class="stat-sub">Persekutuan Umat Beriman</div>
                </div>
                <div class="stat-box shimmer-card">
                    <div class="stat-icon-glow"><i class="bi bi-person-hearts"></i></div>
                    <div class="stat-number-wrap">
                        <span class="stat-counter" data-target="124">0</span>
                        <span class="stat-plus">+</span>
                    </div>
                    <div class="stat-label">Prodiakon Terlantik</div>
                    <div class="stat-sub">Pelayan Liturgis & Kunjungan</div>
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
                        <img src="/images/romo.png" alt="{{ $content['sambutan_romo']['nama'] }}">
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
                    <img src="/images/vandel.png" alt="Vandel Prodiakon Paroki Santo Bonaventura">
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
                <p class="moto-sub-quote">
                    {{ $content['moto']['sub_semboyan'] }}
                </p>

                <div class="moto-pillars-grid">
                    @foreach($content['moto']['pilar'] as $index => $pilar)
                        <div class="pillar-card shimmer-card" data-reveal="fade-up" data-delay="{{ ($index + 1) * 100 }}">
                            <div style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 10px;">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <h4>{{ $pilar['judul'] }}</h4>
                            <p>{{ $pilar['keterangan'] }}</p>
                        </div>
                    @endforeach
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
                        <img src="{{ asset('images/stefanus.jpg') }}" alt="Santo Stefanus - Pelindung Prodiakon" class="stefanus-img">
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
                        <i class="bi bi-shield-check"></i> Pembina & Penasehat
                    </button>
                    <button type="button" class="pengurus-tab-btn" data-tab="semua">
                        <i class="bi bi-collection-fill"></i> Tampilkan Semua
                    </button>
                </div>
            </div>

            <!-- =========================================================================
                 TAB 1: BAGAN STRUKTUR ORGANISASI (HIERARCHY ORGANOGRAM)
                 ========================================================================= -->
            <div class="pengurus-pane active" id="pane-bagan" data-reveal="fade-up">
                <div class="bagan-card-box">
                    <div class="bagan-header">
                        <div class="bagan-title-area">
                            <span class="bagan-badge"><i class="bi bi-award-fill"></i> Bagan Struktur Resmi</span>
                            <h3 class="bagan-title">Bagan Struktur Organisasi Paguyuban Prodiakon</h3>
                            <p class="bagan-desc">Gereja Santo Bonaventura, Paroki Pulomas &bull; Periode {{ $content['pengurus']['periode'] }}</p>
                        </div>
                        <div class="bagan-meta-pill">
                            <i class="bi bi-diagram-3"></i> 6 Bidang Utama Pelayanan
                        </div>
                    </div>

                    <!-- Organogram Tree Canvas -->
                    <div class="organogram-viewport">
                        <div class="organogram-tree">
                            
                            <!-- LEVEL 1: KOORDINATOR -->
                            <div class="org-row org-row-root">
                                <div class="org-node org-node-leader">
                                    <div class="node-badge-top">KOORDINATOR</div>
                                    <div class="node-avatar-gold">
                                        <span>ISB</span>
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
                                    <div class="node-avatar-gold">
                                        <span>JDW</span>
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
                                    <div class="pembina-penasehat-head">
                                        <span class="penasehat-label">Penasehat:</span>
                                        <span class="penasehat-val">{{ $content['pengurus']['penasehat']['nama'] }}</span>
                                    </div>
                                    <div class="pembina-names-grid">
                                        @foreach($content['pengurus']['pembina_pemerhati'] as $pbm)
                                            <div class="pembina-chip">
                                                <span class="chip-avatar">{{ $pbm['inisial'] }}</span>
                                                <span class="chip-name">{{ $pbm['nama'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- STEM FROM PEMBINA TO 6 PILARS -->
                            <div class="org-connector-vert"></div>

                            <!-- HORIZONTAL DISTRIBUTION BUS (6 COLUMNS) -->
                            <div class="org-bus-line"></div>

                            <!-- LEVEL 3: 6 PILAR BIDANG -->
                            <div class="org-row org-row-pillars">
                                
                                <!-- 1. SEKRETARIS -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">SEKRETARIS</div>
                                        <div class="pillar-avatar">HSP</div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][0]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Administrasi & Inventaris</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people"></i> 3 Seksi Pendukung</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2. BENDAHARA -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">BENDAHARA</div>
                                        <div class="pillar-avatar">PTK</div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][1]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Keuangan & Kas Pelayanan</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-wallet2"></i> Kas & Anggaran</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3. LITURGI DAN TATA GERAK -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">LITURGI & TATA GERAK</div>
                                        <div class="pillar-avatar">AAC</div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][2]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Rubrik & Tata Gerak Altar</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people"></i> 2 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4. PEMBINAAN IMAN & ROHANI -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">PEMBINAAN IMAN & ROHANI</div>
                                        <div class="pillar-avatar">PR</div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][3]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Rekoleksi & Spiritualitas</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people"></i> 2 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5. KEGIATAN DAN KEPANITIAAN -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">KEGIATAN & KEPANITIAAN</div>
                                        <div class="pillar-avatar">AAW</div>
                                        <h5 class="pillar-name">{{ $content['pengurus']['bidang'][4]['koordinator'] }}</h5>
                                        <div class="pillar-sub">Acara & Kepanitiaan</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-people"></i> 3 Anggota Tim</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6. KOORDINATOR WILAYAH -->
                                <div class="org-pillar-col">
                                    <div class="org-pillar-drop"></div>
                                    <div class="org-node org-node-pillar">
                                        <div class="pillar-role-badge">KOORDINATOR WILAYAH</div>
                                        <div class="pillar-avatar"><i class="bi bi-geo-alt-fill"></i></div>
                                        <h5 class="pillar-name">Koordinator Wilayah</h5>
                                        <div class="pillar-sub">Membawahi Wilayah 1 s/d 11</div>
                                        <div class="pillar-mini-team">
                                            <span><i class="bi bi-diagram-3"></i> 11 Wilayah Teritorial</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="bagan-footer-bar">
                        <div class="bagan-legend">
                            <span class="legend-dot"></span> Struktur Garis Komando & Koordinasi Pelayanan
                        </div>
                        <div class="bagan-scroll-tip">
                            <i class="bi bi-arrows-expand"></i> Geser horizontal untuk melihat seluruh bagan pada layar ponsel
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================================================================
                 TAB 2: RINCIAN BIDANG & SEKSI (DETAIL CARDS)
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-bidang" data-reveal="fade-up">
                
                <!-- Pimpinan Harian Showcase -->
                <div class="pimpinan-showcase-grid">
                    @foreach($content['pengurus']['pimpinan_harian'] as $ph)
                        <div class="pimpinan-card shimmer-card">
                            <div class="pimpinan-card-top">
                                <span class="pimpinan-badge"><i class="bi {{ $ph['icon'] }}"></i> {{ $ph['badge'] }}</span>
                                <span class="pimpinan-initials">{{ $ph['inisial'] }}</span>
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

                <!-- 5 Bidang Detail Cards -->
                <div class="bidang-cards-grid">
                    
                    <!-- 1. SEKRETARIAT -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-card-heading"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Sekretariat</span>
                                <h4 class="bidang-box-title">Sekretariat & Inventaris</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <span class="koor-label">Sekretaris:</span>
                            <h5 class="koor-name">{{ $content['pengurus']['bidang'][0]['koordinator'] }}</h5>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Seksi & Tim Kerja:</div>
                            @foreach($content['pengurus']['bidang'][0]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                    <span class="subseksi-name">{{ $agt['nama'] }}</span>
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
                                <h4 class="bidang-box-title">Bendahara</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <span class="koor-label">Bendahara:</span>
                            <h5 class="koor-name">{{ $content['pengurus']['bidang'][1]['koordinator'] }}</h5>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-shield-check text-gold"></i> Tanggung Jawab:</div>
                            <div class="subseksi-item">
                                <span class="subseksi-role">Pengelolaan Kas</span>
                                <span class="subseksi-name">Pencatatan iuran, penerimaan persembahan dan operasional</span>
                            </div>
                            <div class="subseksi-item">
                                <span class="subseksi-role">Akuntabilitas</span>
                                <span class="subseksi-name">Laporan keuangan transparan secara berkala kepada Pastor Paroki</span>
                            </div>
                        </div>
                    </div>

                    <!-- 3. LITURGI DAN TATA GERAK -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-trophy-fill"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Liturgis Altar</span>
                                <h4 class="bidang-box-title">Bidang Liturgi & Tata Gerak</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <span class="koor-label">Koordinator Bidang:</span>
                            <h5 class="koor-name">{{ $content['pengurus']['bidang'][2]['koordinator'] }}</h5>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][2]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                    <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 4. PEMBINAAN IMAN & ROHANI -->
                    <div class="bidang-box shimmer-card">
                        <div class="bidang-box-header">
                            <div class="bidang-icon-wrap">
                                <i class="bi bi-book-half"></i>
                            </div>
                            <div>
                                <span class="bidang-badge-cat">Spiritualitas</span>
                                <h4 class="bidang-box-title">Bidang Pembinaan Iman & Rohani</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <span class="koor-label">Koordinator Bidang:</span>
                            <h5 class="koor-name">{{ $content['pengurus']['bidang'][3]['koordinator'] }}</h5>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][3]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                    <span class="subseksi-name">{{ $agt['nama'] }}</span>
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
                                <h4 class="bidang-box-title">Bidang Kegiatan & Kepanitiaan</h4>
                            </div>
                        </div>
                        <div class="bidang-koor-highlight">
                            <span class="koor-label">Koordinator Bidang:</span>
                            <h5 class="koor-name">{{ $content['pengurus']['bidang'][4]['koordinator'] }}</h5>
                        </div>
                        <div class="bidang-subseksi-list">
                            <div class="subseksi-title"><i class="bi bi-people-fill text-gold"></i> Anggota Tim:</div>
                            @foreach($content['pengurus']['bidang'][4]['anggota'] as $agt)
                                <div class="subseksi-item">
                                    <span class="subseksi-role">{{ $agt['peran'] }}</span>
                                    <span class="subseksi-name">{{ $agt['nama'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <!-- =========================================================================
                 TAB 3: 11 KOORDINATOR WILAYAH
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-wilayah" data-reveal="fade-up">
                <div class="koor-wilayah-intro">
                    <div class="intro-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <div>
                        <h4 style="color: var(--primary-navy); margin-bottom: 4px;">Koordinator Wilayah I sampai XI</h4>
                        <p style="color: var(--text-muted); font-size: 0.92rem; margin: 0;">Para pelayan pastoral yang mengkoordinir penugasan liturgis dan pelayanan orang sakit di 11 Wilayah Paroki Santo Bonaventura Pulomas.</p>
                    </div>
                </div>

                <div class="koor-wilayah-grid">
                    @foreach($content['pengurus']['koordinator_wilayah'] as $kw)
                        <div class="koor-wilayah-card shimmer-card">
                            <div class="kw-header">
                                <span class="kw-badge">{{ $kw['wilayah'] }}</span>
                                <div class="kw-initial">{{ $kw['inisial'] }}</div>
                            </div>
                            <h4 class="kw-name">{{ $kw['nama'] }}</h4>
                            <div class="kw-role">Koordinator {{ $kw['wilayah'] }}</div>
                            <a href="#data-prodiakon" class="kw-action-link" data-wilayah="{{ $kw['kode'] }}">
                                <span>Lihat Data Wilayah</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- =========================================================================
                 TAB 4: PEMBINA & PENASEHAT
                 ========================================================================= -->
            <div class="pengurus-pane" id="pane-pembina" data-reveal="fade-up">
                <div class="pembina-layout">
                    
                    <!-- Penasehat Card -->
                    <div class="advisor-main-card shimmer-card">
                        <div class="advisor-icon-wrap">
                            <i class="bi {{ $content['pengurus']['penasehat']['icon'] }}"></i>
                        </div>
                        <span class="advisor-badge">PENASEHAT</span>
                        <h3 class="advisor-name">{{ $content['pengurus']['penasehat']['nama'] }}</h3>
                        <div class="advisor-role">{{ $content['pengurus']['penasehat']['jabatan'] }}</div>
                        <p class="advisor-text">
                            Mendampingi secara rohani dan liturgis agar setiap pelayanan altar dan pastoral senantiasa selaras dengan ajaran Gereja Katolik serta ketetapan Keuskupan Agung Jakarta.
                        </p>
                    </div>

                    <!-- Tim Pembina dan Pemerhati -->
                    <div class="pembina-panel shimmer-card">
                        <div class="pembina-panel-header">
                            <div class="pembina-panel-icon"><i class="bi bi-people-fill"></i></div>
                            <div>
                                <h4 style="color: var(--primary-navy); margin-bottom: 2px;">Tim Pembina dan Pemerhati</h4>
                                <span style="font-size: 0.82rem; color: var(--text-muted);">Pendampingan Pastoral Paguyuban Periode {{ $content['pengurus']['periode'] }}</span>
                            </div>
                        </div>

                        <div class="pembina-members-grid">
                            @foreach($content['pengurus']['pembina_pemerhati'] as $pbm)
                                <div class="pembina-member-card">
                                    <div class="pembina-avatar">{{ $pbm['inisial'] }}</div>
                                    <div class="pembina-info">
                                        <h5 class="pembina-name">{{ $pbm['nama'] }}</h5>
                                        <span class="pembina-role">{{ $pbm['jabatan'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         7. TUGAS PENGURUS
         ========================================================================= -->
    <section class="section" id="tugas">
        <div class="container">
            <div style="text-align: center;" data-reveal="fade-up">
                <span class="section-tag"><i class="bi bi-briefcase-fill"></i> Tanggung Jawab</span>
                <h2 class="section-title">TUGAS PENGURUS</h2>
                <p class="section-subtitle">Bidang pelayanan dan rincian amanah pelayanan liturgis serta pastoral.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="tugas-grid">
                @foreach($content['tugas_pengurus'] as $index => $t)
                    <div class="tugas-card shimmer-card" data-reveal="fade-up" data-delay="{{ $index * 120 }}">
                        <div class="tugas-card-header">
                            <div class="tugas-card-icon">
                                <i class="bi bi-journal-bookmark-fill"></i>
                            </div>
                            <h3>{{ $t['bidang'] }}</h3>
                        </div>
                        <p>{{ $t['deskripsi'] }}</p>
                        <ul class="tugas-list">
                            @foreach($t['poin'] as $point)
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>{{ $point }}</span>
                                </li>
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
                <p class="section-subtitle">Target capaian dan komitmen pelayanan paguyuban untuk periode 2025–2028.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="sasaran-grid">
                @foreach($content['sasaran'] as $index => $s)
                    <div class="sasaran-card shimmer-card" data-reveal="fade-up" data-delay="{{ $index * 120 }}">
                        <div class="sasaran-number">{{ $s['nomor'] }}</div>
                        <h3>{{ $s['judul'] }}</h3>
                        <p>{{ $s['uraian'] }}</p>
                    </div>
                @endforeach
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
                
                <!-- Left Sidebar: List Wilayah persis foto -->
                <aside class="wilayah-sidebar" data-reveal="fade-right">
                    <div class="wilayah-sidebar-header">
                        <h3>Wilayah Pelayanan</h3>
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
                <div class="wilayah-content-area" data-reveal="fade-left">
                    @foreach($content['data_wilayah'] as $index => $w)
                        <div class="wilayah-panel" id="panel-{{ $w['kode'] }}" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                            
                            @if($w['kode'] === 'peta')
                                <!-- =========================================================
                                     KHUSUS VIEW PETA WILAYAH PAROKI (HIGH-DEFINITION INTERACTIVE)
                                     ========================================================= -->
                                <div class="peta-showcase-container">
                                    <!-- Header Peta -->
                                    <div class="peta-header-card shimmer-card">
                                        <div class="peta-header-content">
                                            <div class="peta-badge-tag">
                                                <i class="bi bi-compass-fill"></i> Teritori Pastoral Paroki Pulomas
                                            </div>
                                            <h3 class="peta-main-title">PETA 11 WILAYAH GEREJA SANTO BONAVENTURA</h3>
                                            <p class="peta-main-desc">
                                                Peta pembagian teritorial pastoral mencakup 11 Wilayah Pelayanan dan 52 Lingkungan di bawah naungan Paroki Pulomas, Keuskupan Agung Jakarta.
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
                                                <img src="/images/peta.png" alt="Peta Teritori Paroki Santo Bonaventura Pulomas" class="peta-main-img" id="mainPetaImage">
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
                                                <h4>11 Wilayah Pelayanan</h4>
                                                <p>Tersebar di Wilayah I hingga XI</p>
                                            </div>
                                        </div>
                                        <div class="peta-legend-item">
                                            <div class="peta-legend-icon" style="background: rgba(22, 163, 74, 0.15); color: #16a34a;">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <div>
                                                <h4>124 Pelayan Altar</h4>
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

                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
                                    <h4 style="font-size: 1.1rem; color: var(--primary-navy); margin: 0;">
                                        <i class="bi bi-person-lines-fill text-gold me-2"></i>Daftar Pelayan Altar
                                    </h4>
                                    <span style="font-size: 0.82rem; color: var(--text-muted);">
                                        Koordinator: <strong>{{ $w['koordinator'] }}</strong>
                                    </span>
                                </div>

                                <!-- Grid Cards of Prodiakon in this Wilayah -->
                                <div class="prodiakon-cards-grid">
                                    @foreach($w['daftar_prodiakon'] as $pd)
                                        <div class="prodiakon-card shimmer-card" data-nama="{{ strtolower($pd['nama']) }}" data-lingkungan="{{ strtolower($pd['lingkungan']) }}">
                                            <div>
                                                <div class="prodiakon-card-top">
                                                    <div class="prodiakon-avatar-circle">
                                                        {{ strtoupper(substr($pd['nama'], 0, 1)) }}
                                                    </div>
                                                    <div class="prodiakon-name-title">
                                                        <h4>{{ $pd['nama'] }}</h4>
                                                        <div class="prodiakon-lingkungan">{{ $pd['lingkungan'] }}</div>
                                                    </div>
                                                </div>

                                                <div class="prodiakon-meta">
                                                    <div class="prodiakon-meta-row">
                                                        <i class="bi bi-shield-check text-gold"></i>
                                                        <span>{{ $pd['tugas_khusus'] }}</span>
                                                    </div>
                                                    <div class="prodiakon-meta-row">
                                                        <i class="bi bi-calendar-event text-gold"></i>
                                                        <span>Masa Bakti: {{ $pd['masa_bakti'] }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol Klik Detail sesuai instruksi User -->
                                            <button type="button" 
                                                    class="btn-detail-modal"
                                                    data-nama="{{ $pd['nama'] }}"
                                                    data-lingkungan="{{ $pd['lingkungan'] }}"
                                                    data-wilayah-nama="{{ $w['nama'] }} - {{ $w['nama_pelindung'] }}"
                                                    data-masa-bakti="{{ $pd['masa_bakti'] }}"
                                                    data-tugas="{{ $pd['tugas_khusus'] }}"
                                                    data-jadwal="{{ $pd['jadwal'] }}">
                                                <i class="bi bi-info-circle-fill text-gold"></i> Klik Detail
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
