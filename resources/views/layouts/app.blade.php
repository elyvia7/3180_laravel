<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmikomEventHub</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900">

    <nav class="glass sticky top-8 z-40 mx-4 mt-4 px-6 py-4 rounded-2xl border border-white/20 shadow-lg flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                AH
            </div>
            <span class="text-xl font-bold tracking-tight">AmikomEventHub</span>
        </div>
        <div class="hidden md:flex gap-8 font-medium">
            <a href="/" class="text-indigo-600">Jelajahi</a>
            <a href="#" class="hover:text-indigo-600 transition">Kategori</a>
            <a href="#" class="hover:text-indigo-600 transition">Tentang Kami</a>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-indigo-900 text-indigo-100 mt-20">

        <div class="max-w-7xl mx-auto px-6 py-14 grid md:grid-cols-3 gap-10">

            <div>
                <h2 class="text-2xl font-bold text-white">
                    AmikomEventHub
                </h2>

                <p class="text-indigo-300 mt-4 text-sm leading-relaxed">
                    Platform tiket event terbaik untuk seminar,
                    workshop, konser, dan berbagai acara menarik lainnya.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">
                    Navigasi
                </h3>

                <div class="flex flex-col gap-3 text-indigo-300 text-sm">
                    <a href="#" class="hover:text-white transition">
                        Home
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Event
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Kategori
                    </a>

                    <a href="#" class="hover:text-white transition">
                        Tentang Kami
                    </a>
                </div>
            </div>
            <div>
                <h3 class="font-semibold text-white mb-4">
                    Kontak
                </h3>

                <div class="space-y-3 text-indigo-300 text-sm">
                    <p>info@amikomeventhub.com</p>
                    <p>@amikomeventhub</p>
                    <p>Yogyakarta, Indonesia</p>
                </div>
            </div>

        </div>

        <div class="border-t border-indigo-800 py-5 text-center text-indigo-400 text-sm">
            © 2024 AmikomEventHub. All rights reserved.
        </div>

    </footer>

</body>

</html>