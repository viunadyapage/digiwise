@extends('layouts.app')

@section('title', 'Beranda - PKM DigiWise')

@section('content')

    {{-- beranda --}}
    <section class="hero" id="beranda">

        {{-- Konten teks --}}
        <div class="hero-content">

            <span class="hero-badge">
                PROGRAM EDUKASI DIGITAL
            </span>

            <h1>
                PKM DigiWise – Membangun
                Generasi Cerdas dan Aman di Era
                Digital
            </h1>

            <p>
                Ruang belajar digital yang praktis, inklusif, dan relevan
                untuk membangun kecakapan, etika, serta keamanan digital
                bagi generasi masa kini.
            </p>

            {{-- Tombol utama --}}
            <div class="hero-buttons">

                <a href="#modul" class="btn btn-primary">
                    Pelajari Modul
                </a>

                <a href="#video" class="btn btn-secondary">
                    Mulai Menonton
                </a>

            </div>

            {{-- Statistik program --}}
            <div class="hero-stats">

                <div>
                    <strong>10+</strong>
                    <span>Modul pembelajaran</span>
                </div>

                <div>
                    <strong>100%</strong>
                    <span>Akses terbuka</span>
                </div>

            </div>

        </div>

        {{-- Gambar hero --}}
        <div class="hero-image">

            <img
                src="{{ asset('images/sementara.jpg') }}"
                alt="Kegiatan pembelajaran literasi digital"
            >

            <div class="image-card">
                <strong>Belajar dengan bijak</strong>

                <p>
                    Bekali diri dengan literasi
                    dan perlindungan digital.
                </p>
            </div>

        </div>

    </section>


    {{-- tentang kami --}}
    <section class="about-section" id="tentang">

        {{-- Gambar kegiatan --}}
        <div class="about-image">

            <img
                src="{{ asset('images/tentang.jpg') }}"
                alt="Kegiatan edukasi dan sosialisasi literasi digital"
            >

            <div class="image-badge">
                Cerdas • Aman • Beretika
            </div>

        </div>

        {{-- Informasi program --}}
        <div class="about-content">

            <span class="section-label">
                TENTANG KAMI
            </span>

            <h2>
                Menciptakan budaya digital yang positif
            </h2>

            <p>
                PKM DigiWise hadir sebagai program pengabdian dan edukasi
                untuk memperkuat kemampuan masyarakat dalam memanfaatkan
                teknologi secara kritis, kreatif, aman, dan bertanggung jawab.
            </p>

            {{-- Kartu visi dan misi --}}
            <div class="about-cards">

                <div class="about-card vision">

                    <div class="about-card-icon" aria-hidden="true">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7Z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>

                    <h3>Visi</h3>

                    <p>
                        Mewujudkan generasi digital yang cerdas,
                        aman, dan berintegritas.
                    </p>

                </div>

                <div class="about-card mission">

                    <div class="about-card-icon" aria-hidden="true">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <circle cx="12" cy="12" r="9"/>
                            <circle cx="12" cy="12" r="5"/>
                            <circle cx="12" cy="12" r="1.5"/>
                        </svg>
                    </div>

                    <h3>Misi</h3>

                    <p>
                        Menyediakan pembelajaran digital yang aplikatif
                        dan mudah diakses.
                    </p>

                </div>

            </div>

        </div>

    </section>

@endsection