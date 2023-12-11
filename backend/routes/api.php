<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\XeController;
use App\Http\Controllers\TinDangController;

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


Route::get('/xes', [XeController::class, 'index']);

Route::get('/tin', [TinDangController::class, 'index']);
Route::post('/tin', [TinDangController::class, 'store']);
Route::get('/tin/create', [TinDangController::class, 'create']);


Route::get('/nguoidung', [NguoiDungController::class, 'show']);
Route::post('/dangnhap', [NguoiDungController::class, 'dangnhap']);
