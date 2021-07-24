<?php

namespace App\Http\Controllers\kelas6;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\kelas6\agamakls6;
use App\Models\kelas6\agamakuismodel;
use App\Models\kelas6\kls6agamasubsmision;
use App\Models\kelas6\kls6agamasubmitan;

class agamakls6Controller extends Controller
{
    public function index(Request $request){
        if($request->has('keyword')){
            // $submit = kls6agamasubsmision::all();
            $submit = klsagamasubsmision::orderBy('id','desc')->get();
            $kuis = agamakuismodel::orderBy('id','desc')->get();
            $submited = kls6agamasubmitan::all();
            $data = agamakls6::where('Topik','LIKE','%'.$request->keyword.'%')
            ->orWhere('tanggal','LIKE','%'.$request->keyword.'%')
            ->orWhere('hari','LIKE','%'.$request->keyword.'%')
            ->orWhere('Judul','LIKE','%'.$request->keyword.'%')
            ->orWhere('waktumulai','LIKE','%'.$request->keyword.'%')
            ->orWhere('waktuselesai','LIKE','%'.$request->keyword.'%')
            ->orWhere('vidio','LIKE','%'.$request->keyword.'%')
            ->orWhere('file','LIKE','%'.$request->keyword.'%')
            ->orWhere('deskripsi','LIKE','%'.$request->keyword.'%')
            ->paginate(10);
        }else{
            $data = agamakls6::paginate(10);
            $submit = kls6agamasubsmision::orderBy('id','desc')->get();
            $kuis = agamakuismodel::orderBy('id','desc')->get();
            $submited = kls6agamasubmitan::all();
        }
        return view('kelas6/agama',['data'=>$data,'kuis'=>$kuis,'submit'=>$submit,'submited'=>$submited]);
    }

    public function create(){
        return view('kelas6/tambah/tambahagama');
    }

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function add(Request $request){
        
        $request->validate([
            'Topik'=>'required',
            'tanggal'=>'required',
            'hari'=>'required',
            'Judul'=>'required',
            'waktumulai'=>'required',
            'waktuselesai'=>'required',
        ],[
            'Topik.required'=>'Kolom ini harus diisi',
            'tanggal.required'=>'Kolom ini harus diisi',
            'hari.required'=>'Kolom ini harus diisi',
            'Judul.required'=>'Kolom ini harus diisi',
            'waktumulai.required'=>'Kolom ini harus diisi',
            'waktuselesai.required'=>'Kolom ini harus diisi',
        ]);

        if($request->file('file')==NULL){
            agamakls6::create([
                'tanggal' => $request->tanggal,
                'hari' => $request->hari,
                'Judul' => $request->Judul,
                'Topik' => $request->Topik,
                'waktumulai' => $request->waktumulai,
                'waktuselesai' => $request->waktuselesai,
                'vidio' => $request->vidio,
                'file' => $request->file,
                'deskripsi' => $request->deskripsi

            ]);
        }else{
                $tanggal = $request->tanggal;
                $hari = $request->hari;
                $Judul = $request->Judul;
                $Topik = $request->Topik;
                $waktumulai = $request->waktumulai;
                $waktuselesai = $request->waktuselesai;
                $vidio = $request->vidio;
                $file = $request->file;
                $namafile = time().'.'.$file->getClientOriginalextension();
                $file->move(public_path('filemateri/kelas6/agama'),$namafile);
                $deskripsi = $request->deskripsi;

      

                $matka = new agamakls6();
                $matka->tanggal = $tanggal;
                $matka->hari = $hari;
                $matka->Judul = $Judul;
                $matka->Topik = $Topik;
                $matka->waktumulai = $waktumulai;
                $matka->waktuselesai = $waktuselesai;
                $matka->vidio = $vidio;
                $matka->file = $namafile;
                $matka->deskripsi = $deskripsi;
                $matka->save();

        }
        return redirect('/kelas6/agama')->with('success','Data berhasil Ditambahkan');
    }

    public function edit($id){
        $matka = agamakls6::find($id);
        return view('kelas6/tambah/ubahagama',['matka' => $matka]);
    }

