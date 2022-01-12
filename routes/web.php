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
    Route::post('/{id}/update', [AuthorController::class, 'edit']);
    Route::post('/{id}/delete', [AuthorController::class, 'remove']);
});

Route::post('todo/{id}/delete', function () {
})->name('todo.delete');

Route::get('/', function (Request $request) {
   return view('index', [AuthorController::class, 'edit']);
});

