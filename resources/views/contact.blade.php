@extends('layouts.app')

@section('title', 'page contact')

@section('content')
        <div class="mx-auto max-w-7xl">
            <header class="mx-auto mb-12 max-w-3xl text-center md:mb-16">
                <span class="inline-flex items-center gap-2 rounded-full border border-amber-200/20 bg-white/[0.03] px-4 py-2 text-sm text-zinc-300">
                    <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                    Mari terhubung
                </span>
                <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-50 md:text-5xl">
                    Punya ide? <span class="text-amber-200">Mari bicarakan.</span>
                </h1>
                <p class="mt-5 text-base leading-8 text-zinc-400 md:text-lg">
                    Terbuka untuk kolaborasi, proyek web, dan obrolan seputar teknologi.
                    Kirim pesan atau hubungi saya lewat kanal berikut.
                </p>
            </header>

            <div
                id="alertSuccess"
                class="hidden mb-6 items-center justify-between gap-4 rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-4 text-emerald-300"
                role="alert"
                aria-live="polite">
                <span id="alertMessage" class="text-sm font-medium">Pesan berhasil dikirim!</span>
                <button type="button" id="closeSuccessAlert" class="rounded px-2 py-1 font-bold hover:bg-emerald-500/10" aria-label="Tutup notifikasi">&times;</button>
            </div>

            <div
                id="alertError"
                class="hidden mb-6 items-center justify-between gap-4 rounded-xl border border-rose-500/30 bg-rose-500/10 p-4 text-rose-300"
                role="alert"
                aria-live="assertive">
                <span id="alertErrorMessage" class="text-sm font-medium">Terjadi kesalahan pada input form.</span>
                <button type="button" id="closeErrorAlert" class="rounded px-2 py-1 font-bold hover:bg-rose-500/10" aria-label="Tutup notifikasi">&times;</button>
            </div>

            <div class="grid items-start gap-6 lg:grid-cols-5">
                <section class="rounded-2xl border border-zinc-800 bg-[#111113] p-6 shadow-2xl shadow-black/20 md:p-8 lg:col-span-2" aria-labelledby="contact-info-title">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200/70">Kontak langsung</p>
                    <h2 id="contact-info-title" class="mt-2 text-2xl font-semibold text-zinc-100">Informasi Kontak</h2>
                    <p class="mt-3 text-sm leading-7 text-zinc-400">Pilih cara yang paling nyaman untuk menghubungi saya.</p>

                    <div class="mt-7 space-y-3">
                        <a
                            href="https://wa.me/62895800940017?text=Halo%20Fajrun"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="contact-item-card group flex items-center gap-4 rounded-xl border border-zinc-800 bg-black/20 p-4 hover:border-amber-200/40 hover:bg-white/[0.03]">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-amber-200/20 bg-amber-200/[0.07] text-sm font-bold text-amber-200">WA</span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-semibold text-zinc-100">WhatsApp</span>
                                <span class="mt-1 block text-xs text-zinc-400">0895-8009-40017</span>
                            </span>
                            <span class="text-zinc-500 transition group-hover:translate-x-0.5 group-hover:text-amber-200" aria-hidden="true">↗</span>
                        </a>

                        <a
                            href="tel:+62895800940017"
                            class="contact-item-card group flex items-center gap-4 rounded-xl border border-zinc-800 bg-black/20 p-4 hover:border-amber-200/40 hover:bg-white/[0.03]">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-amber-200/20 bg-amber-200/[0.07] text-lg text-amber-200" aria-hidden="true">⌕</span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-semibold text-zinc-100">Telepon</span>
                                <span class="mt-1 block text-xs text-zinc-400">0895-8009-40017</span>
                            </span>
                            <span class="text-zinc-500 transition group-hover:translate-x-0.5 group-hover:text-amber-200" aria-hidden="true">↗</span>
                        </a>

                        <a
                            href="mailto:mfajrun01@student.ciputra.ac.id"
                            class="contact-item-card group flex items-center gap-4 rounded-xl border border-zinc-800 bg-black/20 p-4 hover:border-amber-200/40 hover:bg-white/[0.03]">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-amber-200/20 bg-amber-200/[0.07] text-lg text-amber-200" aria-hidden="true">@</span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-semibold text-zinc-100">Email</span>
                                <span class="mt-1 block truncate text-xs text-zinc-400">mfajrun01@student.ciputra.ac.id</span>
                            </span>
                            <span class="text-zinc-500 transition group-hover:translate-x-0.5 group-hover:text-amber-200" aria-hidden="true">↗</span>
                        </a>

                        <a
                            href="https://maps.google.com/?q=Makassar"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="contact-item-card group flex items-center gap-4 rounded-xl border border-zinc-800 bg-black/20 p-4 hover:border-amber-200/40 hover:bg-white/[0.03]">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-amber-200/20 bg-amber-200/[0.07] text-lg text-amber-200" aria-hidden="true">⌖</span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-sm font-semibold text-zinc-100">Lokasi</span>
                                <span class="mt-1 block text-xs text-zinc-400">Makassar, Indonesia</span>
                            </span>
                            <span class="text-zinc-500 transition group-hover:translate-x-0.5 group-hover:text-amber-200" aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="my-7 border-t border-zinc-800"></div>
                    <h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-zinc-400">Temukan saya</h3>
                    <div class="mt-4 grid grid-cols-2 gap-3">
                        <a
                            href="https://github.com/mfajrun01-pixel"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-icon-card flex items-center justify-center gap-2 rounded-xl border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-medium text-zinc-300 hover:border-amber-200/40 hover:text-amber-200">
                            <span aria-hidden="true">⌘</span> GitHub
                        </a>
                        <a
                            href="https://www.instagram.com/fajerunn_10"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-icon-card flex items-center justify-center gap-2 rounded-xl border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-medium text-zinc-300 hover:border-amber-200/40 hover:text-amber-200">
                            <span aria-hidden="true">◎</span> Instagram
                        </a>
                    </div>
                </section>

                <section class="rounded-2xl border border-zinc-800 bg-[#111113] p-6 shadow-2xl shadow-black/20 md:p-8 lg:col-span-3" aria-labelledby="contact-form-title">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-amber-200/70">Kirim pesan</p>
                    <h2 id="contact-form-title" class="mt-2 text-2xl font-semibold text-zinc-100">Ceritakan ide Anda</h2>
                    <p class="mt-3 text-sm leading-7 text-zinc-400">Isi formulir di bawah ini. Saya akan senang mendengar tentang rencana atau proyek Anda.</p>

                    <form id="contactForm" novalidate="novalidate" class="mt-7 space-y-5">
                        @csrf
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="nama" class="mb-2 block text-xs font-semibold uppercase tracking-wider text-zinc-300">
                                    Nama <span class="text-amber-200">*</span>
                                </label>
                                <input
                                    type="text"
                                    name="nama"
                                    id="nama"
                                    autocomplete="name"
                                    placeholder="Nama lengkap Anda"
                                    required
                                    class="custom-input w-full rounded-xl border border-zinc-700 bg-black/30 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-200/20">
                                <p class="mt-1.5 hidden text-xs text-rose-400" id="errorNama">Nama tidak boleh kosong (minimal 3 karakter)</p>
                            </div>

                            <div>
                                <label for="email" class="mb-2 block text-xs font-semibold uppercase tracking-wider text-zinc-300">
                                    Email <span class="text-amber-200">*</span>
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    autocomplete="email"
                                    placeholder="nama@domain.com"
                                    required
                                    class="custom-input w-full rounded-xl border border-zinc-700 bg-black/30 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-200/20">
                                <p class="mt-1.5 hidden text-xs text-rose-400" id="errorEmail">Masukkan email yang valid (contoh: nama@domain.com)</p>
                            </div>
                        </div>

                        <div>
                            <label for="subjek" class="mb-2 block text-xs font-semibold uppercase tracking-wider text-zinc-300">Subjek</label>
                            <input
                                type="text"
                                name="subjek"
                                id="subjek"
                                placeholder="Contoh: Kolaborasi proyek web"
                                class="custom-input w-full rounded-xl border border-zinc-700 bg-black/30 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-200/20">
                        </div>

                        <div>
                            <label for="pesan" class="mb-2 block text-xs font-semibold uppercase tracking-wider text-zinc-300">
                                Pesan <span class="text-amber-200">*</span>
                            </label>
                            <textarea
                                name="pesan"
                                id="pesan"
                                rows="5"
                                maxlength="500"
                                placeholder="Ceritakan sedikit tentang ide atau kebutuhan Anda..."
                                required
                                class="custom-input w-full resize-y rounded-xl border border-zinc-700 bg-black/30 px-4 py-3 text-sm text-zinc-100 placeholder-zinc-500 transition focus:border-amber-200 focus:outline-none focus:ring-2 focus:ring-amber-200/20"></textarea>
                            <div class="mt-1.5 flex items-center justify-between gap-4">
                                <p class="hidden text-xs text-rose-400" id="errorPesan">Pesan tidak boleh kosong (minimal 10 karakter)</p>
                                <p class="ml-auto text-xs text-zinc-500"><span id="charCount">0</span>/500 karakter</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3 pt-1">
                            <button
                                type="submit"
                                id="submitBtn"
                                class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-amber-200 bg-amber-200 px-6 py-3.5 text-sm font-bold text-zinc-950 transition hover:bg-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                                Kirim Pesan <span aria-hidden="true">→</span>
                            </button>
                            <button
                                type="reset"
                                id="resetBtn"
                                class="rounded-xl border border-zinc-700 bg-zinc-900 px-6 py-3.5 text-sm font-semibold text-zinc-300 transition hover:border-zinc-500 hover:bg-zinc-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                                Bersihkan
                            </button>
                        </div>
                        <p class="text-xs leading-5 text-zinc-500">Kolom bertanda * wajib diisi. Pesan dibatasi maksimal 500 karakter.</p>
                    </form>
                </section>
            </div>
        </div>
@endsection
