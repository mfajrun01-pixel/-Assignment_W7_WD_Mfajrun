<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#09090b">
        <title>@yield('title', config('app.name'))</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body class="bg-primary flex min-h-screen flex-col">
        @include('partials.navbar')

        <main class="px-4 py-16 md:px-8 md:py-24">
            @yield('content')
        </main>

        @include('partials.footer')

        <script src="{{ asset('js/script.js') }}"></script>
        
    </body>
</html>