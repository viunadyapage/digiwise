
@extends('layouts.app')

@section('title', 'Modul Pembelajaran - PKM DigiWise')

@section('content')

<section class="module-page">

    <div class="module-header">
        <span class="section-label">MODUL PEMBELAJARAN</span>

        <h1>Modul Pembelajaran DigiWise</h1>

        <p>
            Pelajari materi PKM DigiWise untuk membangun kebiasaan
            digital yang cerdas, aman, dan bertanggung jawab.
        </p>
    </div>

    <article class="module-card">

        <div class="module-cover">
            <img
                src="{{ asset('images/cover.png') }}"
                alt="Cover Modul PKM DigiWise"
            >
        </div>

        <div class="module-info">

            <span class="module-category">MODUL UTAMA</span>

            <h2>MODUL PKM DIGIWISE</h2>

            <p>
                Materi pembelajaran literasi digital untuk mendukung
                penggunaan teknologi secara bijak dan bertanggung jawab.
            </p>

            <div class="module-file">
                <span>Dokumen PDF</span>
                <span>MODUL PKM DIGIWISE.pdf</span>
            </div>

            <a
                href="{{ asset('documents/MODUL PKM DIGIWISE.pdf') }}"
                class="btn btn-primary module-read"
                target="_blank"
                rel="noopener noreferrer"
            >
                Baca Modul
            </a>

        </div>

    </article>

</section>

@endsection
