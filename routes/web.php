<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index']);
Route::get('/gaji',[IndexController::class,'gaji']);
Route::get('/karyawan',[IndexController::class,'karyawan']);
Route::get('/create',[IndexController::class,'create']);
Route::get('/laporan',[IndexController::class,'laporan']);
// Route::get('/Home', function () {
//     return view('welcome');
// });
