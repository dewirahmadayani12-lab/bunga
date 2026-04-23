<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

Route::get('/', [HomeController::class,'dashboard']);
Route::get('/input',[FormController::class, 'formdaftar']);
Route::post('/welcome',[FormController::class, 'kirim']);

//testing master template
Route::get('/master',function(){
    return view('layout/master');
});
