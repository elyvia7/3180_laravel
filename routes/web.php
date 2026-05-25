<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

Route::get('/event', [EventController::class, 'show'])->name('events.show');

Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');

Route::get('/my-ticket', [TicketController::class, 'index'])->name('ticket');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('events', AdminEventController::class);

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Laporan Transaksi
    Route::get('/transactions', [DashboardController::class, 'transactions'])
        ->name('transactions.index');

    // Kategori
    Route::resource('/categories', CategoryController::class);

    // READ
    Route::get('partners', [PartnerController::class, 'index']);

    // CREATE
    Route::get('partners/create', [PartnerController::class, 'create']);
    Route::post('partners', [PartnerController::class, 'store']);

    // EDIT (UPDATE FORM)
    Route::get('partners/{id}/edit', [PartnerController::class, 'edit']);

    // UPDATE
    Route::put('partners/{id}', [PartnerController::class, 'update']);

    // DELETE
    Route::delete('partners/{id}', [PartnerController::class, 'destroy']);
});

 