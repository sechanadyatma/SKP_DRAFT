<?php

use Mockery\Loader\EvalLoader;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\FormEvalController;
use App\Http\Controllers\FormKuantitatifController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/pegawai', [PegawaiController::class, 'index'])->middleware('auth');
Route::get('/pegawai/{id}', [PegawaiController::class, 'show'])->middleware('auth');
Route::get('/pegawai-add', [PegawaiController::class, 'create'])->middleware('auth');
Route::post('/pegawai', [PegawaiController::class, 'store'])->middleware('auth');
Route::get('/pegawai-edit/{id}', [PegawaiController::class, 'edit'])->middleware('auth');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->middleware('auth');
Route::get('/pegawai-delete/{id}', [PegawaiController::class, 'delete'])->middleware('auth');
Route::delete('/pegawai-destroy/{id}', [PegawaiController::class, 'destroy'])->middleware('auth');

Route::get('/golongan', [ClassController::class, 'index'])->middleware('auth');
Route::get('/golongan-add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/golongan', [ClassController::class, 'store'])->middleware('auth');

Route::get('form', [FormController::class, 'index']);

Route::get('evaluasi', [EvaluasiController::class, 'index']);
Route::get('form-eval', [FormEvalController::class, 'index']);
Route::get('form-kuantitatif', [FormKuantitatifController::class, 'index']);