<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [MainController::class,'index']);

Route::get('/berangkat/{id}', [MainController::class,'hapus']);
Route::get('/edit/{id}', [MainController::class,'edit']);
Route::post('/update', [MainController::class,'update']);
Route::post('/create', [MainController::class,'create']);
Route::get('/input',[MainController::class,'input']);

Route::get('/bus',[BusController::class,'index']);
Route::get('/hapusbus/{id}',[BusController::class,'hapusbus']);
Route::get('/editbus/{id}',[BusController::class,'edit']);
Route::post('/updatebus',[BusController::class,'update']);
Route::post('/createbus',[BusController::class,'create']);
Route::get('/inputbus',[BusController::class,'input']);

Route::get('/supir',[SupirController::class,'index']);
Route::get('/hapussupir/{id}',[SupirController::class,'hapussupir']);
Route::get('/editsupir/{id}',[SupirController::class,'edit']);
Route::post('/updatesupir',[SupirController::class,'update']);
Route::post('/createsupir',[SupirController::class,'create']);
Route::get('/inputsupir',[SupirController::class,'input']);

Route::get('/',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
