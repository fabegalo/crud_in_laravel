<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/inclui', [HomeController::class, 'inclui']);

Route::get('/lista', [HomeController::class, 'lista']);

Route::prefix('crud')->group(function () {
    Route::get('/all', [CrudController::class, 'all']);
    Route::post('/add', [CrudController::class, 'add']);
    Route::put('/atualiza', [CrudController::class, 'edit']);
    Route::delete('/delete/{id}', [CrudController::class, 'delete']);
});