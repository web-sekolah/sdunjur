<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $data = User::where('email',$request->email)->first();
        // if($data){
        //     if(Hash::check($request->password,$data->password)){
        //         session(['berhasil_login' => true]);
        //         return redirect('/index');
        //     }  
        //     return redirect('/')->with('message','Email atau Password salah');
        // }
            // if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            //     return redirect('/dashboard');
            // }
            // return redirect('/')->with('message','Email atau Password salah');
    }

    public function logout(Request $request){
        // $request->session()->flush();
        // $request->Redirect()->back();
        // Auth::logout();
        // return redirect('/');

        // $this->guard()->logout();

        // $request->session()->invalidate();

    }
}
