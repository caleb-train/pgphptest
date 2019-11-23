<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>User Card - {{ $user->name ?? '' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
        <div id="wrapper">
            <section id="main">
                <header>
                    @yield('image')
                    <h1>@yield('title')</h1>
                    <p>@yield('body')</p>
                    <p>@yield('link')</p>
                </header>
            </section>
            <footer id="footer">
                <ul class="copyright">
                    <li>&copy; Pictureworks</li>
                </ul>
            </footer>

        </div>
        <script>
            if ('addEventListener' in window) {
                window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
                document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
            }
        </script>
    </body>
</html>
