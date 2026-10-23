<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="flex flex-col min-h-screen bg-white text-gray-800">
        @include('layouts.navbar')
        <main class="flex-grow container mx-auto px-4 py-8">
            <h1>HALAMAN ABOUT</h1>
            <h3>nama :
                {{ $nama }}</h3>
            <p>Umur:
                {{ $umur }}
                tahun</p>
            <p>Posisi:
                {{ $posisi }}</p>
            <img src="img/prof01.png" alt="gambar" width="700px">
        </main>
        @include('layouts.footer')

    </html>
</body>
</html>