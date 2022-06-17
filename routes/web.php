<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/import', [StudentController::class, 'importView']);
Route::get('/student_detail/{student_id}', [StudentController::class, 'getStudentById']);
Route::post('/file-import', [StudentController::class, 'import'])->name('file-import');
Route::post('/file-import-user', [UserController::class, 'importProcess'])->name('file-import-user');
Route::get('/file-export', [UserController::class, 'fileExport'])->name('file-export');
Route::get('/delete', [StudentController::class, 'clearTable']);