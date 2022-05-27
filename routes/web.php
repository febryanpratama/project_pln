<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetectionController;
use App\Http\Controllers\FmeaController;
use App\Http\Controllers\FungsiControlller;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LtaController;
use App\Http\Controllers\OccurenceController;
use App\Http\Controllers\RpnController;
use App\Http\Controllers\SwbsController;
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

Route::controller(BarangController::class)->group(function(){
    Route::prefix('barang')->group(function(){
        Route::get('/', 'index')->name('data.barang');
        Route::post('/', 'store');
    });
});

Route::controller(KriteriaController::class)->group(function(){
    Route::prefix('kriteria')->group(function(){
        Route::get('/', 'index')->name('data.kriteria');
        Route::post('/', 'store');
    });
});
Route::controller(OccurenceController::class)->group(function(){
    Route::prefix('occurence')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});
Route::controller(DetectionController::class)->group(function(){
    Route::prefix('detection')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});


Route::controller(RpnController::class)->group(function(){
    Route::prefix('rpn')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});

Route::controller(SwbsController::class)->group(function(){
    Route::prefix('swbs')->group(function(){
        Route::get('/', 'index');
        Route::get('/{swbs_id}', 'detail');
        Route::get('/{swbs_id}/sub-sistem/{subsistem_id}', 'detailSubsistem');
        Route::post('/', 'store');
        Route::post('/sub-sistem', 'subSistem');
        Route::post('/komponen', 'komponen');
    });
});

Route::controller(FungsiControlller::class)->group(function(){
    Route::prefix('fungsi-sistem')->group(function(){
        Route::get('/', 'index');
        Route::get('/{swbs_id}', 'detail');
        Route::get('/{swbs_id}/sub-sistem/{subsistem_id}', 'detailSubsistem');
        Route::post('/', 'store');
        Route::post('/sub-sistem', 'subSistem');
        Route::post('/komponen', 'komponen');
    });
});

Route::controller(LtaController::class)->group(function(){
    Route::prefix('lta')->group(function(){
        Route::get('/', 'index');
        // Route::get('/{swbs_id}', 'detail');
        // Route::get('/{swbs_id}/sub-sistem/{subsistem_id}', 'detailSubsistem');
        Route::post('/', 'store');
        // Route::post('/sub-sistem', 'subSistem');
        // Route::post('/komponen', 'komponen');
    });

    Route::prefix('lta-proses')->group(function(){
        Route::get('/', 'ltaIndex');
        // Route::get('/{swbs_id}', 'detail');
        // Route::get('/{swbs_id}/sub-sistem/{subsistem_id}', 'detailSubsistem');
        Route::post('/', 'ltastore');
        // Route::post('/sub-sistem', 'subSistem');
        // Route::post('/komponen', 'komponen');
    });
});

Route::controller(FmeaController::class)->group(function(){
    Route::prefix('fmea')->group(function(){
        Route::get('/', 'index');
        Route::post('/', 'store');
    });
});

