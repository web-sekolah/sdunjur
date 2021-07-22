<?php

namespace App\Http\Controllers\ruangtanya5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya5\ipakomen;
use App\Models\tanya5\ipareply;


class tanyaipaController5 extends Controller
{
    public function index(){
        $comment = ipakomen::all();
        $reply = ipareply::all();
        return view('formdiskusi5/ipa',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        ipakomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ipa')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        ipareply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ipa')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = ipakomen::find($id);
        $comment->delete();
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ipa')->with('success', 'Data Telah Dihapus!');
    }

}
