<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('articles', ArticleController::class)->middleware('auth');
});