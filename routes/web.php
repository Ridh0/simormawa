<?php

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

Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda.index');
Route::get('/disposisi', [App\Http\Controllers\DisposisiController::class, 'index'])->name('disposisi.index');
Route::get('/disposisi/create', [App\Http\Controllers\DisposisiController::class, 'create'])->name('disposisi.create');
Route::get('/proposal', [App\Http\Controllers\ProposalController::class, 'index'])->name('proposal.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
