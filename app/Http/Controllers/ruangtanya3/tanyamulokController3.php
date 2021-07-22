<?php

namespace App\Http\Controllers\ruangtanya3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya3\mulokkomen;
use App\Models\tanya3\mulokreply;

class tanyamulokController3 extends Controller
{
    public function index(){
        $comment = mulokkomen::all();
        $reply = mulokreply::all();
        return view('formdiskusi3/mulok',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        mulokkomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas3/ObrolanKelas/tanyajawab/muatanlokal')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        mulokreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas3/ObrolanKelas/tanyajawab/muatanlokal')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = mulokkomen::find($id);
        $comment->delete();
        return redirect('/kelas3/ObrolanKelas/tanyajawab/muatanlokal')->with('success', 'Data Telah Dihapus!');
    }

}
