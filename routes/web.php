<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'get']);
Route::post('/store-user', [App\Http\Controllers\UserController::class, 'store']);

Route::get('/resume/{id}', [App\Http\Controllers\PdfGeneratorcontroller::class, 'index']);