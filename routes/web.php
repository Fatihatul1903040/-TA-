<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/page', [App\Http\Controllers\JamaahController::class, 'index'])->name('page');
