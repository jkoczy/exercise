<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\AuthManagementController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\KhachHangController;
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


Route::get('/',[SanPhamController::class,'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/user/danh-sach', function () {
    return 'Danh sach';
})->name('nguoidung');
Route::get('/user/{id}', function ($id) {
    return 'Id ' . $id;
})->where('id','[0-9]+');
Route::get('/user/{name?}', function ($name='join') {
    return 'Nam ' . $name;
})->where('name','[A-Za-z]+');

Route::prefix('san-pham')->group(function () {
    Route::get('',[SanPhamController::class,'index']);
    Route::get('/danh-sach',[SanPhamController::class,'index2']);
    Route::get('/them-san-pham',[SanPhamController::class,'create']);
    Route::post('/them-san-pham',[SanPhamController::class,'store']);
    Route::get('/cap-nhat-san-pham/{id}',[SanPhamController::class,'edit']);
    Route::put('/cap-nhat-san-pham/{id}',[SanPhamController::class,'update']);
    Route::get('/{id}',[SanPhamController::class,'show']);
});
Route::prefix('loai-san-pham')->group(function () {
    Route::get('',[LoaiSanPhamController::class,'index']);
    Route::get('/them',[LoaiSanPhamController::class,'create']);
    Route::get('/list',[LoaiSanPhamController::class,'index2']);
    Route::post('/them',[LoaiSanPhamController::class,'store']);
    Route::get('/cap-nhat/{id}',[LoaiSanPhamController::class,'edit']);
    Route::post('/cap-nhat/{id}',[LoaiSanPhamController::class,'update']);
    Route::get('/{id}',[LoaiSanPhamController::class,'show']);
});
Route::prefix('tin-tuc')->group(function () {
    Route::get('',[TinTucController::class,'index']);
    Route::get('/them',[LoaiSanPhamController::class,'create']);
    Route::get('/list',[LoaiSanPhamController::class,'index2']);
    Route::post('/them',[LoaiSanPhamController::class,'store']);
    Route::get('/cap-nhat/{id}',[LoaiSanPhamController::class,'edit']);
    Route::post('/cap-nhat/{id}',[LoaiSanPhamController::class,'update']);
    Route::get('/{id}',[TinTucController::class,'show']);
});
Route::prefix('AuthManagement')->group(function () {
    Route::get('login',[AuthManagementController::class,'getLogin']);
    Route::post('/login',[AuthManagementController::class,'postLogin']);
    Route::get('/logout',[AuthManagementController::class,'getLogout']);
});
Route::prefix('khach-hang')->group(function () {
    Route::post('them-vao-gio-hang/{id}',[KhachHangController::class,'ThemVaoGioHang']);
});