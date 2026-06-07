@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-8 px-4">

    <div class="flex items-center justify-between mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Manajemen Kategori
            </h1>

            <p class="text-gray-500 mt-1">
                Daftar semua kategori event.
            </p>
        </div>

        <a href="/admin/categories/create"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl font-medium shadow transition duration-200">

            + Tambah Kategori

        </a>

    </div>

<form action="/admin/categories" method="GET" class="mb-5 flex gap-2">

    <input type="text"
           name="search"
           placeholder="Cari kategori..."
           value="{{ request('search') }}"
           class="border border-gray-300 rounded-lg px-4 py-2 w-72">

    <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">

        Search

    </button>

    <a href="/admin/categories"
       class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">

        kembali

    </a>

</form>

    @if(session('success'))

    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">

        {{ session('success') }}

    </div>

    @endif

    <!-- Card Table -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <div class="p-4 border-b bg-gray-50">
            <p class="text-sm text-gray-500">
                Daftar semua kategori yang tersedia
            </p>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left border-collapse">

                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4">Nama Kategori</th>
                        <th class="p-4">Created At</th>
                        <th class="p-4">Updated At</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                    @foreach($categories as $category)

                    <tr class="hover:bg-gray-50 transition duration-200">

                        <td class="p-4">
                            {{ $category->id }}
                        </td>

                        <td class="p-4 font-medium text-gray-800">
                            {{ $category->name }}
                        </td>

                        <td class="p-4">
                            {{ $category->created_at->format('d-m-Y H:i') }}
                        </td>

                        <td class="p-4">
                            {{ $category->updated_at->format('d-m-Y H:i') }}
                        </td>

                       <td class="p-4">

    <div class="flex justify-center items-center gap-2">

        {{-- EDIT --}}
        <a href="/admin/categories/{{ $category->id }}/edit"
           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-xs font-medium transition duration-200 shadow-sm">

            Edit

        </a>

        {{-- DELETE --}}
        <form action="/admin/categories/{{ $category->id }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">

            @csrf
            @method('DELETE')

            <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-medium transition duration-200 shadow-sm">

                Hapus

            </button>

        </form>

    </div>

</td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    @endsection