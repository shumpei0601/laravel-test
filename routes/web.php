<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::get('/', [AuthorController::class, 'index']);
Route::post('/', [AuthorController::class, 'post']);
Route::prefix('/todo')->group(function () {
    Route::post('/create', [AuthorController::class, 'create']);
    Route::post('/update', [AuthorController::class, 'update']);
    Route::post('/delete', [AuthorController::class, 'delete']);
});
Route::post('todo/{id}/update', function () {
})->name('todo.update');
Route::post('todo/{id}/delete', function () {
})->name('todo.delete');

