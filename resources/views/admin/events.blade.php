@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Event - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 flex min-h-screen">

        <!-- Table -->
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">

            <div class="px-8 py-6 bg-slate-50 border-b flex gap-4">

                <input type="text" placeholder="Cari nama event..."
                    class="flex-1 px-5 py-3 rounded-xl border border-slate-200 bg-white outline-none">

                <select class="px-5 py-3 rounded-xl border border-slate-200 bg-white">
                    <option>Semua Kategori</option>
                    <option>Musik</option>
                    <option>Workshop</option>
                </select>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left border-collapse">

                    <thead class="bg-slate-50 text-slate-400 uppercase text-xs font-bold">

                        <tr>
                            <th class="px-8 py-4">No</th>
                            <th class="px-8 py-4">Poster</th>
                            <th class="px-8 py-4">Event</th>
                            <th class="px-8 py-4">Harga / Stok</th>
                            <th class="px-8 py-4">Aksi</th>
                        </tr>

                    </thead>

                    <tbody class="divide-y">

                        <tr class="hover:bg-slate-50">
                            <td class="px-8 py-6">1</td>
                            <td class="px-8 py-6">
                                <img src="{{ asset('assets/concert.png') }}"
                                    class="w-16 h-20 rounded-xl object-cover">
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold">Jazz Night 2024</p>
                                <p class="text-sm text-slate-400">
                                    Musik • 16 Nov 2024
                                </p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-indigo-600">
                                    Rp 150.000
                                </p>
                                <p class="text-sm text-slate-400">
                                    Stok: 42/100
                                </p>
                            </td>
                            <td class="px-8 py-6">
                                Edit | Hapus
                            </td>
                        </tr>

                        <tr class="hover:bg-slate-50">
                            <td class="px-8 py-6">2</td>
                            <td class="px-8 py-6">
                                <img src="{{ asset('assets/workshop.png') }}"
                                    class="w-16 h-20 rounded-xl object-cover">
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold">AI Future Workshop</p>
                                <p class="text-sm text-slate-400">
                                    Tech • 26 Oct 2024
                                </p>
                            </td>
                            <td class="px-8 py-6">
                                <p class="font-bold text-indigo-600">
                                    Rp 50.000
                                </p>
                                <p class="text-sm text-slate-400">
                                    Stok: 12/50
                                </p>
                            </td>
                            <td class="px-8 py-6">
                                Edit | Hapus
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
        </div>

    </main>

</body>

</html>
@endsection