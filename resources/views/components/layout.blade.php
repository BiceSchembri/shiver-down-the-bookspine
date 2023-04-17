<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/style.css">
        <title>Borrow A Shiver</title>
    </head>

    @include('components.header')

    <body>
        <main>
            @yield('content')
        </main>
    </body>
    
    @include('components.footer')

</html>
