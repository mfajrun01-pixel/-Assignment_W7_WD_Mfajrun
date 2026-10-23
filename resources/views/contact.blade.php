<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Halaman Contact</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex flex-col min-h-screen bg-white text-gray-800">

        @include('layouts.navbar')

        <main class="flex-grow container mx-auto px-4 py-8">
            <h1>HALAMAN CONTACT</h1>
            <p>Anda dapat menghubungi saya melalui informasi di bawah ini:</p>
            <ul>
                <li>Email: mfajrun01@student.ciputra.ac.id</li>
                <li>Telepon: (62) 895800940017</li>
                <li>instagram:
                    <a href="https://www.instagram.com/fajerunn_10" target="_blank">@fajerunn_10</a>
                </li>
            </ul>
        </main>

        @include('layouts.footer')

    </body>
</html>