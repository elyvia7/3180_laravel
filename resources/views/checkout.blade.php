@extends('layouts.app')

@section('content')
<div class="bg-indigo-50/30 min-h-screen text-slate-900">

    <main class="max-w-3xl mx-auto px-6 py-20">

        <!-- Header -->
        <div class="mb-12">
            <a href="event-detail.html" class="text-indigo-600 font-bold flex items-center gap-2 mb-6">
                ← Kembali ke Event
            </a>

            <h1 class="text-4xl font-extrabold">Checkout</h1>
            <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
        </div>

        <div class="grid grid-cols-1 gap-8">

            <!-- SUMMARY -->
            <div class="bg-white rounded-3xl border p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 border-b pb-4">Pesanan Anda</h3>

                <div class="flex gap-6">
                    <img src="assets/concert.png" class="w-24 h-24 rounded-2xl object-cover">

                    <div>
                        <h4 class="font-bold text-lg">Jazz Night 2024</h4>
                        <p class="text-slate-500">16 Nov 2024 • Blue Note</p>
                        <p class="text-indigo-600 font-bold mt-2">1 x Rp 150.000</p>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t space-y-3">
                    <div class="flex justify-between text-slate-500">
                        <span>Harga</span>
                        <span>Rp 150.000</span>
                    </div>

                    <div class="flex justify-between text-slate-500">
                        <span>Biaya</span>
                        <span>Rp 5.000</span>
                    </div>

                    <div class="flex justify-between text-2xl font-bold border-t pt-4">
                        <span>Total</span>
                        <span class="text-indigo-600">Rp 155.000</span>
                    </div>
                </div>
            </div>

            <!-- FORM -->
            <div class="bg-white rounded-3xl border p-8 shadow-sm">

                <h3 class="text-xl font-bold mb-6 text-indigo-600">
                    Data Pemesan
                </h3>

                <form class="space-y-6">

                    <div>
                        <label class="font-semibold text-sm">Nama Lengkap</label>
                        <input type="text"
                            class="w-full mt-2 px-5 py-4 border rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none"
                            placeholder="Nama sesuai KTP">
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">

                        <div>
                            <label class="font-semibold text-sm">Email</label>
                            <input type="email"
                                class="w-full mt-2 px-5 py-4 border rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none"
                                placeholder="email@gmail.com">
                        </div>

                        <div>
                            <label class="font-semibold text-sm">WhatsApp</label>
                            <input type="tel"
                                class="w-full mt-2 px-5 py-4 border rounded-2xl focus:ring-2 focus:ring-indigo-500 outline-none"
                                placeholder="08xxxx">
                        </div>

                    </div>

                    <button type="button" onclick="showMidtrans()"
                        class="w-full bg-indigo-600 text-white py-4 rounded-2xl font-bold text-lg hover:bg-indigo-700 transition">
                        Bayar Sekarang
                    </button>

                    <p class="text-center text-xs text-slate-400">
                        Dengan melanjutkan, Anda menyetujui syarat & ketentuan
                    </p>

                </form>
            </div>

        </div>
    </main>

</div>

<!-- MIDTRANS -->
<div id="midtrans-overlay"
    class="fixed inset-0 bg-black/60 hidden items-center justify-center p-6">

    <div class="bg-white w-full max-w-sm rounded-3xl shadow-xl overflow-hidden">

        <div class="p-4 border-b flex justify-between">
            <span class="font-bold">Payment</span>
            <button onclick="hideMidtrans()">✕</button>
        </div>

        <div class="p-6 text-center">
            <p class="text-slate-500">Total</p>
            <h2 class="text-3xl font-bold text-indigo-600">Rp 155.000</h2>

            <div class="mt-6 space-y-3">

                <button onclick="window.location.href='{{ url('/my-ticket') }}'"
                    class="w-full py-3 border rounded-xl hover:border-indigo-600">
                    GoPay / QRIS
                </button>

                <button disabled class="w-full py-3 border rounded-xl opacity-50">
                    VA Bank
                </button>

                <button disabled class="w-full py-3 border rounded-xl opacity-50">
                    Kartu
                </button>

            </div>
        </div>

    </div>
</div>

<script>
function showMidtrans() {
    document.getElementById('midtrans-overlay').classList.remove('hidden');
    document.getElementById('midtrans-overlay').classList.add('flex');
}

function hideMidtrans() {
    document.getElementById('midtrans-overlay').classList.add('hidden');
    document.getElementById('midtrans-overlay').classList.remove('flex');
}
</script>

@endsection