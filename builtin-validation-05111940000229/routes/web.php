<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', [HomeController::class, 'create']);
Route::post('/user/create', [HomeController::class, 'store']);