<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
    <head>
        @include('partials.head')

        <meta name="description" content="Front Office FC puts you in charge of every decision — transfers, tactics, and the trophies that follow. Sign up to hear when we kick off." />
    </head>
    <body class="min-h-dvh bg-white font-sans text-zinc-900">
        <div class="isolate flex min-h-dvh flex-col">
            <header class="mx-auto flex w-full max-w-6xl items-center justify-between px-6 py-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <span class="grid size-9 place-items-center rounded-xl bg-pitch-500 text-white">
                        <svg viewBox="0 0 64 64" class="size-6" fill="none" aria-hidden="true">
                            <line x1="3" y1="32" x2="61" y2="32" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" />
                            <circle cx="32" cy="32" r="17" stroke="currentColor" stroke-width="3.5" />
                            <circle cx="32" cy="32" r="8" fill="currentColor" />
                            <polygon points="32,26 37.7,30.2 35.5,36.9 28.5,36.9 26.3,30.2" fill="#40974d" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold tracking-tight">Front Office FC</span>
                </a>
                <a href="mailto:info@frontofficefc.com" class="rounded-full px-4 py-2 text-sm font-medium text-pitch-700 ring-1 ring-pitch-600/20 hover:bg-pitch-50 max-sm:hidden">Contact</a>
            </header>

            <main class="mx-auto grid w-full max-w-6xl flex-1 items-center gap-12 px-6 py-12 lg:grid-cols-2 lg:gap-16 lg:py-20">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full bg-pitch-50 px-3.5 py-1.5 text-sm font-medium text-pitch-700 ring-1 ring-pitch-600/15 ring-inset">
                        <span class="size-1.5 rounded-full bg-pitch-500"></span>
                        Coming soon
                    </span>

                    <h1 class="mt-6 max-w-[16ch] text-5xl font-semibold tracking-tight text-balance text-zinc-950 sm:text-6xl">
                        The club is yours to build.
                    </h1>

                    <p class="mt-6 max-w-[48ch] text-lg text-pretty text-zinc-600">
                        Front Office FC puts you in charge of every decision — transfers, tactics, and the trophies that follow. Sign up to hear when we kick off.
                    </p>

                    <div class="mt-8">
                        <livewire:waitlist-form />
                    </div>

                    <p class="mt-5 text-sm text-zinc-500">
                        Questions? Reach us at
                        <a href="mailto:info@frontofficefc.com" class="font-medium text-pitch-700 underline-offset-4 hover:underline">info@frontofficefc.com</a>
                    </p>
                </div>

                <div class="relative">
                    <div class="relative aspect-square w-full overflow-hidden rounded-3xl bg-linear-to-br from-pitch-500 to-pitch-700 p-8 shadow-xl shadow-pitch-900/20 ring-1 ring-black/5 sm:aspect-4/3 lg:aspect-square">
                        <div aria-hidden="true" class="absolute inset-0 opacity-40 [background-image:repeating-linear-gradient(90deg,transparent_0,transparent_9%,rgba(255,255,255,0.06)_9%,rgba(255,255,255,0.06)_18%)]"></div>
                        <div class="relative grid size-full place-items-center">
                            <svg viewBox="0 0 64 64" class="size-40 text-white sm:size-48" fill="none" aria-hidden="true">
                                <line x1="3" y1="32" x2="61" y2="32" stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                                <circle cx="32" cy="32" r="17" stroke="currentColor" stroke-width="3" />
                                <circle cx="32" cy="32" r="8" fill="currentColor" />
                                <polygon points="32,26 37.7,30.2 35.5,36.9 28.5,36.9 26.3,30.2" fill="#226535" />
                            </svg>
                        </div>
                        <div class="absolute inset-x-6 bottom-6 flex items-center justify-between text-sm text-pitch-50">
                            <span class="font-semibold tracking-tight">Front Office FC</span>
                            <span class="rounded-full bg-white/15 px-3 py-1 font-medium ring-1 ring-white/20 ring-inset">Season 2026</span>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="mx-auto w-full max-w-6xl px-6 py-8">
                <div class="flex flex-col items-center justify-between gap-3 border-t border-zinc-950/10 pt-6 text-sm text-zinc-500 sm:flex-row">
                    <p>&copy; {{ date('Y') }} Front Office FC. All rights reserved.</p>
                    <a href="mailto:info@frontofficefc.com" class="font-medium text-pitch-700 hover:underline">info@frontofficefc.com</a>
                </div>
            </footer>
        </div>
    </body>
</html>
