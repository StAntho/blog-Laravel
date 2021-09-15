<!DOCTYPE html>

    <title>Blog</title>

    <link rel="stylesheet" href="/app.css">

    <body>
        <header>
            @yield('banner')
        </header>
            {{ $slot }}
    </body>
</html>