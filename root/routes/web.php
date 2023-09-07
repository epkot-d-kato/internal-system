<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[UserController::class,'home']);
Route::get('/users/index', [UserController::class,'index']);
Route::get('/users/create', [UserController::class,'create']);
Route::post('/users/store', [UserController::class,'store']);
Route::get('/users/show', [UserController::class,'show']);
Route::get('/users/edit', [UserController::class,'edit']);
Route::put('/users/update', [UserController::class,'update']);