    public function update(Request $request, $id){
        if($request->file('file')==NULL){
            $matka = agamakls6::find($id);
            $matka->id = $request->id;
            $matka->tanggal = $request->tanggal;
            $matka->Topik = $request->Topik;
            $matka->hari = $request->hari;
            $matka->Judul = $request->Judul;
            $matka->waktumulai = $request->waktumulai;
            $matka->waktuselesai = $request->waktuselesai;
            $matka->vidio = $request->vidio;
            $matka->deskripsi = $request->deskripsi;
            $file = $request->file;

            $matka->save();
            return redirect('/kelas6/agama')->with('success','Data Berhasil Diubah');
        
        } else {
            $file = $request->file('file');
            $namafile = time().'.'.$file->getClientOriginalextension();
            $file->move(public_path('filemateri/kelas6/agama'),$namafile);

            $id = $request->id;
            $tanggal = $request->tanggal;
            $Topik = $request->Topik;
            $hari = $request->hari;
            $Judul = $request->Judul;
            $waktumulai = $request->waktumulai;
            $waktuselesai = $request->waktuselesai;
            $vidio = $request->vidio;
            $deskripsi = $request->deskripsi;

            $matka = agamakls6::find($id);
            $matka->id = $request->id;
            $matka->tanggal = $request->tanggal;
            $matka->Topik = $request->Topik;
            $matka->hari = $request->hari;
            $matka->Judul = $request->Judul;
            $matka->waktumulai = $request->waktumulai;
            $matka->waktuselesai = $request->waktuselesai;
            $matka->vidio = $request->vidio;
            $matka->deskripsi = $request->deskripsi;
            $matka->file = $namafile;

        }
        $matka->save();
        return redirect('/kelas6/agama')->with('success','Data Berhasil Diubah');
    }

    public function destroy($id){
        $matka = agamakls6::find($id);
        $matka->delete();
        return redirect('/kelas6/agama')->with('success', 'Data Telah Dihapus!');
    }

    public function download(Request $request,$file){
        return response()->download(public_path('filemateri/kelas6/agama/'.$file));
    }

    public function quiz(){
        
        return view('kelas6/tambah/tambahkuisagama');
    }

    public function addquiz(Request $request){
        $request->validate([
            'topik'=>'required',
            'tanggal'=>'required',
            'link'=>'required',
            'waktumulai'=>'required',
        ],[
            'topik.required'=>'Kolom ini harus diisi',
            'link.required'=>'Kolom ini harus diisi',
            'tanggal.required'=>'Kolom ini harus diisi',
            'waktumulai.required'=>'Kolom ini harus diisi',
            
        ]);

        agamakuismodel::create([
            'topik' => $request->topik,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'waktumulai' => $request->waktumulai,
            'keterangan' => $request->keterangan,
           ]);

           return redirect('/kelas6/agama')->with('success','Data berhasil Ditambahkan');
    }

    public function destroykuis($id){
        $matka = agamakuismodel::find($id);
        $matka->delete();
        return redirect('/kelas6/agama')->with('success', 'Data Telah Dihapus!');
    }

    public function addsubmission(Request $request){
        $request->validate([
            'judul'=>'required',
            'bataswaktu'=>'required',
        ],[
            'judul.required'=>'Kolom judul harus diisi',
            'bataswaktu.required'=>'Kolom deadline harus diisi',
        ]);

        kls6agamasubsmision::create([
            // dd($request->all())
            'judul' => $request->judul,
            'bataswaktu' => $request->bataswaktu,
        ]);
        return redirect('/kelas6/agama')->with('success','Submission telah kamu telah terkirim');
    }

    public function addsubmit(Request $request)
    {   
        //  dd($request->all());
        $request->validate([
            'file'=>'required',
        ],[
            'file.required'=>'Anda tidak mengirim file apapun',
        ]);

        // kls6agamasubmitan::create([
        //     'nama' => $request->nama,
        //     'file' => $request->file,
        //     'submit_id' => $request->submit_id,
        // ]);
        $nama = $request->nama;
        $file = $request->file;
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas6/agama'),$namafile);
        $submit_id = $request->submit_id;

        $submited = new kls6agamasubmitan();
        $submited->nama = $nama;
        $submited->file = $namafile;
        $submited->submit_id = $submit_id;
        $submited->save();

        
        return redirect('/kelas6/agama')->with('success','Submission telah kamu telah terkirim');
    }

    public function destroysubmit($id){
        $submited = kls6agamasubmitan::find($id);
        $submited->delete();
        return redirect('/kelas6/agama')->with('success', 'Data Telah Dihapus!');
    }

    public function downloadsubmit(Request $request,$file){
        return response()->download(public_path('filemateri/kelas6/agama/'.$file));
    }

    public function destroyformsubmit($id){
        $submited = kls6agamasubsmision::find($id);
        $submited->delete();
        return redirect('/kelas6/agama')->with('success','Data Telah Dihapus');
    }

    public function editsubmit($id){
        $submited = kls6agamasubmitan::find($id);
        return view('kelas6/tambah/editsubmisionagama',['submited' => $submited]);
    }

    public function updatesubmit(Request $request, $id){
        $file = $request->file('file');
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas6/agama'),$namafile);

        $id = $request->id;
        $nama = $request->nama;
        $submit_id = $request->submit_id;

        $submited = kls6agamasubmitan::find($id);
        $submited->id = $request->id;
        $submited->nama = $request->nama;
        $submited->submit_id = $request->submit_id;
        $submited->file = $namafile;

        $submited->save();
        return redirect('/kelas6/agama')->with('success','Tugas anda Berhasil Diubah');
    }
}
