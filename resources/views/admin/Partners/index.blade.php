@extends('layouts.admin')

@section('content')

<div class="max-w-7xl mx-auto py-8 px-4">

    {{-- HEADER --}}
    <div class="flex items-center justify-between mb-8">

        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Data Partner
            </h2>

            <p class="text-gray-500 mt-1">
                Daftar seluruh partner yang terdaftar.
            </p>
        </div>

        {{-- BUTTON TAMBAH --}}
        <a href="/admin/partners/create"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl font-medium shadow transition duration-200">

            + Tambah Partner

        </a>

    </div>

    {{-- LIST PARTNER --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @forelse($partners as $partner)

            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">

                {{-- LOGO --}}
                <div class="bg-gray-100 flex items-center justify-center p-6">

                    <img src="{{ $partner->logo_url }}"
                         alt="{{ $partner->name }}"
                         class="h-28 object-contain">

                </div>

                {{-- CONTENT --}}
                <div class="p-5 text-center">

                    <h3 class="text-lg font-semibold text-gray-800">
                        {{ $partner->name }}
                    </h3>

                    <p class="text-sm text-gray-500 mt-2">
                        Partner terpercaya dalam kegiatan dan event.
                    </p>

                    {{-- ACTION BUTTON --}}
                    <div class="flex justify-center gap-3 mt-4">

                        {{-- EDIT --}}
                        <a href="/admin/partners/{{ $partner->id }}/edit"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm">

                            Edit
                        </a>

                        {{-- DELETE --}}
                        <form action="/admin/partners/{{ $partner->id }}" method="POST"
                              onsubmit="return confirm('Yakin mau hapus data ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm">

                                Hapus
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty
            <div class="col-span-3 text-center text-gray-500">
                Belum ada data partner.
            </div>
        @endforelse

    </div>

</div>

@endsection