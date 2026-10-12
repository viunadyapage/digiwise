
@extends('layouts.app')

@section('title', 'FAQ - PKM DigiWise')

@section('content')

<section class="faq-section">

    <div class="faq-header">
        <span class="section-label">FAQ</span>
        <h1>Pertanyaan yang sering ditanyakan</h1>
    </div>

    <div class="faq-list">

        <details class="faq-item">
            <summary>
                <span>Siapa yang dapat mengikuti pembelajaran DigiWise?</span>
                <span class="faq-icon"></span>
            </summary>
            <div class="faq-answer">
                Modul DigiWise dirancang untuk pelajar, pendidik,
                orang tua, dan masyarakat umum yang ingin meningkatkan
                kecakapan digital.
            </div>
        </details>

        <details class="faq-item">
            <summary>
                <span>Apakah materi modul dapat diunduh?</span>
                <span class="faq-icon"></span>
            </summary>
            <div class="faq-answer">
                Ya. Buka materi melalui tombol Baca Modul untuk
                mengakses dokumen PDF. Dokumen dapat diunduh melalui
                fitur unduh pada pembaca PDF jika tersedia.
            </div>
        </details>

        <details class="faq-item">
            <summary>
                <span>Bagaimana cara memperbarui materi?</span>
                <span class="faq-icon"></span>
            </summary>
            <div class="faq-answer">
                Pengelola dapat memperbarui file materi dan
                menyesuaikan dokumen yang tersedia di website
                agar peserta memperoleh versi terbaru.
            </div>
        </details>

    </div>

</section>

@endsection
