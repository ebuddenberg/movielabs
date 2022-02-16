<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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

Route::get('/movies/test', function (Request $request) {
    return "test api";
});

Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index']);
    Route::post('/', [MovieController::class, 'create']);
    Route::put('/{id}', [MovieController::class, 'update']);
    Route::delete('/{id}', [MovieController::class, 'delete']);
    Route::get('/{id}', [MovieController::class, 'show']);
    Route::get('/xml/download/mec/{id}', [MovieController::class, 'downloadMEC']);
    Route::get('/xml/download/mmc/{id}', [MovieController::class, 'downloadMMC']);
});
