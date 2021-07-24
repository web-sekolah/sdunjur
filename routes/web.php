<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// kelas 1
use App\Http\Controllers\kelas1Controller;
use App\Http\Controllers\kelas1\mtkkls1Controller;
use App\Http\Controllers\kelas1\bindkls1Controller;
use App\Http\Controllers\kelas1\ipakls1Controller;
use App\Http\Controllers\kelas1\ipskls1Controller;
use App\Http\Controllers\kelas1\pjkkls1Controller;
use App\Http\Controllers\kelas1\sbdkls1Controller;
use App\Http\Controllers\kelas1\mulokkls1Controller;
use App\Http\Controllers\kelas1\agamakls1Controller;
use App\Http\Controllers\kelas1\ppknkls1Controller;

// kelas 2
use App\Http\Controllers\kelas2Controller;
use App\Http\Controllers\kelas2\mtkkls2Controller;
use App\Http\Controllers\kelas2\bindkls2Controller;
use App\Http\Controllers\kelas2\ipakls2Controller;
use App\Http\Controllers\kelas2\ipskls2Controller;
use App\Http\Controllers\kelas2\pjkkls2Controller;
use App\Http\Controllers\kelas2\sbdkls2Controller;
use App\Http\Controllers\kelas2\mulokkls2Controller;
use App\Http\Controllers\kelas2\agamakls2Controller;
use App\Http\Controllers\kelas2\ppknkls2Controller;


// Kelas 3
use App\Http\Controllers\kelas3Controller;
use App\Http\Controllers\kelas3\mtkkls3Controller;
use App\Http\Controllers\kelas3\bindkls3Controller;
use App\Http\Controllers\kelas3\ipakls3Controller;
use App\Http\Controllers\kelas3\ipskls3Controller;
use App\Http\Controllers\kelas3\pjkkls3Controller;
use App\Http\Controllers\kelas3\sbdkls3Controller;
use App\Http\Controllers\kelas3\mulokkls3Controller;
use App\Http\Controllers\kelas3\agamakls3Controller;
use App\Http\Controllers\kelas3\ppknkls3Controller;

// Kelas 4
use App\Http\Controllers\kelas4Controller;
use App\Http\Controllers\kelas4\mtkkls4Controller;
use App\Http\Controllers\kelas4\bindkls4Controller;
use App\Http\Controllers\kelas4\ipakls4Controller;
use App\Http\Controllers\kelas4\ipskls4Controller;
use App\Http\Controllers\kelas4\pjkkls4Controller;
use App\Http\Controllers\kelas4\sbdkls4Controller;
use App\Http\Controllers\kelas4\mulokkls4Controller;
use App\Http\Controllers\kelas4\agamakls4Controller;
use App\Http\Controllers\kelas4\ppknkls4Controller;

use App\Http\Controllers\kelas5Controller;

// Kelas 6
use App\Http\Controllers\kelas6Controller;
use App\Http\Controllers\kelas6\mtkkls6Controller;
use App\Http\Controllers\kelas6\bindkls6Controller;
use App\Http\Controllers\kelas6\ipakls6Controller;
use App\Http\Controllers\kelas6\ipskls6Controller;
use App\Http\Controllers\kelas6\pjkkls6Controller;
use App\Http\Controllers\kelas6\sbdkls6Controller;
use App\Http\Controllers\kelas6\mulokkls6Controller;
use App\Http\Controllers\kelas6\agamakls6Controller;
use App\Http\Controllers\kelas6\ppknkls6Controller;

//Form Diskusi Kelas 1
use App\Http\Controllers\ruangtanya1\tanyamatkaController1;
use App\Http\Controllers\ruangtanya1\tanyaindoController1;
use App\Http\Controllers\ruangtanya1\tanyaipaController1;
use App\Http\Controllers\ruangtanya1\tanyaipsController1;
use App\Http\Controllers\ruangtanya1\tanyamulokController1;
use App\Http\Controllers\ruangtanya1\tanyapenjasController1;
use App\Http\Controllers\ruangtanya1\tanyapknController1;
use App\Http\Controllers\ruangtanya1\tanyaseniController1;
use App\Http\Controllers\ruangtanya1\tanyaagamaController1;

//Form Diskusi Kelas 2
use App\Http\Controllers\ruangtanya2\tanyamatkaController2;
use App\Http\Controllers\ruangtanya2\tanyaindoController2;
use App\Http\Controllers\ruangtanya2\tanyaipaController2;
use App\Http\Controllers\ruangtanya2\tanyaipsController2;
use App\Http\Controllers\ruangtanya2\tanyamulokController2;
use App\Http\Controllers\ruangtanya2\tanyapenjasController2;
use App\Http\Controllers\ruangtanya2\tanyapknController2;
use App\Http\Controllers\ruangtanya2\tanyaseniController2;
use App\Http\Controllers\ruangtanya2\tanyaagamaController2;


//Form Diskusi Kelas 3
use App\Http\Controllers\ruangtanya3\tanyamatkaController3;
use App\Http\Controllers\ruangtanya3\tanyaindoController3;
use App\Http\Controllers\ruangtanya3\tanyaipaController3;
use App\Http\Controllers\ruangtanya3\tanyaipsController3;
use App\Http\Controllers\ruangtanya3\tanyamulokController3;
use App\Http\Controllers\ruangtanya3\tanyapenjasController3;
use App\Http\Controllers\ruangtanya3\tanyapknController3;
use App\Http\Controllers\ruangtanya3\tanyaseniController3;
use App\Http\Controllers\ruangtanya3\tanyaagamaController3;


//Form Diskusi Kelas 4
use App\Http\Controllers\ruangtanya4\tanyamatkaController4;
use App\Http\Controllers\ruangtanya4\tanyaindoController4;
use App\Http\Controllers\ruangtanya4\tanyaipaController4;
use App\Http\Controllers\ruangtanya4\tanyaipsController4;
use App\Http\Controllers\ruangtanya4\tanyamulokController4;
use App\Http\Controllers\ruangtanya4\tanyapenjasController4;
use App\Http\Controllers\ruangtanya4\tanyapknController4;
use App\Http\Controllers\ruangtanya4\tanyaseniController4;
use App\Http\Controllers\ruangtanya4\tanyaagamaController4;


//Form Diskusi Kelas 5
use App\Http\Controllers\ruangtanya5\tanyamatkaController5;
use App\Http\Controllers\ruangtanya5\tanyaindoController5;
use App\Http\Controllers\ruangtanya5\tanyaipaController5;
use App\Http\Controllers\ruangtanya5\tanyaipsController5;
use App\Http\Controllers\ruangtanya5\tanyamulokController5;
use App\Http\Controllers\ruangtanya5\tanyapenjasController5;
use App\Http\Controllers\ruangtanya5\tanyapknController5;
use App\Http\Controllers\ruangtanya5\tanyaseniController5;
use App\Http\Controllers\ruangtanya5\tanyaagamaController5;



