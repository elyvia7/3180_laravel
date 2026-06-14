<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TransactionController;

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| ROUTE LOGIN DEFAULT LARAVEL
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('events.show');

Route::get('/checkout', [EventController::class, 'checkout'])
    ->name('checkout');

Route::get('/my-ticket', [TicketController::class, 'index'])
    ->name('ticket');


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Login Admin
    Route::get('login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('login', [AuthController::class, 'login'])
        ->name('login.post');

    Route::post('logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Protected Route
    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('events', AdminEventController::class);

        Route::get('transactions', [TransactionController::class, 'index'])
            ->name('transactions.index');

        Route::resource('categories', CategoryController::class);

        Route::get('partners', [PartnerController::class, 'index']);
        Route::get('partners/create', [PartnerController::class, 'create']);
        Route::post('partners', [PartnerController::class, 'store']);
        Route::get('partners/{id}/edit', [PartnerController::class, 'edit']);
        Route::put('partners/{id}', [PartnerController::class, 'update']);
        Route::delete('partners/{id}', [PartnerController::class, 'destroy']);
    });
});