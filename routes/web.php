<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main', [
      "title" => "main",
    ]);
});

Route::get('/student/all', [MuridController::class, 'index'])->name('student.all');
Route::get('/student/detail/{student}', [MuridController::class, 'show']);
Route::get('/teacher/all', [GuruController::class, 'index'])->name('teacher.all');
Route::get('/teacher/detail/{teacher}', [GuruController::class, 'show']);
