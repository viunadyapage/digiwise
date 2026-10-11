@extends('layouts.app')

@section('title', 'Beranda - PKM DigiWise')

@section('content')

<section class="hero">

    <!-- text -->

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

        <div class="hero-buttons">

            <a href="#" class="btn btn-primary">
                Pelajari Modul
            </a>

            <a href="#" class="btn btn-secondary">
                Mulai Menonton
            </a>

        </div>

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


    <!-- image pkm -->

    <div class="hero-image">

        <img
            src="{{ asset('images/sementara.jpg') }}"
            alt="Anak belajar menggunakan teknologi"
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

@endsection