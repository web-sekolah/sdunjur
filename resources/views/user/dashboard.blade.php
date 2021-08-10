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
            /* background-color: #D5DBDB;  */
            background-color: #EAEDED;
            /* background-color: #F4F6F6;  */
        }
        *{
            
        }
        nav{
            box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
        }
        .list{
            box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
        }
        .tab-pane{
            /* box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; */
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <title>SIKKOLA</title>
  </head>
  <body style="background-image: url('{{ 'gambar/bglogin.jpg' }}');">
    <nav class="navbar text-light navbar-expand-lg navbar-dark mx-5 mt-3 rounded-pill" style="background-color: #424949;">
        <div class="container">
        <a class="navbar-brand d-flex text-light" href="#"><img style="width: 60px;" src="{{asset('gambar/index.png')}}" alt="">&nbsp;<img src="{{asset('gambar/logo.png')}}" width="125" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard"><i class="fas fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/register"><i class="fas fa-user-plus"></i> Tambah Pengguna</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br><br>

    <div class="container">  
    <div class="row">
        <div class="col-md-2">
          <div class="list-group list" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" href="/user">Dashboard</a>
            <a class="list-group-item list-group-item-action" href="/userkls1">Kelas 1</a>
            <a class="list-group-item list-group-item-action" href="/userkls2">Kelas 2</a>
            <a class="list-group-item list-group-item-action" href="/userkls3">Kelas 3</a>
            <a class="list-group-item list-group-item-action" href="/userkls4">Kelas 4</a>
            <a class="list-group-item list-group-item-action" href="/userkls5">Kelas 5</a>
            <a class="list-group-item list-group-item-action" href="/userkls6">Kelas 6</a>
            <a class="list-group-item list-group-item-action" href="/userguru">Guru</a>
          </div>
        </div>
        @php
            $siswa = 0;
            $guru = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa") 
            @php
                $siswa++
            @endphp
            @else
                @php
                    $guru++
                @endphp
            @endif
        @endforeach

        @php
            $kelas1 = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa" && $item->kelas == 1) 
            @php
                $kelas1++
            @endphp
            @endif
        @endforeach

        @php
            $kelas2 = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa" && $item->kelas == 2) 
            @php
                $kelas2++
            @endphp
            @endif
        @endforeach

        @php
            $kelas3 = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa" && $item->kelas == 3) 
            @php
                $kelas3++
            @endphp
            @endif
        @endforeach

        @php
            $kelas4 = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa" && $item->kelas == 4) 
            @php
                $kelas4++
            @endphp
            @endif
        @endforeach

        @php
            $kelas5 = 0;
        @endphp
        @foreach ($user as $item)
            @if ($item->level=="siswa" && $item->kelas == 5) 
            @php
                $kelas5++
            @endphp
            @endif
        @endforeach

        @php
            $kelas6 = 0;
        @endphp
            @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->kelas == 6) 
            @php
                $kelas6++
            @endphp
            @endif
        @endforeach

        {{-- persen kelas 1 --}}
        @php $persenkelas1 =  ($kelas1 / $siswa) * (100) @endphp
        {{-- persen kelas 2 --}}
        @php $persenkelas2 =  ($kelas2 / $siswa) * (100) @endphp
        {{-- persen kelas 3 --}}
        @php $persenkelas3 =  ($kelas3 / $siswa) * (100) @endphp
        {{-- persen kelas 4 --}}
        @php $persenkelas4 =  ($kelas4 / $siswa) * (100) @endphp
        {{-- persen kelas 5 --}}
        @php $persenkelas5 =  ($kelas5 / $siswa) * (100) @endphp
        {{-- persen kelas6 --}}
        @php $persenkelas6 =  ($kelas6 / $siswa) * (100) @endphp
        
        {{-- Guru --}}
        @php
        $gurucowo = 0;
        $gurucewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="guru" && $item->sex == "Laki-laki") 
        @php
            $gurucowo++
        @endphp
        @elseif($item->level=="guru" && $item->sex == "Perempuan")
        @php
            $gurucewe++
        @endphp
        @endif
        @endforeach

        {{-- persen guru cowo --}}
        @php $persengurucowo =  ($gurucowo / $guru) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persengurucewe =  ($gurucewe / $guru) * (100) @endphp

        {{-- Jenis kelamin siswa perkelas --}}
        {{-- kelas1 --}}
        @php
        $kls1cowo = 0;
        $kls1cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 1) 
        @php
            $kls1cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 1)
        @php
            $kls1cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls1cowo =  ($kls1cowo / $kelas1) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls1cewe =  ($kls1cewe / $kelas1) * (100) @endphp

        {{-- kelas2 --}}
        @php
        $kls2cowo = 0;
        $kls2cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 2) 
        @php
            $kls2cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 2)
        @php
            $kls2cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls2cowo =  ($kls2cowo / $kelas2) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls2cewe =  ($kls2cewe / $kelas2) * (100) @endphp

        {{-- kelas3 --}}
        @php
        $kls3cowo = 0;
        $kls3cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 3) 
        @php
            $kls3cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 3)
        @php
            $kls3cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls3cowo =  ($kls3cowo / $kelas3) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls3cewe =  ($kls3cewe / $kelas3) * (100) @endphp

        {{-- kelas4 --}}
        @php
        $kls4cowo = 0;
        $kls4cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 4) 
        @php
            $kls4cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 4)
        @php
            $kls4cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls4cowo =  ($kls4cowo / $kelas4) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls4cewe =  ($kls4cewe / $kelas4) * (100) @endphp

        {{-- kelas5 --}}
        @php
        $kls5cowo = 0;
        $kls5cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 5) 
        @php
            $kls5cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 5)
        @php
            $kls5cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls5cowo =  ($kls5cowo / $kelas5) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls5cewe =  ($kls5cewe / $kelas5) * (100) @endphp

        {{-- kelas6 --}}
        @php
        $kls6cowo = 0;
        $kls6cewe = 0;
        @endphp
        @foreach ($user as $item)
        @if ($item->level=="siswa" && $item->sex == "Laki-laki" && $item->kelas == 6) 
        @php
            $kls6cowo++
        @endphp
        @elseif($item->level=="siswa" && $item->sex == "Perempuan" && $item->kelas == 6)
        @php
            $kls6cewe++
        @endphp
        @endif
        @endforeach
        {{-- persen guru cowo --}}
        @php $persenkls6cowo =  ($kls6cowo / $kelas6) * (100) @endphp
        {{-- persen guru cewq --}}
        @php $persenkls6cewe =  ($kls6cewe / $kelas6) * (100) @endphp
        

        <div class="col-md-10">
          <div class="tab-content bg-light" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><br>
                <h2 class="text-center text-muted"><i class="fas fa-server"></i> DASHBOARD</h2><br>
                <div class="row container">
                    <div class="col-md-6 container">
                        <div class="card w-80">
                            <div class="card-body">
                                <div class="d-flex">
                                <h2 class="text-muted">
                                    <i class="far fa-user text-secondary"></i> SISWA
                                </h2>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="ms-auto">
                                    <h2>{{$siswa}}</h2>
                                    <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                                </div>
                                </div>
                                <div class="">
                                    <small class="text-muted">Kelas 1</small>
                                    <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas1,2)}}%" aria-valuenow="{{$kelas1}}" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas1,2)}}%</div>&nbsp;{{$kelas1}} Orang
                                    </div>
                                    <small class="text-muted">Kelas 2</small>
                                      <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas2,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas2,2)}}%</div>&nbsp;{{$kelas2}} Orang
                                      </div>
                                      <small class="text-muted">Kelas 3</small>
                                      <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas3,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas3,2)}}%</div>&nbsp;{{$kelas3}} Orang
                                      </div>
                                      <small class="text-muted">Kelas 4</small>
                                      <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas4,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas4,2)}}5</div>&nbsp;{{$kelas4}} Orang
                                      </div>
                                      <small class="text-muted">Kelas 5</small>
                                      <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas5,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas5,2)}}%</div>&nbsp;{{$kelas5}} Orang
                                      </div>
                                      <small class="text-muted">Kelas 6</small>
                                      <div class="progress mb-2">
                                        <div class="progress-bar progress-bar-striped bg-dark progress-bar-animated" role="progressbar" style="width: {{number_format($persenkelas6,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkelas6,2)}}5</div>&nbsp;{{$kelas6}} Orang
                                      </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 container">
                        <div class="card w-80">
                            <div class="card-body">
                                <div class="d-flex">
                                <h2 class="text-muted">
                                    <i class="fas fa-chalkboard-teacher"></i> GURU
                                </h2>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="ms-auto">
                                    <h2>{{$guru}}</h2>
                                    <p style="font-size: 10px; margin-top: -10px;">Jumlah guru</p>
                                </div>
                                </div>
                                <div class="">
                                    <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                    <div class="progress mb-1">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persengurucowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persengurucowo,2)}}%</div>&nbsp;{{$gurucowo}} Orang
                                    </div>
                                    <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                      <div class="progress mb-1">
                                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persengurucewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persengurucewe,2)}}%</div>&nbsp;{{$gurucewe}} Orang
                                      </div> 
                                </div>
                            </div>
                         </div>
                    </div>
                <br>
            </div><br>

            <div class="row container">
                <div class="col-md-4 container mb-2">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 1
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas1}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls1cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls1cowo,2)}}%</div>&nbsp;{{$kls1cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls1cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls1cewe,2)}}%</div>&nbsp;{{$kls1cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>

                <div class="col-md-4 container">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 2
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas2}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls2cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls2cowo,2)}}%</div>&nbsp;{{$kls2cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls2cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls2cewe,2)}}%</div>&nbsp;{{$kls2cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>

                <div class="col-md-4 container">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 3
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas3}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls3cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls3cowo,2)}}%</div>&nbsp;{{$kls3cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls3cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls3cewe,2)}}%</div>&nbsp;{{$kls3cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>

                <div class="col-md-4 container">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 4
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas4}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls4cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls4cowo,2)}}%</div>&nbsp;{{$kls4cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls4cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls4cewe,2)}}%</div>&nbsp;{{$kls4cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>

                <div class="col-md-4 container">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 5
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas5}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls5cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls5cowo,2)}}%</div>&nbsp;{{$kls5cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls5cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls5cewe,2)}}%</div>&nbsp;{{$kls5cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>

                <div class="col-md-4 container">
                    <div class="card w-80">
                        <div class="card-body">
                            <div class="d-flex">
                            <h3 class="text-muted">
                                <i class="fas fa-users"></i> KELAS 6
                            </h3>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="ms-auto">
                                <h3>{{$kelas6}}</h3>
                                <p style="font-size: 10px; margin-top: -10px;">Jumlah siswa</p>
                            </div>
                            </div>
                            <div class="">
                                <small class="text-muted"><i class="fas fa-mars text-primary"></i> Pria</small>
                                <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls6cowo,2)}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls6cowo,2)}}%</div>&nbsp;{{$kls6cowo}} Orang
                                </div>
                                <small class="text-muted"><i class="fas fa-venus text-danger"></i> Wanita</small>
                                  <div class="progress mb-1">
                                    <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: {{number_format($persenkls6cewe,2)}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($persenkls6cewe,2)}}%</div>&nbsp;{{$kls6cewe}} Orang
                                  </div> 
                            </div>
                        </div>
                     </div>
                </div>
                <br>


          </div>
          <br>
        </div>
      </div>
      <br><br>
    </div>
   
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>