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
          body{
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
          }
          .navbar{
            /* background: linear-gradient(to bottom right, #99ccff 0%, #66ffff 100%); */
            background: linear-gradient(to bottom right, #6699ff 0%, #00ffff 100%);
            /* border-radius: 8px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            font-weight: bold;
            display: flex;
        }
        .listmapel{
            display: none;
        }
        .list-group-item{
            transition: 0.3s;
            font-weight: bold;
        }
        .list-group-item:hover:not(.active){
            margin-left: -5%;
            transform: scale(1.05);
        }
        .pertanyaan{
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
        }
        .buatkuis{
          transition: 0.3s;
          background-color: #2A83FF;
          color: white;
        }
        .buatkuis:hover{
          transform: scale(1.1);
          color: blue;
          background-color: white;
        }
    </style>
    <title>Obrolan Kelas 6</title>
  </head>
  {{-- style="background-image: url('{{asset('../gambar/bglogin.jpg')}}'); --}}
  <body style="background-image: url('{{asset('../gambar/bgchat2.jpg')}}')">
    <nav class="navbar  navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
        <a class="navbar-brand d-flex text-light" href="#"><img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<img src="{{asset('gambar/logo.png')}}" width="125" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link container text-light" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="/kelas6" class="nav-link container text-light" aria-current="page" href="/kelas6"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kelas 6</a>
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
      <br>
      @error('comment')
      <div class="alert alert-danger container alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle"></i> <strong> {{$message}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @enderror
      <div class="container mt-5">
      <div class="row">
        <div class="col-md-2 mb-2">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" href="/kelas6/ObrolanKelas/tanyajawab/matematika">Matematika</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/bindonesia">B.Indonesia</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/ipa">IPA</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/ips">IPS</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/ppkn">PPKN</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/agama">Agama</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/penjas">Olahraga</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/senibudaya">Seni Budaya</a>
            <a class="list-group-item list-group-item-action" href="/kelas6/ObrolanKelas/tanyajawab/muatanlokal">Muatan Lokal</a><br>
            <a class="btn btn fw-bold form-komentar buatkuis" href="#"><i class="fas fa-calendar-plus"></i> Pertanyaan</a>
          </div>
        </div>
        <div class="col-md-10 bg-light">
          <div class="tab-content" id="nav-tabContent" style="overflow-y: scroll; height:400px;">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <form class="container mt-3 ajukan-pertanyaan" action="/kelas6/ObrolanKelas/tanyajawab/AddComment" enctype="multipart/form-data" method="post" >
                    {{ method_field('POST') }}
                    @csrf
                    <div class="d-flex">
                        <h6 for="form-control" class="fw-bold">@if(auth()->user()->level=="guru")<i class="fas fa-chalkboard-teacher"></i>
                        @endif
                        <i class="fas fa-user-graduate @if(auth()->user()->level=="guru") d-none @endif"></i>
                        &nbsp;{{ Auth::user()->username }} ( {{ Auth::user()->name }} )
                        </h6>
                        <input type="hidden" class="form-control" name="name" value="{{ Auth::user()->name }}{{-- ( {{ Auth::user()->name }} )--}}">
                        {{-- <input type="text" class="" name="name"> --}}
                        <div class="ms-auto">
                            <button style="margin-bottom: 3px; margin-top: -10px;" class="btn btn-info btn-sm text-light fw-bold"><i class="fas fa-paper-plane"></i> Kirim Pertanyaan</button>
                        </div>
                    </div>
                    <div>
                    <textarea class=""  name="comment" id=""></textarea>
                    </div>
                </form>
                <br>
                @forelse ($comment as $komen)
                <div class="container border border-2 p-2 pertanyaan mt-3"
                @if (Auth::user()->name == $komen->name)
                     style="background-color: #EAE7AB;"
                @endif
                >
                    <div class="container d-flex">
                    <h6 for="form-control container" class="fw-bold">
                      <i class="far fa-user"></i> {{ $komen->name }}
                      @if (Auth::user()->name == $komen->name || auth()->user()->level=="guru" )
                      <a class="text-secondary" data-bs-toggle="modal" data-bs-target="#delete{{$komen->id}}"  style="cursor:pointer;">
                        <i class="far fa-trash-alt"></i>
                      </a>
                      @endif

                       {{-- Konfirmasi hapus materi modals --}}
                        <!-- Modal -->
                        <div class="modal fade" id="delete{{$komen->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content modalhapus" style="background-color: white;">
                              <div class="modal-body">
                                <h1 class="text-center text-warning warning"><i class="fas fa-exclamation-triangle"></i></h1>
                                <h2 class="text-center">Apakah kamu yakin?</h2>
                                <p class="text-center text-muted container">Pertanyaan yang dihapus tidak dapat dikembalikan</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                                <a href="/kelas6/ObrolanKelas/tanyajawab/matematika/hapus/{{ $komen->id }}" class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus Pertanyaan</a>
                              </div>
                            </div>
                          </div>
                        </div>

                    </h6> 
                    <div class="ms-auto">
                        <small class="text-muted fw-bold"><i class="fas fa-clock"></i> {{ $komen->created_at->diffForHumans() }}</small>
                    </div>
                </div>
                <div class="container" style="margin-top: -20px;">
                    <p class="container">
                        {!! $komen->comment !!}
                      </p>
                </div>
                    <button class="btn btn-sm btn bg-transparent fw-bold" style="color: #FF4A26;" id="reply-message{{$komen->id}}"><i class="fas fa-comment-dots"></i> Beri Jawaban</button>
                    <button class="btn btn btn-sm fw-bold text-primary" id="show-respon{{ $komen->id }}" ><i class="fas fa-eye"></i> Lihat Jawaban</button>
                    <small class="" id="notif-reponse{{$komen->id}}"><i class="text-danger"><i class="fas fa-exclamation-circle"></i> Belum ada jawaban</i></small>
                <div class="container replyform{{$komen->id}}">
                    <form action="/kelas6/ObrolanKelas/tanyajawab/addreply" method="post" enctype="multipart/form-data">
                      {{ method_field('POST') }}
                      @csrf
                      <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                      <input type="hidden" name="comment_id" value="{{$komen->id}}">
                        <textarea name="comment" class="ckeditor" id=""></textarea>
                        <div class="d-flex">
                            <div class="ms-auto">
                            <button style="float: right; background-color: #00F311;" class="btn bt btn-sm text-light fw-bold"><i class="fas fa-paper-plane"></i> Kirim Jawaban</button>
                            </div>
                        </div>
                    </form>
                </div>
                <script src="{{ asset('../js/jquery.min.js') }}"></script>
                <div class="container response-message">
                    <div class="respon-list{{$komen->id}}">
                    @foreach ($reply as $user2)
                    @if($komen->id == $user2->comment_id)
                    @if ($user2->comment_id == NULL)
                    <script>
                      $('#notif-reponse{{$komen->id}}').show();
                    </script>
                    @else
                    <script>
                      $('#notif-reponse{{$komen->id}}').hide();
                  </script>
                    @endif
                    <div  
                    @if (Auth::user()->name == $user2->name)
                    style="background-color: #EAE7AB;"
                    @endif
                    >   
                    <div class="d-flex">
                      <small class="container fw-bold"><i class="far fa-user"></i> {{ $user2->name }} </small>
                      <div class="ms-auto">
                      <small class="text-muted fw-bold" style="font-size: 12px">{{ $user2->created_at->diffForHumans() }}</small>
                      </div>
                    </div>
                        <div class="container"   style="margin-top: -25px;
                        @if (Auth::user()->name == $user2->name)
                       background-color: #EAE7AB;"
                        @endif>
                            <small style="">{!! $user2->comment !!}</small> 
                        </div>
                    </div>
                    @endif
                    @endforeach
                  </div>
                </div>
                </div>
                @empty
                <h1 class="text-muted container">
                    <i class="fas fa-sad-cry"></i> Belum ada yang bertanya
                </h1>
                @endforelse
                <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.16.1/basic/ckeditor.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script>
      CKEDITOR.replace( 'comment' );
    </script>
    {{-- @foreach ($comment as $komen)
    <script>
      CKEDITOR.replace( 'comment' );
    </script>
    @endforeach --}}
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @foreach ($comment as $komen)
    <script>
        $(document).ready(function () {
          $('.replyform{{$komen->id}}').hide();
          $('#reply-message{{$komen->id}}').click(function () {
            $('.replyform{{$komen->id}}').slideToggle();
          });
        });
        
      </script>
    @endforeach

    {{-- @foreach ($comment as $komen)
    @foreach ($reply as $user2)
    @if ($komen->id + $user2->comment_id >  $user2->comment_id)
    <script>
       $('#show-respon{{$komen->id}}').show();
    </script>
    @else
    <script>
      $('#show-respon{{$komen->id}}').hide();
   </script>
    @endif
    @endforeach
    @endforeach --}}
    
    {{-- show hide respon --}}
    @foreach ($comment as $komen)
    <script>
        $(document).ready(function () {
          $('.respon-list{{$komen->id}}').hide();
          $('#show-respon{{$komen->id}}').click(function () {
            $('.respon-list{{$komen->id}}').slideToggle();
          });
        });
        
      </script>
    @endforeach

<script>
    $(document).ready(function () {
      $('.ajukan-pertanyaan').hide();
      $('.form-komentar').click(function () {
        $('.ajukan-pertanyaan').slideToggle();
      });
    });
    
  </script>
  @include('sweetalert::alert')
  </body>
</html>