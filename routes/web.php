<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'fajrun', 'umur' => 20, 'posisi' => 'mahasiswa']);
});

Route::get('/blog', function () {
    $focusAreas = [
        [
            'number' => '01',
            'category' => 'End-to-end development',
            'title' => 'Fullstack Development',
            'description' => 'Membangun aplikasi dari antarmuka hingga backend, dengan alur yang terhubung dan pengalaman yang konsisten.',
            'tools' => ['Java', 'PHP', 'Laravel', 'JavaScript'],
            'symbol' => '</>',
        ],
        [
            'number' => '02',
            'category' => 'Interface development',
            'title' => 'Frontend Development',
            'description' => 'Mengubah desain menjadi halaman web responsif yang mudah digunakan di berbagai ukuran layar.',
            'tools' => ['JavaScript', 'HTML', 'CSS'],
            'symbol' => 'UI',
        ],
        [
            'number' => '03',
            'category' => 'Design & usability',
            'title' => 'UI/UX Design',
            'description' => 'Merancang tampilan yang rapi dan alur interaksi yang jelas, dengan fokus pada kebutuhan pengguna.',
            'tools' => ['User flow', 'Wireframe', 'Interface'],
            'symbol' => '✳',
        ],
        [
            'number' => '04',
            'category' => 'Web products',
            'title' => 'Web Application',
            'description' => 'Membuat aplikasi web interaktif untuk membantu kebutuhan dan aktivitas sehari-hari.',
            'tools' => ['Laravel', 'PHP', 'JavaScript'],
            'symbol' => '↗',
        ],
        [
            'number' => '05',
            'category' => 'Application logic',
            'title' => 'Backend Development',
            'description' => 'Menyusun logika aplikasi dan proses di sisi server agar fitur berjalan dengan baik.',
            'tools' => ['Java', 'PHP', 'Laravel'],
            'symbol' => '{ }',
        ],
        [
            'number' => '06',
            'category' => 'Responsive by default',
            'title' => 'Responsive Website',
            'description' => 'Membangun tampilan yang tetap nyaman dan konsisten, baik di ponsel maupun desktop.',
            'tools' => ['HTML', 'CSS', 'JavaScript'],
            'symbol' => '▣',
        ],
        [
            'number' => '06',
            'category' => 'Responsive by default',
            'title' => 'Responsive Website',
            'description' => 'Membangun tampilan yang tetap nyaman dan konsisten, baik di ponsel maupun desktop.',
            'tools' => ['HTML', 'CSS', 'JavaScript'],
            'symbol' => '▣',
            
        ],
    ];

    return view('blog', compact('focusAreas'));
});

Route::get('/contact', function () {
    return view('contact');
});