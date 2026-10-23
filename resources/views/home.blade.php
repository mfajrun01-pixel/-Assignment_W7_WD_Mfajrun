<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col min-h-screen bg-white text-gray-800">

        @include('layouts.navbar')

        <main class="flex-grow container mx-auto px-4 py-8">
            <h1>HALAMAN HOME</h1>
            <p>Selamat datang di halaman utama website saya. Di sini, Anda dapat menemukan
                berbagai informasi menarik dan konten terbaru yang saya bagikan. Terima kasih
                telah mengunjungi situs ini!</p>
        </main>

        @include('layouts.footer')

        <script src="js/script.js"></script>
    </body>
</html>