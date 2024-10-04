<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin', [AdminController::class, 'index'])->name('admin.admin.index');
    Route::get('admin/create', [AdminController::class, 'create'])->name('admin.admin.create');
    Route::get('admin/delete', [AdminController::class, 'delete'])->name('admin.admin.delete');
    Route::get('admin/read', [AdminController::class, 'read'])->name('admin.admin.read');

    Route::get('pelanggan', [PelangganController::class, 'index'])->name('admin.pelanggan.index');
    Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('admin.pelanggan.create');
    Route::get('pelanggan/delete', [PelangganController::class, 'delete'])->name('admin.pelanggan.delete');
    Route::get('pelanggan/read', [PelangganController::class, 'read'])->name('admin.pelanggan.read');
});
