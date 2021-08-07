
<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>
        .form-group{
            margin-bottom: 10px;
        }
        .card{
            padding: 18px;
        }
    /* h3{
        font-family: 'Quicksand', sans-serif;
    } */
    @font-face{
            font-family: fontloe;
            src: url('../font/Chalktastic.otf');
        }
    body{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    a{
        font-family: fontloe;
    }
    .mapelcaption{
           display: fixed;
           color: white;
           background-size: cover;
           background-attachment: fixed;
           background-repeat: no-repeat;
           border: 12px solid #AF601A;
           letter-spacing: 1px;
           box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
           /* justify-content: center; */
        }
        label{
            font-family: fontloe;
        }
        h2{
            font-family: fontloe;
        }
        button{
            font-family: fontloe;
            transition: 0.3s;
            background: transparent;
        }
        .btn:hover{
            background-color: white;
            color: black;
        }
        strong{
            text-shadow: 1px 1px rgba(0, 0, 0, 0.7)
        }
        .btn{
            border: 2px solid white;
            margin-top: 12px;
            color: white;
        }
        input{
            background: transparent;
            color: white;
            border-color: white;
            border: none;
            border-bottom: 2px solid;
        }
        input:focus{
            outline: none;
        }
        .col-md-10{
        }
        ::placeholder {
        color: rgb(211, 201, 201);
        opacity: 1; /* Firefox */
        }
    </style>
  </head>
  <body style="background-image: url('{{asset('gambar/bgberanda.jpg')}}')"><br><br>
    <br><br>
    <div class="mapelcaption container" style="width: max-content; padding: 42px; border-radius: 5px; background-image: url('{{ asset('gambar/chalkboard.jpg') }}');" >
        <h2 class="text-center"><i class="fas fa-user-plus"></i> REGISTER</h2><br><br>
        <div  class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="level" type="level" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" autocomplete="level"> --}}
                        <select id="level" class="form-select" aria-label="Default select example" @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" autocomplete="level">
                            <option selected value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                          </select>
                        @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kelas" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }}</label>

                    <div class="col-md-6">
                        <select id="kelas" class="form-select" aria-label="Default select example" @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" autocomplete="kelas">
                            <option selected value="0">-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                          </select>
                        @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                    <div class="col-md-6">
                        {{-- <input id="sex" type="sex" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" autocomplete="sex"> --}}
                        <select id="sex" class="form-select" aria-label="Default select example" @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" autocomplete="sex">
                            <option selected value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        <a class="btn btn bg-tranparent" href="/user"><< Back</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <br>
    <!-- Kelas Input Form Show & Hide -->
    <script>
        $(document).ready(function () {
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    @include('sweetalert::alert')
  </body>
</html>