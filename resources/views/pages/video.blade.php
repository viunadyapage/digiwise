
@extends('layouts.app')

@section('title', 'Belajar Melalui Video - PKM DigiWise')

@section('content')

<section class="video-page">
    <div class="video-header">
        <span class="section-label">VIDEO EDUKASI</span>
        <h1>Belajar Melalui Video</h1>
        <p>
            Perluas wawasan literasi digital melalui video edukasi
            pilihan PKM DigiWise.
        </p>
    </div>

    <div class="video-grid">

        <article class="video-card">
            <div class="video-embed">
                <iframe
                    src="https://www.instagram.com/reel/Ddt8VWeJPpy/embed/"
                    title="Video edukasi DigiWise 1"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <span>VIDEO 01</span>
                <h2>Video Edukasi 1</h2>
                <a href="https://www.instagram.com/reel/Ddt8VWeJPpy/"
                   target="_blank" rel="noopener noreferrer">
                    Tonton di Instagram ↗
                </a>
            </div>
        </article>

        <article class="video-card">
            <div class="video-embed">
                <iframe
                    src="https://www.instagram.com/reel/DdniUC_pVlB/embed/"
                    title="Video edukasi DigiWise 2"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <span>VIDEO 02</span>
                <h2>Video Edukasi 2</h2>
                <a href="https://www.instagram.com/reel/DdniUC_pVlB/"
                   target="_blank" rel="noopener noreferrer">
                    Tonton di Instagram ↗
                </a>
            </div>
        </article>

        <article class="video-card">
            <div class="video-embed">
                <iframe
                    src="https://www.instagram.com/reel/DdlwzuOJ_W_/embed/"
                    title="Video edukasi DigiWise 3"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <span>VIDEO 03</span>
                <h2>Video Edukasi 3</h2>
                <a href="https://www.instagram.com/reel/DdlwzuOJ_W_/"
                   target="_blank" rel="noopener noreferrer">
                    Tonton di Instagram ↗
                </a>
            </div>
        </article>

        <article class="video-card">
            <div class="video-embed">
                <iframe
                    src="https://www.instagram.com/reel/DdniUC_pVlB/embed/"
                    title="Video edukasi DigiWise 4"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <span>VIDEO 04</span>
                <h2>Video Edukasi 4</h2>
                <a href="https://www.instagram.com/reel/DdniUC_pVlB/"
                   target="_blank" rel="noopener noreferrer">
                    Tonton di Instagram ↗
                </a>
            </div>
        </article>

    </div>
</section>

@endsection
