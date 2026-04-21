@extends('layouts.admin')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Manajemen Kategori</h1>

    <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg shadow transition">
        + Tambah Kategori
    </button>
</div>

<!-- Card Table -->
<div class="bg-white rounded-2xl shadow-md overflow-hidden">

    <div class="p-4 border-b bg-gray-50">
        <p class="text-sm text-gray-500">Daftar semua kategori yang tersedia</p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="p-4">No</th>
                    <th class="p-4">Nama Kategori</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4">1</td>
                    <td class="p-4 font-medium text-gray-800">Seminar</td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1 text-xs rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-xs rounded-lg bg-red-100 text-red-600 hover:bg-red-200 ml-2">
                            Hapus
                        </button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4">2</td>
                    <td class="p-4 font-medium text-gray-800">Konser</td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1 text-xs rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-xs rounded-lg bg-red-100 text-red-600 hover:bg-red-200 ml-2">
                            Hapus
                        </button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4">3</td>
                    <td class="p-4 font-medium text-gray-800">Workshop</td>
                    <td class="p-4 text-center">
                        <button class="px-3 py-1 text-xs rounded-lg bg-blue-100 text-blue-600 hover:bg-blue-200">
                            Edit
                        </button>
                        <button class="px-3 py-1 text-xs rounded-lg bg-red-100 text-red-600 hover:bg-red-200 ml-2">
                            Hapus
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection