<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function () {
    return view('demo');
});
Route::get('/student', 
    [StudentController::class, 'index']
);
Route::post('/student', 
    [StudentController::class, 'store']
);
Route::get('/student/create', 
    [StudentController::class, 'create']
);
Route::get('/teacher', function () {
    return view('teacher.form'); // /views/teacher/form.blade.php
});

