<?php

namespace App\Http\Controllers\ruangtanya1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya1\indokomen;
use App\Models\tanya1\indoreply;

class tanyaindoController1 extends Controller
{
    public function index(){
        $comment = indokomen::all();
        $reply = indoreply::all();
        return view('formdiskusi1/bindonesia',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        indokomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas1/ObrolanKelas/tanyajawab/bindonesia')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        indoreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas1/ObrolanKelas/tanyajawab/bindonesia')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = indokomen::find($id);
        $comment->delete();
        return redirect('/kelas1/ObrolanKelas/tanyajawab/bindonesia')->with('success', 'Data Telah Dihapus!');
    }

}
