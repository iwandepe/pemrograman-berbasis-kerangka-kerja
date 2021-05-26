<?php

use App\Http\Controllers\FormValidationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormValidationController::class, 'createUserForm']);
Route::post('/form', [FormValidationController::class, 'UserForm']);
