<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\web\VoteController;
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

Route::view('/', 'web.home.index')->name('home');

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');
    Route::post('/vote/store', [VoteController::class, 'store'])->name('vote.store');
});

Route::resource('/admin/user', UserController::class)->middleware(['auth', 'admin']);