<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\homepageController;
use App\http\Controllers\loginpageController;
use App\http\Controllers\registratieController;
use App\http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\http\Controllers\contactpageController;
use App\Http\Controllers\PostController;

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
// HomePage
Route::get('/', [homepageController::class, 'index'])->name('home');
Route::get('/home', [homepageController::class, 'index'])->name('home');
//Login
Route::get('/login', [AuthController::class, 'inlog'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
//SignUP
Route::get('/registreer', [AuthController::class, 'signup'])->name('registeer');
Route::post('/registreer', [AuthController::class, 'store']);
//Logout
Route::get('/uitloggen', [AuthController::class, 'logout'])->name('uitloggen');
//Contact
Route::get('/contact', [contactpageController::class, 'contact'])->name('contact');

Route::prefix('/post')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('postcreate');
    Route::get('/show/{post}', [PostController::class, 'show'])->name('showPost');

    Route::middleware(['auth'])->group(function () {
        Route::get('/like/{post}', [PostController::class, 'like'])->name('likePost');
        Route::get('/dislike/{post}', [PostController::class, 'dislike'])->name('dislikePost');

        Route::get('/create', [PostController::class, 'create'])->name('postCreate');
        Route::post('/create', [PostController::class, 'store'])->name('store');
    
        Route::get('/edit/{post}', [PostController::class, 'edit'])->name('postEdit');
        Route::put('/edit/{post}', [PostController::class, 'update']);
    
        Route::get('/delete/{post}', [PostController::class, 'delete'])->name('postDelete');
   
   
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
});


Route::middleware('auth')->prefix('/Comment')->group(function () {
    Route::post('/create/{post}', [CommentController::class, 'store'])->name('commentCreate');
    Route::get('/like/{comment}', [CommentController::class, 'like'])->name('likeComment');
    Route::get('/dislike/{comment}', [CommentController::class, 'dislike'])->name('dislikeComment');
});
