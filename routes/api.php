<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StadiumController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login',[AuthController::class,'login']);
Route::post('verify',[AuthController::class,'verify']);
Route::post('register',[AuthController::class,'register']);
Route::get('home',[HomeController::class,'index']);
Route::get('stadiums',[StadiumController::class,'index']);
Route::get('stadiums/{stadium}',[StadiumController::class,'show']);
Route::put('stadium/favorites',[StadiumController::class,'setFavorite']);
Route::get('stadium/available-booking/{stadium}',[StadiumController::class,'getAvailableBookings']);
Route::get('check-coupon',[StadiumController::class,'checkCode']);
Route::get('test',[TestController::class,'index']);
