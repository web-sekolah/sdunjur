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
    <title>Hello, world!</title>
    <style>
        .card{
            padding: 18px;
        }
    h3{
        font-family: 'Quicksand', sans-serif;
    }
    body{
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    </style>
  </head>
  <body style="background-image: url('{{asset('gambar/bglogin.jpg')}}')"><br><br><br><br>
    <div class="card shadow-lg p-3 mb-5 bg-body rounded col-md-4 container">
        <div>
        <form method="POST" action="{{route('login')}}">
        @csrf
        <center><h3><img style="width: 50px;" src="{{ asset('gambar/index.png') }}" alt=""> BackToSchool</h3></center>
        <label for="" class="container"><i class="fas fa-user-edit"></i> Username</label>
        <input name="email" type="text" class="form-control mt-2 container" placeholder="Masukkan nama kamu">
        <label for="" class="container"><i class="fas fa-unlock-alt mt-2"></i> Password</label>
        <input name="password" type="password" class="form-control mt-2" placeholder="masukkan password kamu"><br>
        <center>
            <select name="select" class="form-select nav-link" aria-label="Default select example">
                <option selected>Login sebagai siswa</option>
                <option value="1">Login Sebagai Guru</option>
            </select> <br>
            @if (session('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Woops!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
            <button style="width: 100%" type="submit" class="btn btn-success"><i class="fas fa-user-check"></i> Login</button><br>
        </center>
        </form>
        <br>
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