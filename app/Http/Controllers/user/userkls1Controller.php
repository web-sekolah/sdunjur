<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userkls1Controller extends Controller
{
    public function index(Request $request){
        if($request->has('keyword')){
            // $submit = kls1agamasubsmision::all();
            $data =User::orderBy('name','asc')->get();
            $data = User::where('name','LIKE','%'.$request->keyword.'%')
            ->orWhere('email','LIKE','%'.$request->keyword.'%')
            ->orWhere('username','LIKE','%'.$request->keyword.'%')
            ->orWhere('id', 'LIKE', '%'.$request->keyword.'%')->get();
        }else{
            $data = User::orderBy('name','asc')->get();
        }
        return view('user/userkls1',['data'=>$data]);
    }

    public function destroy($id){
        $user = User::find($id);
        $user ->delete();
        return redirect('/userkls1')->with('success', 'Data Telah Dihapus!');
    }

    public function dashboard(Request $request){

        $user = User::all();
        return view('user/dashboard',['user'=>$user]);
    }
}
