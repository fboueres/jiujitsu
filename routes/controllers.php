<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controller Routes
|--------------------------------------------------------------------------
|
| Here is where you can register controllers routes for your application.
| These routes should be resource routes for your controllers, they are 
| loaded by the RouteServiceProvider and all of them will be assigned 
| to the "web" middleware group. Make something great!
|
*/

Route::resource('students', StudentController::class);