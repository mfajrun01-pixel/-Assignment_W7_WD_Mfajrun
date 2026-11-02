@extends('layouts.app')

@section('title', 'page blog')

@section('content')
        <section class="px-4 py-16 md:px-8 md:py-24">
            <div class="mx-auto max-w-7xl">
                <div class="mx-auto mb-12 max-w-3xl text-center md:mb-16">
                    <span class="inline-flex items-center gap-2 rounded-full border border-amber-200/20 bg-white/[0.03] px-4 py-2 text-sm text-zinc-300">
                        <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                        Area yang saya tekuni
                    </span>
                    <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-50 md:text-5xl">
                        Dari ide, jadi <span class="text-amber-200">pengalaman digital.</span>
                    </h1>
                    <p class="mt-5 text-base leading-8 text-zinc-400 md:text-lg">
                        Saya tertarik pada berbagai bagian dalam pembuatan produk digital — mulai dari desain antarmuka
                        hingga pengembangan aplikasi web.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($focusAreas as $area)
                        <article class="group relative flex min-h-72 flex-col overflow-hidden rounded-2xl border border-zinc-800 bg-[#111113] p-6 transition duration-300 hover:-translate-y-1 hover:border-amber-200/40 hover:bg-[#151517]">
                            <div class="mb-8 flex items-start justify-between">
                                <span class="text-xs font-semibold tracking-[0.2em] text-zinc-500">{{ $area['number'] }}</span>
                                <span class="flex h-12 min-w-12 items-center justify-center rounded-xl border border-amber-200/20 bg-amber-200/[0.06] px-2 font-mono text-sm font-semibold text-amber-200 transition group-hover:bg-amber-200/10">
                                    {{ $area['symbol'] }}
                                </span>
                            </div>

                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-amber-200/70">
                                {{ $area['category'] }}
                            </p>
                            <h2 class="mt-2 text-xl font-semibold text-zinc-100">{{ $area['title'] }}</h2>
                            <p class="mt-3 flex-1 text-sm leading-7 text-zinc-400">{{ $area['description'] }}</p>

                            <div class="mt-6 flex flex-wrap gap-2 border-t border-zinc-800 pt-5">
                                @foreach ($area['tools'] as $tool)
                                    <span class="rounded-full border border-zinc-800 bg-black/30 px-3 py-1.5 text-xs text-zinc-300">
                                        {{ $tool }}
                                    </span>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12 flex flex-col items-center justify-between gap-5 rounded-2xl border border-zinc-800 bg-[#111113] p-6 text-center sm:flex-row sm:p-8 sm:text-left">
                    <div>
                        <h2 class="text-xl font-semibold text-zinc-100">Punya ide untuk diwujudkan?</h2>
                        <p class="mt-2 text-sm leading-6 text-zinc-400">Mari ngobrol tentang kebutuhan atau proyek Anda.</p>
                    </div>
                    <a
                        href="/contact"
                        class="inline-flex shrink-0 items-center gap-2 rounded-lg border border-amber-200 bg-amber-200 px-5 py-3 text-sm font-bold text-zinc-950 transition hover:bg-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                        Hubungi Saya <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>
@endsection