//Form Diskusi Kelas 6
use App\Http\Controllers\ruangtanya6\tanyamatkaController6;
use App\Http\Controllers\ruangtanya6\tanyaindoController6;
use App\Http\Controllers\ruangtanya6\tanyaipaController6;
use App\Http\Controllers\ruangtanya6\tanyaipsController6;
use App\Http\Controllers\ruangtanya6\tanyamulokController6;
use App\Http\Controllers\ruangtanya6\tanyapenjasController6;
use App\Http\Controllers\ruangtanya6\tanyapknController6;
use App\Http\Controllers\ruangtanya6\tanyaseniController6;
use App\Http\Controllers\ruangtanya6\tanyaagamaController6;


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
    Route::post('/kelas1/matematika/addsubmit', [mtkkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/matematika/destroysubmit/{id}', [mtkkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/matematika/submit/ubah/{id}', [mtkkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/matematika/submit/update/{id}', [mtkkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/matematika/submit/download/{file}', [mtkkls1Controller::class, 'downloadsubmit']);
    // 
    // Bahasa indonesia
    Route::get('/kelas1/bindonesia', [bindkls1Controller::class, 'index'])->name('kelas1.bind');
    Route::get('/kelas1/bindonesia/download/{file}', [bindkls1Controller::class, 'download']);
    Route::get('/kelas1/bindonesia/download/{file}', [bindkls1Controller::class, 'download']);
    Route::post('/kelas1/bindonesia/addsubmit', [bindkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/bindonesia/destroysubmit/{id}', [bindkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/bindonesia/submit/ubah/{id}', [bindkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/bindonesia/submit/update/{id}', [bindkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/bindonesia/submit/download/{file}', [bindkls1Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas1/ipa', [ipakls1Controller::class, 'index'])->name('kelas1.ipa');
    Route::get('/kelas1/ipa/download/{file}', [ipakls1Controller::class, 'download']);
    Route::get('/kelas1/ipa/download/{file}', [ipakls1Controller::class, 'download']);
    Route::post('/kelas1/ipa/addsubmit', [ipakls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/ipa/destroysubmit/{id}', [ipakls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/ipa/submit/ubah/{id}', [ipakls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/ipa/submit/update/{id}', [ipakls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/ipa/submit/download/{file}', [ipakls1Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPS
    Route::get('/kelas1/ips', [ipskls1Controller::class, 'index'])->name('kelas1.ips');
    Route::get('/kelas1/ips/download/{file}', [ipskls1Controller::class, 'download']);
    Route::get('/kelas1/ips/download/{file}', [ipskls1Controller::class, 'download']);
    Route::post('/kelas1/ips/addsubmit', [ipskls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/ips/destroysubmit/{id}', [ipskls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/ips/submit/ubah/{id}', [ipskls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/ips/submit/update/{id}', [ipskls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/ips/submit/download/{file}', [ipskls1Controller::class, 'downloadsubmit']);
    // 
    // Olahraga 
    Route::get('/kelas1/pjk', [pjkkls1Controller::class, 'index'])->name('kelas1.pjk');
    Route::get('/kelas1/pjk/download/{file}', [pjkkls1Controller::class, 'download']);
    Route::get('/kelas1/pjk/download/{file}', [pjkkls1Controller::class, 'download']);
    Route::post('/kelas1/pjk/addsubmit', [pjkkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/pjk/destroysubmit/{id}', [pjkkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/pjk/submit/ubah/{id}', [pjkkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/pjk/submit/update/{id}', [pjkkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/pjk/submit/download/{file}', [pjkkls1Controller::class, 'downloadsubmit']);
    // 
    // Senibudaya
    Route::get('/kelas1/sbd', [sbdkls1Controller::class, 'index'])->name('kelas1.sbd');
    Route::get('/kelas1/sbd/download/{file}', [sbdkls1Controller::class, 'download']);
    Route::get('/kelas1/sbd/download/{file}', [sbdkls1Controller::class, 'download']);
    Route::post('/kelas1/sbd/addsubmit', [sbdkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/sbd/destroysubmit/{id}', [sbdkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/sbd/submit/ubah/{id}', [sbdkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/sbd/submit/update/{id}', [sbdkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/sbd/submit/download/{file}', [sbdkls1Controller::class, 'downloadsubmit']);
    // 
    // Muatan Lokal
    Route::get('/kelas1/mulok', [mulokkls1Controller::class, 'index'])->name('kelas1.mulok');
    Route::get('/kelas1/mulok/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::get('/kelas1/mulok/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::post('/kelas1/mulok/addsubmit', [mulokkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/mulok/destroysubmit/{id}', [mulokkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/mulok/submit/ubah/{id}', [mulokkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/mulok/submit/update/{id}', [mulokkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/mulok/submit/download/{file}', [mulokkls1Controller::class, 'downloadsubmit']);
    // 
    // Agama
    Route::get('/kelas1/agama', [agamakls1Controller::class, 'index'])->name('kelas1.agama');
    Route::get('/kelas1/agama/download/{file}', [agamakls1Controller::class, 'download']);
    Route::get('/kelas1/agama/download/{file}', [agamakls1Controller::class, 'download']);
    Route::post('/kelas1/agama/addsubmit', [agamakls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/agama/destroysubmit/{id}', [agamakls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/agama/submit/ubah/{id}', [agamakls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/agama/submit/update/{id}', [agamakls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/agama/submit/download/{file}', [agamakls1Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas1/ppkn', [ppknkls1Controller::class, 'index'])->name('kelas1.ppkn');
    Route::get('/kelas1/ppkn/download/{file}', [ppknkls1Controller::class, 'download']);
    Route::get('/kelas1/ppkn/download/{file}', [ppknkls1Controller::class, 'download']);
    Route::post('/kelas1/ppkn/addsubmit', [ppknkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/ppkn/destroysubmit/{id}', [ppknkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/ppkn/submit/ubah/{id}', [ppknkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/ppkn/submit/update/{id}', [ppknkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/ppkn/submit/download/{file}', [ppknkls1Controller::class, 'downloadsubmit']);
    // 

    // kelas 3
    Route::get('/kelas3', [kelas3Controller::class, 'index'])->name('kelas3');
    // Matematika 
    Route::get('/kelas3/matematika', [mtkkls3Controller::class, 'index'])->name('kelas3.mtk');
    Route::get('/kelas3/matematika/download/{file}', [mtkkls3Controller::class, 'download']);
    Route::get('/kelas3/matematika/download/{file}', [mtkkls3Controller::class, 'download']);
    Route::post('/kelas3/matematika/addsubmit', [mtkkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/matematika/destroysubmit/{id}', [mtkkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/matematika/submit/ubah/{id}', [mtkkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/matematika/submit/update/{id}', [mtkkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/matematika/submit/download/{file}', [mtkkls3Controller::class, 'downloadsubmit']);
    // 
    // Bahasa indonesia
    Route::get('/kelas3/bindonesia', [bindkls3Controller::class, 'index'])->name('kelas3.bind');
    Route::get('/kelas3/bindonesia/download/{file}', [bindkls3Controller::class, 'download']);
    Route::get('/kelas3/bindonesia/download/{file}', [bindkls3Controller::class, 'download']);
    Route::post('/kelas3/bindonesia/addsubmit', [bindkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/bindonesia/destroysubmit/{id}', [bindkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/bindonesia/submit/ubah/{id}', [bindkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/bindonesia/submit/update/{id}', [bindkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/bindonesia/submit/download/{file}', [bindkls3Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas3/ipa', [ipakls3Controller::class, 'index'])->name('kelas3.ipa');
    Route::get('/kelas3/ipa/download/{file}', [ipakls3Controller::class, 'download']);
    Route::get('/kelas3/ipa/download/{file}', [ipakls3Controller::class, 'download']);
    Route::post('/kelas3/ipa/addsubmit', [ipakls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/ipa/destroysubmit/{id}', [ipakls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/ipa/submit/ubah/{id}', [ipakls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/ipa/submit/update/{id}', [ipakls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/ipa/submit/download/{file}', [ipakls3Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPS
    Route::get('/kelas3/ips', [ipskls3Controller::class, 'index'])->name('kelas3.ips');
    Route::get('/kelas3/ips/download/{file}', [ipskls3Controller::class, 'download']);
    Route::get('/kelas3/ips/download/{file}', [ipskls3Controller::class, 'download']);
    Route::post('/kelas3/ips/addsubmit', [ipskls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/ips/destroysubmit/{id}', [ipskls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/ips/submit/ubah/{id}', [ipskls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/ips/submit/update/{id}', [ipskls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/ips/submit/download/{file}', [ipskls3Controller::class, 'downloadsubmit']);
    // 
    // Olahraga 
    Route::get('/kelas3/pjk', [pjkkls3Controller::class, 'index'])->name('kelas3.pjk');
    Route::get('/kelas3/pjk/download/{file}', [pjkkls3Controller::class, 'download']);
    Route::get('/kelas3/pjk/download/{file}', [pjkkls3Controller::class, 'download']);
    Route::post('/kelas3/pjk/addsubmit', [pjkkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/pjk/destroysubmit/{id}', [pjkkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/pjk/submit/ubah/{id}', [pjkkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/pjk/submit/update/{id}', [pjkkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/pjk/submit/download/{file}', [pjkkls3Controller::class, 'downloadsubmit']);
    // 
    // Senibudaya
    Route::get('/kelas3/sbd', [sbdkls3Controller::class, 'index'])->name('kelas3.sbd');
    Route::get('/kelas3/sbd/download/{file}', [sbdkls3Controller::class, 'download']);
    Route::get('/kelas3/sbd/download/{file}', [sbdkls3Controller::class, 'download']);
    Route::post('/kelas3/sbd/addsubmit', [sbdkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/sbd/destroysubmit/{id}', [sbdkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/sbd/submit/ubah/{id}', [sbdkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/sbd/submit/update/{id}', [sbdkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/sbd/submit/download/{file}', [sbdkls3Controller::class, 'downloadsubmit']);
    // 
    // Muatan Lokal
    Route::get('/kelas3/mulok', [mulokkls3Controller::class, 'index'])->name('kelas3.mulok');
    Route::get('/kelas3/mulok/download/{file}', [mulokkls3Controller::class, 'download']);
    Route::get('/kelas3/mulok/download/{file}', [mulokkls3Controller::class, 'download']);
    Route::post('/kelas3/mulok/addsubmit', [mulokkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/mulok/destroysubmit/{id}', [mulokkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/mulok/submit/ubah/{id}', [mulokkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/mulok/submit/update/{id}', [mulokkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/mulok/submit/download/{file}', [mulokkls3Controller::class, 'downloadsubmit']);
    // 
    // Agama
    Route::get('/kelas3/agama', [agamakls3Controller::class, 'index'])->name('kelas3.agama');
    Route::get('/kelas3/agama/download/{file}', [agamakls3Controller::class, 'download']);
    Route::get('/kelas3/agama/download/{file}', [agamakls3Controller::class, 'download']);
    Route::post('/kelas3/agama/addsubmit', [agamakls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/agama/destroysubmit/{id}', [agamakls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/agama/submit/ubah/{id}', [agamakls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/agama/submit/update/{id}', [agamakls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/agama/submit/download/{file}', [agamakls3Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas3/ppkn', [ppknkls3Controller::class, 'index'])->name('kelas3.ppkn');
    Route::get('/kelas3/ppkn/download/{file}', [ppknkls3Controller::class, 'download']);
    Route::get('/kelas3/ppkn/download/{file}', [ppknkls3Controller::class, 'download']);
    Route::post('/kelas3/ppkn/addsubmit', [ppknkls3Controller::class, 'addsubmit']);
    Route::get('/kelas3/ppkn/destroysubmit/{id}', [ppknkls3Controller::class, 'destroysubmit']);
    Route::get('/kelas3/ppkn/submit/ubah/{id}', [ppknkls3Controller::class, 'editsubmit']);
    Route::post('/kelas3/ppkn/submit/update/{id}', [ppknkls3Controller::class, 'updatesubmit']);
    Route::get('/kelas3/ppkn/submit/download/{file}', [ppknkls3Controller::class, 'downloadsubmit']);
    // 



    // Ruang Bertanya kelas 1
    Route::get('/kelas1/ObrolanKelas', [tanyamatkaController1::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas1/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController1::class, 'index'])->name('tanya');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController1::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas1/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController1::class, 'index'])->name('tanyaindo');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController1::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas1/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController1::class, 'index'])->name('tanyamulok');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController1::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ppkn', [tanyapknController1::class, 'index'])->name('tanyapkn');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController1::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ips', [tanyaipsController1::class, 'index'])->name('tanyaips');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController1::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ipa', [tanyaipaController1::class, 'index'])->name('tanyaipa');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController1::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas1/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController1::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController1::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas1/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController1::class, 'index'])->name('tanyaseni');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController1::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas1/ObrolanKelas/tanyajawab/agama', [tanyaagamaController1::class, 'index'])->name('tanyaagama');
     Route::post('/kelas1/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController1::class, 'store']);
     Route::post('/kelas1/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController1::class, 'storeReply']);
     Route::get('/kelas1/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController1::class, 'destroy']);



    // kelas 2
    Route::get('/kelas2', [kelas2Controller::class, 'index'])->name('kelas2');
    // Matematika 
    Route::get('/kelas2/matematika', [mtkkls2Controller::class, 'index'])->name('kelas2.mtk');
    Route::get('/kelas2/matematika/download/{file}', [mtkkls2Controller::class, 'download']);
    Route::get('/kelas2/matematika/download/{file}', [mtkkls2Controller::class, 'download']);
    Route::post('/kelas2/matematika/addsubmit', [mtkkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/matematika/destroysubmit/{id}', [mtkkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/matematika/submit/ubah/{id}', [mtkkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/matematika/submit/update/{id}', [mtkkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/matematika/submit/download/{file}', [mtkkls2Controller::class, 'downloadsubmit']);
    // 
    // Bahasa indonesia
    Route::get('/kelas2/bindonesia', [bindkls2Controller::class, 'index'])->name('kelas2.bind');
    Route::get('/kelas2/bindonesia/download/{file}', [bindkls2Controller::class, 'download']);
    Route::get('/kelas2/bindonesia/download/{file}', [bindkls2Controller::class, 'download']);
    Route::post('/kelas2/bindonesia/addsubmit', [bindkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/bindonesia/destroysubmit/{id}', [bindkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/bindonesia/submit/ubah/{id}', [bindkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/bindonesia/submit/update/{id}', [bindkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/bindonesia/submit/download/{file}', [bindkls2Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas2/ipa', [ipakls2Controller::class, 'index'])->name('kelas2.ipa');
    Route::get('/kelas2/ipa/download/{file}', [ipakls2Controller::class, 'download']);
    Route::get('/kelas2/ipa/download/{file}', [ipakls2Controller::class, 'download']);
    Route::post('/kelas2/ipa/addsubmit', [ipakls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/ipa/destroysubmit/{id}', [ipakls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/ipa/submit/ubah/{id}', [ipakls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/ipa/submit/update/{id}', [ipakls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/ipa/submit/download/{file}', [ipakls2Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPS
    Route::get('/kelas2/ips', [ipskls2Controller::class, 'index'])->name('kelas2.ips');
    Route::get('/kelas2/ips/download/{file}', [ipskls2Controller::class, 'download']);
    Route::get('/kelas2/ips/download/{file}', [ipskls2Controller::class, 'download']);
    Route::post('/kelas2/ips/addsubmit', [ipskls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/ips/destroysubmit/{id}', [ipskls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/ips/submit/ubah/{id}', [ipskls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/ips/submit/update/{id}', [ipskls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/ips/submit/download/{file}', [ipskls2Controller::class, 'downloadsubmit']);
    // 
    // Olahraga 
    Route::get('/kelas2/pjk', [pjkkls2Controller::class, 'index'])->name('kelas2.pjk');
    Route::get('/kelas2/pjk/download/{file}', [pjkkls2Controller::class, 'download']);
    Route::get('/kelas2/pjk/download/{file}', [pjkkls2Controller::class, 'download']);
    Route::post('/kelas2/pjk/addsubmit', [pjkkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/pjk/destroysubmit/{id}', [pjkkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/pjk/submit/ubah/{id}', [pjkkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/pjk/submit/update/{id}', [pjkkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/pjk/submit/download/{file}', [pjkkls2Controller::class, 'downloadsubmit']);
    // 
    // Senibudaya
    Route::get('/kelas2/sbd', [sbdkls2Controller::class, 'index'])->name('kelas2.sbd');
    Route::get('/kelas2/sbd/download/{file}', [sbdkls2Controller::class, 'download']);
    Route::get('/kelas2/sbd/download/{file}', [sbdkls2Controller::class, 'download']);
    Route::post('/kelas2/sbd/addsubmit', [sbdkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/sbd/destroysubmit/{id}', [sbdkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/sbd/submit/ubah/{id}', [sbdkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/sbd/submit/update/{id}', [sbdkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/sbd/submit/download/{file}', [sbdkls2Controller::class, 'downloadsubmit']);
    // 
    // Muatan Lokal
    Route::get('/kelas2/mulok', [mulokkls2Controller::class, 'index'])->name('kelas2.mulok');
    Route::get('/kelas2/mulok/download/{file}', [mulokkls2Controller::class, 'download']);
    Route::get('/kelas2/mulok/download/{file}', [mulokkls2Controller::class, 'download']);
    Route::post('/kelas2/mulok/addsubmit', [mulokkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/mulok/destroysubmit/{id}', [mulokkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/mulok/submit/ubah/{id}', [mulokkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/mulok/submit/update/{id}', [mulokkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/mulok/submit/download/{file}', [mulokkls2Controller::class, 'downloadsubmit']);
    // 
    // Agama
    Route::get('/kelas2/agama', [agamakls2Controller::class, 'index'])->name('kelas2.agama');
    Route::get('/kelas2/agama/download/{file}', [agamakls2Controller::class, 'download']);
    Route::get('/kelas2/agama/download/{file}', [agamakls2Controller::class, 'download']);
    Route::post('/kelas2/agama/addsubmit', [agamakls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/agama/destroysubmit/{id}', [agamakls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/agama/submit/ubah/{id}', [agamakls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/agama/submit/update/{id}', [agamakls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/agama/submit/download/{file}', [agamakls2Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas2/ppkn', [ppknkls2Controller::class, 'index'])->name('kelas2.ppkn');
    Route::get('/kelas2/ppkn/download/{file}', [ppknkls2Controller::class, 'download']);
    Route::get('/kelas2/ppkn/download/{file}', [ppknkls2Controller::class, 'download']);
    Route::post('/kelas2/ppkn/addsubmit', [ppknkls2Controller::class, 'addsubmit']);
    Route::get('/kelas2/ppkn/destroysubmit/{id}', [ppknkls2Controller::class, 'destroysubmit']);
    Route::get('/kelas2/ppkn/submit/ubah/{id}', [ppknkls2Controller::class, 'editsubmit']);
    Route::post('/kelas2/ppkn/submit/update/{id}', [ppknkls2Controller::class, 'updatesubmit']);
    Route::get('/kelas2/ppkn/submit/download/{file}', [ppknkls2Controller::class, 'downloadsubmit']);
    // 

    // Ruang Bertanya kelas 2

    Route::get('/kelas2/ObrolanKelas', [tanyamatkaController2::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas2/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController2::class, 'index'])->name('tanya');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController2::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas2/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController2::class, 'index'])->name('tanyaindo');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController2::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas2/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController2::class, 'index'])->name('tanyamulok');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController2::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ppkn', [tanyapknController2::class, 'index'])->name('tanyapkn');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController2::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ips', [tanyaipsController2::class, 'index'])->name('tanyaips');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController2::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ipa', [tanyaipaController2::class, 'index'])->name('tanyaipa');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController2::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas2/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController2::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController2::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas2/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController2::class, 'index'])->name('tanyaseni');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController2::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas2/ObrolanKelas/tanyajawab/agama', [tanyaagamaController2::class, 'index'])->name('tanyaagama');
     Route::post('/kelas2/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController2::class, 'store']);
     Route::post('/kelas2/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController2::class, 'storeReply']);
     Route::get('/kelas2/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController2::class, 'destroy']);


    Route::get('/kelas3', [kelas3Controller::class, 'index'])->name('kelas3');

    // Ruang Bertanya kelas 3

    Route::get('/kelas3/ObrolanKelas', [tanyamatkaController3::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas3/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController3::class, 'index'])->name('tanya');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController3::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas3/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController3::class, 'index'])->name('tanyaindo');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController3::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas3/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController3::class, 'index'])->name('tanyamulok');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController3::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ppkn', [tanyapknController3::class, 'index'])->name('tanyapkn');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController3::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ips', [tanyaipsController3::class, 'index'])->name('tanyaips');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController3::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ipa', [tanyaipaController3::class, 'index'])->name('tanyaipa');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController3::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas3/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController3::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController3::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas3/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController3::class, 'index'])->name('tanyaseni');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController3::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas3/ObrolanKelas/tanyajawab/agama', [tanyaagamaController3::class, 'index'])->name('tanyaagama');
     Route::post('/kelas3/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController3::class, 'store']);
     Route::post('/kelas3/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController3::class, 'storeReply']);
     Route::get('/kelas3/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController3::class, 'destroy']);


    

    // kelas 4
    Route::get('/kelas4', [kelas4Controller::class, 'index'])->name('kelas4');
    // Matematika 
    Route::get('/kelas4/matematika', [mtkkls4Controller::class, 'index'])->name('kelas4.mtk');
    Route::get('/kelas4/matematika/download/{file}', [mtkkls4Controller::class, 'download']);
    Route::get('/kelas4/matematika/download/{file}', [mtkkls4Controller::class, 'download']);
    Route::post('/kelas4/matematika/addsubmit', [mtkkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/matematika/destroysubmit/{id}', [mtkkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/matematika/submit/ubah/{id}', [mtkkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/matematika/submit/update/{id}', [mtkkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/matematika/submit/download/{file}', [mtkkls4Controller::class, 'downloadsubmit']);
    // 
    // Bahasa indonesia
    Route::get('/kelas4/bindonesia', [bindkls4Controller::class, 'index'])->name('kelas4.bind');
    Route::get('/kelas4/bindonesia/download/{file}', [bindkls4Controller::class, 'download']);
    Route::get('/kelas4/bindonesia/download/{file}', [bindkls4Controller::class, 'download']);
    Route::post('/kelas4/bindonesia/addsubmit', [bindkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/bindonesia/destroysubmit/{id}', [bindkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/bindonesia/submit/ubah/{id}', [bindkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/bindonesia/submit/update/{id}', [bindkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/bindonesia/submit/download/{file}', [bindkls4Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas4/ipa', [ipakls4Controller::class, 'index'])->name('kelas4.ipa');
    Route::get('/kelas4/ipa/download/{file}', [ipakls4Controller::class, 'download']);
    Route::get('/kelas4/ipa/download/{file}', [ipakls4Controller::class, 'download']);
    Route::post('/kelas4/ipa/addsubmit', [ipakls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/ipa/destroysubmit/{id}', [ipakls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/ipa/submit/ubah/{id}', [ipakls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/ipa/submit/update/{id}', [ipakls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/ipa/submit/download/{file}', [ipakls4Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPS
    Route::get('/kelas4/ips', [ipskls4Controller::class, 'index'])->name('kelas4.ips');
    Route::get('/kelas4/ips/download/{file}', [ipskls4Controller::class, 'download']);
    Route::get('/kelas4/ips/download/{file}', [ipskls4Controller::class, 'download']);
    Route::post('/kelas4/ips/addsubmit', [ipskls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/ips/destroysubmit/{id}', [ipskls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/ips/submit/ubah/{id}', [ipskls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/ips/submit/update/{id}', [ipskls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/ips/submit/download/{file}', [ipskls4Controller::class, 'downloadsubmit']);
    // 
    // Olahraga 
    Route::get('/kelas4/pjk', [pjkkls4Controller::class, 'index'])->name('kelas4.pjk');
    Route::get('/kelas4/pjk/download/{file}', [pjkkls4Controller::class, 'download']);
    Route::get('/kelas4/pjk/download/{file}', [pjkkls4Controller::class, 'download']);
    Route::post('/kelas4/pjk/addsubmit', [pjkkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/pjk/destroysubmit/{id}', [pjkkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/pjk/submit/ubah/{id}', [pjkkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/pjk/submit/update/{id}', [pjkkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/pjk/submit/download/{file}', [pjkkls4Controller::class, 'downloadsubmit']);
    // 
    // Senibudaya
    Route::get('/kelas4/sbd', [sbdkls4Controller::class, 'index'])->name('kelas4.sbd');
    Route::get('/kelas4/sbd/download/{file}', [sbdkls4Controller::class, 'download']);
    Route::get('/kelas4/sbd/download/{file}', [sbdkls4Controller::class, 'download']);
    Route::post('/kelas4/sbd/addsubmit', [sbdkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/sbd/destroysubmit/{id}', [sbdkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/sbd/submit/ubah/{id}', [sbdkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/sbd/submit/update/{id}', [sbdkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/sbd/submit/download/{file}', [sbdkls4Controller::class, 'downloadsubmit']);
    // 
    // Muatan Lokal
    Route::get('/kelas4/mulok', [mulokkls4Controller::class, 'index'])->name('kelas4.mulok');
    Route::get('/kelas4/mulok/download/{file}', [mulokkls4Controller::class, 'download']);
    Route::get('/kelas4/mulok/download/{file}', [mulokkls4Controller::class, 'download']);
    Route::post('/kelas4/mulok/addsubmit', [mulokkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/mulok/destroysubmit/{id}', [mulokkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/mulok/submit/ubah/{id}', [mulokkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/mulok/submit/update/{id}', [mulokkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/mulok/submit/download/{file}', [mulokkls4Controller::class, 'downloadsubmit']);
    // 
    // Agama
    Route::get('/kelas4/agama', [agamakls4Controller::class, 'index'])->name('kelas4.agama');
    Route::get('/kelas4/agama/download/{file}', [agamakls4Controller::class, 'download']);
    Route::get('/kelas4/agama/download/{file}', [agamakls4Controller::class, 'download']);
    Route::post('/kelas4/agama/addsubmit', [agamakls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/agama/destroysubmit/{id}', [agamakls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/agama/submit/ubah/{id}', [agamakls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/agama/submit/update/{id}', [agamakls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/agama/submit/download/{file}', [agamakls4Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas4/ppkn', [ppknkls4Controller::class, 'index'])->name('kelas4.ppkn');
    Route::get('/kelas4/ppkn/download/{file}', [ppknkls4Controller::class, 'download']);
    Route::get('/kelas4/ppkn/download/{file}', [ppknkls4Controller::class, 'download']);
    Route::post('/kelas4/ppkn/addsubmit', [ppknkls4Controller::class, 'addsubmit']);
    Route::get('/kelas4/ppkn/destroysubmit/{id}', [ppknkls4Controller::class, 'destroysubmit']);
    Route::get('/kelas4/ppkn/submit/ubah/{id}', [ppknkls4Controller::class, 'editsubmit']);
    Route::post('/kelas4/ppkn/submit/update/{id}', [ppknkls4Controller::class, 'updatesubmit']);
    Route::get('/kelas4/ppkn/submit/download/{file}', [ppknkls4Controller::class, 'downloadsubmit']);
    // 


    // Ruang Bertanya kelas 4

    Route::get('/kelas4/ObrolanKelas', [tanyamatkaController4::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas4/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController4::class, 'index'])->name('tanya');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController4::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas4/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController4::class, 'index'])->name('tanyaindo');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController4::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas4/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController4::class, 'index'])->name('tanyamulok');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController4::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ppkn', [tanyapknController4::class, 'index'])->name('tanyapkn');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController4::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ips', [tanyaipsController4::class, 'index'])->name('tanyaips');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController4::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ipa', [tanyaipaController4::class, 'index'])->name('tanyaipa');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController4::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas4/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController4::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController4::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas4/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController4::class, 'index'])->name('tanyaseni');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController4::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas4/ObrolanKelas/tanyajawab/agama', [tanyaagamaController4::class, 'index'])->name('tanyaagama');
     Route::post('/kelas4/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController4::class, 'store']);
     Route::post('/kelas4/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController4::class, 'storeReply']);
     Route::get('/kelas4/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController4::class, 'destroy']);


    Route::get('/kelas5', [kelas5Controller::class, 'index'])->name('kelas5');

    // Ruang Bertanya kelas 5

    Route::get('/kelas5/ObrolanKelas', [tanyamatkaController5::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas5/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController5::class, 'index'])->name('tanya');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController5::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas5/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController5::class, 'index'])->name('tanyaindo');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController5::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas5/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController5::class, 'index'])->name('tanyamulok');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController5::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ppkn', [tanyapknController5::class, 'index'])->name('tanyapkn');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController5::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ips', [tanyaipsController5::class, 'index'])->name('tanyaips');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController5::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ipa', [tanyaipaController5::class, 'index'])->name('tanyaipa');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController5::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas5/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController5::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController5::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas5/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController5::class, 'index'])->name('tanyaseni');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController5::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas5/ObrolanKelas/tanyajawab/agama', [tanyaagamaController5::class, 'index'])->name('tanyaagama');
     Route::post('/kelas5/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController5::class, 'store']);
     Route::post('/kelas5/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController5::class, 'storeReply']);
     Route::get('/kelas5/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController5::class, 'destroy']);


    
    // kelas 6
    Route::get('/kelas6', [kelas6Controller::class, 'index'])->name('kelas6');
    // Matematika 
    Route::get('/kelas6/matematika', [mtkkls6Controller::class, 'index'])->name('kelas6.mtk');
    Route::get('/kelas6/matematika/download/{file}', [mtkkls6Controller::class, 'download']);
    Route::get('/kelas6/matematika/download/{file}', [mtkkls6Controller::class, 'download']);
    Route::post('/kelas6/matematika/addsubmit', [mtkkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/matematika/destroysubmit/{id}', [mtkkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/matematika/submit/ubah/{id}', [mtkkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/matematika/submit/update/{id}', [mtkkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/matematika/submit/download/{file}', [mtkkls6Controller::class, 'downloadsubmit']);
    // 
    // Bahasa indonesia
    Route::get('/kelas6/bindonesia', [bindkls6Controller::class, 'index'])->name('kelas6.bind');
    Route::get('/kelas6/bindonesia/download/{file}', [bindkls6Controller::class, 'download']);
    Route::get('/kelas6/bindonesia/download/{file}', [bindkls6Controller::class, 'download']);
    Route::post('/kelas6/bindonesia/addsubmit', [bindkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/bindonesia/destroysubmit/{id}', [bindkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/bindonesia/submit/ubah/{id}', [bindkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/bindonesia/submit/update/{id}', [bindkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/bindonesia/submit/download/{file}', [bindkls6Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas6/ipa', [ipakls6Controller::class, 'index'])->name('kelas6.ipa');
    Route::get('/kelas6/ipa/download/{file}', [ipakls6Controller::class, 'download']);
    Route::get('/kelas6/ipa/download/{file}', [ipakls6Controller::class, 'download']);
    Route::post('/kelas6/ipa/addsubmit', [ipakls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/ipa/destroysubmit/{id}', [ipakls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/ipa/submit/ubah/{id}', [ipakls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/ipa/submit/update/{id}', [ipakls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/ipa/submit/download/{file}', [ipakls6Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPS
    Route::get('/kelas6/ips', [ipskls6Controller::class, 'index'])->name('kelas6.ips');
    Route::get('/kelas6/ips/download/{file}', [ipskls6Controller::class, 'download']);
    Route::get('/kelas6/ips/download/{file}', [ipskls6Controller::class, 'download']);
    Route::post('/kelas6/ips/addsubmit', [ipskls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/ips/destroysubmit/{id}', [ipskls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/ips/submit/ubah/{id}', [ipskls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/ips/submit/update/{id}', [ipskls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/ips/submit/download/{file}', [ipskls6Controller::class, 'downloadsubmit']);
    // 
    // Olahraga 
    Route::get('/kelas6/pjk', [pjkkls6Controller::class, 'index'])->name('kelas6.pjk');
    Route::get('/kelas6/pjk/download/{file}', [pjkkls6Controller::class, 'download']);
    Route::get('/kelas6/pjk/download/{file}', [pjkkls6Controller::class, 'download']);
    Route::post('/kelas6/pjk/addsubmit', [pjkkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/pjk/destroysubmit/{id}', [pjkkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/pjk/submit/ubah/{id}', [pjkkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/pjk/submit/update/{id}', [pjkkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/pjk/submit/download/{file}', [pjkkls6Controller::class, 'downloadsubmit']);
    // 
    // Senibudaya
    Route::get('/kelas6/sbd', [sbdkls6Controller::class, 'index'])->name('kelas6.sbd');
    Route::get('/kelas6/sbd/download/{file}', [sbdkls6Controller::class, 'download']);
    Route::get('/kelas6/sbd/download/{file}', [sbdkls6Controller::class, 'download']);
    Route::post('/kelas6/sbd/addsubmit', [sbdkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/sbd/destroysubmit/{id}', [sbdkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/sbd/submit/ubah/{id}', [sbdkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/sbd/submit/update/{id}', [sbdkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/sbd/submit/download/{file}', [sbdkls6Controller::class, 'downloadsubmit']);
    // 
    // Muatan Lokal
    Route::get('/kelas6/mulok', [mulokkls6Controller::class, 'index'])->name('kelas6.mulok');
    Route::get('/kelas6/mulok/download/{file}', [mulokkls6Controller::class, 'download']);
    Route::get('/kelas6/mulok/download/{file}', [mulokkls6Controller::class, 'download']);
    Route::post('/kelas6/mulok/addsubmit', [mulokkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/mulok/destroysubmit/{id}', [mulokkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/mulok/submit/ubah/{id}', [mulokkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/mulok/submit/update/{id}', [mulokkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/mulok/submit/download/{file}', [mulokkls6Controller::class, 'downloadsubmit']);
    // 
    // Agama
    Route::get('/kelas6/agama', [agamakls6Controller::class, 'index'])->name('kelas6.agama');
    Route::get('/kelas6/agama/download/{file}', [agamakls6Controller::class, 'download']);
    Route::get('/kelas6/agama/download/{file}', [agamakls6Controller::class, 'download']);
    Route::post('/kelas6/agama/addsubmit', [agamakls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/agama/destroysubmit/{id}', [agamakls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/agama/submit/ubah/{id}', [agamakls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/agama/submit/update/{id}', [agamakls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/agama/submit/download/{file}', [agamakls6Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas6/ppkn', [ppknkls6Controller::class, 'index'])->name('kelas6.ppkn');
    Route::get('/kelas6/ppkn/download/{file}', [ppknkls6Controller::class, 'download']);
    Route::get('/kelas6/ppkn/download/{file}', [ppknkls6Controller::class, 'download']);
    Route::post('/kelas6/ppkn/addsubmit', [ppknkls6Controller::class, 'addsubmit']);
    Route::get('/kelas6/ppkn/destroysubmit/{id}', [ppknkls6Controller::class, 'destroysubmit']);
    Route::get('/kelas6/ppkn/submit/ubah/{id}', [ppknkls6Controller::class, 'editsubmit']);
    Route::post('/kelas6/ppkn/submit/update/{id}', [ppknkls6Controller::class, 'updatesubmit']);
    Route::get('/kelas6/ppkn/submit/download/{file}', [ppknkls6Controller::class, 'downloadsubmit']);
    // 

    // Ruang Bertanya kelas 6

    Route::get('/kelas6/ObrolanKelas', [tanyamatkaController6::class, 'index']);

     // Ruang Matematika
     Route::get('/kelas6/ObrolanKelas/tanyajawab/matematika', [tanyamatkaController6::class, 'index'])->name('tanya');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/AddComment', [tanyamatkaController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/addreply', [tanyamatkaController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/matematika/hapus/{id}', [tanyamatkaController6::class, 'destroy']);

     // Ruang Bahasa Indonesia
     Route::get('/kelas6/ObrolanKelas/tanyajawab/bindonesia', [tanyaindoController6::class, 'index'])->name('tanyaindo');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/bindonesia/AddComment', [tanyaindoController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/bindonesia/addreply', [tanyaindoController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/bindonesia/hapus/{id}', [tanyaindoController6::class, 'destroy']);

     // Ruang Muatan Lokal
     Route::get('/kelas6/ObrolanKelas/tanyajawab/muatanlokal', [tanyamulokController6::class, 'index'])->name('tanyamulok');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/muatanlokal/AddComment', [tanyamulokController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/muatanlokal/addreply', [tanyamulokController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/muatanlokal/hapus/{id}', [tanyamulokController6::class, 'destroy']);

     // Ruang PPKN
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ppkn', [tanyapknController6::class, 'index'])->name('tanyapkn');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ppkn/AddComment', [tanyapknController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ppkn/addreply', [tanyapknController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ppkn/hapus/{id}', [tanyapknController6::class, 'destroy']);

     // Ruang IPS
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ips', [tanyaipsController6::class, 'index'])->name('tanyaips');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ips/AddComment', [tanyaipsController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ips/addreply', [tanyaipsController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ips/hapus/{id}', [tanyaipsController6::class, 'destroy']);

     // Ruang IPA
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ipa', [tanyaipaController6::class, 'index'])->name('tanyaipa');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ipa/AddComment', [tanyaipaController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/ipa/addreply', [tanyaipaController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/ipa/hapus/{id}', [tanyaipaController6::class, 'destroy']);

     // Ruang Olahraga
     Route::get('/kelas6/ObrolanKelas/tanyajawab/penjas', [tanyapenjasController6::class, 'index'])->name('tanyapenjas');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/penjas/AddComment', [tanyapenjasController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/penjas/addreply', [tanyapenjasController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/penjas/hapus/{id}', [tanyapenjasController6::class, 'destroy']);

     // Ruang Senibudaya
     Route::get('/kelas6/ObrolanKelas/tanyajawab/senibudaya', [tanyaseniController6::class, 'index'])->name('tanyaseni');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/senibudaya/AddComment', [tanyaseniController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/senibudaya/addreply', [tanyaseniController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/senibudaya/hapus/{id}', [tanyaseniController6::class, 'destroy']);

     // Ruang Agama
     Route::get('/kelas6/ObrolanKelas/tanyajawab/agama', [tanyaagamaController6::class, 'index'])->name('tanyaagama');
     Route::post('/kelas6/ObrolanKelas/tanyajawab/agama/AddComment', [tanyaagamaController6::class, 'store']);
     Route::post('/kelas6/ObrolanKelas/tanyajawab/agama/addreply', [tanyaagamaController6::class, 'storeReply']);
     Route::get('/kelas6/ObrolanKelas/tanyajawab/agama/hapus/{id}', [tanyaagamaController6::class, 'destroy']);

});

// LEVEL GURU
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
    Route::post('/kelas1/matematika/addsubmission', [mtkkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/matematika/submisionform/delete/{id}', [mtkkls1Controller::class, 'destroyformsubmit']);
    // Bahasa Indonesia
    Route::get('/kelas1/bindonesia/tambah', [bindkls1Controller::class, 'create']);
    Route::post('/kelas1/bindonesia/simpan', [bindkls1Controller::class, 'add']);
    Route::get('/kelas1/bindonesia/ubah/{id}', [bindkls1Controller::class, 'edit']);
    Route::post('/kelas1/bindonesia/update/{id}', [bindkls1Controller::class, 'update']);
    Route::get('/kelas1/bindonesia/hapus/{id}', [bindkls1Controller::class, 'destroy']);
    Route::get('/kelas1/bindonesia/kuis/tambah', [bindkls1Controller::class, 'quiz']);
    Route::post('/kelas1/bindonesia/kuis/simpan', [bindkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/bindonesia/kuis/hapus/{id}', [bindkls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/bindonesia/addsubmission', [bindkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/bindonesia/submisionform/delete/{id}', [bindkls1Controller::class, 'destroyformsubmit']);
    // IPA
    Route::get('/kelas1/ipa/tambah', [ipakls1Controller::class, 'create']);
    Route::post('/kelas1/ipa/simpan', [ipakls1Controller::class, 'add']);
    Route::get('/kelas1/ipa/ubah/{id}', [ipakls1Controller::class, 'edit']);
    Route::post('/kelas1/ipa/update/{id}', [ipakls1Controller::class, 'update']);
    Route::get('/kelas1/ipa/hapus/{id}', [ipakls1Controller::class, 'destroy']);
    Route::get('/kelas1/ipa/kuis/tambah', [ipakls1Controller::class, 'quiz']);
    Route::post('/kelas1/ipa/kuis/simpan', [ipakls1Controller::class, 'addquiz']);
    Route::get('/kelas1/ipa/kuis/hapus/{id}', [ipakls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/ipa/addsubmission', [ipakls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/ipa/submisionform/delete/{id}', [ipakls1Controller::class, 'destroyformsubmit']);
    // IPS
    Route::get('/kelas1/ips/tambah', [ipskls1Controller::class, 'create']);
    Route::post('/kelas1/ips/simpan', [ipskls1Controller::class, 'add']);
    Route::get('/kelas1/ips/ubah/{id}', [ipskls1Controller::class, 'edit']);
    Route::post('/kelas1/ips/update/{id}', [ipskls1Controller::class, 'update']);
    Route::get('/kelas1/ips/hapus/{id}', [ipskls1Controller::class, 'destroy']);
    Route::get('/kelas1/ips/kuis/tambah', [ipskls1Controller::class, 'quiz']);
    Route::post('/kelas1/ips/kuis/simpan', [ipskls1Controller::class, 'addquiz']);
    Route::get('/kelas1/ips/kuis/hapus/{id}', [ipskls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/ips/addsubmission', [ipskls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/ips/submisionform/delete/{id}', [ipskls1Controller::class, 'destroyformsubmit']);
    // Olahraga
    Route::get('/kelas1/pjk/tambah', [pjkkls1Controller::class, 'create']);
    Route::post('/kelas1/pjk/simpan', [pjkkls1Controller::class, 'add']);
    Route::get('/kelas1/pjk/ubah/{id}', [pjkkls1Controller::class, 'edit']);
    Route::post('/kelas1/pjk/update/{id}', [pjkkls1Controller::class, 'update']);
    Route::get('/kelas1/pjk/hapus/{id}', [pjkkls1Controller::class, 'destroy']);
    Route::get('/kelas1/pjk/kuis/tambah', [pjkkls1Controller::class, 'quiz']);
    Route::post('/kelas1/pjk/kuis/simpan', [pjkkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/pjk/kuis/hapus/{id}', [pjkkls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/pjk/addsubmission', [pjkkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/pjk/submisionform/delete/{id}', [pjkkls1Controller::class, 'destroyformsubmit']);
    // Muatan Lokal
    Route::get('/kelas1/mulok/tambah', [mulokkls1Controller::class, 'create']);
    Route::post('/kelas1/mulok/simpan', [mulokkls1Controller::class, 'add']);
    Route::get('/kelas1/mulok/ubah/{id}', [mulokkls1Controller::class, 'edit']);
    Route::post('/kelas1/mulok/update/{id}', [mulokkls1Controller::class, 'update']);
    Route::get('/kelas1/mulok/hapus/{id}', [mulokkls1Controller::class, 'destroy']);
    Route::get('/kelas1/mulok/kuis/tambah', [mulokkls1Controller::class, 'quiz']);
    Route::post('/kelas1/mulok/kuis/simpan', [mulokkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/mulok/kuis/hapus/{id}', [mulokkls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/mulok/addsubmission', [mulokkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/mulok/submisionform/delete/{id}', [mulokkls1Controller::class, 'destroyformsubmit']);
    // PPKN
    Route::get('/kelas1/ppkn/tambah', [ppknkls1Controller::class, 'create']);
    Route::post('/kelas1/ppkn/simpan', [ppknkls1Controller::class, 'add']);
    Route::get('/kelas1/ppkn/ubah/{id}', [ppknkls1Controller::class, 'edit']);
    Route::post('/kelas1/ppkn/update/{id}', [ppknkls1Controller::class, 'update']);
    Route::get('/kelas1/ppkn/hapus/{id}', [ppknkls1Controller::class, 'destroy']);
    Route::get('/kelas1/ppkn/kuis/tambah', [ppknkls1Controller::class, 'quiz']);
    Route::post('/kelas1/ppkn/kuis/simpan', [ppknkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/ppkn/kuis/hapus/{id}', [ppknkls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/ppkn/addsubmission', [ppknkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/ppkn/submisionform/delete/{id}', [ppknkls1Controller::class, 'destroyformsubmit']);
     // Agama
     Route::get('/kelas1/agama/tambah', [agamakls1Controller::class, 'create']);
     Route::post('/kelas1/agama/simpan', [agamakls1Controller::class, 'add']);
     Route::get('/kelas1/agama/ubah/{id}', [agamakls1Controller::class, 'edit']);
     Route::post('/kelas1/agama/update/{id}', [agamakls1Controller::class, 'update']);
     Route::get('/kelas1/agama/hapus/{id}', [agamakls1Controller::class, 'destroy']);
     Route::get('/kelas1/agama/kuis/tambah', [agamakls1Controller::class, 'quiz']);
     Route::post('/kelas1/agama/kuis/simpan', [agamakls1Controller::class, 'addquiz']);
     Route::get('/kelas1/agama/kuis/hapus/{id}', [agamakls1Controller::class, 'destroykuis']);
     Route::post('/kelas1/agama/addsubmission', [agamakls1Controller::class, 'addsubmission']);
     Route::get('/kelas1/agama/submisionform/delete/{id}', [agamakls1Controller::class, 'destroyformsubmit']);
      // Seni Budaya
    Route::get('/kelas1/sbd/tambah', [sbdkls1Controller::class, 'create']);
    Route::post('/kelas1/sbd/simpan', [sbdkls1Controller::class, 'add']);
    Route::get('/kelas1/sbd/ubah/{id}', [sbdkls1Controller::class, 'edit']);
    Route::post('/kelas1/sbd/update/{id}', [sbdkls1Controller::class, 'update']);
    Route::get('/kelas1/sbd/hapus/{id}', [sbdkls1Controller::class, 'destroy']);
    Route::get('/kelas1/sbd/kuis/tambah', [sbdkls1Controller::class, 'quiz']);
    Route::post('/kelas1/sbd/kuis/simpan', [sbdkls1Controller::class, 'addquiz']);
    Route::get('/kelas1/sbd/kuis/hapus/{id}', [sbdkls1Controller::class, 'destroykuis']);
    Route::post('/kelas1/sbd/addsubmission', [sbdkls1Controller::class, 'addsubmission']);
    Route::get('/kelas1/sbd/submisionform/delete/{id}', [sbdkls1Controller::class, 'destroyformsubmit']);


    // kelas 2
    // Matematika
    Route::get('/kelas2/matematika/tambah', [mtkkls2Controller::class, 'create']);
    Route::post('/kelas2/matematika/simpan', [mtkkls2Controller::class, 'add']);
    Route::get('/kelas2/matematika/ubah/{id}', [mtkkls2Controller::class, 'edit']);
    Route::post('/kelas2/matematika/update/{id}', [mtkkls2Controller::class, 'update']);
    Route::get('/kelas2/matematika/hapus/{id}', [mtkkls2Controller::class, 'destroy']);
    Route::get('/kelas2/matematika/kuis/tambah', [mtkkls2Controller::class, 'quiz']);
    Route::post('/kelas2/matematika/kuis/simpan', [mtkkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/matematika/kuis/hapus/{id}', [mtkkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/matematika/addsubmission', [mtkkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/matematika/submisionform/delete/{id}', [mtkkls2Controller::class, 'destroyformsubmit']);
    // Bahasa Indonesia
    Route::get('/kelas2/bindonesia/tambah', [bindkls2Controller::class, 'create']);
    Route::post('/kelas2/bindonesia/simpan', [bindkls2Controller::class, 'add']);
    Route::get('/kelas2/bindonesia/ubah/{id}', [bindkls2Controller::class, 'edit']);
    Route::post('/kelas2/bindonesia/update/{id}', [bindkls2Controller::class, 'update']);
    Route::get('/kelas2/bindonesia/hapus/{id}', [bindkls2Controller::class, 'destroy']);
    Route::get('/kelas2/bindonesia/kuis/tambah', [bindkls2Controller::class, 'quiz']);
    Route::post('/kelas2/bindonesia/kuis/simpan', [bindkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/bindonesia/kuis/hapus/{id}', [bindkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/bindonesia/addsubmission', [bindkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/bindonesia/submisionform/delete/{id}', [bindkls2Controller::class, 'destroyformsubmit']);
    // IPA
    Route::get('/kelas2/ipa/tambah', [ipakls2Controller::class, 'create']);
    Route::post('/kelas2/ipa/simpan', [ipakls2Controller::class, 'add']);
    Route::get('/kelas2/ipa/ubah/{id}', [ipakls2Controller::class, 'edit']);
    Route::post('/kelas2/ipa/update/{id}', [ipakls2Controller::class, 'update']);
    Route::get('/kelas2/ipa/hapus/{id}', [ipakls2Controller::class, 'destroy']);
    Route::get('/kelas2/ipa/kuis/tambah', [ipakls2Controller::class, 'quiz']);
    Route::post('/kelas2/ipa/kuis/simpan', [ipakls2Controller::class, 'addquiz']);
    Route::get('/kelas2/ipa/kuis/hapus/{id}', [ipakls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/ipa/addsubmission', [ipakls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/ipa/submisionform/delete/{id}', [ipakls2Controller::class, 'destroyformsubmit']);
    // IPS
    Route::get('/kelas2/ips/tambah', [ipskls2Controller::class, 'create']);
    Route::post('/kelas2/ips/simpan', [ipskls2Controller::class, 'add']);
    Route::get('/kelas2/ips/ubah/{id}', [ipskls2Controller::class, 'edit']);
    Route::post('/kelas2/ips/update/{id}', [ipskls2Controller::class, 'update']);
    Route::get('/kelas2/ips/hapus/{id}', [ipskls2Controller::class, 'destroy']);
    Route::get('/kelas2/ips/kuis/tambah', [ipskls2Controller::class, 'quiz']);
    Route::post('/kelas2/ips/kuis/simpan', [ipskls2Controller::class, 'addquiz']);
    Route::get('/kelas2/ips/kuis/hapus/{id}', [ipskls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/ips/addsubmission', [ipskls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/ips/submisionform/delete/{id}', [ipskls2Controller::class, 'destroyformsubmit']);
    // Olahraga
    Route::get('/kelas2/pjk/tambah', [pjkkls2Controller::class, 'create']);
    Route::post('/kelas2/pjk/simpan', [pjkkls2Controller::class, 'add']);
    Route::get('/kelas2/pjk/ubah/{id}', [pjkkls2Controller::class, 'edit']);
    Route::post('/kelas2/pjk/update/{id}', [pjkkls2Controller::class, 'update']);
    Route::get('/kelas2/pjk/hapus/{id}', [pjkkls2Controller::class, 'destroy']);
    Route::get('/kelas2/pjk/kuis/tambah', [pjkkls2Controller::class, 'quiz']);
    Route::post('/kelas2/pjk/kuis/simpan', [pjkkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/pjk/kuis/hapus/{id}', [pjkkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/pjk/addsubmission', [pjkkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/pjk/submisionform/delete/{id}', [pjkkls2Controller::class, 'destroyformsubmit']);
    // Muatan Lokal
    Route::get('/kelas2/mulok/tambah', [mulokkls2Controller::class, 'create']);
    Route::post('/kelas2/mulok/simpan', [mulokkls2Controller::class, 'add']);
    Route::get('/kelas2/mulok/ubah/{id}', [mulokkls2Controller::class, 'edit']);
    Route::post('/kelas2/mulok/update/{id}', [mulokkls2Controller::class, 'update']);
    Route::get('/kelas2/mulok/hapus/{id}', [mulokkls2Controller::class, 'destroy']);
    Route::get('/kelas2/mulok/kuis/tambah', [mulokkls2Controller::class, 'quiz']);
    Route::post('/kelas2/mulok/kuis/simpan', [mulokkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/mulok/kuis/hapus/{id}', [mulokkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/mulok/addsubmission', [mulokkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/mulok/submisionform/delete/{id}', [mulokkls2Controller::class, 'destroyformsubmit']);
    // PPKN
    Route::get('/kelas2/ppkn/tambah', [ppknkls2Controller::class, 'create']);
    Route::post('/kelas2/ppkn/simpan', [ppknkls2Controller::class, 'add']);
    Route::get('/kelas2/ppkn/ubah/{id}', [ppknkls2Controller::class, 'edit']);
    Route::post('/kelas2/ppkn/update/{id}', [ppknkls2Controller::class, 'update']);
    Route::get('/kelas2/ppkn/hapus/{id}', [ppknkls2Controller::class, 'destroy']);
    Route::get('/kelas2/ppkn/kuis/tambah', [ppknkls2Controller::class, 'quiz']);
    Route::post('/kelas2/ppkn/kuis/simpan', [ppknkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/ppkn/kuis/hapus/{id}', [ppknkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/ppkn/addsubmission', [ppknkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/ppkn/submisionform/delete/{id}', [ppknkls2Controller::class, 'destroyformsubmit']);
     // Agama
     Route::get('/kelas2/agama/tambah', [agamakls2Controller::class, 'create']);
     Route::post('/kelas2/agama/simpan', [agamakls2Controller::class, 'add']);
     Route::get('/kelas2/agama/ubah/{id}', [agamakls2Controller::class, 'edit']);
     Route::post('/kelas2/agama/update/{id}', [agamakls2Controller::class, 'update']);
     Route::get('/kelas2/agama/hapus/{id}', [agamakls2Controller::class, 'destroy']);
     Route::get('/kelas2/agama/kuis/tambah', [agamakls2Controller::class, 'quiz']);
     Route::post('/kelas2/agama/kuis/simpan', [agamakls2Controller::class, 'addquiz']);
     Route::get('/kelas2/agama/kuis/hapus/{id}', [agamakls2Controller::class, 'destroykuis']);
     Route::post('/kelas2/agama/addsubmission', [agamakls2Controller::class, 'addsubmission']);
     Route::get('/kelas2/agama/submisionform/delete/{id}', [agamakls2Controller::class, 'destroyformsubmit']);
      // Seni Budaya
    Route::get('/kelas2/sbd/tambah', [sbdkls2Controller::class, 'create']);
    Route::post('/kelas2/sbd/simpan', [sbdkls2Controller::class, 'add']);
    Route::get('/kelas2/sbd/ubah/{id}', [sbdkls2Controller::class, 'edit']);
    Route::post('/kelas2/sbd/update/{id}', [sbdkls2Controller::class, 'update']);
    Route::get('/kelas2/sbd/hapus/{id}', [sbdkls2Controller::class, 'destroy']);
    Route::get('/kelas2/sbd/kuis/tambah', [sbdkls2Controller::class, 'quiz']);
    Route::post('/kelas2/sbd/kuis/simpan', [sbdkls2Controller::class, 'addquiz']);
    Route::get('/kelas2/sbd/kuis/hapus/{id}', [sbdkls2Controller::class, 'destroykuis']);
    Route::post('/kelas2/sbd/addsubmission', [sbdkls2Controller::class, 'addsubmission']);
    Route::get('/kelas2/sbd/submisionform/delete/{id}', [sbdkls2Controller::class, 'destroyformsubmit']);

     // kelas 3
    // Matematika
    Route::get('/kelas3/matematika/tambah', [mtkkls3Controller::class, 'create']);
    Route::post('/kelas3/matematika/simpan', [mtkkls3Controller::class, 'add']);
    Route::get('/kelas3/matematika/ubah/{id}', [mtkkls3Controller::class, 'edit']);
    Route::post('/kelas3/matematika/update/{id}', [mtkkls3Controller::class, 'update']);
    Route::get('/kelas3/matematika/hapus/{id}', [mtkkls3Controller::class, 'destroy']);
    Route::get('/kelas3/matematika/kuis/tambah', [mtkkls3Controller::class, 'quiz']);
    Route::post('/kelas3/matematika/kuis/simpan', [mtkkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/matematika/kuis/hapus/{id}', [mtkkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/matematika/addsubmission', [mtkkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/matematika/submisionform/delete/{id}', [mtkkls3Controller::class, 'destroyformsubmit']);
    // Bahasa Indonesia
    Route::get('/kelas3/bindonesia/tambah', [bindkls3Controller::class, 'create']);
    Route::post('/kelas3/bindonesia/simpan', [bindkls3Controller::class, 'add']);
    Route::get('/kelas3/bindonesia/ubah/{id}', [bindkls3Controller::class, 'edit']);
    Route::post('/kelas3/bindonesia/update/{id}', [bindkls3Controller::class, 'update']);
    Route::get('/kelas3/bindonesia/hapus/{id}', [bindkls3Controller::class, 'destroy']);
    Route::get('/kelas3/bindonesia/kuis/tambah', [bindkls3Controller::class, 'quiz']);
    Route::post('/kelas3/bindonesia/kuis/simpan', [bindkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/bindonesia/kuis/hapus/{id}', [bindkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/bindonesia/addsubmission', [bindkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/bindonesia/submisionform/delete/{id}', [bindkls3Controller::class, 'destroyformsubmit']);
    // IPA
    Route::get('/kelas3/ipa/tambah', [ipakls3Controller::class, 'create']);
    Route::post('/kelas3/ipa/simpan', [ipakls3Controller::class, 'add']);
    Route::get('/kelas3/ipa/ubah/{id}', [ipakls3Controller::class, 'edit']);
    Route::post('/kelas3/ipa/update/{id}', [ipakls3Controller::class, 'update']);
    Route::get('/kelas3/ipa/hapus/{id}', [ipakls3Controller::class, 'destroy']);
    Route::get('/kelas3/ipa/kuis/tambah', [ipakls3Controller::class, 'quiz']);
    Route::post('/kelas3/ipa/kuis/simpan', [ipakls3Controller::class, 'addquiz']);
    Route::get('/kelas3/ipa/kuis/hapus/{id}', [ipakls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/ipa/addsubmission', [ipakls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/ipa/submisionform/delete/{id}', [ipakls3Controller::class, 'destroyformsubmit']);
    // IPS
    Route::get('/kelas3/ips/tambah', [ipskls3Controller::class, 'create']);
    Route::post('/kelas3/ips/simpan', [ipskls3Controller::class, 'add']);
    Route::get('/kelas3/ips/ubah/{id}', [ipskls3Controller::class, 'edit']);
    Route::post('/kelas3/ips/update/{id}', [ipskls3Controller::class, 'update']);
    Route::get('/kelas3/ips/hapus/{id}', [ipskls3Controller::class, 'destroy']);
    Route::get('/kelas3/ips/kuis/tambah', [ipskls3Controller::class, 'quiz']);
    Route::post('/kelas3/ips/kuis/simpan', [ipskls3Controller::class, 'addquiz']);
    Route::get('/kelas3/ips/kuis/hapus/{id}', [ipskls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/ips/addsubmission', [ipskls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/ips/submisionform/delete/{id}', [ipskls3Controller::class, 'destroyformsubmit']);
    // Olahraga
    Route::get('/kelas3/pjk/tambah', [pjkkls3Controller::class, 'create']);
    Route::post('/kelas3/pjk/simpan', [pjkkls3Controller::class, 'add']);
    Route::get('/kelas3/pjk/ubah/{id}', [pjkkls3Controller::class, 'edit']);
    Route::post('/kelas3/pjk/update/{id}', [pjkkls3Controller::class, 'update']);
    Route::get('/kelas3/pjk/hapus/{id}', [pjkkls3Controller::class, 'destroy']);
    Route::get('/kelas3/pjk/kuis/tambah', [pjkkls3Controller::class, 'quiz']);
    Route::post('/kelas3/pjk/kuis/simpan', [pjkkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/pjk/kuis/hapus/{id}', [pjkkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/pjk/addsubmission', [pjkkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/pjk/submisionform/delete/{id}', [pjkkls3Controller::class, 'destroyformsubmit']);
    // Muatan Lokal
    Route::get('/kelas3/mulok/tambah', [mulokkls3Controller::class, 'create']);
    Route::post('/kelas3/mulok/simpan', [mulokkls3Controller::class, 'add']);
    Route::get('/kelas3/mulok/ubah/{id}', [mulokkls3Controller::class, 'edit']);
    Route::post('/kelas3/mulok/update/{id}', [mulokkls3Controller::class, 'update']);
    Route::get('/kelas3/mulok/hapus/{id}', [mulokkls3Controller::class, 'destroy']);
    Route::get('/kelas3/mulok/kuis/tambah', [mulokkls3Controller::class, 'quiz']);
    Route::post('/kelas3/mulok/kuis/simpan', [mulokkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/mulok/kuis/hapus/{id}', [mulokkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/mulok/addsubmission', [mulokkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/mulok/submisionform/delete/{id}', [mulokkls3Controller::class, 'destroyformsubmit']);
    // PPKN
    Route::get('/kelas3/ppkn/tambah', [ppknkls3Controller::class, 'create']);
    Route::post('/kelas3/ppkn/simpan', [ppknkls3Controller::class, 'add']);
    Route::get('/kelas3/ppkn/ubah/{id}', [ppknkls3Controller::class, 'edit']);
    Route::post('/kelas3/ppkn/update/{id}', [ppknkls3Controller::class, 'update']);
    Route::get('/kelas3/ppkn/hapus/{id}', [ppknkls3Controller::class, 'destroy']);
    Route::get('/kelas3/ppkn/kuis/tambah', [ppknkls3Controller::class, 'quiz']);
    Route::post('/kelas3/ppkn/kuis/simpan', [ppknkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/ppkn/kuis/hapus/{id}', [ppknkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/ppkn/addsubmission', [ppknkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/ppkn/submisionform/delete/{id}', [ppknkls3Controller::class, 'destroyformsubmit']);
     // Agama
     Route::get('/kelas3/agama/tambah', [agamakls3Controller::class, 'create']);
     Route::post('/kelas3/agama/simpan', [agamakls3Controller::class, 'add']);
     Route::get('/kelas3/agama/ubah/{id}', [agamakls3Controller::class, 'edit']);
     Route::post('/kelas3/agama/update/{id}', [agamakls3Controller::class, 'update']);
     Route::get('/kelas3/agama/hapus/{id}', [agamakls3Controller::class, 'destroy']);
     Route::get('/kelas3/agama/kuis/tambah', [agamakls3Controller::class, 'quiz']);
     Route::post('/kelas3/agama/kuis/simpan', [agamakls3Controller::class, 'addquiz']);
     Route::get('/kelas3/agama/kuis/hapus/{id}', [agamakls3Controller::class, 'destroykuis']);
     Route::post('/kelas3/agama/addsubmission', [agamakls3Controller::class, 'addsubmission']);
     Route::get('/kelas3/agama/submisionform/delete/{id}', [agamakls3Controller::class, 'destroyformsubmit']);
      // Seni Budaya
    Route::get('/kelas3/sbd/tambah', [sbdkls3Controller::class, 'create']);
    Route::post('/kelas3/sbd/simpan', [sbdkls3Controller::class, 'add']);
    Route::get('/kelas3/sbd/ubah/{id}', [sbdkls3Controller::class, 'edit']);
    Route::post('/kelas3/sbd/update/{id}', [sbdkls3Controller::class, 'update']);
    Route::get('/kelas3/sbd/hapus/{id}', [sbdkls3Controller::class, 'destroy']);
    Route::get('/kelas3/sbd/kuis/tambah', [sbdkls3Controller::class, 'quiz']);
    Route::post('/kelas3/sbd/kuis/simpan', [sbdkls3Controller::class, 'addquiz']);
    Route::get('/kelas3/sbd/kuis/hapus/{id}', [sbdkls3Controller::class, 'destroykuis']);
    Route::post('/kelas3/sbd/addsubmission', [sbdkls3Controller::class, 'addsubmission']);
    Route::get('/kelas3/sbd/submisionform/delete/{id}', [sbdkls3Controller::class, 'destroyformsubmit']);


    // kelas 4
    // Matematika
    Route::get('/kelas4/matematika/tambah', [mtkkls4Controller::class, 'create']);
    Route::post('/kelas4/matematika/simpan', [mtkkls4Controller::class, 'add']);
    Route::get('/kelas4/matematika/ubah/{id}', [mtkkls4Controller::class, 'edit']);
    Route::post('/kelas4/matematika/update/{id}', [mtkkls4Controller::class, 'update']);
    Route::get('/kelas4/matematika/hapus/{id}', [mtkkls4Controller::class, 'destroy']);
    Route::get('/kelas4/matematika/kuis/tambah', [mtkkls4Controller::class, 'quiz']);
    Route::post('/kelas4/matematika/kuis/simpan', [mtkkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/matematika/kuis/hapus/{id}', [mtkkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/matematika/addsubmission', [mtkkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/matematika/submisionform/delete/{id}', [mtkkls4Controller::class, 'destroyformsubmit']);
    // Bahasa Indonesia
    Route::get('/kelas4/bindonesia/tambah', [bindkls4Controller::class, 'create']);
    Route::post('/kelas4/bindonesia/simpan', [bindkls4Controller::class, 'add']);
    Route::get('/kelas4/bindonesia/ubah/{id}', [bindkls4Controller::class, 'edit']);
    Route::post('/kelas4/bindonesia/update/{id}', [bindkls4Controller::class, 'update']);
    Route::get('/kelas4/bindonesia/hapus/{id}', [bindkls4Controller::class, 'destroy']);
    Route::get('/kelas4/bindonesia/kuis/tambah', [bindkls4Controller::class, 'quiz']);
    Route::post('/kelas4/bindonesia/kuis/simpan', [bindkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/bindonesia/kuis/hapus/{id}', [bindkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/bindonesia/addsubmission', [bindkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/bindonesia/submisionform/delete/{id}', [bindkls4Controller::class, 'destroyformsubmit']);
    // IPA
    Route::get('/kelas4/ipa/tambah', [ipakls4Controller::class, 'create']);
    Route::post('/kelas4/ipa/simpan', [ipakls4Controller::class, 'add']);
    Route::get('/kelas4/ipa/ubah/{id}', [ipakls4Controller::class, 'edit']);
    Route::post('/kelas4/ipa/update/{id}', [ipakls4Controller::class, 'update']);
    Route::get('/kelas4/ipa/hapus/{id}', [ipakls4Controller::class, 'destroy']);
    Route::get('/kelas4/ipa/kuis/tambah', [ipakls4Controller::class, 'quiz']);
    Route::post('/kelas4/ipa/kuis/simpan', [ipakls4Controller::class, 'addquiz']);
    Route::get('/kelas4/ipa/kuis/hapus/{id}', [ipakls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/ipa/addsubmission', [ipakls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/ipa/submisionform/delete/{id}', [ipakls4Controller::class, 'destroyformsubmit']);
    // IPS
    Route::get('/kelas4/ips/tambah', [ipskls4Controller::class, 'create']);
    Route::post('/kelas4/ips/simpan', [ipskls4Controller::class, 'add']);
    Route::get('/kelas4/ips/ubah/{id}', [ipskls4Controller::class, 'edit']);
    Route::post('/kelas4/ips/update/{id}', [ipskls4Controller::class, 'update']);
    Route::get('/kelas4/ips/hapus/{id}', [ipskls4Controller::class, 'destroy']);
    Route::get('/kelas4/ips/kuis/tambah', [ipskls4Controller::class, 'quiz']);
    Route::post('/kelas4/ips/kuis/simpan', [ipskls4Controller::class, 'addquiz']);
    Route::get('/kelas4/ips/kuis/hapus/{id}', [ipskls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/ips/addsubmission', [ipskls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/ips/submisionform/delete/{id}', [ipskls4Controller::class, 'destroyformsubmit']);
    // Olahraga
    Route::get('/kelas4/pjk/tambah', [pjkkls4Controller::class, 'create']);
    Route::post('/kelas4/pjk/simpan', [pjkkls4Controller::class, 'add']);
    Route::get('/kelas4/pjk/ubah/{id}', [pjkkls4Controller::class, 'edit']);
    Route::post('/kelas4/pjk/update/{id}', [pjkkls4Controller::class, 'update']);
    Route::get('/kelas4/pjk/hapus/{id}', [pjkkls4Controller::class, 'destroy']);
    Route::get('/kelas4/pjk/kuis/tambah', [pjkkls4Controller::class, 'quiz']);
    Route::post('/kelas4/pjk/kuis/simpan', [pjkkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/pjk/kuis/hapus/{id}', [pjkkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/pjk/addsubmission', [pjkkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/pjk/submisionform/delete/{id}', [pjkkls4Controller::class, 'destroyformsubmit']);
    // Muatan Lokal
    Route::get('/kelas4/mulok/tambah', [mulokkls4Controller::class, 'create']);
    Route::post('/kelas4/mulok/simpan', [mulokkls4Controller::class, 'add']);
    Route::get('/kelas4/mulok/ubah/{id}', [mulokkls4Controller::class, 'edit']);
    Route::post('/kelas4/mulok/update/{id}', [mulokkls4Controller::class, 'update']);
    Route::get('/kelas4/mulok/hapus/{id}', [mulokkls4Controller::class, 'destroy']);
    Route::get('/kelas4/mulok/kuis/tambah', [mulokkls4Controller::class, 'quiz']);
    Route::post('/kelas4/mulok/kuis/simpan', [mulokkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/mulok/kuis/hapus/{id}', [mulokkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/mulok/addsubmission', [mulokkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/mulok/submisionform/delete/{id}', [mulokkls4Controller::class, 'destroyformsubmit']);
    // PPKN
    Route::get('/kelas4/ppkn/tambah', [ppknkls4Controller::class, 'create']);
    Route::post('/kelas4/ppkn/simpan', [ppknkls4Controller::class, 'add']);
    Route::get('/kelas4/ppkn/ubah/{id}', [ppknkls4Controller::class, 'edit']);
    Route::post('/kelas4/ppkn/update/{id}', [ppknkls4Controller::class, 'update']);
    Route::get('/kelas4/ppkn/hapus/{id}', [ppknkls4Controller::class, 'destroy']);
    Route::get('/kelas4/ppkn/kuis/tambah', [ppknkls4Controller::class, 'quiz']);
    Route::post('/kelas4/ppkn/kuis/simpan', [ppknkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/ppkn/kuis/hapus/{id}', [ppknkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/ppkn/addsubmission', [ppknkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/ppkn/submisionform/delete/{id}', [ppknkls4Controller::class, 'destroyformsubmit']);
     // Agama
     Route::get('/kelas4/agama/tambah', [agamakls4Controller::class, 'create']);
     Route::post('/kelas4/agama/simpan', [agamakls4Controller::class, 'add']);
     Route::get('/kelas4/agama/ubah/{id}', [agamakls4Controller::class, 'edit']);
     Route::post('/kelas4/agama/update/{id}', [agamakls4Controller::class, 'update']);
     Route::get('/kelas4/agama/hapus/{id}', [agamakls4Controller::class, 'destroy']);
     Route::get('/kelas4/agama/kuis/tambah', [agamakls4Controller::class, 'quiz']);
     Route::post('/kelas4/agama/kuis/simpan', [agamakls4Controller::class, 'addquiz']);
     Route::get('/kelas4/agama/kuis/hapus/{id}', [agamakls4Controller::class, 'destroykuis']);
     Route::post('/kelas4/agama/addsubmission', [agamakls4Controller::class, 'addsubmission']);
     Route::get('/kelas4/agama/submisionform/delete/{id}', [agamakls4Controller::class, 'destroyformsubmit']);
      // Seni Budaya
    Route::get('/kelas4/sbd/tambah', [sbdkls4Controller::class, 'create']);
    Route::post('/kelas4/sbd/simpan', [sbdkls4Controller::class, 'add']);
    Route::get('/kelas4/sbd/ubah/{id}', [sbdkls4Controller::class, 'edit']);
    Route::post('/kelas4/sbd/update/{id}', [sbdkls4Controller::class, 'update']);
    Route::get('/kelas4/sbd/hapus/{id}', [sbdkls4Controller::class, 'destroy']);
    Route::get('/kelas4/sbd/kuis/tambah', [sbdkls4Controller::class, 'quiz']);
    Route::post('/kelas4/sbd/kuis/simpan', [sbdkls4Controller::class, 'addquiz']);
    Route::get('/kelas4/sbd/kuis/hapus/{id}', [sbdkls4Controller::class, 'destroykuis']);
    Route::post('/kelas4/sbd/addsubmission', [sbdkls4Controller::class, 'addsubmission']);
    Route::get('/kelas4/sbd/submisionform/delete/{id}', [sbdkls4Controller::class, 'destroyformsubmit']);



















    // kelas 6
    // Matematika
    Route::get('/kelas6/matematika/tambah', [mtkkls6Controller::class, 'create']);
    Route::post('/kelas6/matematika/simpan', [mtkkls6Controller::class, 'add']);
    Route::get('/kelas6/matematika/ubah/{id}', [mtkkls6Controller::class, 'edit']);
    Route::post('/kelas6/matematika/update/{id}', [mtkkls6Controller::class, 'update']);
    Route::get('/kelas6/matematika/hapus/{id}', [mtkkls6Controller::class, 'destroy']);
    Route::get('/kelas6/matematika/kuis/tambah', [mtkkls6Controller::class, 'quiz']);
    Route::post('/kelas6/matematika/kuis/simpan', [mtkkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/matematika/kuis/hapus/{id}', [mtkkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/matematika/addsubmission', [mtkkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/matematika/submisionform/delete/{id}', [mtkkls6Controller::class, 'destroyformsubmit']);
    // Bahasa Indonesia
    Route::get('/kelas6/bindonesia/tambah', [bindkls6Controller::class, 'create']);
    Route::post('/kelas6/bindonesia/simpan', [bindkls6Controller::class, 'add']);
    Route::get('/kelas6/bindonesia/ubah/{id}', [bindkls6Controller::class, 'edit']);
    Route::post('/kelas6/bindonesia/update/{id}', [bindkls6Controller::class, 'update']);
    Route::get('/kelas6/bindonesia/hapus/{id}', [bindkls6Controller::class, 'destroy']);
    Route::get('/kelas6/bindonesia/kuis/tambah', [bindkls6Controller::class, 'quiz']);
    Route::post('/kelas6/bindonesia/kuis/simpan', [bindkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/bindonesia/kuis/hapus/{id}', [bindkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/bindonesia/addsubmission', [bindkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/bindonesia/submisionform/delete/{id}', [bindkls6Controller::class, 'destroyformsubmit']);
    // IPA
    Route::get('/kelas6/ipa/tambah', [ipakls6Controller::class, 'create']);
    Route::post('/kelas6/ipa/simpan', [ipakls6Controller::class, 'add']);
    Route::get('/kelas6/ipa/ubah/{id}', [ipakls6Controller::class, 'edit']);
    Route::post('/kelas6/ipa/update/{id}', [ipakls6Controller::class, 'update']);
    Route::get('/kelas6/ipa/hapus/{id}', [ipakls6Controller::class, 'destroy']);
    Route::get('/kelas6/ipa/kuis/tambah', [ipakls6Controller::class, 'quiz']);
    Route::post('/kelas6/ipa/kuis/simpan', [ipakls6Controller::class, 'addquiz']);
    Route::get('/kelas6/ipa/kuis/hapus/{id}', [ipakls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/ipa/addsubmission', [ipakls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/ipa/submisionform/delete/{id}', [ipakls6Controller::class, 'destroyformsubmit']);
    // IPS
    Route::get('/kelas6/ips/tambah', [ipskls6Controller::class, 'create']);
    Route::post('/kelas6/ips/simpan', [ipskls6Controller::class, 'add']);
    Route::get('/kelas6/ips/ubah/{id}', [ipskls6Controller::class, 'edit']);
    Route::post('/kelas6/ips/update/{id}', [ipskls6Controller::class, 'update']);
    Route::get('/kelas6/ips/hapus/{id}', [ipskls6Controller::class, 'destroy']);
    Route::get('/kelas6/ips/kuis/tambah', [ipskls6Controller::class, 'quiz']);
    Route::post('/kelas6/ips/kuis/simpan', [ipskls6Controller::class, 'addquiz']);
    Route::get('/kelas6/ips/kuis/hapus/{id}', [ipskls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/ips/addsubmission', [ipskls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/ips/submisionform/delete/{id}', [ipskls6Controller::class, 'destroyformsubmit']);
    // Olahraga
    Route::get('/kelas6/pjk/tambah', [pjkkls6Controller::class, 'create']);
    Route::post('/kelas6/pjk/simpan', [pjkkls6Controller::class, 'add']);
    Route::get('/kelas6/pjk/ubah/{id}', [pjkkls6Controller::class, 'edit']);
    Route::post('/kelas6/pjk/update/{id}', [pjkkls6Controller::class, 'update']);
    Route::get('/kelas6/pjk/hapus/{id}', [pjkkls6Controller::class, 'destroy']);
    Route::get('/kelas6/pjk/kuis/tambah', [pjkkls6Controller::class, 'quiz']);
    Route::post('/kelas6/pjk/kuis/simpan', [pjkkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/pjk/kuis/hapus/{id}', [pjkkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/pjk/addsubmission', [pjkkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/pjk/submisionform/delete/{id}', [pjkkls6Controller::class, 'destroyformsubmit']);
    // Muatan Lokal
    Route::get('/kelas6/mulok/tambah', [mulokkls6Controller::class, 'create']);
    Route::post('/kelas6/mulok/simpan', [mulokkls6Controller::class, 'add']);
    Route::get('/kelas6/mulok/ubah/{id}', [mulokkls6Controller::class, 'edit']);
    Route::post('/kelas6/mulok/update/{id}', [mulokkls6Controller::class, 'update']);
    Route::get('/kelas6/mulok/hapus/{id}', [mulokkls6Controller::class, 'destroy']);
    Route::get('/kelas6/mulok/kuis/tambah', [mulokkls6Controller::class, 'quiz']);
    Route::post('/kelas6/mulok/kuis/simpan', [mulokkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/mulok/kuis/hapus/{id}', [mulokkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/mulok/addsubmission', [mulokkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/mulok/submisionform/delete/{id}', [mulokkls6Controller::class, 'destroyformsubmit']);
    // PPKN
    Route::get('/kelas6/ppkn/tambah', [ppknkls6Controller::class, 'create']);
    Route::post('/kelas6/ppkn/simpan', [ppknkls6Controller::class, 'add']);
    Route::get('/kelas6/ppkn/ubah/{id}', [ppknkls6Controller::class, 'edit']);
    Route::post('/kelas6/ppkn/update/{id}', [ppknkls6Controller::class, 'update']);
    Route::get('/kelas6/ppkn/hapus/{id}', [ppknkls6Controller::class, 'destroy']);
    Route::get('/kelas6/ppkn/kuis/tambah', [ppknkls6Controller::class, 'quiz']);
    Route::post('/kelas6/ppkn/kuis/simpan', [ppknkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/ppkn/kuis/hapus/{id}', [ppknkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/ppkn/addsubmission', [ppknkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/ppkn/submisionform/delete/{id}', [ppknkls6Controller::class, 'destroyformsubmit']);
     // Agama
     Route::get('/kelas6/agama/tambah', [agamakls6Controller::class, 'create']);
     Route::post('/kelas6/agama/simpan', [agamakls6Controller::class, 'add']);
     Route::get('/kelas6/agama/ubah/{id}', [agamakls6Controller::class, 'edit']);
     Route::post('/kelas6/agama/update/{id}', [agamakls6Controller::class, 'update']);
     Route::get('/kelas6/agama/hapus/{id}', [agamakls6Controller::class, 'destroy']);
     Route::get('/kelas6/agama/kuis/tambah', [agamakls6Controller::class, 'quiz']);
     Route::post('/kelas6/agama/kuis/simpan', [agamakls6Controller::class, 'addquiz']);
     Route::get('/kelas6/agama/kuis/hapus/{id}', [agamakls6Controller::class, 'destroykuis']);
     Route::post('/kelas6/agama/addsubmission', [agamakls6Controller::class, 'addsubmission']);
     Route::get('/kelas6/agama/submisionform/delete/{id}', [agamakls6Controller::class, 'destroyformsubmit']);
      // Seni Budaya
    Route::get('/kelas6/sbd/tambah', [sbdkls6Controller::class, 'create']);
    Route::post('/kelas6/sbd/simpan', [sbdkls6Controller::class, 'add']);
    Route::get('/kelas6/sbd/ubah/{id}', [sbdkls6Controller::class, 'edit']);
    Route::post('/kelas6/sbd/update/{id}', [sbdkls6Controller::class, 'update']);
    Route::get('/kelas6/sbd/hapus/{id}', [sbdkls6Controller::class, 'destroy']);
    Route::get('/kelas6/sbd/kuis/tambah', [sbdkls6Controller::class, 'quiz']);
    Route::post('/kelas6/sbd/kuis/simpan', [sbdkls6Controller::class, 'addquiz']);
    Route::get('/kelas6/sbd/kuis/hapus/{id}', [sbdkls6Controller::class, 'destroykuis']);
    Route::post('/kelas6/sbd/addsubmission', [sbdkls6Controller::class, 'addsubmission']);
    Route::get('/kelas6/sbd/submisionform/delete/{id}', [sbdkls6Controller::class, 'destroyformsubmit']);

    

});



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
