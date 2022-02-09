<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/blog',[BlogController::class, 'show']);
Route::get('/contact',[ContactController::class, 'show']);
Route::get('/dashboard',[DashboardController::class, 'show']);
Route::get('/faq',[FaqController::class, 'show']);
Route::get('/profile',[ProfileController::class, 'show']);
