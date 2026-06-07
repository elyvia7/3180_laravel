@extends ('layouts.app')

@section ('content')

<!-- HERO SECTION -->
<section class="mx-auto flex max-w-7xl flex-col items-center gap-14 px-6 py-24 md:flex-row">
    <div class="flex-1 space-y-8">
        <span class="inline-flex items-center rounded-full bg-indigo-50 px-4 py-1.5 text-xs font-semibold tracking-widest text-indigo-600 uppercase">
            #1 Event Platform
        </span>
        <h1 class="text-5xl font-extrabold leading-tight md:text-7xl text-slate-900">
            Temukan & Pesan <span class="text-indigo-600">Tiket Event</span> Impianmu.
        </h1>

        <p class="max-w-lg text-lg leading-relaxed text-slate-500">
            Dari konser musik hingga workshop teknologi, semua ada di genggamanmu. Pesan aman & cepat dengan Midtrans.
        </p>

        <div class="flex flex-wrap gap-4">

            <a href="#events"
                class="rounded-2xl bg-indigo-600 px-8 py-4 text-lg font-semibold text-white shadow-lg shadow-indigo-200 transition hover:-translate-y-1 hover:shadow-xl">
                Mulai Jelajah
            </a>

            <a href="#"
                class="rounded-2xl border border-slate-200 px-8 py-4 text-lg font-semibold text-slate-700 transition hover:border-indigo-500 hover:text-indigo-600">
                Cara Pesan
            </a>

        </div>

    </div>

    <!-- HERO IMAGE -->
    <div class="relative flex-1">

        <div class="absolute -top-10 -left-10 h-72 w-72 rounded-full bg-indigo-400 opacity-20 blur-3xl"></div>
        <div class="absolute -bottom-10 -right-10 h-72 w-72 rounded-full bg-purple-400 opacity-20 blur-3xl"></div>

        <img
            src="{{ asset('assets/concert.png') }}"
            alt="Concert"
            class="relative z-10 aspect-[4/5] w-full rounded-[2.5rem] object-cover shadow-2xl transition hover:scale-[1.02]" />

    </div>

</section>

<!-- PARTNER SECTION -->
<section class="mx-auto max-w-7xl px-6 py-24">

    <div class="mb-14 text-center">

        <h2 class="text-4xl font-extrabold text-slate-900">
            Didukung oleh Partner Terbaik
        </h2>

        <div class="mx-auto mt-4 h-1 w-28 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"></div>

        <p class="mt-5 text-slate-500">
            Kolaborasi bersama brand dan institusi terpercaya dalam mendukung AmikomEventHub
        </p>

    </div>

    <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">

        @foreach ($partners as $partner)

        <div class="group relative flex flex-col items-center justify-center rounded-3xl border border-slate-100 bg-white p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">

            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-indigo-50 to-purple-50 opacity-0 blur-xl transition group-hover:opacity-100"></div>

            <div class="relative flex h-24 w-24 items-center justify-center rounded-2xl bg-slate-50 p-4 transition group-hover:scale-110 group-hover:bg-white">

                <img
                    src="{{ asset($partner->logo_url) }}"
                    alt="{{ $partner->name }}"
                    class="h-full w-full object-contain" />

            </div>

            <h4 class="relative mt-4 text-center text-sm font-semibold text-slate-700 transition group-hover:text-indigo-600">
                {{ $partner->name }}
            </h4>

            <span class="relative mt-1 text-xs text-slate-400">
                {{ $partner->category ?? 'Partner' }}
            </span>

        </div>

        @endforeach

    </div>

</section>

<!-- EVENTS SECTION -->
<section id="events" class="mx-auto max-w-7xl px-6 py-24">

    <div class="mb-12 text-center">

        <h2 class="text-4xl font-extrabold text-slate-900">
            Event Terdekat
        </h2>

        <div class="mx-auto mt-4 h-1 w-28 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500"></div>

        <p class="mt-4 text-slate-500">
            Jangan sampai ketinggalan acara seru minggu ini!
        </p>

    </div>

    <div class="mb-12 flex flex-wrap justify-center gap-3">

        <a href="/"
            class="{{ !request('category') ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-700 hover:bg-indigo-500 hover:text-white' }}
            rounded-full px-5 py-2 text-sm font-semibold transition">

            Semua Kategori

        </a>

        @foreach ($categories as $cat)

        <a href="/?category={{ $cat->slug }}"
            class="{{ request('category') == $cat->slug ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-700 hover:bg-indigo-500 hover:text-white' }}
            rounded-full px-5 py-2 text-sm font-semibold transition">

            {{ $cat->name }}

        </a>

        @endforeach

    </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

        @foreach ($events as $event)

        <div class="group overflow-hidden rounded-3xl bg-white shadow-md transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

            <div class="relative overflow-hidden bg-slate-100">

                {{-- WORKSHOP --}}
                @if($event->category->name == 'Workshop')

                <img
                    src="{{ asset('assets/workshop.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[420px] object-cover object-top transition duration-500 group-hover:scale-105">

                {{-- PELATIHAN --}}
                @elseif($event->category->name == 'Pelatihan')

                <img
                    src="{{ asset('assets/pelatihan.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[420px] object-cover object-top transition duration-500 group-hover:scale-105">

                {{-- CAREER FAIR --}}
                @elseif($event->category->name == 'Career Fair')

                <img
                    src="{{ asset('assets/careerfair.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[420px] object-cover object-top transition duration-500 group-hover:scale-105">

                {{-- SEMINAR IT --}}
                @elseif($event->category->name == 'Seminar IT')

                <img
                    src="{{ asset('assets/hackathon.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[420px] object-cover object-top transition duration-500 group-hover:scale-105">

                {{-- DEFAULT --}}
                @else

                <img
                    src="{{ asset('assets/concert.png') }}"
                    alt="{{ $event->title }}"
                    class="w-full h-[420px] object-cover object-top transition duration-500 group-hover:scale-105">

                @endif

            </div>

            <div class="p-6">

                <div class="mb-4">

                    <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-600">

                        {{ $event->category->name }}

                    </span>

                </div>

                <h3 class="text-2xl font-bold leading-snug text-slate-900 line-clamp-2">

                    {{ $event->title }}

                </h3>
                <p class="mt-3 text-sm text-slate-500">

                    {{ \Carbon\Carbon::parse($event->date)->format('d M Y • H:i') }}

                </p>

                <div class="mt-6 flex items-center justify-between">

                    <span class="text-2xl font-extrabold text-indigo-600">

                        Rp {{ number_format($event->price, 0, ',', '.') }}

                    </span>

                    <a href="#"
                        class="rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-700">

                        Detail

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

@endsection