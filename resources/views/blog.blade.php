<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Halaman Blog</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col min-h-screen bg-white text-gray-800">
        @include('layouts.navbar')

        <main class="flex-grow container mx-auto px-4 py-8">
            <h1>HALAMAN BLOG</h1>
            <article>
                <h2>Artikel</h2>
                <p>Saya adalah seorang developer yang passionate dalam membuat aplikasi web yang
                    indah dan functional. Dengan pengalaman di berbagai proyek, saya selalu berusaha
                    memberikan solusi terbaik untuk setiap tantangan digital.</p>
            </article>
        </main>

        @include('layouts.footer')

    </body>
</html>