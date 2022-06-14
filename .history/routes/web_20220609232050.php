<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'home']); // Khai bao cho trang home
Route::get('/xem-truyen/{slug}', [IndexController::class, 'watchstory']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Khai bao route cho adminCP
Route::resource('/category', CategoryController::class);
Route::resource('/story', StoryController::class);
Route::resource('/chapter', ChapterController::class);
