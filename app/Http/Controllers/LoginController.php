<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $data = User::where('email',$request->email)->first();
        if($data){
            if(Hash::check($request->password,$data->password)){
                session(['berhasil_login' => true]);
                return redirect('/index');
            }  
            return redirect('/')->with('message','Email atau Password salah');
        }
            return redirect('/')->with('message','Email atau Password salah');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
