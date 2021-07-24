<?php

namespace App\Http\Controllers\kelas3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\kelas3\mulokkls3;
use App\Models\kelas3\mulokkuismodel;
use App\Models\kelas3\kls3muloksubsmision;
use App\Models\kelas3\kls3muloksubmitan;

class mulokkls3Controller extends Controller
{
    public function index(Request $request){
        if($request->has('keyword')){
            // $submit = kls3muloksubsmision::all();
            $submit = kls3muloksubsmision::orderBy('id','desc')->get();
            $kuis = mulokkuismodel::orderBy('id','desc')->get();
            $submited = kls3muloksubmitan::all();
            $data = mulokkls3::where('Topik','LIKE','%'.$request->keyword.'%')
            ->orWhere('tanggal','LIKE','%'.$request->keyword.'%')
            ->orWhere('hari','LIKE','%'.$request->keyword.'%')
            ->orWhere('Judul','LIKE','%'.$request->keyword.'%')
            ->orWhere('waktumulai','LIKE','%'.$request->keyword.'%')
            ->orWhere('waktuselesai','LIKE','%'.$request->keyword.'%')
            ->orWhere('vidio','LIKE','%'.$request->keyword.'%')
            ->orWhere('file','LIKE','%'.$request->keyword.'%')
            ->orWhere('deskripsi','LIKE','%'.$request->keyword.'%');
        }else{
            $data = mulokkls3::all();
            $submit = kls3muloksubsmision::orderBy('id','desc')->get();
            $kuis = mulokkuismodel::orderBy('id','desc')->get();
            $submited = kls3muloksubmitan::all();
        }
        return view('kelas3/mulok',['data'=>$data,'kuis'=>$kuis,'submit'=>$submit,'submited'=>$submited]);
    }

    public function create(){
        return view('kelas3/tambah/tambahmulok');
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
            mulokkls3::create([
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
                $file->move(public_path('filemateri/kelas3/mulok'),$namafile);
                $deskripsi = $request->deskripsi;

      

                $matka = new mulokkls3();
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
        return redirect('/kelas3/mulok')->with('success','Data berhasil Ditambahkan');
    }

    public function edit($id){
        $matka = mulokkls3::find($id);
        return view('kelas3/tambah/ubahmulok',['matka' => $matka]);
    }

    public function update(Request $request, $id){
        if($request->file('file')==NULL){
            $matka = mulokkls3::find($id);
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
            return redirect('/kelas3/mulok')->with('success','Data Berhasil Diubah');
        
        } else {
            $file = $request->file('file');
            $namafile = time().'.'.$file->getClientOriginalextension();
            $file->move(public_path('filemateri/kelas3/mulok'),$namafile);

            $id = $request->id;
            $tanggal = $request->tanggal;
            $Topik = $request->Topik;
            $hari = $request->hari;
            $Judul = $request->Judul;
            $waktumulai = $request->waktumulai;
            $waktuselesai = $request->waktuselesai;
            $vidio = $request->vidio;
            $deskripsi = $request->deskripsi;

            $matka = mulokkls3::find($id);
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
        return redirect('/kelas3/mulok')->with('success','Data Berhasil Diubah');
    }

    public function destroy($id){
        $matka = mulokkls3::find($id);
        $matka->delete();
        return redirect('/kelas3/mulok')->with('success', 'Data Telah Dihapus!');
    }

    public function download(Request $request,$file){
        return response()->download(public_path('filemateri/kelas3/mulok/'.$file));
    }

    public function quiz(){
        
        return view('kelas3/tambah/tambahkuismulok');
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

        mulokkuismodel::create([
            'topik' => $request->topik,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'waktumulai' => $request->waktumulai,
            'keterangan' => $request->keterangan,
           ]);

           return redirect('/kelas3/mulok')->with('success','Data berhasil Ditambahkan');
    }

    public function destroykuis($id){
        $matka = mulokkuismodel::find($id);
        $matka->delete();
        return redirect('/kelas3/mulok')->with('success', 'Data Telah Dihapus!');
    }

    public function addsubmission(Request $request){
        $request->validate([
            'judul'=>'required',
            'bataswaktu'=>'required',
        ],[
            'judul.required'=>'Kolom judul harus diisi',
            'bataswaktu.required'=>'Kolom deadline harus diisi',
        ]);

        kls3muloksubsmision::create([
            // dd($request->all())
            'judul' => $request->judul,
            'bataswaktu' => $request->bataswaktu,
        ]);
        return redirect('/kelas3/mulok')->with('success','Submission telah kamu telah terkirim');
    }

    public function addsubmit(Request $request)
    {   
        //  dd($request->all());
        $request->validate([
            'file'=>'required',
        ],[
            'file.required'=>'Anda tidak mengirim file apapun',
        ]);

        // kls3muloksubmitan::create([
        //     'nama' => $request->nama,
        //     'file' => $request->file,
        //     'submit_id' => $request->submit_id,
        // ]);
        $nama = $request->nama;
        $file = $request->file;
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas3/mulok'),$namafile);
        $submit_id = $request->submit_id;

        $submited = new kls3muloksubmitan();
        $submited->nama = $nama;
        $submited->file = $namafile;
        $submited->submit_id = $submit_id;
        $submited->save();

        
        return redirect('/kelas3/mulok')->with('success','Submission telah kamu telah terkirim');
    }

    public function destroysubmit($id){
        $submited = kls3muloksubmitan::find($id);
        $submited->delete();
        return redirect('/kelas3/mulok')->with('success', 'Data Telah Dihapus!');
    }

    public function downloadsubmit(Request $request,$file){
        return response()->download(public_path('filemateri/kelas3/mulok/'.$file));
    }

    public function destroyformsubmit($id){
        $submited = kls3muloksubsmision::find($id);
        $submited->delete();
        return redirect('/kelas3/mulok')->with('success','Data Telah Dihapus');
    }

    public function editsubmit($id){
        $submited = kls3muloksubmitan::find($id);
        return view('kelas3/tambah/editsubmisionmulok',['submited' => $submited]);
    }

    public function updatesubmit(Request $request, $id){
        $file = $request->file('file');
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas3/mulok'),$namafile);

        $id = $request->id;
        $nama = $request->nama;
        $submit_id = $request->submit_id;

        $submited = kls3muloksubmitan::find($id);
        $submited->id = $request->id;
        $submited->nama = $request->nama;
        $submited->submit_id = $request->submit_id;
        $submited->file = $namafile;

        $submited->save();
        return redirect('/kelas3/mulok')->with('success','Tugas anda Berhasil Diubah');
    }
}
