<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CommentController;
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






Route::get('show',[PostController::class, 'create']);

Route::post('post',[PostController::class,'store']);




Route::get('/', function () {
    return view('welcome');
});



Route::get('home', function () {
    return view('posts.index');
})->name('home');
Route::get('buy', function () {
    return view('posts.buy');
})->name('buy');
Route::get('about', function () {
    return view('posts.aboutus');
})->name('about');

Route::get('rent', function () {
    return view('posts.rent');
})->name('rent');
Route::post('comment',[CommentController::class,'store'])->name('comment');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
