<?php

namespace App\Http\Controllers\ruangtanya5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya5\agamakomen;
use App\Models\tanya5\agamareply;

class tanyaagamaController5 extends Controller
{
    public function index(){
        $comment = agamakomen::all();
        $reply = agamareply::all();
        return view('formdiskusi5/agama',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        agamakomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/agama')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        agamareply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/agama')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = agamakomen::find($id);
        $comment->delete();
        return redirect('/kelas5/ObrolanKelas/tanyajawab/agama')->with('success', 'Data Telah Dihapus!');
    }

}
