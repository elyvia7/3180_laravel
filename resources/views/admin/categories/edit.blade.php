@extends('layouts.admin')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        Edit Kategori
    </h1>

    <form action="/admin/categories/{{ $category->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">

            <label class="block text-sm font-medium text-gray-700 mb-2">
                Nama Kategori
            </label>

            <input type="text"
                   name="name"
                   value="{{ $category->name }}"
                   class="w-full border rounded-lg px-4 py-2"
                   required>

        </div>

        <div class="flex gap-3">

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">

                Update

            </button>

            <a href="/admin/categories"
               class="bg-gray-300 hover:bg-gray-400 text-black px-5 py-2 rounded-lg">

                Kembali

            </a>

        </div>

    </form>

</div>

@endsection