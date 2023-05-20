<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainwindow');
});

use App\Http\Controllers\MenuController;
Route::get('/menu', [MenuController::class, 'index']);

use App\Http\Controllers\AboutController;
Route::get('/aboutus', [AboutController::class, 'index']);

use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index']);

use App\Http\Controllers\GalleryController;
Route::get('/gallery', [GalleryController::class, 'index']);

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index']);

use App\Http\Controllers\RegisterController;
Route::get('/register', [RegisterController::class, 'index']);