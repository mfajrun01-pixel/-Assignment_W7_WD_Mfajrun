@extends('layouts.app')

@section('title', 'page about')

@section('content')
        <div class="mx-auto max-w-7xl">
            <header class="mx-auto mb-12 max-w-3xl text-center md:mb-16">
                <span class="inline-flex items-center gap-2 rounded-full border border-amber-200/20 bg-white/[0.03] px-4 py-2 text-sm text-zinc-300">
                    <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                    Sedikit tentang saya
                </span>
                <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-50 md:text-5xl">
                    Mengenal <span class="text-amber-200">lebih dekat.</span>
                </h1>
                <p class="mt-5 text-base leading-8 text-zinc-400 md:text-lg">
                    Cerita singkat tentang perjalanan, minat, dan teknologi yang saya gunakan untuk membangun sesuatu di web.
                </p>
            </header>

            <section class="grid items-stretch gap-6 lg:grid-cols-5" aria-label="Profil {{ $nama }}">
                <div class="relative min-h-[420px] overflow-hidden rounded-2xl border border-zinc-800 bg-[#111113] lg:col-span-2">
                    <img
                        src="{{ asset('img/prof01.png') }}"
                        alt="Foto profil {{ $nama }}"
                        class="absolute inset-0 h-full w-full object-cover object-center"
                        loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/25 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-6 sm:p-8">
                        <span class="inline-flex items-center gap-2 rounded-full border border-amber-200/30 bg-black/50 px-3 py-1.5 text-xs font-medium text-amber-100 backdrop-blur">
                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                            Terbuka untuk kolaborasi
                        </span>
                        <h2 class="mt-4 text-3xl font-bold text-white">{{ $nama }}</h2>
                        <p class="mt-2 text-sm text-zinc-300">{{ $posisi }} <span class="text-zinc-500">·</span> {{ $umur }} tahun</p>
                    </div>
                </div>

                <div class="flex flex-col justify-between rounded-2xl border border-zinc-800 bg-[#111113] p-6 sm:p-8 lg:col-span-3">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200/70">Perkenalkan</p>
                        <h2 class="mt-3 text-2xl font-semibold leading-snug text-zinc-100 sm:text-3xl">
                            Saya suka membangun hal yang berguna lewat teknologi.
                        </h2>
                        <p class="mt-5 text-sm leading-8 text-zinc-400 sm:text-base">
                            Saya {{ $nama }}, seorang {{ $posisi }} yang tertarik pada pengembangan web.
                            Saya menikmati proses mengubah ide menjadi aplikasi yang mudah digunakan,
                            mulai dari menyusun tampilan hingga mengembangkan fungsionalitasnya.
                        </p>
                        <p class="mt-4 text-sm leading-8 text-zinc-400 sm:text-base">
                            Saat ini saya terus mengembangkan kemampuan sebagai fullstack developer,
                            belajar hal baru, dan mengeksplorasi cara membuat pengalaman digital yang
                            fungsional, responsif, serta nyaman digunakan.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-3 border-t border-zinc-800 pt-6">
                        <div class="rounded-xl border border-zinc-800 bg-black/20 p-4">
                            <p class="text-xs uppercase tracking-wider text-zinc-500">Fokus</p>
                            <p class="mt-2 text-sm font-semibold text-zinc-100">Web Development</p>
                        </div>
                        <div class="rounded-xl border border-zinc-800 bg-black/20 p-4">
                            <p class="text-xs uppercase tracking-wider text-zinc-500">Peran</p>
                            <p class="mt-2 text-sm font-semibold text-zinc-100">Fullstack Developer</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-6 rounded-2xl border border-zinc-800 bg-[#111113] p-6 sm:p-8" aria-labelledby="tech-stack-title">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200/70">Teknologi</p>
                        <h2 id="tech-stack-title" class="mt-2 text-2xl font-semibold text-zinc-100">Tools yang saya gunakan</h2>
                    </div>
                    <p class="max-w-lg text-sm leading-6 text-zinc-400">Teknologi yang saya pakai untuk membangun dan mengembangkan aplikasi.</p>
                </div>

                <ul class="mt-6 flex flex-wrap gap-3" aria-label="Daftar teknologi">
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">Java</li>
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">PHP</li>
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">Laravel</li>
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">JavaScript</li>
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">HTML</li>
                    <li class="rounded-full border border-amber-200/20 bg-amber-200/[0.06] px-4 py-2 text-sm font-medium text-amber-100">CSS</li>
                </ul>
            </section>

            <div class="mt-6 flex flex-col items-center justify-between gap-5 rounded-2xl border border-zinc-800 bg-[#111113] p-6 text-center sm:flex-row sm:p-8 sm:text-left">
                <div>
                    <h2 class="text-xl font-semibold text-zinc-100">Mari buat sesuatu bersama.</h2>
                    <p class="mt-2 text-sm leading-6 text-zinc-400">Punya ide atau ingin berdiskusi? Saya terbuka untuk terhubung.</p>
                </div>
                <a
                    href="/contact"
                    class="inline-flex shrink-0 items-center gap-2 rounded-lg border border-amber-200 bg-amber-200 px-5 py-3 text-sm font-bold text-zinc-950 transition hover:bg-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                    Hubungi Saya <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
@endsection
