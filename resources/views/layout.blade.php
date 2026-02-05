<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Layout test</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/szolgaltatasok.css') }}">
    @stack('page-styles')
</head>
<body>
    <header>
        @include('partials.menu')
    </header>
    <main>
        @yield('content', 'Default page content goes here.')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
