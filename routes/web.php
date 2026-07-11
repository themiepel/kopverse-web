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

Route::get('/kdmp/store', function () {
    return view('kdmp.store');
});

Route::get('/kdmp/savings', function () {
    return view('kdmp.savings');
});

Route::get('/kdmp/financing', function () {
    return view('kdmp.financing');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/bakery/detail', function () {
    return view('bakery.detail');
})->middleware('auth');
