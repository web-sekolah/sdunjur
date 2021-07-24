<?php

namespace App\Http\Controllers\kelas4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\kelas4\pjkkls4;
use App\Models\kelas4\pjkkuismodel;
use App\Models\kelas4\kls4pjksubsmision;
use App\Models\kelas4\kls4pjksubmitan;

class pjkkls4Controller extends Controller
{
    public function index(Request $request){
        if($request->has('keyword')){
            // $submit = kls4pjksubsmision::all();
            $submit = klspjksubsmision::orderBy('id','desc')->get();
            $kuis = pjkkuismodel::orderBy('id','desc')->get();
            $submited = kls4pjksubmitan::all();
            $data = pjkkls4::where('Topik','LIKE','%'.$request->keyword.'%')
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
            $data = pjkkls4::paginate(10);
            $submit = kls4pjksubsmision::orderBy('id','desc')->get();
            $kuis = pjkkuismodel::orderBy('id','desc')->get();
            $submited = kls4pjksubmitan::all();
        }
        return view('kelas4/olahraga',['data'=>$data,'kuis'=>$kuis,'submit'=>$submit,'submited'=>$submited]);
    }

    public function create(){
        return view('kelas4/tambah/tambahpjk');
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
            pjkkls4::create([
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
                $file->move(public_path('filemateri/kelas4/olahraga'),$namafile);
                $deskripsi = $request->deskripsi;

      

                $matka = new pjkkls4();
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
        return redirect('/kelas4/pjk')->with('success','Data berhasil Ditambahkan');
    }

    public function edit($id){
        $matka = pjkkls4::find($id);
        return view('kelas4/tambah/ubahpjk',['matka' => $matka]);
    }

    public function update(Request $request, $id){
        if($request->file('file')==NULL){
            $matka = pjkkls4::find($id);
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
            return redirect('/kelas4/pjk')->with('success','Data Berhasil Diubah');
        
        } else {
            $file = $request->file('file');
            $namafile = time().'.'.$file->getClientOriginalextension();
            $file->move(public_path('filemateri/kelas4/olahraga'),$namafile);

            $id = $request->id;
            $tanggal = $request->tanggal;
            $Topik = $request->Topik;
            $hari = $request->hari;
            $Judul = $request->Judul;
            $waktumulai = $request->waktumulai;
            $waktuselesai = $request->waktuselesai;
            $vidio = $request->vidio;
            $deskripsi = $request->deskripsi;

            $matka = pjkkls4::find($id);
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
        return redirect('/kelas4/pjk')->with('success','Data Berhasil Diubah');
    }

    public function destroy($id){
        $matka = pjkkls4::find($id);
        $matka->delete();
        return redirect('/kelas4/pjk')->with('success', 'Data Telah Dihapus!');
    }

    public function download(Request $request,$file){
        return response()->download(public_path('filemateri/kelas4/olahraga/'.$file));
    }

    public function quiz(){
        
        return view('kelas4/tambah/tambahkuispjk');
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

        pjkkuismodel::create([
            'topik' => $request->topik,
            'tanggal' => $request->tanggal,
            'link' => $request->link,
            'waktumulai' => $request->waktumulai,
            'keterangan' => $request->keterangan,
           ]);

           return redirect('/kelas4/pjk')->with('success','Data berhasil Ditambahkan');
    }

    public function destroykuis($id){
        $matka = pjkkuismodel::find($id);
        $matka->delete();
        return redirect('/kelas4/pjk')->with('success', 'Data Telah Dihapus!');
    }

    public function addsubmission(Request $request){
        $request->validate([
            'judul'=>'required',
            'bataswaktu'=>'required',
        ],[
            'judul.required'=>'Kolom judul harus diisi',
            'bataswaktu.required'=>'Kolom deadline harus diisi',
        ]);

        kls4pjksubsmision::create([
            // dd($request->all())
            'judul' => $request->judul,
            'bataswaktu' => $request->bataswaktu,
        ]);
        return redirect('/kelas4/pjk')->with('success','Submission telah kamu telah terkirim');
    }

    public function addsubmit(Request $request)
    {   
        //  dd($request->all());
        $request->validate([
            'file'=>'required',
        ],[
            'file.required'=>'Anda tidak mengirim file apapun',
        ]);

        // kls4pjksubmitan::create([
        //     'nama' => $request->nama,
        //     'file' => $request->file,
        //     'submit_id' => $request->submit_id,
        // ]);
        $nama = $request->nama;
        $file = $request->file;
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas4/olahraga'),$namafile);
        $submit_id = $request->submit_id;

        $submited = new kls4pjksubmitan();
        $submited->nama = $nama;
        $submited->file = $namafile;
        $submited->submit_id = $submit_id;
        $submited->save();

        
        return redirect('/kelas4/pjk')->with('success','Submission telah kamu telah terkirim');
    }

    public function destroysubmit($id){
        $submited = kls4pjksubmitan::find($id);
        $submited->delete();
        return redirect('/kelas4/pjk')->with('success', 'Data Telah Dihapus!');
    }

    public function downloadsubmit(Request $request,$file){
        return response()->download(public_path('filemateri/kelas4/olahraga/'.$file));
    }

    public function destroyformsubmit($id){
        $submited = kls4pjksubsmision::find($id);
        $submited->delete();
        return redirect('/kelas4/pjk')->with('success','Data Telah Dihapus');
    }

    public function editsubmit($id){
        $submited = kls4pjksubmitan::find($id);
        return view('kelas4/tambah/editsubmisionpjk',['submited' => $submited]);
    }

    public function updatesubmit(Request $request, $id){
        $file = $request->file('file');
        $namafile = time().'.'.$file->getClientOriginalextension();
        $file->move(public_path('filemateri/kelas4/olahraga'),$namafile);

        $id = $request->id;
        $nama = $request->nama;
        $submit_id = $request->submit_id;

        $submited = kls4pjksubmitan::find($id);
        $submited->id = $request->id;
        $submited->nama = $request->nama;
        $submited->submit_id = $request->submit_id;
        $submited->file = $namafile;

        $submited->save();
        return redirect('/kelas4/pjk')->with('success','Tugas anda Berhasil Diubah');
    }
}
