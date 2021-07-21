<?php

namespace App\Http\Controllers\ruangtanya4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya4\indokomen;
use App\Models\tanya4\indoreply;

class tanyaindoController4 extends Controller
{
    public function index(){
        $comment = indokomen::all();
        $reply = indoreply::all();
        return view('formdiskusi4/bindonesia',['comment'=>$comment],['reply'=>$reply]);
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
        return redirect('/kelas4/ObrolanKelas/tanyajawab/bindonesia')->with('success','Pertanyaan kamu telah terkirim');
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
        return redirect('/kelas4/ObrolanKelas/tanyajawab/bindonesia')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = indokomen::find($id);
        $comment->delete();
        return redirect('/kelas4/ObrolanKelas/tanyajawab/bindonesia')->with('success', 'Data Telah Dihapus!');
    }

}
