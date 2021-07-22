<?php

namespace App\Http\Controllers\ruangtanya1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya1\mtkkomenModel;
use App\Models\tanya1\matkreply;

class tanyamatkaController1 extends Controller
{
    public function index(){
        $comment = mtkkomenModel::all();
        $reply = matkreply::all();
        return view('formdiskusi1/matematika',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        mtkkomenModel::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas1/ObrolanKelas/tanyajawab/matematika')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        matkreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas1/ObrolanKelas/tanyajawab/matematika')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = mtkkomenModel::find($id);
        $comment->delete();
        return redirect('/kelas1/ObrolanKelas/tanyajawab/matematika')->with('success', 'Data Telah Dihapus!');
    }

}
