<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
         body{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
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
        .navbar{
            /* background: linear-gradient(to bottom right, #99ccff 0%, #66ffff 100%); */
            background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            /* border-radius: 8px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
            display: flex;
        }
        .modal-content{
          background: linear-gradient(to bottom, #66ffff 0%, #66ccff 100%);
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
                    <a href="/index" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
                  </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-comments"></i> Obrolan Kelas</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-graduate"></i> Masuk sebagai siswa
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="#"><i class="fas fa-chalkboard-teacher"></i> Masuk sebagai guru</a></li>
                      {{-- <li><a class="dropdown-item" href="#">Masuk sebagai guru</a></li> --}}
                    </ul>
                  </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-power-off"></i> Logout</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mapelcaption text-center" style="width: 80%; padding: 30px; border-radius: 5px; background-image: url('{{ asset('gambar/chalkboard.jpg') }}');" >
          <h2>Kelas 1</h2>
          <h1>Matematika</h1>
          <!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content=
        "width=device-width, 
        initial-scale=1.0" />
  
    <title>Digital Clock</title>
  
    <style>
        #clock {
            text-align: center;
        }
    </style>
</head>
  
<body>
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
      <a class="btn btn-sm btnkelas bg-transparent text-light" href="{{ route('kelas1') }}"><- Kembali</a>
      <a class="btn btn-sm btnkelas bg-transparent text-light" href="">+ Tambah Materi</a>
    </div>
      </div>
    <div class="mainlist">  
    <div class="col-10 container">
        <div class="list-group list-group-horizontal-sm " id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active fw-bold text-center" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fas fa-book"></i> Materi</a>
            <a class="list-group-item list-group-item-action fw-bold text-center" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fas fa-pencil-alt"></i> Exercise</a>
        </div>
     </div>
      <div class="container mt-2">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active container" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="card activitycard">
                <div class="card-header d-flex">
                    <h5>Senin, 12 oktober 2021</h5>
                    <div class="ms-auto" style="float: right;">
                        <a href="" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                    </div>
                </div>
                <table class="">
                    <tr>
                        <td><h5 class="card-title container" style="color: #1A5276;">Topik&nbsp;</h5></td>
                        <td><h5 class="card-title" style="color: #1A5276;">:</h5></td>
                        <td><h5 class="card-title container" style="color: #1A5276;">Persamaan Kuadrat</h5></td>
                    </tr>
                    <tr>
                        <td><p class="container">Judul</p></td>
                        <td><p class="">:</p></td>
                        <td><p class="container">Menghitung hasil penjumlahan dari du apersamaan kuadrat</p></td>
                    </tr>
                    <tr>
                        <td><p class="container" style="margin-top: -15px; color: #D4AC0D;"><i class="fas fa-clock"></i>Time</p></td>
                        <td><p class="" style="margin-top: -15px; color: #D4AC0D;">:</p></td>
                        <td><p class="container" style="margin-top: -15px; color: #D4AC0D;">10:00:00 sampai 12:00:00</p></td>
                    </tr>
                </table>
                <div class="card-body">
                  <p class="card-text text-muted" style="margin-top: -15px;">Deskripsi : Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius doloremque asperiores corrupti sapiente, praesentium accusamus voluptates aut? Ea expedita magnam voluptate saepe aperiam iste id unde. Nesciunt corporis autem sed.</p>
                  <button class="btn btn-outline-danger mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-youtube"></i> Play Video</button>
                  <a href="#" class="btn btn-outline-info"><i class="fas fa-file-alt"></i> Download Materi</a>
                </div>
              </div>
          </div>
          {{-- Modal Video --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <img src="{{ asset('gambar/robotvideo.gif') }}" style="max-width: 60px;" alt=""> 
                    <h4 class="modal-title" id="exampleModalLabel">Tonton Video Yukk!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container col-12">
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/SgrshW-Abg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                </div>
                </div>
            </div>


          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h3 class="text-center">Jumlah Penduduk</h3>
            <table class="table table-hover">
              <tr>
                <td><i class="fas fa-users"></i> Jumlah Penduduk</td>
                <td>:</td>
                <td>707</td>
              </tr>
              <tr>
                <td><i class="fas fa-user"></i> Jumlah jiwa</td>
                <td>:</td>
                <td>2499</td>
              </tr>
              <tr>
                <td><i class="fas fa-male"></i> &nbsp;Laki - laki</td>
                <td>:</td>
                <td>1228</td>
              </tr>
              <tr>
                <td><i class="fas fa-female"></i> &nbsp;Perempuan</td>
                <td>:</td>
                <td>1271</td>
              </tr>
            </table>
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