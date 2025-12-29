<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Company\TechnicianController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticationController::class, 'login'])->name('login');
Route::post('/login', [AuthenticationController::class, 'loginStore'])->name('login.store');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::prefix('portal')
    ->middleware('auth-check')
    ->name('portal.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::prefix('technicians')->name('technicians.')
        ->group(function () {

            Route::get('/', [TechnicianController::class, 'index'])
            ->name('index');
            Route::post('/store', [TechnicianController::class, 'store'])
            ->name('store');

        });

    });

