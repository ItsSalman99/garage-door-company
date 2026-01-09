<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Company\ProductCategoryController;
use App\Http\Controllers\Company\ProductController;
use App\Http\Controllers\Company\ServiceCategoryController;
use App\Http\Controllers\Company\ServiceController;
use App\Http\Controllers\Company\TechnicianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Technician\QuotationOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticationController::class, 'index'])->name('index');
Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/login', [AuthenticationController::class, 'loginStore'])->name('login.store');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::get('/admin/login', [AuthenticationController::class, 'adminLogin'])->name('login');

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

        Route::prefix('quotation')->name('quotation.')
            ->group(function () {

                Route::get('/', [QuotationOrderController::class, 'index'])
                    ->name('index');
                Route::get('/show/{id}', [QuotationOrderController::class, 'show'])
                    ->name('show');
                Route::post('/store', [QuotationOrderController::class, 'store'])
                    ->name('store');

            });
    });
