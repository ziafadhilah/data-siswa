<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
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

//category
Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    // Route::get('/show/{id}', [CategoryController::class, 'show']);
    Route::get('/create', [CategoryController::class, 'create']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::patch('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});

//student
Route::prefix('/student')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/show/{id}', [StudentController::class, 'show']);
    Route::get('/create', [StudentController::class, 'create']);
    Route::get('/edit/{id}', [StudentController::class, 'edit']);
    Route::post('/', [StudentController::class, 'store']);
    Route::patch('/{id}', [StudentController::class, 'update']);
    Route::delete('/{id}', [StudentController::class, 'destroy']);
});
