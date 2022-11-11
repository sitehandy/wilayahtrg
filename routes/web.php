<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FiberInfoController;
use App\Http\Controllers\CpeController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InfoTrackingController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DeviceTypeController;

// Route untuk guest
Route::get('/', [WelcomeController::class, 'utama']);
Route::get('login', [LoginController::class, 'borangLogin'])->name('login');
Route::post('login', [LoginController::class, 'semakLogin'])->name('login.semak');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/forgot-password', [ForgotPasswordController::class, 'resetLinkForm'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetEmail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'resetForm'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'updatePassword'])->middleware('guest')->name('password.update');


Route::group([
    'middleware' => ['auth']
], function () {

    // Route untuk user
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('account', [AccountController::class, 'edit'])->name('account.edit');
    Route::patch('account', [AccountController::class, 'update'])->name('account.update');

    // Route untuk management users
    Route::get('users/datatables', [UserController::class, 'datatables'])->name('users.datatables');
    Route::resource('users', UserController::class);

    Route::get('cpe/datatables', [CpeController::class, 'datatables'])->name('cpe.datatables');
    Route::resource('cpe', CpeController::class);

    Route::get('site/datatables', [SiteController::class, 'datatables'])->name('site.datatables');
    Route::resource('site', SiteController::class);

    Route::get('inventories/datatables', [InventoryController::class, 'datatables'])->name('inventories.datatables');
    Route::resource('inventories', InventoryController::class);

    Route::get('brands/datatables', [BrandController::class, 'datatables'])->name('brands.datatables');
    Route::resource('brands', BrandController::class);

    Route::get('devices/datatables', [DeviceTypeController::class, 'datatables'])->name('devices.datatables');
    Route::resource('devices', DeviceTypeController::class);

    Route::get('export', [ExportController::class, 'data'])->name('export.data');
    Route::post('import/node', [ImportController::class, 'node'])->name('import.node');

    Route::get('fiberinfo', [FiberInfoController::class, 'index'])->name('fiber.info');

    Route::resource('trackings', TrackingController::class);

});

Route::get('info/{serial_number}', [InfoTrackingController::class, 'show'])->name('tracking.info');
