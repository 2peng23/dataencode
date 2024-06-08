<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/profile');
});
Route::resource('profile', ProfileController::class);
Route::get('/date', [ProfileController::class, 'date'])->name('date');
