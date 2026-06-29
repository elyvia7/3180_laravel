@extends('layouts.admin')

@section('title', 'Laporan Transaksi - Admin')
@section('page_title', 'Laporan Transaksi')
@section('page_subtitle', 'Pantau arus kas dan penjualan tiket Anda.')

@section('content')

<div class="bg-white rounded-[2.5rem] border border-slate-200 shadow-xl overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-6">
        <h2 class="text-2xl font-bold text-white">
            Laporan Transaksi
        </h2>
        <p class="text-indigo-100 text-sm mt-1">
            Monitoring transaksi pembelian tiket event
        </p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">

            <thead class="bg-slate-100 text-slate-700 uppercase text-xs font-bold tracking-widest">
                <tr>
                    <th class="px-8 py-4">Order ID</th>
                    <th class="px-8 py-4">Detail Pembeli</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Tgl Transaksi</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4 text-right">Total Tagihan</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">

                @forelse($transactions as $trx)

                <tr class="hover:bg-indigo-50 transition duration-200 {{ $trx->status == 'pending' ? 'text-slate-400' : '' }}">

                    <td class="px-8 py-6">
                        <span class="font-mono font-bold px-4 py-2 rounded-xl text-sm shadow-sm
                        {{ $trx->status == 'pending'
                            ? 'bg-slate-100'
                            : 'text-indigo-600 bg-indigo-50' }}">
                            {{ $trx->order_id }}
                        </span>
                    </td>

                    <td class="px-8 py-6">
                        <p class="font-bold text-slate-800">
                            {{ $trx->customer_name }}
                        </p>

                        <p class="text-xs text-slate-500 mt-1">
                            {{ $trx->customer_email }}
                            <br>
                            {{ $trx->customer_phone }}
                        </p>
                    </td>

                    <td class="px-8 py-6">
                        <p class="font-medium text-slate-700">
                            {{ $trx->event->title ?? '-' }}
                        </p>
                    </td>

                    <td class="px-8 py-6 text-sm text-slate-500">
                        {{ $trx->created_at->format('d M Y, H:i') }}
                    </td>

                    <td class="px-8 py-6">

                        @if($trx->status === 'settlement' || $trx->status === 'success')

                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold uppercase ring-1 ring-green-200">
                            Success
                        </span>

                        @elseif($trx->status === 'pending')

                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-bold uppercase ring-1 ring-orange-200">
                            Pending
                        </span>

                        @else

                        <span class="px-3 py-1 bg-rose-100 text-rose-700 rounded-full text-xs font-bold uppercase ring-1 ring-rose-200">
                            {{ $trx->status }}
                        </span>

                        @endif

                    </td>

                    <td class="px-8 py-6 text-right font-black text-green-600">
                        Rp {{ number_format($trx->total_price, 0, ',', '.') }}
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="6" class="px-8 py-12 text-center text-slate-500">
                        Belum ada transaksi
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>
    </div>

    <div class="px-8 py-6 bg-slate-50 border-t">
        {{ $transactions->links() }}
    </div>

</div>

@endsection