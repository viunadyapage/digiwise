
@extends('layouts.app')

@section('title', 'Galeri - PKM DigiWise')

@section('content')

<section class="gallery-section">

    <div class="gallery-header">
        <span class="section-label">DOKUMENTASI</span>
        <h1>Galeri kegiatan PKM DigiWise</h1>
    </div>

    <div class="gallery-filters">
        <button class="gallery-filter active" data-filter="all">Semua</button>
        <button class="gallery-filter" data-filter="workshop">Workshop</button>
        <button class="gallery-filter" data-filter="kelas">Kelas</button>
        <button class="gallery-filter" data-filter="apresiasi">Apresiasi</button>
    </div>

    <div class="gallery-grid">

        <figure class="gallery-item" data-category="workshop">
            <img src="{{ asset('images/galeri-1.jpg') }}" alt="Kegiatan workshop DigiWise" loading="lazy">
        </figure>

        <figure class="gallery-item" data-category="kelas">
            <img src="{{ asset('images/galeri-2.jpg') }}" alt="Kegiatan pembelajaran digital" loading="lazy">
        </figure>

        <figure class="gallery-item" data-category="kelas">
            <img src="{{ asset('images/galeri-3.jpg') }}" alt="Peserta mengikuti kelas komputer" loading="lazy">
        </figure>

        <figure class="gallery-item" data-category="workshop">
            <img src="{{ asset('images/galeri-4.jpg') }}" alt="Dokumentasi workshop digital" loading="lazy">
        </figure>

        <figure class="gallery-item" data-category="apresiasi">
            <img src="{{ asset('images/galeri-5.jpg') }}" alt="Kegiatan edukasi keamanan digital" loading="lazy">
        </figure>

        <figure class="gallery-item" data-category="apresiasi">
            <img src="{{ asset('images/galeri-6.jpg') }}" alt="Dokumentasi kegiatan peserta DigiWise" loading="lazy">
        </figure>

    </div>

    <p class="gallery-empty" hidden>Belum ada foto untuk kategori ini.</p>

</section>

<script src="{{ asset('js/gallery.js') }}"></script>

@endsection
