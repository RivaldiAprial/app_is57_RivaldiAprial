<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\GampongController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/penduduk', [PendudukController::class, 'index']);
Route::get('/penduduk/form', [PendudukController::class, 'create']);
Route::post('/penduduk/store', [PendudukController::class, 'store']);
Route::get('/penduduk/edit/{id}', [PendudukController::class, 'edit']);
Route::put('/penduduk/{id}', [PendudukController::class, 'update']);
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy']);

Route::get('/gampong', [GampongController::class, 'index']);
Route::get('/gampong/form', [GampongController::class, 'create']);
Route::post('/gampong/store', [GampongController::class, 'store']);
Route::get('/gampong/edit/{id}', [GampongController::class, 'edit']);
Route::put('/gampong/{id}', [GampongController::class, 'update']);
Route::delete('/gampong/{id}', [GampongController::class, 'destroy']);




