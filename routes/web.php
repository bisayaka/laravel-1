<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//my first route

Route::get('/ariel', function () {
    return view('AlbitGwapo');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/ariel', function () {
    return view('AlbitGwapo');

});

Route::get('/home', function () {
    return view('laravel.index');
})->name('index');

Route::get('/gallery', function () {
    return view('laravel.gallery');
})->name('gallery');

Route::get('/service', function () {
    return view('laravel.service');
})->name('service');

Route::get('/about', function () {
    return view('laravel.about');
})->name('about');

Route::get('/calculator', function () {
    return view('laravel.calculator');
})->name('calculator');
