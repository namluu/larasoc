<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header-top">
                <div class="container">header top</div>
            </div>
            <div class="header-logo">
                <div class="container">
                    <h1><a class="logo-header" href="{{ url('/') }}">LOGO</a></h1>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">menu</div>
            </div>
        </header>
        <div id="app" class="container">@yield('content')</div>
        <footer>
            <div class="footer-icon">
                <div class="container">icon</div>
            </div>
            <div class="footer-link">
                <div class="container">link</div>
            </div>
            <div class="footer-copy">
                <div class="container">copyright</div>
            </div>
        </footer>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
