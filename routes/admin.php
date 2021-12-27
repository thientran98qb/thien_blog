<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::group(['middleware' => 'auth:admin', 'as' => 'admin.'] , function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('user', '\App\Http\Controllers\Admin\UserController');
});
