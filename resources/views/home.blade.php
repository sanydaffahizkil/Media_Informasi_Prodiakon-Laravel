@extends('layouts.app')

@section('content')

    <!-- =========================================================================
         1. HERO SECTION
         ========================================================================= -->
    <section class="hero-section" id="hero">
        <div class="hero-bg-overlay"></div>
        <div class="hero-particles"></div>
        <div class="hero-content">
            <div class="hero-badge">
                <i class="bi bi-shield-check"></i> Paguyuban Prodiakon Periode 2025 – 2028
            </div>
            <h1 class="hero-title">
                Pelayanan Cinta Kasih &amp; Pengabdian Altar
            </h1>
            <p class="hero-lead">
                Gereja Santo Bonaventura Paroki Pulomas — Menghadirkan Tubuh Kristus dengan ketulusan hati, melayani altar, serta menjangkau umat lansia dan orang sakit di Wilayah I sampai XI.
            </p>
            <div class="hero-actions">
                <a href="#data-prodiakon" class="btn-primary-gold">
                    <i class="bi bi-people-fill"></i> Data Prodiakon Wilayah
                </a>
                <a href="#sambutan" class="btn-outline-light">
                    <i class="bi bi-arrow-down-circle"></i> Jelajahi Informasi
                </a>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. SAMBUTAN ROMO PAROKI
         ========================================================================= -->
    <section class="section" id="sambutan">
        <div class="container">
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-bookmark-heart"></i> Pesan Pastoral</span>
                <h2 class="section-title">SAMBUTAN ROMO PAROKI</h2>
                <p class="section-subtitle">Pesan dan berkat penggembalaan bagi para pelayan altar dan seluruh umat beriman.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="pastoral-grid">
                <div class="pastoral-photo-wrap">
                    <div class="pastoral-photo-frame">
                        <img src="/images/romo.jpg" alt="{{ $content['sambutan_romo']['nama'] }}">
                    </div>
                    <div class="pastoral-badge-gold">
                        <i class="bi bi-person-badge-fill me-1"></i> Pastor Paroki Pulomas
                    </div>
                </div>

                <div class="pastoral-text">
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
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-award-fill"></i> Lambang Kebanggaan</span>
                <h2 class="section-title">MAKNA LAMBANG VANDEL PRODIAKON</h2>
                <p class="section-subtitle">{{ $content['makna_vandel']['subjudul'] }}</p>
                <div class="divider-gold"></div>
            </div>

            <div class="vandel-grid">
                <div class="vandel-image-card">
                    <img src="/images/vandel.jpg" alt="Vandel Prodiakon Paroki Santo Bonaventura">
                    <div style="margin-top: 14px; font-size: 0.85rem; color: var(--text-muted); font-style: italic;">
                        Vandel Resmi Paguyuban Prodiakon Santo Bonaventura Pulomas
                    </div>
                </div>

                <div class="vandel-elements-list">
                    @foreach($content['makna_vandel']['elemen'] as $elemen)
                        <div class="vandel-item">
                            <div class="vandel-item-icon">
                                <i class="bi {{ $elemen['icon'] }}"></i>
                            </div>
                            <div>
                                <h3 class="vandel-item-title">{{ $elemen['simbol'] }}</h3>
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
            <div class="moto-banner">
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
                    @foreach($content['moto']['pilar'] as $pilar)
                        <div class="pillar-card">
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
         5. SEJARAH NAMA PELINDUNG PRODIAKON
         ========================================================================= -->
    <section class="section" id="pelindung">
        <div class="container">
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-stars"></i> Teladan Kesucian</span>
                <h2 class="section-title">SEJARAH NAMA PELINDUNG PRODIAKON</h2>
                <p class="section-subtitle">Meneladani Kehidupan dan Nyala Api Kasih Ilahi Santo Bonaventura.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="patron-card" style="margin-top: 48px;">
                <div class="patron-info">
                    <h3>{{ $content['pelindung']['nama'] }}</h3>
                    <span class="patron-title-badge"><i class="bi bi-award me-1"></i> {{ $content['pelindung']['gelar'] }} &bull; Pesta Nama: {{ $content['pelindung']['pesta_nama'] }}</span>
                    <p style="color: #334155; line-height: 1.8; margin-bottom: 16px;">
                        {{ $content['pelindung']['sejarah'] }}
                    </p>
                    <div class="patron-quote">
                        <strong>Keteladanan bagi Prodiakon:</strong>
                        <p style="margin-top: 6px;">{{ $content['pelindung']['teladan_pelayanan'] }}</p>
                    </div>
                </div>

                <div class="patron-visual-box">
                    <div class="icon-wrap">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <h4 style="color: var(--accent-gold); font-size: 1.2rem; margin-bottom: 8px;">Doctor Seraphicus</h4>
                    <p style="font-size: 0.88rem; color: rgba(255,255,255,0.8); line-height: 1.6;">
                        "Cinta kasih sejati kepada Kristus melampaui segala pengetahuan dan tercermin dalam pelayanan yang rendah hati."
                    </p>
                    <div style="margin-top: 16px; font-size: 0.78rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--accent-gold);">
                        Doakanlah Kami
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
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-diagram-3-fill"></i> Kepengurusan</span>
                <h2 class="section-title">DAFTAR PENGURUS</h2>
                <p class="section-subtitle">Susunan Pengurus Paguyuban Prodiakon Santo Bonaventura Pulomas Periode {{ $content['pengurus']['periode'] }}.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="pengurus-grid">
                @foreach($content['pengurus']['daftar'] as $p)
                    <div class="pengurus-card">
                        <div class="pengurus-avatar">
                            {{ $p['inisial'] }}
                        </div>
                        <h3 class="pengurus-name">{{ $p['nama'] }}</h3>
                        <div class="pengurus-role">{{ $p['jabatan'] }}</div>
                        <div class="pengurus-region"><i class="bi bi-geo-alt me-1"></i> {{ $p['wilayah'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. TUGAS PENGURUS
         ========================================================================= -->
    <section class="section" id="tugas">
        <div class="container">
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-briefcase-fill"></i> Tanggung Jawab</span>
                <h2 class="section-title">TUGAS PENGURUS</h2>
                <p class="section-subtitle">Bidang pelayanan dan rincian amanah pelayanan liturgis serta pastoral.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="tugas-grid">
                @foreach($content['tugas_pengurus'] as $t)
                    <div class="tugas-card">
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
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-compass-fill"></i> Rencana Strategis</span>
                <h2 class="section-title">SASARAN PRODIAKON</h2>
                <p class="section-subtitle">Target capaian dan komitmen pelayanan paguyuban untuk periode 2025–2028.</p>
                <div class="divider-gold"></div>
            </div>

            <div class="sasaran-grid">
                @foreach($content['sasaran'] as $s)
                    <div class="sasaran-card">
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
            <div style="text-align: center;">
                <span class="section-tag"><i class="bi bi-pin-map-fill"></i> Direktori Pelayan</span>
                <h2 class="section-title">DATA PRODIAKON PULO MAS</h2>
                <p class="section-subtitle">Pilih wilayah di bawah ini untuk melihat daftar prodiakon dan klik tombol detail untuk profil lengkap.</p>
                <div class="divider-gold"></div>
            </div>

            <!-- Interaktif Tab Wrapper (Meniru persis tampilan navigasi di foto user) -->
            <div class="data-wilayah-wrapper">
                
                <!-- Left Sidebar: List Wilayah persis foto -->
                <aside class="wilayah-sidebar">
                    <div class="wilayah-sidebar-header">
                        <h3>Wilayah Pelayanan</h3>
                    </div>
                    <ul class="wilayah-nav-list">
                        @foreach($content['data_wilayah'] as $index => $w)
                            <li class="wilayah-nav-item">
                                <button type="button" 
                                        class="wilayah-nav-btn {{ $index === 0 ? 'active' : '' }}" 
                                        data-wilayah="{{ $w['kode'] }}">
                                    <span>{{ $w['nama'] }}</span>
                                    <span class="count-badge">{{ $w['total_prodiakon'] }}</span>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                <!-- Right Content Panel -->
                <div class="wilayah-content-area">
                    @foreach($content['data_wilayah'] as $index => $w)
                        <div class="wilayah-panel" id="panel-{{ $w['kode'] }}" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                            
                            <!-- Wilayah Header Banner -->
                            <div class="wilayah-header-card">
                                <div class="wilayah-header-info">
                                    <h3>{{ $w['nama'] }} <span style="font-size: 1.1rem; color: var(--accent-gold); font-weight: 600;">({{ $w['nama_pelindung'] }})</span></h3>
                                    <p><i class="bi bi-geo-alt-fill text-gold me-1"></i> Cakupan: {{ $w['cakupan'] }}</p>
                                    <p style="margin-top: 4px; font-size: 0.85rem; color: #475569;">{{ $w['deskripsi'] }}</p>
                                </div>
                                <div class="wilayah-badge-info">
                                    <div class="badge-stat">
                                        <div class="val">{{ $w['total_prodiakon'] }}</div>
                                        <div class="lbl">Prodiakon</div>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
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
                                    <div class="prodiakon-card">
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

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

@endsection
