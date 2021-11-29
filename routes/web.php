<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\MahasiswaController;

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
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = "Donirho";
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::post('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);

Route::resource('students', StudentsController::class);
