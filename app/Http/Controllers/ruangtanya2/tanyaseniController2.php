<?php

namespace App\Http\Controllers\ruangtanya2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya2\senbudkomen;
use App\Models\tanya2\senbudreply;

class tanyaseniController2 extends Controller
{
    public function index(){
        $comment = senbudkomen::all();
        $reply = senbudreply::all();
        return view('formdiskusi2/seni',['comment'=>$comment],['reply'=>$reply]);
    }
    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        senbudkomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas2/ObrolanKelas/tanyajawab/senibudaya')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        senbudreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas2/ObrolanKelas/tanyajawab/senibudaya')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = senbudkomen::find($id);
        $comment->delete();
        return redirect('/kelas2/ObrolanKelas/tanyajawab/senibudaya')->with('success', 'Data Telah Dihapus!');
    }

}
