<?php

namespace App\Http\Controllers\ruangtanya6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya6\ppknkomen;
use App\Models\tanya6\ppknreply;

class tanyapknController6 extends Controller
{
    public function index(){
        $comment = ppknkomen::all();
        $reply = ppknreply::all();
        return view('formdiskusi6/ppkn',['comment'=>$comment],['reply'=>$reply]);
    }
    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        ppknkomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas6/ObrolanKelas/tanyajawab/ppkn')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        ppknreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas6/ObrolanKelas/tanyajawab/ppkn')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = ppknkomen::find($id);
        $comment->delete();
        return redirect('/kelas6/ObrolanKelas/tanyajawab/ppkn')->with('success', 'Data Telah Dihapus!');
    }

}
