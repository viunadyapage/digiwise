
@extends('layouts.app')

@section('title', 'Kontak - PKM DigiWise')

@section('content')
<section class="contact-page">
    <div class="contact-container">

        <div class="contact-info">
            <span class="section-label">HUBUNGI KAMI</span>

            <h1>Mari bangun ruang digital yang lebih baik</h1>

            <p class="contact-description">
                Punya pertanyaan, ide kolaborasi, atau ingin mengenal
                kegiatan DigiWise? Kirimkan pesan kepada tim kami melalui
                formulir feedback di samping.
            </p>

            <div class="contact-socials">
                <a href="https://instagram.com/pkmpm.digiwise?xtok=ZTRteXhwd3Z0NGZl"
                     target="_blank" rel="noopener noreferrer">
                      Instagram
                      <span>@pkmpm.digiwise</span>
                </a>
                <a href="https://www.tiktok.com/@pkmpm.digiwise?_r=1&_t=ZS-9AW5kZ47O89"
                     target="_blank" rel="noopener noreferrer">
                      Tiktok
                      <span>@pkmpm.digiwise</span>
                </a>
            </div>
        </div>

        <div class="contact-form-card">
            <h2>Kirim Feedback</h2>

            <p class="form-description">
                Isi formulir berikut dengan pertanyaan, saran, atau pesan
                untuk tim DigiWise.
            </p>

            @if (session('success'))
                <div class="form-alert form-alert-success" role="status">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="form-alert form-alert-error" role="alert">
                    Mohon periksa kembali data yang kamu masukkan.
                </div>
            @endif

            <form action="{{ route('kontak.kirim') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama lengkap</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama lengkap"
                        autocomplete="name"
                        maxlength="100"
                        required
                    >
                    @error('nama')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        maxlength="255"
                        required
                    >
                    @error('email')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input
                        type="text"
                        id="subjek"
                        name="subjek"
                        value="{{ old('subjek') }}"
                        placeholder="Topik pesan"
                        maxlength="150"
                        required
                    >
                    @error('subjek')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea
                        id="pesan"
                        name="pesan"
                        rows="5"
                        placeholder="Tuliskan pesan atau saran kamu..."
                        maxlength="5000"
                        required
                    >{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="contact-submit">
                    Kirim Feedback
                </button>
            </form>
        </div>

    </div>
</section>
@endsection
