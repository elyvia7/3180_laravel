@extends('layouts.admin')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        Tambah Kategori
    </h1>

    <form action="/admin/categories" method="POST">

        @csrf

        <div class="mb-4">

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nama Kategori
            </label>

            <input type="text"
                   name="name"
                   placeholder="Masukkan nama kategori"
                   class="w-full border rounded-lg px-4 py-2"
                   required>

        </div>

        <div class="flex gap-3">

            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg">

                Simpan

            </button>

            <a href="/admin/categories"
               class="bg-gray-300 hover:bg-gray-400 text-black px-5 py-2 rounded-lg">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection