<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('dashboard1', [DashboardController::class, 'show'])->name('admin.dashboard');
    Route::get('dashboard3', [DashboardController::class, 'show'])->name('admin.users');
    Route::get('dashboard4', [DashboardController::class, 'show'])->name('account');
    Route::get('dashboard5', [DashboardController::class, 'show'])->name('call_log');
    Route::get('dashboard6', [DashboardController::class, 'show'])->name('messaging');

    Route::get('home', [DashboardController::class, 'home'])->name('home');

    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['role:admin']
    ], function (){
        Route::resource('customers', CustomerController::class);
    });
});

