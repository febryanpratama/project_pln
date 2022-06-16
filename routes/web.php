<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetectionController;
use App\Http\Controllers\FmeaController;
use App\Http\Controllers\FungsiControlller;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LtaController;
use App\Http\Controllers\OccurenceController;
use App\Http\Controllers\RcmController;
use App\Http\Controllers\RpnController;
use App\Http\Controllers\SwbsController;
use App\Http\Controllers\TindakanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(BarangController::class)->group(function () {
    Route::prefix('barang')->group(function () {
        Route::get('/', 'index')->name('data.barang');
        Route::post('/', 'store');
        Route::post('/edit', 'update')->name('barang.update');
        Route::post('/destory', 'destroy')->name('barang.destroy');
    });
});

Route::controller(KriteriaController::class)->group(function () {
    Route::prefix('kriteria')->group(function () {
        Route::get('/', 'index')->name('data.kriteria');
        Route::post('/', 'store');
        Route::post('/update', 'update')->name('severity.update');
        Route::post('/destroy', 'destroy')->name('severity.destroy');
    });
});
Route::controller(OccurenceController::class)->group(function () {
    Route::prefix('occurence')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::post('/update', 'update')->name('occurence.update');
        Route::post('/destroy', 'destroy')->name('occurence.destroy');
    });
});
Route::controller(DetectionController::class)->group(function () {
    Route::prefix('detection')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::post('/update', 'update')->name('detection.update');
        Route::post('/destroy', 'destroy')->name('detection.destroy');
    });
});


Route::controller(RpnController::class)->group(function () {
    Route::prefix('rpn')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});

Route::controller(SwbsController::class)->group(function () {
    Route::prefix('swbs')->group(function () {
        Route::get('/', 'index');
        Route::get('/{swbs_id}', 'detail');
        Route::get('/{swbs_id}/sub-sistem/{subsistem_id}', 'detailSubsistem');
        Route::post('/', 'store');
        Route::post('/update', 'updateSwbs')->name('swbs.update');
        Route::post('/destroy', 'destroySwbs')->name('swbs.destroy');
        Route::post('/sub-sistem', 'subSistem');
        Route::post('/sub-sistem/edit', 'editsubSistem');
        Route::post('/komponen', 'komponen');
        Route::post('/komponen/edit', 'editkomponen');
    });
});

Route::controller(FungsiControlller::class)->group(function () {
    Route::prefix('fungsi-sistem')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::post('/update', 'update');
        Route::post('/destroy', 'destroy');
    });
});

Route::controller(LtaController::class)->group(function () {
    Route::prefix('lta')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });

    Route::prefix('lta-proses')->group(function () {
        Route::get('/', 'ltaIndex');
        Route::post('/', 'ltastore');
    });
});

Route::controller(FmeaController::class)->group(function () {
    Route::prefix('fmea')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});

Route::controller(TindakanController::class)->group(function () {
    Route::prefix('/pemilihan-tindakan')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});

Route::controller(RcmController::class)->group(function () {
    Route::prefix('/rcm')->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'detail');
        Route::post('/', 'store');
    });
});
