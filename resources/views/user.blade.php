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
        *{
            
        }
        nav{
            box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
        }
        .list{
            box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
        }
        .tab-pane{
            box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <title>SIKKOLA</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-user-plus"></i> Tambah Pengguna</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br><br>

    <div class="container">  
    <div class="row">
        <div class="col-md-2">
          <div class="list-group list" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" href="#">Kelas 1</a>
            <a class="list-group-item list-group-item-action" href="#">Kelas 2</a>
            <a class="list-group-item list-group-item-action" href="#">Kelas 3</a>
            <a class="list-group-item list-group-item-action" href="#">Kelas 4</a>
            <a class="list-group-item list-group-item-action" href="#">Kelas 5</a>
            <a class="list-group-item list-group-item-action" href="#">Kelas 6</a>
          </div>
        </div>
        <div class="col-md-10">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><br>
                <div class="row">
                <div class="col-md-7">                    
                    <h4 class="container text-muted"><i class="fas fa-user-graduate"></i> DAFTAR SISWA KELAS 1</h4>
                </div>
                <div class="col-md-5">
                    <form class="d-flex container">
                        <input class="form-control me-2" type="text" placeholder="Cari siswa ...." aria-label="Search">
                        <button class="btn btn-outline-success me-2" type="submit"><i class="fas fa-search"></i></button>
                        <a class="btn btn-outline-secondary" href=""><i class="fas fa-sync-alt"></i></a>
                      </form>
                </div>
                </div>
                  <br>
                <div class="container">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Jiwaaaa</td>
                        <td>mantap</td>
                        <td>nicee</td>
                        <td>top csac</td>
                        <td>
                        <a class="btn btn-outline-danger btn-sm" href="">
                            <i class="fas fa-trash"></i>
                        </a>
                        </td>
                    </tr>
                </table>
                <br><br>
            </div>
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