<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

Route::resource('/siswa2', SiswaController::class);
Route::resource('/siswa', JurusanController::class);

Route::resource('/admin', SiswaController::class);
Route::resource('/admin2', JurusanController::class);

// Route::resource('/jurusan', JurusanController::class);
// Route::resource('/jurusan', SiswaController::class);

// Route::resource('/admin', JurusanController::class);
Route::get('/admin', [SiswaController::class, 'detail']);
// Route::get('/admin', function(){
//     return view('admin/index');
// });  
