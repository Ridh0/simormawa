<?php

use App\Http\Controllers\PostController;
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
    return redirect('login');
});

Auth::routes();

Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda.index');
Route::get('/userss', [App\Http\Controllers\HomeController::class, 'index'])->name('user.index');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user.profile');
Route::put('/profile/store', [App\Http\Controllers\HomeController::class, 'ubah_password'])->name('profile.password');
Route::get('/disposisi', [App\Http\Controllers\DisposisiController::class, 'index'])->name('disposisi.index');
Route::get('/disposisi/create', [App\Http\Controllers\DisposisiController::class, 'create'])->name('disposisi.create');
Route::post('/disposisi/store', [App\Http\Controllers\DisposisiController::class, 'store'])->name('disposisi.store');
Route::get('/disposisi/edit/{disposisi}', [App\Http\Controllers\DisposisiController::class, 'edit'])->name('disposisi.edit');
Route::put('/disposisi/update', [App\Http\Controllers\DisposisiController::class, 'update'])->name('disposisi.update');
Route::get('/disposisi/hapus/{disposisi}', [App\Http\Controllers\DisposisiController::class, 'hapus'])->name('disposisi.hapus');
Route::get('/proposal', [App\Http\Controllers\ProposalController::class, 'index'])->name('proposal.index');
Route::get('/proposal/create', [App\Http\Controllers\ProposalController::class, 'create'])->name('proposal.create');
Route::post('/proposal/store', [App\Http\Controllers\ProposalController::class, 'store'])->name('proposal.store');
Route::get('/proposal/edit/{proposal}', [App\Http\Controllers\ProposalController::class, 'edit'])->name('proposal.edit');
Route::put('/proposal/update', [App\Http\Controllers\ProposalController::class, 'update'])->name('proposal.update');
Route::get('/proposal/hapus/{proposal}', [App\Http\Controllers\ProposalController::class, 'hapus'])->name('proposal.hapus');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
