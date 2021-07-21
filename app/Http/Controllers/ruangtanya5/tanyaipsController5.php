<?php

namespace App\Http\Controllers\ruangtanya5;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tanya5\ipskomen;
use App\Models\tanya5\ipsreply;

class tanyaipsController5 extends Controller
{
    public function index(){
        $comment = ipskomen::all();
        $reply = ipsreply::all();
        return view('formdiskusi5/ips',['comment'=>$comment],['reply'=>$reply]);
    }

    public function store(Request $request){

        $request->validate([
            'comment'=>'required|min:10',
        ],[
            'comment.required'=>'Kolom pertanyaan harus diisi',
            'comment.min'=>'Harus diisi minimal 10 karakter',
        ]);

        ipskomen::create([
            // dd($request->all())
            'name' => $request->name,
            'comment' => $request->comment,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ips')->with('success','Pertanyaan kamu telah terkirim');
    }

    public function storeReply(Request $request)
    {   
        $request->validate([
            'comment'=>'required|min:3',
        ],[
            'comment.required'=>'Kolom Jawaban harus diisi',
            'comment.min'=>'Harus diisi minimal 3 karakter',
        ]);

        ipsreply::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ips')->with('success','Jawaban kamu telah terkirim');
    }

    public function destroy($id){
        $comment = ipskomen::find($id);
        $comment->delete();
        return redirect('/kelas5/ObrolanKelas/tanyajawab/ips')->with('success', 'Data Telah Dihapus!');
    }

}
