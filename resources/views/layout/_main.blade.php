<!doctype html>
<html lang="en">
<head>
    <title>{{$namaHalaman}}</title>
    <link rel="stylesheet" href="{{ asset('stylecss.css') }}">
</head>
<body>
<div class="d-flex flex-column min-vh-100 justify-content-between">
    <header>
        @include('layout._header')
    </header>
    <nav>
        @include('layout._navbar')
    </nav>
    <main class="flex-grow-1">@yield('content')</main>
    <footer>
        @include('layout._footer')
    </footer>
</div>

<script src="{{ asset('stylejs.min.js') }}"></script>
</body>
</html>