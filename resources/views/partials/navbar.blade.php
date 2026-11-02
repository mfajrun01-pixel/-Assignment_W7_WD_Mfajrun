<nav
    class="relative z-10 border-b border-white/[0.06] bg-[#0d0d0f]/95 px-4 backdrop-blur-xl md:px-8"
    aria-label="Navigasi utama">
    <div
        class="mx-auto flex min-h-[76px] max-w-7xl items-center justify-between gap-6">
        <a
            href="/"
            class="group inline-flex shrink-0 items-center gap-3 rounded-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
            <span
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-amber-200/30 bg-amber-200/[0.08] text-sm font-bold tracking-tight text-amber-100 transition group-hover:bg-amber-200/[0.14]">FA</span>
            <span>
                <span class="block text-sm font-bold tracking-wide text-zinc-100">FA<span class="text-amber-200">.</span>
                </span>
                <span
                    class="mt-0.5 block text-[10px] font-medium uppercase tracking-[0.18em] text-zinc-500">Fullstack Developer</span>
            </span>
        </a>

        <div
            id="collapseMenu"
            tabindex="-1"
            class="fixed inset-y-0 right-0 z-50 hidden h-screen w-[min(88vw,360px)] overflow-y-auto border-l border-zinc-800 bg-[#101012] shadow-2xl shadow-black/50 outline-none lg:static lg:z-auto lg:block lg:h-auto lg:w-auto lg:overflow-visible lg:border-0 lg:bg-transparent lg:shadow-none">
            <div
                class="flex min-h-[76px] items-center justify-between border-b border-zinc-800 px-6 lg:hidden">
                <span class="text-sm font-semibold text-zinc-100">Jelajahi halaman</span>
                <button
                    type="button"
                    aria-controls="collapseMenu"
                    id="toggleClose"
                    class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-lg border border-zinc-700 text-zinc-300 transition hover:border-amber-200/40 hover:text-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200">
                    <span class="sr-only">Tutup menu utama</span>
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m6 6 12 12M18 6 6 18"/>
                    </svg>
                </button>
            </div>

            <div
                class="flex h-[calc(100%-76px)] flex-col justify-between p-6 lg:h-auto lg:flex-row lg:items-center lg:justify-center lg:p-0">
                <ul class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-1">
                    <li>
                        <a
                            href="/"
                            @class([ 'block rounded-lg px-4 py-3 text-sm font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 lg:py-2.5', 'bg-amber-200/[0.08] text-amber-100 lg:bg-white/[0.06]' => request()->is('/'), 'text-zinc-400 hover:bg-white/[0.04] hover:text-zinc-100' => !request()->is('/'), ])>Home</a>
                    </li>
                    <li>
                        <a
                            href="/blog"
                            @class([ 'block rounded-lg px-4 py-3 text-sm font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 lg:py-2.5', 'bg-amber-200/[0.08] text-amber-100 lg:bg-white/[0.06]' => request()->is('blog'), 'text-zinc-400 hover:bg-white/[0.04] hover:text-zinc-100' => !request()->is('blog'), ])>Blog</a>
                    </li>
                    <li>
                        <a
                            href="/about"
                            @class([ 'block rounded-lg px-4 py-3 text-sm font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 lg:py-2.5', 'bg-amber-200/[0.08] text-amber-100 lg:bg-white/[0.06]' => request()->is('about'), 'text-zinc-400 hover:bg-white/[0.04] hover:text-zinc-100' => !request()->is('about'), ])>About</a>
                    </li>
                    <li>
                        <a
                            href="/contact"
                            @class([ 'block rounded-lg px-4 py-3 text-sm font-medium transition focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 lg:py-2.5', 'bg-amber-200/[0.08] text-amber-100 lg:bg-white/[0.06]' => request()->is('contact'), 'text-zinc-400 hover:bg-white/[0.04] hover:text-zinc-100' => !request()->is('contact'), ])>Contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex shrink-0 items-center gap-3">

            <button
                type="button"
                aria-controls="collapseMenu"
                aria-expanded="false"
                aria-haspopup="true"
                id="toggleOpen"
                class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-lg border border-zinc-700 text-zinc-200 transition hover:border-amber-200/50 hover:text-amber-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-200 lg:hidden">
                <span class="sr-only">Buka menu utama</span>
                <svg
                    class="h-5 w-5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>