<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return 'Bonjour le monde!';
});

Route::get('/matteo',function(){
    return view('matteo');
});
Route::resource('/users',UserController::class);
Route::resource('/posts',RolesController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home', function () {
    return View::make('pages.home');
});

    
Route::get('/about', function () {
    return View::make('pages.about');
});

require __DIR__.'/auth.php';
