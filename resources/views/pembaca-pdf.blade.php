@extends('layouts.app')

@section('title', 'Baca Modul - PKM DigiWise')

@section('content')

<section class="reader-page">

    <div class="reader-header">
        <div>
            <span class="section-label">MODUL PEMBELAJARAN</span>
            <h1>MODUL PKM DIGIWISE</h1>
            <p id="pageCounter">Memuat dokumen...</p>
        </div>

        <a href="{{ route('modul') }}" class="btn btn-secondary">
            Kembali ke Modul
        </a>
    </div>

    <div id="readerLoading">Memuat halaman PDF...</div>

    <div class="book-stage">
        <button id="prevPage" class="page-arrow" aria-label="Halaman sebelumnya">
            ‹
        </button>

        <div id="book" class="book"></div>

        <button id="nextPage" class="page-arrow" aria-label="Halaman berikutnya">
            ›
        </button>
    </div>

    <div class="reader-controls">
        <button id="firstPage">Halaman pertama</button>
        <span id="currentPage">1</span>
        <button id="lastPage">Halaman terakhir</button>
    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.min.js"></script>
<script src="{{ asset('js/pdf-reader.js') }}"></script>

@endsection