<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Riwayat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url("/own/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{url("/own/css/dashboard.css")}}">
    <link href="{{url("/own/css/material.css")}}" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar">
      <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="jajajaja">
          <a href="#" class="navbar-brand">DH ONLINE</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-label="Toggle navigation" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons" style="font-size: 1rem">done</i>
                ABSEN
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons" style="font-size: 1rem">book</i>
                LOGBOOK
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons" style="font-size: 1rem">history</i>
                RIWAYAT
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="material-icons" style="font-size: 1rem">login</i>
                LOGOUT
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Riwayat Logbook</span>
      </nav>
      <div class="container">
        <div id="parent" class="p-3">
        @foreach($data as $item)
          <div class="card my-2">
            <div class="card-header" id="head1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" onclick="ubahArr(1)">
              <strong>
              {{$item->tanggal_absen}}
                <i class="material-icons" id="icon1" style="float: right;">keyboard_arrow_down</i>
              </strong>
            </div>
            <div class="collapse" id="collapse1" aria-labelledby="head1" data-parent="#parent">
              <div class="card-body">
                <p class="card-text">
                @if($item->kehadiran==1)
                  Hadir
                @else
                  Tidak ada keterangan
                @endif
                </p>
              </div>
            </div>
          </div>
        @endforeach
        {{$data->links()}}
          </div>
          
        </div>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
    <script src="{{url("/own/js/riwayat.js")}}"></script>
  </body>
</html>
