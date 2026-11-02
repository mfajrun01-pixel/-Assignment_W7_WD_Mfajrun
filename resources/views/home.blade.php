@extends('layouts.app')

@section('title', 'Page Home')

@section('content')
        <section class="relative isolate overflow-hidden px-4 py-16 md:px-8 md:py-24">
            <div
                class="pointer-events-none absolute -right-32 -top-24 -z-10 h-96 w-96 rounded-full bg-amber-200/10 blur-3xl"
                aria-hidden="true"></div>

            <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-2 lg:gap-20">
                <div class="max-w-2xl">
                    <div
                        class="mb-7 inline-flex items-center gap-2 rounded-full border border-amber-200/20 bg-white/[0.03] px-4 py-2 text-sm text-zinc-300">
                        <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                        Fullstack Developer
                    </div>

                    <p class="mb-3 text-sm font-semibold uppercase tracking-[0.28em] text-amber-200/80">
                        Halo, saya
                    </p>
                    <h1 class="text-4xl font-bold leading-tight tracking-tight text-zinc-50 sm:text-5xl lg:text-6xl">
                        M. Fajrun A.
                        <span class="mt-1 block text-amber-200">Adillah Bustam</span>
                    </h1>
                    <p class="mt-6 max-w-xl text-base leading-8 text-zinc-400 sm:text-lg">
                        Saya membangun pengalaman digital yang fungsional, responsif, dan nyaman digunakan —
                        dari antarmuka hingga logika di balik layar.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3" aria-label="Teknologi yang digunakan">
                        <span class="rounded-full border border-zinc-700 bg-zinc-900/80 px-4 py-2 text-sm font-medium text-zinc-200">Java</span>
                        <span class="rounded-full border border-zinc-700 bg-zinc-900/80 px-4 py-2 text-sm font-medium text-zinc-200">PHP · Laravel</span>
                        <span class="rounded-full border border-zinc-700 bg-zinc-900/80 px-4 py-2 text-sm font-medium text-zinc-200">JavaScript</span>
                        <span class="rounded-full border border-zinc-700 bg-zinc-900/80 px-4 py-2 text-sm font-medium text-zinc-200">HTML &amp; CSS</span>
                    </div>

                    <div class="mt-10 flex flex-wrap items-center gap-4">
                        <a
                            href="/contact"
                            class="inline-flex items-center gap-2 rounded-lg border border-amber-200 bg-amber-200 px-6 py-3 text-sm font-bold text-zinc-950 transition hover:border-amber-100 hover:bg-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                            Hubungi Saya
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 17 17 7M7 7h10v10"/>
                            </svg>
                        </a>
                        <a
                            href="/about"
                            class="inline-flex items-center rounded-lg border border-zinc-700 px-6 py-3 text-sm font-semibold text-zinc-200 transition hover:border-zinc-500 hover:bg-white/[0.04] focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                            Kenali Saya
                        </a>
                    </div>
                </div>

                <div class="relative mx-auto w-full max-w-xl">
                    <div
                        class="absolute -inset-5 rounded-[2rem] bg-gradient-to-br from-amber-200/10 via-transparent to-zinc-500/10 blur-2xl"
                        aria-hidden="true"></div>
                    <div class="relative overflow-hidden rounded-2xl border border-zinc-700/80 bg-[#101012] shadow-2xl shadow-black/50">
                        <div class="flex items-center justify-between border-b border-zinc-800 px-5 py-4">
                            <div class="flex items-center gap-2" aria-hidden="true">
                                <span class="h-2.5 w-2.5 rounded-full bg-zinc-600"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-zinc-600"></span>
                                <span class="h-2.5 w-2.5 rounded-full bg-zinc-600"></span>
                            </div>
                            <span class="text-xs font-medium tracking-wide text-zinc-500">developer.profile</span>
                        </div>

                        <div class="space-y-5 p-6 sm:p-8">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200/70">Yang saya kerjakan</p>
                                <h2 class="mt-2 text-2xl font-semibold text-zinc-100">Dari ide jadi produk.</h2>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Menghubungkan desain, aplikasi, dan teknologi untuk membuat solusi digital yang bermanfaat.
                                </p>
                            </div>

                            <div class="space-y-3 rounded-xl border border-zinc-800 bg-black/30 p-4 font-mono text-xs sm:text-sm">
                                <p><span class="text-zinc-500">01</span> <span class="text-violet-300">const</span> <span class="text-sky-200">developer</span> = {</p>
                                <p class="pl-6"><span class="text-amber-200">frontend</span>: <span class="text-emerald-300">"JavaScript, HTML, CSS"</span>,</p>
                                <p class="pl-6"><span class="text-amber-200">backend</span>: <span class="text-emerald-300">"Java, PHP, Laravel"</span>,</p>
                                <p class="pl-6"><span class="text-amber-200">focus</span>: <span class="text-emerald-300">"solusi yang berdampak"</span></p>
                                <p>};</p>
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-3 border-t border-zinc-800 pt-5">
                                <span class="text-sm text-zinc-400">Siap untuk berkolaborasi</span>
                                <a href="/contact" class="text-sm font-semibold text-amber-200 transition hover:text-amber-100">
                                    Mulai percakapan <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
