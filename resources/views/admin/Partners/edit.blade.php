@extends('layouts.admin')

@section('content')

<div class="max-w-3xl mx-auto py-8">

    <div class="bg-white rounded-2xl shadow-md overflow-hidden">

        {{-- HEADER --}}
        <div class="px-8 py-6 border-b">
            <h2 class="text-2xl font-bold text-gray-800">
                Edit Partner
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Perbarui data partner.
            </p>
        </div>

        {{-- FORM --}}
        <div class="p-8">

            <form action="/admin/partners/{{ $partner->id }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Nama Partner --}}
                <div class="mb-5">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Partner
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $partner->name }}"
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           required>

                </div>

                {{-- Logo URL --}}
                <div class="mb-6">

                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Logo URL
                    </label>

                    <input type="text"
                           name="logo_url"
                           value="{{ $partner->logo_url }}"
                           class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           required>

                </div>

                {{-- BUTTON --}}
                <div class="flex items-center gap-3">

                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl transition duration-200">

                        Update

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