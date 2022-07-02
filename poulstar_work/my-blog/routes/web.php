<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
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

Route::get('/',  [IndexController::class, "index" ]); 
Route::get('/readmore/{digitalContent}',  [IndexController::class, "single" ] 
)->name('readmore');
Route::get('login', [AuthController::class, "show_login"])->name('show_login');
// Route::get('login', [AuthController::class, "login"])->name('login');
Route::get('register', [AuthController::class, "show_register"])->name('show_register');
// Route::get('register', [AuthController::class, "register"])->name('register');

