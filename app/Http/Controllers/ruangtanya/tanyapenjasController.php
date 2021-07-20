<?php

namespace App\Http\Controllers\ruangtanya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pjkkomen;
use App\Models\pjkreply;

class tanyapenjasController extends Controller
{
    public function index(){
        $comment = pjkkomen::all();
        $reply = pjkreply::all();
        return view('formdiskusi/penjas',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        pjkkomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/tanyajawab/penjas')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        pjkreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/tanyajawab/penjas')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = pjkkomen::find($id);
        $comment->delete();
        return redirect('/tanyajawab/penjas')->with('success', 'Data Telah Dihapus!');
    }

}
