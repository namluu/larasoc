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
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">header top</div>
                        <div class="col-md-6 text-right">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-logo clearfix">
                <div class="container">
                    <h1 class="float-left"><a class="logo-header" href="{{ url('/') }}">LOGO</a></h1>
                    <div class="float-right">
                        <input type="text" placeholder="Tìm kiếm tin tức">
                    </div>
                </div>
            </div>
            <div class="header-menu">
                <div class="container">
                    <x-menu/>
                </div>
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
