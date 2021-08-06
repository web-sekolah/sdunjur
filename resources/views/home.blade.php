<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>School Web</title>
    <style>
      body{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
       @font-face {
            font-family: fontgua;
            src: url('font/School Book New.ttf');
        }
        .navbar-brand h5{
          font-family: fontgua;
        }
        .navbar{
          background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            border-radius: 8px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
        }
        option{
          font-weight: bolder; 
        }
        select{
          font-weight: bolder;
        }
        .card-title{
          font-family: fontgua;
          color: white;
        }
        .card1{
          border: 4px solid;
          border-color: #A93226;
          border-radius: 20px;
          background-color: #F1948A;
          transition: 0.3s ease; 
        }
        .card2{
          border: 4px solid;
          border-color: #1B4F72;
          border-radius: 20px;
          background-color: #5499C7;
          transition: 0.3s ease; 
        }
        .card3{
          border: 4px solid;
          border-color: #186A3B;
          border-radius: 20px;
          background-color: #28B463;
          transition: 0.3s ease; 
        }
        .card4{
          border: 4px solid;
          border-color: #424949;
          border-radius: 20px;
          background-color: #BDC3C7;
          transition: 0.3s ease; 
        }
        .card5{
          border: 4px solid;
          border-color: #D4AC0D;
          border-radius: 20px;
          background-color: #F7DC6F;
          transition: 0.3s ease; 
        }
        .card6{
          border: 4px solid;
          border-color: #566573;
          border-radius: 20px;
          background-color: #2C3E50;
          transition: 0.3s ease; 
        }
        .card1,.card2,.card3,.card4,.card5,.card6{
          box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .card1:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }
        .card2:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }
        .card3:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }
        .card4:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }
        .card5:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }
        .card6:hover{
          margin-top: -20px;
          box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
        }   
    </style>
  </head>
  <body style="background-image: url('{{ 'gambar/bglogin.jpg' }}');">
    <nav class="navbar container mt-3 navbar-expand-lg navbar-light bg-transparent">
      <div class="container">
        <a class="navbar-brand d-flex text-light" href="#"><img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<h5 class="mt-4"> BackToSchool</h5></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
                <!-- <li class="nav-item">
                  <a href="/tanyajawab/matematika" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-comments"></i> Ruang Bertanya</a>
                </li> -->
                {{-- @if (auth()->user()->level=="guru") --}}
                <li class="nav-item">
                  @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
                  <a href="{{ route('register') }}" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-user-plus"></i> Tambah Pengguna</a>
                </li>
                {{-- @endif --}}
                <li class="nav-item">
              
                </li>
                {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                      
                    @endauth
                </div>
            @endif --}}
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
    <br><br>

      <div class="container">
        <div class="row container">
          <div class="col-md-6">
          <div class="card1 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas1.png')}}" class="img-fluid rounded-start" alt="...">
              </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 1</h5>
                  <p class="card-text fw-bold" style="color:#7B241C;">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas1') }}" class="btn btn-danger rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card2 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas2.png')}}" class="img-fluid rounded-start" alt="...">
                </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 2</h5>
                  <p class="card-text fw-bolder" style="color: #154360;">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas2') }}" class="btn btn-primary rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        </div><br>

        
      <div class="container">
        <div class="row container">
          <div class="col-md-6">
          <div class="card3 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas6.png')}}" class="img-fluid rounded-start" alt="...">
              </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 3</h5>
                  <p class="card-text fw-bold">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas3') }}" class="btn btn-success rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>

                <div class="">
                  <a class="" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
          
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
asasfasfas




              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card4 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas4.png')}}" class="img-fluid rounded-start" alt="...">
              </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 4</h5>
                  <p class="card-text fw-bold" style="color: #424949;">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas4') }}" class="btn btn-secondary rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        </div><br>

        
      <div class="container">
        <div class="row container">
          <div class="col-md-6">
          <div class="card5 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas5.png')}}" class="img-fluid rounded-start" alt="...">
              </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 5</h5>
                  <p class="card-text fw-bolder" style="color: #7D6608;">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas5') }}" class="btn btn-warning rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card6 mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <center>
                <img src="{{asset('gambar/kelas3.png')}}" class="img-fluid rounded-start" alt="...">
              </center>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Kelas 6</h5>
                  <p class="card-text fw-bolder" style="color: white;">Klik tombol untuk memasuki kelas</p>
                  <a href="{{ route('kelas6') }}" class="btn btn-dark rounded-pill"><i class="far fa-play-circle"></i> Masuk kelas</a>
                </div>
              </div>
            </div>
          </div>
        </div> 
        </div><br>
      </div>
      </div>
      </div>
    </div>

    
    <style>
      .footer{
        font-family: fontgua;
      }
      .bg{
        background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
      }
      a {
        cursor: pointer;
      }
      .d-flex {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .d-flex a {
        text-decoration: none;
      }
      p {
        font-weight: bold;
      }
    </style>
      <footer>
        <div class="bg p-2">
            <div class="d-flex mt-4">
              <a href="https://www.del.ac.id/"><img class="" style="width: 48px;" src="{{asset('gambar/itdel.png')}}" alt=""></a>&nbsp;&nbsp;&nbsp;
              <a class="footer d-flex link-light">
                <img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<h5 class="mt-4"> BackToSchool</h5>
              </a>
            </div>
          <p class="text-center text-light mt-4">Copyright &copy;2021 | Program Pengabdian Masyarakat <a class="" href="https://www.del.ac.id/" style="color: yellow">Institut Teknologi Del</a></p>
        </div>
      </footer>
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->
  </body>
</html>
