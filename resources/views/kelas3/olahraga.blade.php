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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            src: url('../font/School Book New.ttf');
        }
        @font-face{
            font-family: fontloe;
            src: url('../font/Chalktastic.otf');
        }
        .navbar-brand h5{
          font-family: fontgua;
        }
        #policy{
          font-family: fontloe;
        }
        .navbar{
            /* background: linear-gradient(to bottom right, #99ccff 0%, #66ffff 100%); */
            background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            /* border-radius: 8px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
            display: flex;
        }
        .modalbl:not(.modalhapus){
          background: linear-gradient(to bottom, #66ffff 0%, #66ccff 100%);
        }
        .modalhapus .warning i{
          transform: scale(1.9);
        }
        .modalhapus .warning{
          margin-top: 10px;
          margin-bottom: 20px;
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
        .mainlist{
            border: 1px solid;
            display: block;
            top: -10%;
        }
        .activitycard{
            box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
        }
        .btnkelas{
          border: 2px solid white;
          transform: scale(0.8);
        }
        .card-quiz{
          box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
          margin-bottom: 10px;
        }
        .quiz-time{
          color: #E74C3C;
          text-align: left;
        }
        .refresh{
          transition: 0.5s;
        }
        .refresh:hover{
          transform: rotate(180deg);
        }
        a{
          cursor:pointer;
        }
    </style>
  </head>
  <body style="background-image: url('{{ asset('gambar/bgberanda.jpg') }}')">
    <nav class="navbar  navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
          <a class="navbar-brand d-flex text-light" href="#"><img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<h5 class="mt-4"> BackToSchool</h5></a>
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
      <div class="container mapelcaption text-center" style="width: 80%; padding: 30px; border-radius: 5px; background-image: url('{{ asset('gambar/chalkboard.jpg') }}');" >
          <h2>Kelas 3</h2>
          <h1>Olahraga</h1>
    <style>
        #clock {
            text-align: center;
        }
    </style>
    <div id="clock" class="mb-1"><h5>8:10:45</h5></div>
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>
    <div class="container">
      <a class="btn btn-sm btnkelas bg-transparent text-light" href="{{ route('kelas3') }}"><- Kembali</a>
      @if (auth()->user()->level=="guru")
      <a class="btn btn-sm btnkelas bg-transparent text-light" href="/kelas3/pjk/tambah">+ Tambah Materi</a>
      @endif
      <button class="btn btn-sm btnkelas bg-transparent text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">? Cari Materi</button>
      {{-- Modal pencarian --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content modalbl">
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
    <div class="mainlist mt-4 mb-4">  
    <div class="col-10 container mt-4">
        <div class="list-group list-group-horizontal-sm " id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active fw-bold text-center" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fas fa-book"></i> Materi</a>
            <a class="list-group-item list-group-item-action fw-bold text-center" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fas fa-pencil-alt"></i> Exercise</a>
            <a class="list-group-item list-group-item-action fw-bold text-center" id="list-profile-list" data-bs-toggle="list" href="#submision" role="tab" aria-controls="list-profile"><i class="fas fa-calendar-check"></i> Submision</a>
        </div>
     </div>
      <div class="container mt-2">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active container" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="row">

          {{-- Bulan     --}}
              <div class="col-12 container mb-2">
                <div class="list-group list-group-horizontal-md" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#januari" role="tab" aria-controls="list-home">Januari</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#februari" role="tab" aria-controls="list-profile">Februari</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#maret" role="tab" aria-controls="list-messages">Maret</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#april" role="tab" aria-controls="list-settings">April</a>
                  <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#mei" role="tab" aria-controls="list-home">Mei</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#juni" role="tab" aria-controls="list-profile">Juni</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#juli" role="tab" aria-controls="list-messages">July</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#agustus" role="tab" aria-controls="list-settings">Agustus</a>
                  <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#september" role="tab" aria-controls="list-home">September</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#oktober" role="tab" aria-controls="list-profile">Oktober</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#november" role="tab" aria-controls="list-messages">November</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#desember" role="tab" aria-controls="list-settings">Desember</a>
                </div>
              </div>
              <div class="container">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="januari" role="tabpanel" aria-labelledby="list-profile-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='January')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                  {{--end0fjanuary--}}
                  <div class="tab-pane fade" id="februari" role="tabpanel" aria-labelledby="list-messages-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='February')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0ffebruaty--}}
                  <div class="tab-pane fade" id="maret" role="tabpanel" aria-labelledby="list-settings-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='March')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fmaret--}}
                  <div class="tab-pane fade" id="april" role="tabpanel" aria-labelledby="list-home-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='April')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fapril--}}
                  <div class="tab-pane fade" id="mei" role="tabpanel" aria-labelledby="list-profile-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='May')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fmei--}}
                  <div class="tab-pane fade" id="juni" role="tabpanel" aria-labelledby="list-messages-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='June')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fjune--}}
                  <div class="tab-pane fade" id="juli" role="tabpanel" aria-labelledby="list-settings-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='July')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fjuly--}}
                  <div class="tab-pane fade" id="agustus" role="tabpanel" aria-labelledby="list-home-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='August')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0faugust--}}
                  <div class="tab-pane fade" id="september" role="tabpanel" aria-labelledby="list-profile-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='September')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fseptember--}}
                  <div class="tab-pane fade" id="oktober" role="tabpanel" aria-labelledby="list-messages-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='October')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0foctober--}}
                  <div class="tab-pane fade" id="november" role="tabpanel" aria-labelledby="list-settings-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='November')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                   {{--end0fnovember--}}
                  <div class="tab-pane fade" id="desember" role="tabpanel" aria-labelledby="list-home-list">
                    @foreach ($data as $item)
                    @if(\Carbon\Carbon::parse($item->tanggal)->format('F')=='December')
                      <div class="card activitycard">
                          <div class="card-header d-flex">
                              <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                              <div class="ms-auto" style="float: right;">
                                @if (auth()->user()->level=="guru")
                                <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                                @endif
                                  {{-- Konfirmasi hapus materi modals --}}
                                  <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content modalhapus" style="background-color: white;">
                                          <div class="modal-body">
                                            <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                            <h2 class="text-center">Apakah kamu yakin?</h2>
                                            <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                            <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                              </div>
                          </div>
                          <table class="">
                              <tr>
                                  <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                                  <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                                  <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                              </tr>
                              <tr>
                                  <td><p class="container">Judul</p></td>
                                  <td><p class="">:</p></td>
                                  <td><p class="container">{{ $item->Judul }}</p></td>
                              </tr>
                              <tr>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                                  <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                                  <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                              </tr>
                          </table>
                          <div class="card-body">
                            {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                            @if ($item->deskripsi!=NULL)
                              <div class="accordion mb-2" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                                      <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                                    </button>
                                  </h2>
                                  <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                                      <p>{!!$item->deskripsi!!}</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endif
                            @if ($item->vidio != NULL)
                              <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                            @endif
                            @if ($item->file != NULL)
                              <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                            @endif

                          </div>
                        </div>
                        {{-- Modal Video --}}
                      <!-- Modal -->
                      <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content modalbl">
                            <div class="modal-header">
                              <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                            <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="container col-12">
                              <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                    <br>
                    @endif
                  @endforeach
                  </div>
                  {{--end0fdecember--}}
                </div>
              </div>
            </div>
          {{-- Bulan     --}}
            {{--open comenter
            @foreach ($data as $item)
            <div class="card activitycard">
                <div class="card-header d-flex">
                    <h5>{{ $item->hari }}, {{ $item->tanggal }}</h5>
                    <div class="ms-auto" style="float: right;">
                      @if (auth()->user()->level=="guru")
                      <a href="/kelas3/pjk/ubah/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                      @endif
                        {{-- Konfirmasi hapus materi modals --}}
                        {{-- Modal --}}{{---
                          <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content modalhapus" style="background-color: white;">
                                <div class="modal-body">
                                  <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                  <h2 class="text-center">Apakah kamu yakin?</h2>
                                  <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                  <a href="/kelas3/pjk/hapus/{{ $item->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                                </div>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
                <table class="">
                    <tr>
                        <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                        <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                        <td><h5 class="card-title container" style="color: #1A5276;">{{ $item->Topik }}</h5></td>
                    </tr>
                    <tr>
                        <td><p class="container">Judul</p></td>
                        <td><p class="">:</p></td>
                        <td><p class="container">{{ $item->Judul }}</p></td>
                    </tr>
                    <tr>
                        <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                        <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                        <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">{{ $item->waktumulai }} sampai {{ $item->waktuselesai }}</p></td>
                    </tr>
                </table>
                <div class="card-body">
                  {{-- <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : {!!$item->deskripsi!!}</p> --}}
                 {{--open komenter
                   @if ($item->deskripsi!=NULL)
                    <div class="accordion mb-2" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#des{{$item->id}}" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-info-circle"></i> &nbsp;Deskripsi
                          </button>
                        </h2>
                        <div id="des{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <strong>Apa yang akan dilakukan siswa pada materi ini ?</strong><br>
                            <p>{!!$item->deskripsi!!}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                  @if ($item->vidio != NULL)
                    <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#video{{ $item->id }}"><i class="fab fa-youtube"></i> Play Video</button>
                  @endif
                  @if ($item->file != NULL)
                    <a href="/kelas3/pjk/download/{{$item->file}}" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                  @endif

                </div>
              </div>
              {{-- Modal Video --}}
            <!-- Modal -->
            {{--Open comentar
            <div class="modal fade" id="video{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content modalbl">
                  <div class="modal-header">
                    <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                  <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="container col-12">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$item->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
              </div>
              </div>
          </div>
          <br>
          @endforeach --}}
          </div>
          
          <div class="tab-pane fade bg-light" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                  <li class="nav-item ">
                    <div class="d-flex">
                      @if (auth()->user()->level=="guru")
                      <a class="btn btn-primary fw-bold ms-auto" href="/kelas3/pjk/kuis/tambah"><i class="fas fa-plus-square"></i> Tambah Quis</a>&nbsp;
                      @endif
                      <a href="/kelas3/pjk" class="btn btn-outline-secondary"><i class="fas fa-sync-alt refresh"></i></a>&nbsp;
                      <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#policy"><i class="fas fa-tasks"></i></button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="background-image: url('{{asset('gambar/chalkboard.jpg')}}'); border: 12px solid #784212;">
                          <div class="modal-body">
                            <ul class="" style="color: #F9E79F;">
                              <h4 class="text-center">Keterangan :</h4>
                              <li>Diharapkan untuk memasuki ruang kuis 10 menit sebelum kuis dimulai</li><br>
                              <li>Tombol untuk memasuki kuis tidak akan tersedia lagi jika waktu sudah tepat dengan waktu yang ditentukan</li><br>
                              <li>jika anda menekan tombol <span class="text-warning">"Masuk Kuis Sekarang"</span> anda akan dialihkan ke web Kahoot dan tunggu instruksi selanjutnya dari guru</li>
                            </ul>
                            <center><br>
                              <button type="button" class="btn btn-sm border border-2 text-light" data-bs-dismiss="modal">Oke, Saya mengerti</button>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>

                  </li>
                </ul>
              </div>
              <style>
                .btn-quiz{
                  transition: 0.3s;
                }
                .btn-quiz:hover{
                  transform: scale(1.08);
                }
              </style>
              <div class="card-body container">
                {{-- area kuis --}}
                <div class="contianer row">

                  @forelse ($kuis as $quiz)
                  @if($quiz->tanggal <= \Carbon\Carbon::now("Asia/Jakarta")->toDateString())
                  <div class="col-md-4 container card-quiz" style="width: 18rem;">
                    <div class="card-body">
                        <small class="text-muted">
                          @php
                             $result =  \Carbon\Carbon::parse($quiz->waktumulai)->diffForHumans(\Carbon\Carbon::now("Asia/Jakarta")->toTimeString());
                             Str::replace('setelahnya', 'lagi', $result);
                          @endphp
                          @if ($quiz->tanggal < \Carbon\Carbon::now("Asia/Jakarta")->toDateString())
                              Selesai
                            @else
                              {{$result}}
                          @endif
                        </small>


                        @if ($quiz->tanggal >= \Carbon\Carbon::now("Asia/Jakarta")->toDateString())
                          @if ($quiz->waktumulai  > \Carbon\Carbon::now("Asia/Jakarta")->toTimeString())
                              {{$quiz->waktumulai > \Carbon\Carbon::now("Asia/Jakarta")->hour }}
                            <small class="bg-success rounded-pill text-light" style="width: max-content; padding-right: 3px; padding-left: 3px; font-size: 10px;"><i class="fas fa-bolt"></i>Baru</small> 
                            @else
                            <small class="bg-danger rounded-pill text-light" style="width: max-content; padding-right: 3px; padding-left: 3px; font-size: 10px;"><i class="fas fa-check-circle"></i>Sudah Dimulai</small>
                          @endif
                        @else
                        <small class="bg-danger rounded-pill text-light" style="width: max-content; padding-right: 3px; padding-left: 3px; font-size: 10px;"><i class="fas fa-check-circle"></i>Selesai</small>
                        @endif

                      <h5 class="quiz-time fw-bold text-dark">{{$quiz->topik}}</h5>
                      <div class="d-flex">
                        <h6 class="quiz-time"><i class="fas fa-stopwatch"></i> {{$quiz->waktumulai}} WIB</h6>&nbsp;
                        @if ($quiz->keterangan != NULL)
                        <a class="link-info fw-bold" style="margin-top: -3px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#keterangan{{$quiz->id}}"><i class="fas fa-info-circle"></i> info</a>
                        @endif
                         <!-- Modal -->
                          <div class="modal fade" id="keterangan{{$quiz->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="text-center">Keterangan :</h4>
                                    {!!$quiz->keterangan!!}
                                  <center><br>
                                    <button type="button" class="btn btn-primary btn-sm text-light" data-bs-dismiss="modal">Oke, Saya mengerti</button>
                                  </center>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                      {{-- <div class="d-flex"> --}}
                      <a href="{{$quiz->link}}" class="btn btn btn-quiz text-light fw-bold mt-1 @if($quiz->tanggal < \Carbon\Carbon::now("Asia/Jakarta")->toDateString()) disabled @endif" style="background-color: #F39C12; align-item: left;">
                         Masuk Quiz Sekarang 
                      <i class="fas fa-sign-in-alt">
                      </i></a><br>
                      <div class="d-flex mt-1 p-1">
                        <small class="text-muted" style="font-size: 12px"><i class="fas fa-calendar-alt"></i> {{$quiz->tanggal}}</small>&nbsp;&nbsp;
                        @if (auth()->user()->level=="guru")
                        <a href="" class="text-muted" style="font-size: 12px; cursor:pointer;"  data-bs-toggle="modal" data-bs-target="#deletekuis{{$quiz->id}}"><i class="far fa-trash-alt"></i> Hapus</a>
                      {{-- Konfirmasi hapus materi modals --}}
                      <!-- Modal -->
                        <div class="modal fade" id="deletekuis{{$quiz->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content modalhapus" style="background-color: white;">
                              <div class="modal-body">
                                <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                <h2 class="text-center">Apakah kamu yakin?</h2>
                                <p class="text-center text-muted container">Materi yang dihapus tidak dapat dipulihkan</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                <a href="/kelas3/pjk/kuis/hapus/{{ $quiz->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Materi</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                      </div>
                      {{-- </div> --}}
                    </div>
                  </div>
                    @else
                    <div class="card card-quiz text-center container  mb-2" style="width: 18rem;">
                      <div class="card-body">
                        <center><small class="bg-secondary rounded-pill text-light" style="width: max-content; padding-right: 3px; padding-left: 3px; font-size: 10px;"><i class="fas fa-bolt"></i>Segera Hadir</small> </center>
                        <h5 class="card-title">{{$quiz->topik}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="far fa-calendar-alt"></i> {{$quiz->tanggal}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-stopwatch"></i> {{$quiz->waktumulai}}</h6>
                        <h5 class="card-text text-muted"><i class="far fa-smile-beam"></i> Quiz Coming Soon</h5>
                      </div>
                    </div>
                    @endif  
                    @empty
                    <h1 class="container text-muted">Belum ada Kuis</h1>          
                  @endforelse
                     

                </div>
              </div>
            </div>
          </div>
          {{-- submision --}}
          <div class="tab-pane fade bg-light" id="submision" role="tabpanel" aria-labelledby="list-profile-list">
              <div class="card">
                <h5 class="card-header">
                  @if (auth()->user()->level=="guru")
                  <button id="tambahsubmitan" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Submitan</button>
                  @endif
                  <a href="/kelas3/pjk" class="btn btn-outline-secondary"><i class="fas fa-sync-alt refresh"></i></a>&nbsp;
                </h5>
                <div class="card-body">
                {{--alert error--}}
                <div class="container">
                  {{-- @error('judul')
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror
                  @error('bataswaktu')
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror
                  @error('file')
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>ERROR!</strong> {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @enderror --}}
                </div>
                  {{-- form tambah submission --}}
                  <div class="card mb-4 formtambah">
                    <div class="card-header text-center">
                      Tambah Submission
                    </div>
                    <div class="card-body container">
                      {{-- alert error --}}
                      <center>
                      <form class="" action="/kelas3/pjk/addsubmission" enctype="multipart/form-data" method="post" >
                        {{ method_field('POST') }}
                        @csrf
                        <table cellpadding="2">
                          <tr>
                            <td>Judul</td>
                            <td>:</td>
                            <td><input name="judul" class="form-control" type="text" placeholder="Masukkan judul submitan disini..."></td>
                          </tr>
                          <tr>
                            <td>Deadline</td>
                            <td>:</td>
                            <td><input name="bataswaktu" class="form-control" type="datetime-local"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-upload"></i> Publish</button></td>
                          </tr>
                        </table>
                    </form>
                  </center>
                    </div>
                  </div>
                {{-- list submitan --}}
                @foreach ($submit as $sub)
                <div class="card text-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                  <div class="card-body">
                    <h5 class="card-title">{{$sub->judul}} <a data-bs-toggle="modal" data-bs-target="#deletekuis{{$sub->id}}" style="font-size: 15px;" class="text-muted"><i class="far fa-trash-alt"></i></a></h5>
                    {{-- Konfirmasi hapus materi modals --}}
                     <!-- Modal -->
                     <div class="modal fade" id="deletekuis{{$sub->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content modalhapus" style="background-color: white;">
                            <div class="modal-body">
                              <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                              <h2 class="text-center">Apakah kamu yakin?</h2>
                              <p class="text-center text-muted container">Submission yang dihapus tidak dapat dipulihkan</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                              <a href="/kelas3/mulok/submisionform/delete/{{$sub->id}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Form Submit</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{--end hapus--}}
                    <div class="col-8 container">
                    <table class="table table-striped table-hover container">
                      <tr>
                        <th>Batas Pengumpulan</th>
                        <td>:</td>
                        <td>{{$sub->bataswaktu}}</td>
                      </tr>
                      <tr>
                        <th>Waktu Pengingat</th>
                        <td>:</td>
                        <td>
                          @php
                          $time = \Carbon\Carbon::now()->diffForHumans($sub->bataswaktu);
                          str_replace('after','more',$sub->bataswaktu);
                          @endphp
                          {{$time}}
                        </td>
                      </tr>
                    </table>
                  </div>
                    {{-- form-submitan = /kelas3/pjk/addsubmit --}}
                    <div class="col-8 container">
                    <form class="container mb-2" action="/kelas3/pjk/addsubmit" enctype="multipart/form-data" method="post" class="dropzone dz-clickable" >
                      {{ method_field('POST') }}
                      @csrf
                      <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
                      <input type="hidden" name="submit_id" value="{{$sub->id}}">
                      <input id="file" name="file" class="form-control form-sm dropzone" type="file">
                      <div class="dz-default dz-message">
                      <span class="text-muted fw-bold"><i class="fas fa-cloud-upload-alt"></i> Seret atau jatuhkan file disini</span>
                      </div>
                      <br>
                        <button type="submit" class="btn btn-outline-secondary kumpul-tugas{{$sub->id}}"><i class="fas fa-upload"></i> Kumpulkan Tugas</button>
                        @if (auth()->user()->level=="guru")
                        <a class="btn btn-outline-secondary" data-bs-toggle="offcanvas" href="#daftarsubmit{{$sub->id}}" role="button" aria-controls="offcanvasExample"><i class="fas fa-list-ul"></i> Daftar Submision</a>
                        @endif
                    </form>
                    </div>
               
                    
                    {{-- daftar submision --}}
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="daftarsubmit{{$sub->id}}" aria-labelledby="offcanvasExampleLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Daftar Submision</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <table class="table table-striped table-hover">
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>File Tugas</th>
                            <th>Status</th>
                          </tr>
                          @php $i = 1 @endphp
                          @foreach ($submited as $tugas)
                          @if ($sub->id == $tugas->submit_id) 
                          <tr>
                            <td>{{ $i }}</</td>
                            <td>{{$tugas->nama}}</td>
                            <td>
                              <a href="/kelas3/pjk/submit/download/{{$tugas->file}}" class="link-secondary"><i class="fas fa-file-download"> {{$tugas->file}}</i></a>
                            </td>
                            @if ($tugas->created_at->isBefore($sub->bataswaktu))
                                <td class="table-success">Tepat Waktu</td>
                            @else
                                <td class="table-danger">Terlambat</td>
                            @endif
                          </tr>
                          @php
                          $i++ 
                       @endphp
                          @endif
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                  @foreach ($submited as $tugas)
                  @if (Auth::user()->name == $tugas->nama &&  $sub->id == $tugas->submit_id)
                  <a class="detail-submit{{$sub->id}}" style="cursor: pointer"><i class="fas fa-info-circle"></i> Detail Submitan ({{$tugas->nama}})</a><br>
                  <div class="col-8 container detail-submitan{{$sub->id}}">
                  <table class="table table-striped table-hover">
                    <tr>
                      <td>File</td>
                      <td>:</td>
                      <td><a href="/kelas3/pjk/submit/download/{{$tugas->file}}" class="link-secondary"><i class="fas fa-file-download"> {{$tugas->file}}</i></a></td>
                    </tr>
                    <tr>
                      <td>Waktu Pengumpulan</td>
                      <td>:</td>
                      <td>{{$tugas->created_at}}</td>
                    </tr>
                    @if ($tugas->created_at->isBefore($sub->bataswaktu))
                    <tr class="table-success">
                      <td>Status</td>
                      <td>:</td>
                      <td>Tepat waktu</td>
                    </tr>
                    @else
                    <tr class="table-danger">
                      <td>Status</td>
                      <td>:</td>
                      <td>Telat</td>
                    </tr>
                    @endif
                    <tr>
                      <td>
                        <a href="/kelas3/pjk/submit/ubah/{{$tugas->id}}" class="link-secondary"><i class="fas fa-edit"></i> Edit</a>&nbsp;
                      </td>
                      <td></td>
                      <td>
                        <a class="text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$tugas->id}}"><i class="far fa-trash-alt"></i> Hapus</a>
                        {{-- Konfirmasi hapus materi modals --}}
                        <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{$tugas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content modalhapus" style="background-color: white;">
                                <div class="modal-body">
                                  <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                  <h2 class="text-center">Apakah kamu yakin?</h2>
                                  <p class="text-center text-muted container">Tugas yang dihapus tidak dapat dipulihkan</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                  <a href="/kelas3/pjk/destroysubmit/{{$tugas->id}}" id="#deletekuis{{$sub->id}}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Tugas</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        {{--end hapus--}}
                      </td>
                    </tr>
                  </table>
                  </div> 
                  @endif
                  @endforeach
                  <div class="card-footer text-muted mt-1">
                    {{$sub->created_at->diffForHUmans()}}
                  </div>
                </div>  
                @endforeach 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @foreach ($submit as $sub)
    <script>
      $(document).ready(function () {
        $('.detail-submitan{{$sub->id}}').hide();
        $('.detail-submit{{$sub->id}}').click(function () {
          $('.detail-submitan{{$sub->id}}').slideToggle();
        });
      });
      
    </script>
    @endforeach

@foreach ($submit as $sub)
@foreach ($submited as $tugas)
@if ($sub->id == $tugas->submit_id && Auth::user()->name == $tugas->nama)
@if ($tugas->file != NULL)
<script>
  $(document).ready(function () {
    $('.kumpul-tugas{{$sub->id}}').hide();
  });
</script>
@endif
@endif
@endforeach
@endforeach


<script>
  $(document).ready(function () {
    $('.formtambah').hide();
    $('#tambahsubmitan').click(function () {
      $('.formtambah').slideToggle();
    });
  });
  
</script>

@foreach ($submit as $sub)
<script>
  $(document).ready(function () {
    $('#deletekuis{{$sub->id}}').click(function () {
      $('.kumpul-tugas{{$sub->id}}').hide();
    });
  });
  
</script> 
@endforeach

<script>
  Dropzone.options.fileuploaded = {
    maxFileSize: 1
  }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@error('judul')
<script src="{{asset('../js/judul.js')}}"></script>
 @enderror
 @error('bataswaktu')
 <script src="{{asset('../js/deadline.js')}}"></script>
 @enderror
 @error('file')
 <script src="{{asset('../js/file.js')}}"></script>
 @enderror


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @include('sweetalert::alert')

  </body>
</html>