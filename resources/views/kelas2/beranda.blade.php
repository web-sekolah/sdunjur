<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         @font-face {
            font-family: fontgua;
            src: url('font/School Book New.ttf');
        }
        .navbar-brand h5{
          font-family: fontgua;
        }
        .kelas{
            font-family: fontgua;
        }
        .navbar{
            /* background: linear-gradient(to bottom right, #99ccff 0%, #66ffff 100%); */
            background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            border-radius: 8px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
        }
        .card-title{
            font-weight: bold;
        }
        .col-md-3{
            border:1px solid;
        }
        .caption{
            font-size
        }
        a{
            text-decoration: none;
        }
        .card-mapel{
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
            margin-bottom: 10px;
        }
        body{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        .materi{
            transition: 0.3s ease-in-out;
        }
        .materi i{
            transition: 0.5s;
        }
        .materi:hover{
            letter-spacing: 2px;
        }
        .materi:hover i{
            transform: scale(1.7);
        }
    </style>
    <title>BackToSchool</title>
  </head>
  <body style="background-image: url('{{ asset('gambar/bgberanda.jpg') }}')">
    <nav class="navbar container mt-3 navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
          <a class="navbar-brand d-flex text-light" href="#"><img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<h5 class="mt-4"> BackToSchool</h5></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link container text-light" aria-current="page" href="/dashboard"><i class="fas fa-home"></i> Home</a>
                  </li>
                <li class="nav-item">
                    <li><a href="kelas2/ObrolanKelas" class="nav-link text-light" aria-current="page" href="kelas2/ObrolanKelas"><i class="fas fa-comments"></i> Ruang Bertanya</a></li>
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
      <div class="container bg-light p-3" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px; width: max-content; border-radius: 0px 0px 100px 100px;">
        <h2 class="kelas text-center">KELAS 2</h2><br>
      </div>
      <br><br>

    <div class="container ">
    <div class="row container mb-5">
    <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
    <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('gambar/matematika.png') }}" class="img-fluid rounded-start mt-4" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-divide"></i> Matematika</h5>
        <small class="text-muted caption" style="margin-top: -5px;">" Belajar Menghitung yukk :) "
        </small><br><br>
        <a href="{{ route('kelas2.mtk') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
      </div>
    </div>
    </div>
    </div>

    <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
        <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset('gambar/ikonindonesia.jpg') }}" class="img-fluid rounded-start mt-2" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-flag"></i> Bahasa Indonesia</h5>
            <small class="text-muted caption" style="margin-top: -5px;">"Mari belajar menggunakan bahasa Indonesia yang baik dan benar"
            </small><br><br>
            <a href="{{ route('kelas2.bind') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
          </div>
        </div>
        </div>
        </div>

        <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
            <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('gambar/ikonipa.png') }}" class="img-fluid rounded-start mt-4" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-atom"></i> Ilmu Pengetahuan Alam</h5>
                <small class="text-muted caption" style="margin-top: -5px;">"Disini kita akan belajar lebih dalam mengenai Alam"
                </small><br><br>
                <a href="{{ route('kelas2.ipa') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
              </div>
            </div>
            </div>
            </div>

            <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('gambar/ikonips.jpg') }}" class="img-fluid rounded-start mt-2" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-globe-asia"></i> Ilmu Pengetahuan Sosial</h5>
                    <small class="text-muted caption" style="margin-top: -5px;">"Ayo belajar tentang kondisi bumi, Sejarah Indonesia, dan cara bersosialisasi asyik loh"
                    </small><br><br>
                    <a href="{{ route('kelas2.ips') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                  </div>
                </div>
                </div>
                </div>

                <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{ asset('gambar/ikonolahraga.jpg') }}" class="img-fluid rounded-start mt-2" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-futbol"></i> Pendidikan Jasmani</h5>
                        <small class="text-muted caption" style="margin-top: -5px;">"Mari berolahraga dan menjalani kehidupan sehat supaya kita ga kena corona"
                        </small><br><br>
                        <a href="{{ route('kelas2.pjk') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                      </div>
                    </div>
                    </div>
                    </div>

                    <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ asset('gambar/ikonseeni.png') }}" class="img-fluid rounded-start mt-2" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-paint-brush"></i> Seni Budaya</h5>
                            <small class="text-muted caption" style="margin-top: -5px;">"Mari berkreatifitas dan kembangkan bakat senimu"</small><br><br>
                            <a href="{{ route('kelas2.sbd') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                          </div>
                        </div>
                        </div>
                        </div>
                
                        <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                              <img src="{{ asset('gambar/mulok.png') }}" class="img-fluid rounded-start mt-5" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-language"></i> Muatan Lokal</h5>
                                <small class="text-muted caption" style="margin-top: -5px;">"Mari perdalam ilmu muatan lokal"
                                </small><br><br>
                                <a href="{{ route('kelas2.mulok') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                              </div>
                            </div>
                            </div>
                            </div>

                            <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="{{ asset('gambar/images.jpg') }}" class="img-fluid rounded-start mt-2" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-bible"></i> Agama</h5>
                                    <small class="text-muted caption" style="margin-top: -5px;">"Baca kitab suci dan doa tiap hari kalo mau tumbuh"
                                    </small><br><br>
                                    <a href="{{ route('kelas2.agama') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                                  </div>
                                </div>
                                </div>
                              </div>

                              <div class="card container card-mapel col-mb-3 mt-4" style="max-width: 500px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="{{ asset('gambar/pancasila.jpg') }}" class="img-fluid rounded-start mt-2" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    <h5 class="card-title" style="color: #2874A6 ;"><i class="fas fa-bible"></i> PPKN</h5>
                                    <small class="text-muted caption" style="margin-top: -5px;">"Bhineka Tunggal Ika"
                                    </small><br><br>
                                    <a href="{{ route('kelas2.ppkn') }}" style="color: #EC7063;" class="materi fw-bold">Lihat Materi <i class="fas fa-hand-point-right"></i></a>
                                  </div>
                                </div>
                                </div>
                              </div>   
                            </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>