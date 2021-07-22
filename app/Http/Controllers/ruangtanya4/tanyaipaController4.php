<?php

namespace App\Http\Controllers\ruangtanya4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya4\ipakomen;
use App\Models\tanya4\ipareply;


class tanyaipaController4 extends Controller
{
    public function index(){
        $comment = ipakomen::all();
        $reply = ipareply::all();
        return view('formdiskusi4/ipa',['comment'=>$comment],['reply'=>$reply]);
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
        return redirect('/kelas4/ObrolanKelas/tanyajawab/ipa')->with('success','Pertanyaan kamu telah terkirim');
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
        return redirect('/kelas4/ObrolanKelas/tanyajawab/ipa')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = ipakomen::find($id);
        $comment->delete();
        return redirect('/kelas4/ObrolanKelas/tanyajawab/ipa')->with('success', 'Data Telah Dihapus!');
    }

}
