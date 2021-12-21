<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true,
    'login' => true,
    'verify' => false
]);


// BACKEND
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', [\App\Http\Controllers\BackendController::class, 'dashboard'])->name('backend.dashboard');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [\App\Http\Controllers\BackendController::class, 'indexProfile'])->name('backend.profile');
        Route::post('store', [\App\Http\Controllers\BackendController::class, 'updateProfile'])->name('backend.profile.update');
    });

    Route::group(['prefix' => 'pelanggan'], function () {
        Route::get('/', [\App\Http\Controllers\BackendController::class, 'indexpelanggan'])->name('backend.pelanggan');
        Route::get('pdf', [\App\Http\Controllers\BackendController::class, 'pdfPelanggan'])->name('backend.pelanggan.pdf');
        Route::get('create', [\App\Http\Controllers\BackendController::class, 'createpelanggan'])->name('backend.pelanggan.create');
        Route::post('store', [\App\Http\Controllers\BackendController::class, 'storepelanggan'])->name('backend.pelanggan.store');
        Route::get('edit/{id}', [\App\Http\Controllers\BackendController::class, 'editpelanggan'])->name('backend.pelanggan.edit');
        Route::post('update/{id}', [\App\Http\Controllers\BackendController::class, 'updatepelanggan'])->name('backend.pelanggan.update');
        Route::get('delete/{id}', [\App\Http\Controllers\BackendController::class, 'deletepelanggan'])->name('backend.pelanggan.delete');
    });

    Route::group(['prefix' => 'kategori-paket'], function () {
        Route::get('/', [\App\Http\Controllers\BackendController::class, 'indexKategoriPaket'])->name('backend.kategori-paket');
        Route::get('create', [\App\Http\Controllers\BackendController::class, 'createKategoriPaket'])->name('backend.kategori-paket.create');
        Route::post('store', [\App\Http\Controllers\BackendController::class, 'storeKategoriPaket'])->name('backend.kategori-paket.store');
        Route::get('edit/{id}', [\App\Http\Controllers\BackendController::class, 'editKategoriPaket'])->name('backend.kategori-paket.edit');
        Route::post('update/{id}', [\App\Http\Controllers\BackendController::class, 'updateKategoriPaket'])->name('backend.kategori-paket.update');
        Route::get('delete/{id}', [\App\Http\Controllers\BackendController::class, 'deleteKategoriPaket'])->name('backend.kategori-paket.delete');
    });

    Route::group(['prefix' => 'paket-wisata'], function () {
        Route::get('/', [\App\Http\Controllers\BackendController::class, 'indexPaketWisata'])->name('backend.paket-wisata');
        Route::get('create', [\App\Http\Controllers\BackendController::class, 'createPaketWisata'])->name('backend.paket-wisata.create');
        Route::post('store', [\App\Http\Controllers\BackendController::class, 'storePaketWisata'])->name('backend.paket-wisata.store');
        Route::get('edit/{id}', [\App\Http\Controllers\BackendController::class, 'editPaketWisata'])->name('backend.paket-wisata.edit');
        Route::post('update/{id}', [\App\Http\Controllers\BackendController::class, 'updatePaketWisata'])->name('backend.paket-wisata.update');
        Route::get('delete/{id}', [\App\Http\Controllers\BackendController::class, 'deletePaketWisata'])->name('backend.paket-wisata.delete');
    });

    Route::group(['prefix' => 'pengaturan'], function () {
        Route::get('/', [\App\Http\Controllers\BackendController::class, 'indexPengaturan'])->name('backend.pengaturan');
        Route::post('update', [\App\Http\Controllers\BackendController::class, 'updatePengaturan'])->name('backend.pengaturan.update');
    });
});
