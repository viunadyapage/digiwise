<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PKM DigiWise')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- bagian navbar -->
    <header class="navbar">

        <!-- Logo -->
        <a href="/" class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Logo PKM DigiWise">
            <span>PKM DigiWise</span>
        </a>

        <!-- Navigation -->
        <nav class="nav-menu">
            <a href="{{ route('beranda') }}">Beranda</a>
            <a href="{{ route('modul') }}">Modul</a>
            <a href="#">Video</a>
            <a href="{{ route('galeri') }}">Galeri</a>
            <a href="{{ route('faq') }}">FAQ</a>
            <a href="#">Kontak</a>
        </nav>

        <!-- Day / Night Mode -->
        <button
            id="themeToggle"
            class="theme-toggle"
            aria-label="Ganti tema"
        >

            <!-- Moon Icon -->
            <svg
                id="moonIcon"
                xmlns="http://www.w3.org/2000/svg"
                width="19"
                height="19"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="M21 12.79A9 9 0 1 1 11.21 3
                         7 7 0 0 0 21 12.79z"/>
            </svg>

            <!-- Sun Icon -->
            <svg
                id="sunIcon"
                xmlns="http://www.w3.org/2000/svg"
                width="19"
                height="19"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                style="display: none;"
            >
                <circle cx="12" cy="12" r="4"/>
                <path d="M12 2v2"/>
                <path d="M12 20v2"/>
                <path d="m4.93 4.93 1.41 1.41"/>
                <path d="m17.66 17.66 1.41 1.41"/>
                <path d="M2 12h2"/>
                <path d="M20 12h2"/>
                <path d="m6.34 17.66-1.41 1.41"/>
                <path d="m19.07 4.93-1.41 1.41"/>
            </svg>

        </button>

    </header>


    <!-- content -->

    <main>
        @yield('content')
    </main>


    <!-- js -->

    <script src="{{ asset('js/theme.js') }}"></script>

</body>
</html>