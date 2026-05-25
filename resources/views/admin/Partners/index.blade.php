@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-8 px-4">

    <div class="flex items-center justify-between mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Manajemen Partner
            </h1>

            <p class="text-gray-500 mt-1">
                Daftar seluruh partner yang mendukung platform.
            </p>
        </div>

        <a href="/admin/partners/create"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl font-medium shadow transition duration-200">

            + Tambah Partner

        </a>

    </div>

    <form action="/admin/partners" method="GET" class="mb-5 flex gap-2">

        <input type="text"
            name="search"
            placeholder="Cari partner..."
            value="{{ request('search') }}"
            class="border border-gray-300 rounded-lg px-4 py-2 w-72">

        <button type="submit"
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg">

            Search

        </button>
        <a href="/admin/partners"
            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">

            kembali

        </a>

    </form>

    @if(session('success'))

    <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl">

        {{ session('success') }}

    </div>

    @endif

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left">

                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">

                    <tr>
                        <th class="p-4">ID</th>
                        <th class="p-4">Logo</th>
                        <th class="p-4">Nama Partner</th>
                        <th class="p-4">Created At</th>
                        <th class="p-4">Updated At</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>

                </thead>

                <tbody class="divide-y">

                    @forelse($partners as $partner)

                    <tr class="hover:bg-gray-50 transition duration-200">

                        {{-- ID --}}
                        <td class="p-4 font-medium text-gray-700">
                            {{ $partner->id }}
                        </td>

                        {{-- LOGO --}}
                        <td class="p-4">

                            <img src="{{ $partner->logo_url }}"
                                alt="{{ $partner->name }}"
                                class="h-14 w-14 object-contain rounded-lg border">

                        </td>

                        {{-- NAME --}}
                        <td class="p-4 font-semibold text-gray-800">
                            {{ $partner->name }}
                        </td>

                        {{-- CREATED --}}
                        <td class="p-4 text-gray-600">
                            {{ $partner->created_at->format('d-m-Y H:i') }}
                        </td>

                        {{-- UPDATED --}}
                        <td class="p-4 text-gray-600">
                            {{ $partner->updated_at->format('d-m-Y H:i') }}
                        </td>

                        {{-- ACTION --}}
                        <td class="p-4">

                            <div class="flex justify-center items-center gap-2">

                                {{-- EDIT --}}
                                <a href="/admin/partners/{{ $partner->id }}/edit"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-xs font-medium transition duration-200 shadow-sm">

                                    Edit

                                </a>

                                {{-- DELETE --}}
                                <form action="/admin/partners/{{ $partner->id }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus partner ini?')">

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

                    @empty

                    <tr>

                        <td colspan="6" class="text-center py-10 text-gray-500">

                            Belum ada data partner.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection