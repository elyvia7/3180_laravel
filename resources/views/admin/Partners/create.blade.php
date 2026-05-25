@extends('layouts.admin')

@section('content')

<div class="max-w-3xl mx-auto py-8">

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <div class="px-8 py-6 border-b">
            <h2 class="text-2xl font-bold text-gray-800">
                Tambah Partner
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Tambahkan data partner baru ke sistem.
            </p>
        </div>

        <div class="p-8">

            <form action="/admin/partners" method="POST">
                @csrf

                {{-- Nama Partner --}}
                <div class="mb-5">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Partner
                    </label>

                    <input type="text"
                           name="name"
                           placeholder="Masukkan nama partner"
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           required>

                </div>

                <div class="mb-6">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Logo URL
                    </label>

                    <input type="text"
                           name="logo_url"
                           value="https://placehold.co/200x200"
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           required>

                </div>

                <div class="flex items-center gap-3">

                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl transition duration-200">

                        Simpan

                    </button>

                    <a href="/admin/partners"
                       class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium px-6 py-3 rounded-xl transition duration-200">

                        Kembali

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection