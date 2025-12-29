<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Company\ProductCategoryController;
use App\Http\Controllers\Company\ProductController;
use App\Http\Controllers\Company\ServiceCategoryController;
use App\Http\Controllers\Company\ServiceController;
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
                Route::get('/show/{id}', [TechnicianController::class, 'show'])
                    ->name('show');
                Route::get('/delete/{id}', [TechnicianController::class, 'delete'])
                    ->name('delete');

            });

        Route::prefix('products')->name('products.')
            ->group(function () {

                Route::prefix('categories')->name('categories.')
                    ->group(function () {

                        Route::get('/', [ProductCategoryController::class, 'index'])
                            ->name('index');

                    });

                Route::get('/', [ProductController::class, 'index'])
                    ->name('index');

            });

        Route::prefix('services')->name('services.')
            ->group(function () {

                Route::prefix('categories')->name('categories.')
                    ->group(function () {

                        Route::get('/', [ServiceCategoryController::class, 'index'])
                            ->name('index');

                    });

                Route::get('/', [ServiceController::class, 'index'])
                    ->name('index');

            });
    });
