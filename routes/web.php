<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
//Students Route
Route::resource('students', StudentController::class);
