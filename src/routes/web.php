<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inquiry_formController;
use App\Http\Controllers\UserController;

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

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/admin', [UserController::class, 'admin']);
Route::get('/admin/search', [UserController::class, 'search']);
Route::get('/', [Inquiry_formController::class, 'index']);