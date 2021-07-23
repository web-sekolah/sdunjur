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
    Route::get('/kelas1/bindonesia/download/{file}', [bindls1Controller::class, 'download']);
    Route::post('/kelas1/bindonesia/addsubmit', [bindkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/bindonesia/destroysubmit/{id}', [bindkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/bindonesia/submit/ubah/{id}', [bindkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/bindonesia/submit/update/{id}', [bindkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/bindonesia/submit/download/{file}', [bindkls1Controller::class, 'downloadsubmit']);
    // 
    // Bahasa IPA
    Route::get('/kelas1/ipa', [ipskls1Controller::class, 'index'])->name('kelas1.ipa');
    Route::get('/kelas1/ipa/download/{file}', [ipskls1Controller::class, 'download']);
    Route::get('/kelas1/ipa/download/{file}', [ipskls1Controller::class, 'download']);
    Route::post('/kelas1/ipa/addsubmit', [ipskls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/ipa/destroysubmit/{id}', [ipskls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/ipa/submit/ubah/{id}', [ipskls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/ipa/submit/update/{id}', [ipskls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/ipa/submit/download/{file}', [ipskls1Controller::class, 'downloadsubmit']);
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
    Route::get('/kelas1/pjk', [ipskls1Controller::class, 'index'])->name('kelas1.pjk');
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
    Route::get('/kelas1/agama', [mulokkls1Controller::class, 'index'])->name('kelas1.agama');
    Route::get('/kelas1/agama/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::get('/kelas1/agama/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::post('/kelas1/agama/addsubmit', [mulokkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/agama/destroysubmit/{id}', [mulokkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/agama/submit/ubah/{id}', [mulokkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/agama/submit/update/{id}', [mulokkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/agama/submit/download/{file}', [mulokkls1Controller::class, 'downloadsubmit']);
    // 
    // PPKN
    Route::get('/kelas1/ppkn', [mulokkls1Controller::class, 'index'])->name('kelas1.ppkn');
    Route::get('/kelas1/ppkn/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::get('/kelas1/ppkn/download/{file}', [mulokkls1Controller::class, 'download']);
    Route::post('/kelas1/ppkn/addsubmit', [mulokkls1Controller::class, 'addsubmit']);
    Route::get('/kelas1/ppkn/destroysubmit/{id}', [mulokkls1Controller::class, 'destroysubmit']);
    Route::get('/kelas1/ppkn/submit/ubah/{id}', [mulokkls1Controller::class, 'editsubmit']);
    Route::post('/kelas1/ppkn/submit/update/{id}', [mulokkls1Controller::class, 'updatesubmit']);
    Route::get('/kelas1/ppkn/submit/download/{file}', [mulokkls1Controller::class, 'downloadsubmit']);
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




    Route::get('/kelas2', [kelas2Controller::class, 'index'])->name('kelas2');

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


    Route::get('/kelas4', [kelas4Controller::class, 'index'])->name('kelas4');

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


    Route::get('/kelas6', [kelas6Controller::class, 'index'])->name('kelas6');

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
    

});



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
