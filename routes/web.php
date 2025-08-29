<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'homePage'])->name('home');
Route::get('/about-us',[PageController::class,'aboutUsPage'])->name('about-us');
