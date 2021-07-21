<?php

namespace App\Http\Controllers\ruangtanya2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya2\pjkkomen;
use App\Models\tanya2\pjkreply;

class tanyapenjasController2 extends Controller
{
    public function index(){
        $comment = pjkkomen::all();
        $reply = pjkreply::all();
        return view('formdiskusi2/penjas',['comment'=>$comment],['reply'=>$reply]);
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
        return redirect('/kelas2/ObrolanKelas/tanyajawab/penjas')->with('success','Pertanyaan kamu telah terkirim');
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
        return redirect('/kelas2/ObrolanKelas/tanyajawab/penjas')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = pjkkomen::find($id);
        $comment->delete();
        return redirect('/kelas2/ObrolanKelas/tanyajawab/penjas')->with('success', 'Data Telah Dihapus!');
    }

}
