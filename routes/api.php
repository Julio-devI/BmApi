<?php

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

Route::get('/cars', [ProductController::class, 'index'])->name('all.cars');
Route::get('/cars/search/{name}', [ProductController::class, 'search'])->name('cars.search');
Route::get('/cars/{id}', [ProductController::class, 'show'])->name('cars.show');
Route::post('/register', [AuthController::class, 'register'])->name('cars.register');
Route::post('/login', [AuthController::class, 'login'])->name('cars.login');

//Protected Routes
/* Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
}); */