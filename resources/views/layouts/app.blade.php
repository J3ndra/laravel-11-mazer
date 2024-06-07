<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - {{ $title }}</title>
    @vite(['resources/sass/app.scss', 'resources/sass/themes/dark/app-dark.scss'])
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/static/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    @vite('resources/js/initTheme.js')
    <div id="app">
        <div id="sidebar">
            @include('layouts.partials.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            {{ $slot }}
            @include('layouts.partials.footer')
        </div>
    </div>

    @vite([
        'resources/js/app.js',
        'resources/js/components/dark.js',
    ])
    {{-- <script src="assets/js/app.js" type="module"></script> --}}

</body>

</html>
