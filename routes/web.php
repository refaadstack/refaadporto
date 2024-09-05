<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class,'index'])->name('front.index');
Route::get('/welcome', [FrontController::class,'welcome'])->name('front.welcome');
Route::get('/detail/{id}', [FrontController::class,'detail'])->name('front.detail');
Route::get('/cv', [FrontController::class,'cv'])->name('front.cv');

