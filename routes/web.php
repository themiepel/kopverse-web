<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BakeryController;

Route::get('/',function(){
     return view('splash.index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/choose-role', function () {
    return view('role.choose');
})->middleware('auth');

Route::post('/bakery/create', [BakeryController::class,'store'])->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/kdmp', function () {
    return view('kdmp.index');
});
