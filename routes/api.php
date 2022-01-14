<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::patch('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::patch('/checkAllTodo', [TodoController::class, 'checkAllTodo'])->name('todo.check.all');
Route::delete('/destroyCompleted', [TodoController::class, 'destroyCompleted'])->name('todo.delete.completed');
Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
