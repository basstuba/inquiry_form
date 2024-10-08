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

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::post('/register', [UserController::class, 'store']);

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function() {
    Route::get('/admin', [UserController::class, 'admin']);
    Route::get('/admin/search', [UserController::class, 'search']);
    Route::delete('/delete', [UserController::class, 'destroy']);
    Route::post('/admin/export', [UserController::class, 'export'])->name('admin.export');
});

Route::get('/', [Inquiry_formController::class, 'index']);
Route::post('/confirm', [Inquiry_formController::class, 'confirm']);
Route::post('/thanks', [Inquiry_formController::class, 'store']);