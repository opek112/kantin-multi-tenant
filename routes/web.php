<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
