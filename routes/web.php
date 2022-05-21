<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetectionController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\OccurenceController;
use App\Http\Controllers\RpnController;
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
    return view('welcome');
});

Auth::routes();

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

