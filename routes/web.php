<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\kelas1Controller;
use App\Http\Controllers\kelas1\mtkkls1Controller;
use App\Http\Controllers\kelas2Controller;
use App\Http\Controllers\kelas3Controller;
use App\Http\Controllers\kelas4Controller;
use App\Http\Controllers\kelas5Controller;
use App\Http\Controllers\kelas6Controller;

//Form Diskusi
use App\Http\Controllers\ruangtanya\tanyamatkaController;
use App\Http\Controllers\ruangtanya\tanyaindoController;
use App\Http\Controllers\ruangtanya\tanyaipaController;
use App\Http\Controllers\ruangtanya\tanyaipsController;
use App\Http\Controllers\ruangtanya\tanyamulokController;
use App\Http\Controllers\ruangtanya\tanyapenjasController;
use App\Http\Controllers\ruangtanya\tanyapknController;
use App\Http\Controllers\ruangtanya\tanyaseniController;
use App\Http\Controllers\ruangtanya\tanyaagamaController;

use App\Http\Middleware\CekloginMiddelware;
use App\Http\Controllers\Auth\LoginController;
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


// Route::post('/', [LoginController::class, 'login'])->name('login');
Auth::routes();
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('login2', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'],function(){

    Route::get('dashboard', function () {
        return view('home');
    });
    Route::get('/register', function (){
        return view('auth/register');
    })->name('register');

    // kelas 1
    Route::get('/kelas1', [kelas1Controller::class, 'index'])->name('kelas1');
    // Matematika 
    Route::get('/kelas1/matematika', [mtkkls1Controller::class, 'index'])->name('kelas1.mtk');
    Route::get('/kelas1/matematika/download/{file}', [mtkkls1Controller::class, 'download']);
    Route::get('/kelas1/matematika/download/{file}', [mtkkls1Controller::class, 'download']);
    Route::post('/kelas1/matematika/addsubmission', [mtkkls1Controller::class, 'addsubmission']);
    Route::post('/kelas1/matematika/addsubmit', [mtkkls1Controller::class, 'addsubmit']);



    Route::get('/kelas2', [kelas2Controller::class, 'index'])->name('kelas2');
    Route::get('/kelas3', [kelas3Controller::class, 'index'])->name('kelas3');
    Route::get('/kelas4', [kelas4Controller::class, 'index'])->name('kelas4');
    Route::get('/kelas5', [kelas5Controller::class, 'index'])->name('kelas5');
    Route::get('/kelas6', [kelas6Controller::class, 'index'])->name('kelas6');

    // Ruang Bertanya kelas 1
    // Ruang Matematika
    Route::get('/tanyajawab/matematika', [tanyamatkaController::class, 'index'])->name('tanya');
    Route::post('/tanyajawab/AddComment', [tanyamatkaController::class, 'store']);
    Route::post('/tanyajawab/addreply', [tanyamatkaController::class, 'storeReply']);
    Route::get('/tanyajawab/matematika/hapus/{id}', [tanyamatkaController::class, 'destroy']);
    // Ruang Bahasa Indonesia
    Route::get('/tanyajawab/bindonesia', [tanyaindoController::class, 'index'])->name('tanyaindo');
    Route::post('/tanyajawab/bindonesia/AddComment', [tanyaindoController::class, 'store']);
    Route::post('/tanyajawab/bindonesia/addreply', [tanyaindoController::class, 'storeReply']);
    Route::get('/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController::class, 'destroy']);
    // Ruang Muatan Lokal
    Route::get('/tanyajawab/muatanlokal', [tanyamulokController::class, 'index'])->name('tanyamulok');
    Route::post('/tanyajawab/muatanlokal/AddComment', [tanyamulokController::class, 'store']);
    Route::post('/tanyajawab/muatanlokal/addreply', [tanyamulokController::class, 'storeReply']);
    Route::get('/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController::class, 'destroy']);
    // Ruang PPKN
    Route::get('/tanyajawab/ppkn', [tanyapknController::class, 'index'])->name('tanyapkn');
    Route::post('/tanyajawab/ppkn/AddComment', [tanyapknController::class, 'store']);
    Route::post('/tanyajawab/ppkn/addreply', [tanyapknController::class, 'storeReply']);
    Route::get('/tanyajawab/ppkn/hapus/{id}', [tanyapknController::class, 'destroy']);
    // Ruang IPS
    Route::get('/tanyajawab/ips', [tanyaipsController::class, 'index'])->name('tanyaips');
    Route::post('/tanyajawab/ips/AddComment', [tanyaipsController::class, 'store']);
    Route::post('/tanyajawab/ips/addreply', [tanyaipsController::class, 'storeReply']);
    Route::get('/tanyajawab/ips/hapus/{id}', [tanyaipsController::class, 'destroy']);
    // Ruang IPA
    Route::get('/tanyajawab/ipa', [tanyaipaController::class, 'index'])->name('tanyaipa');
    Route::post('/tanyajawab/ipa/AddComment', [tanyaipaController::class, 'store']);
    Route::post('/tanyajawab/ipa/addreply', [tanyaipaController::class, 'storeReply']);
    Route::get('/tanyajawab/ipa/hapus/{id}', [tanyaipaController::class, 'destroy']);
    // Ruang Olahraga
    Route::get('/tanyajawab/penjas', [tanyapenjasController::class, 'index'])->name('tanyapenjas');
    Route::post('/tanyajawab/penjas/AddComment', [tanyapenjasController::class, 'store']);
    Route::post('/tanyajawab/penjas/addreply', [tanyapenjasController::class, 'storeReply']);
    Route::get('/tanyajawab/penjas/hapus/{id}', [tanyapenjasController::class, 'destroy']);
    // Ruang Senibudaya
    Route::get('/tanyajawab/senibudaya', [tanyaseniController::class, 'index'])->name('tanyaseni');
    Route::post('/tanyajawab/senibudaya/AddComment', [tanyaseniController::class, 'store']);
    Route::post('/tanyajawab/senibudaya/addreply', [tanyaseniController::class, 'storeReply']);
    Route::get('/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController::class, 'destroy']);
    // Ruang Agama
    Route::get('/tanyajawab/agama', [tanyaagamaController::class, 'index'])->name('tanyaagama');
    Route::post('/tanyajawab/agama/AddComment', [tanyaagamaController::class, 'store']);
    Route::post('/tanyajawab/agama/addreply', [tanyaagamaController::class, 'storeReply']);
    Route::get('/tanyajawab/agama/hapus/{id}', [tanyaagamaController::class, 'destroy']);
});


Route::middleware(['auth', 'cekLevel:guru'])->group(function () {
    // kelas 1
    // Matematika
    Route::get('/kelas1/matematika/tambah', [mtkkls1Controller::class, 'create']);
    Route::post('/kelas1/matematika/simpan', [mtkkls1Controller::class, 'add']);
    Route::get('/kelas1/matematika/ubah/{id}', [mtkkls1Controller::class, 'edit']);
    Route::post('/kelas1/matematika/update/{id}', [mtkkls1Controller::class, 'update']);
    Route::get('/kelas1/matematika/hapus/{id}', [mtkkls1Controller::class, 'destroy']);
    Route::get('/kelas1/matematika/kuis/tambah', [mtkkls1Controller::class, 'quiz']);
    Route::post('/kelas1/matematika/kuis/simpan', [mtkkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/matematika/kuis/hapus/{id}', [mtkkls1Controller::class, 'destroykuis']);
});





Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
