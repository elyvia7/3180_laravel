<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

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

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Kelola Event
    Route::get('/events', [AdminEventController::class, 'index'])
        ->name('events.index');

    // Laporan Transaksi
    Route::get('/transactions', [DashboardController::class, 'transactions'])
        ->name('transactions.index');

    // Kategori
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories');

});