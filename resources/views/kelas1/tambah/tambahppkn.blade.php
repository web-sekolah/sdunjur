<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <title>BackToSchool</title>
    <style>
        body:not(.mapelcaption){
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Quicksand', sans-serif;
        }
         @font-face {
            font-family: fontgua;
            src: url('../../font/School Book New.ttf');
        }
        @font-face{
            font-family: fontloe;
            src: url('../../font/Chalktastic.otf');
        }
        .navbar-brand h5{
          font-family: fontgua;
        }
        .navbar{
            /* background: linear-gradient(to bottom right, #99ccff 0%, #66ffff 100%); */
            background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            /* border-radius: 8px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
            display: flex;
        }
        .mapelcaption{
           display: fixed;
           color: white;
           font-family: fontloe;
           background-size: cover;
           background-attachment: fixed;
           background-repeat: no-repeat;
           border: 10px solid #AF601A;
           letter-spacing: 1px;
           box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        }
        .btnkelas{
          border: 2px solid white;
          transform: scale(0.8);
        }
        input{
            transform
        }
        label{
            color: grey;
        }
        .formtambah{
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
  </head>
  <body style="background-image: url('{{ asset('gambar/bgberanda.jpg') }}')">
    <nav class="navbar  navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
        <a class="navbar-brand d-flex text-light" href="#"><img src="{{asset('gambar/logo.png')}}" width="90" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-comments"></i> Ruang Bertanya</a>
                  </li>
                  <li class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-graduate @if (auth()->user()->level=="guru") d-none @endif"></i>
                      @if (auth()->user()->level=="guru")
                      <i class="fas fa-chalkboard-teacher"></i>
                      @endif
                      {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink" style="width: max-content;">
                      <li><a class="dropdown-item disabled text-muted">{{ Auth::user()->name }}</a></li>
                      <li>
                        <a class="dropdown-item text-danger" aria-current="page" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i> {{ __('Logout') }}
                        </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                      </form>
                      </li>
                    </ul>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mapelcaption text-center" style="width: 60%; padding: 15px; border-radius: 5px; background-image: url('{{ asset('gambar/chalkboard.jpg') }}');" >
          <h4>Tambah Materi</h4>
          <small>Kelas 1 : PPKN</small>
    <div class="container">
      <a class="btn btn-sm btnkelas bg-transparent text-light" href="/kelas1/ppkn"><- Kembali</a>
      {{-- Modal pencarian --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark" id="exampleModalLabel"><i class="fas fa-search"></i> Cari Materi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div>
                  <input type="text" class="form-control" placeholder="Cari materi disini.." name="keyword"><br>
                  <button class="btn btn-secondary"><i class="fas fa-search"></i> Cari</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
      <div class="container formtambah col-10 p-3 bg-light" style="max-width: 800px;">
        <form action="/kelas1/ppkn/simpan" enctype="multipart/form-data" method="post" class="form-group">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <label for="tanggal" class="mb-1 fw-bold container">Tanggal @error('tanggal')<span class="text-danger" style="font-weight: 10px;"><i class="fas fa-exclamation-circle"></i> {{$message}}</span>@enderror</label>
                    <input id="tanggal" value="{{old('tanggal')}}" name="tanggal" class="form-control form-sm @error('tanggal')is-invalid @enderror" type="date">
                </div>
                <div class="col-md-6">
                    <label for="hari" class="mb-1 fw-bold container">Hari</label>
                    <select id="hari" name="hari" class="form-select" aria-label="Default select example">
                        <option value="Senin" selected>Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="topik" class="mb-1 fw-bold container">Topik @error('Topik')<span class="text-danger" style="font-weight: 10px;"><i class="fas fa-exclamation-circle"></i>  {{$message}}</span>@enderror</label>
                    <input id="topik" value="{{old('Topik')}}" name="Topik" class="form-control form-sm @error('Topik') is-invalid @enderror" type="text" placeholder="Masukkan topik materi disini...">
                </div>
                <div class="col-md-6">
                    <label for="judul" class="mb-1 fw-bold container">Judul @error('Judul')<span class="text-danger" style="font-weight: 10px;"><i class="fas fa-exclamation-circle"></i>  {{$message}}</span>@enderror</label>
                    <input id="judul" value="{{old('Judul')}}" name="Judul" class="form-control form-sm @error('Judul')is-invalid @enderror" type="text" placeholder="Masukkan judul materi disini...">
                </div>
                <div class="col-md-6">
                    <label for="waktumulai" class="mb-1 fw-bold container">Waktu Mulai  @error('waktumulai')<span class="text-danger" style="font-weight: 10px;"><i class="fas fa-exclamation-circle"></i>  {{$message}}</span>@enderror</label>
                    <input id="waktumulai" value="{{old('waktumulai')}}" name="waktumulai" class="form-control form-sm @error('waktumulai')is-invalid @enderror" type="time">
                </div>
                <div class="col-md-6">
                    <label for="waktuselesai" class="mb-1 fw-bold container">Waktu Selesai @error('waktuselesai')<span class="text-danger" style="font-weight: 10px;"><i class="fas fa-exclamation-circle"></i>  {{$message}}</span>@enderror</label>
                    <input id="waktuselesai" value="{{old('waktuselesai')}}" name="waktuselesai" class="form-control form-sm @error('waktuselesai')is-invalid @enderror" type="time">
                </div>
                <div class="col-md-6">
                    <label for="link" class="mb-1 fw-bold container">Link Video</label>
                    <input id="link" value="{{old('vidio')}}" name="vidio" class="form-control form-sm" type="text" placeholder="Masukkan link video disini...">
                </div>
                <div class="col-md-6">
                    <label for="file" class="mb-1 fw-bold container">File</label>
                    <input id="file" name="file" value="{{old('file')}}" class="form-control form-sm" type="file" placeholder="Masukkan  disini...">
                </div>
                <div class="col-md-12">
                    <label for="deskripsi" class="mb-1 fw-bold container">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" cols="15" rows="5">{{ old('username')}} </textarea>
                </div>
                <div class="col-md-6 mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Publish</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-trash"></i> Hapus</button>
                </div>
              </div>
        </form>
      </div>
      <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'deskripsi' );
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>