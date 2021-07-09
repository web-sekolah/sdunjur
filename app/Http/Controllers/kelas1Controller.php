<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kelas1Controller extends Controller
{
    public function index(){
        return view('kelas1.beranda');
    }
}
