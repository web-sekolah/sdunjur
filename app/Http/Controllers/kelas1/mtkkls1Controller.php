<?php

namespace App\Http\Controllers\kelas1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mtkkls1Controller extends Controller
{
    public function index(){
        return view('kelas1/matematika');
    }
}
