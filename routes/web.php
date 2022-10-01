<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

Route::get('/',[FrontController::class,'index']);
Route::get('/about',[FrontController::class,'about']);
Route::get('/service',[FrontController::class,'service']);
Route::get('/branches',[FrontController::class,'branches']);
Route::get('/contact',[FrontController::class,'contact']);

