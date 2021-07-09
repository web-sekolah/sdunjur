<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kelas1Controller;
use App\Http\Controllers\kelas2Controller;
use App\Http\Controllers\kelas3Controller;
use App\Http\Controllers\kelas4Controller;
use App\Http\Controllers\kelas5Controller;
use App\Http\Controllers\kelas6Controller;
use App\Http\Middleware\CekloginMiddelware;

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


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'CekloginMiddelware'],function(){
    Route::get('index', function () {
        return view('home');
    });

    Route::get('/kelas1', [kelas1Controller::class, 'index'])->name('kelas1');
    Route::get('/kelas2', [kelas2Controller::class, 'index'])->name('kelas2');
    Route::get('/kelas3', [kelas3Controller::class, 'index'])->name('kelas3');
    Route::get('/kelas4', [kelas4Controller::class, 'index'])->name('kelas4');
    Route::get('/kelas5', [kelas5Controller::class, 'index'])->name('kelas5');
    Route::get('/kelas6', [kelas6Controller::class, 'index'])->name('kelas6');






});