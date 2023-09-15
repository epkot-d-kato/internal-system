<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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
Route::get('/admin/home',[UserController::class,'home']);
Route::get('/admin/users/index', [UserController::class,'index']);
Route::get('/admin/users/create', [UserController::class,'create']);
Route::post('admin/users/store', [UserController::class,'store']);
Route::get('/admin/users/show/{id}', [UserController::class,'show']);
Route::get('/admin/users/edit/{id}', [UserController::class,'edit']);
Route::put('/admin/users/update/{id}', [UserController::class,'update']);

Route::get('/works/index',[WorkController::class,'index']);
Route::get('/works/create',[WorkController::class,'create']);
Route::post('/works/store',[WorkController::class,'store']);
Route::delete('/works/destroy/{id}',[WorkController::class,'destroy']);

