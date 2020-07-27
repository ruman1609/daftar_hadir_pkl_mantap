<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Absen</title>
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
                LOG OUT
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Absen</span>
      </nav>
      <div class="container-fluid p-2">
        <div class="row">
          <div class="col-8 offset-2">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top mx-auto d-block" style="border-radius: 50%" src="{{url("/icon/fotokuh.jpg")}}" alt="Foto Karyawan">
                <h6 class="card-subtitle center">USERNAME</h6>
                <h5 class="card-title center">NAMA KARYAWAN</h5>
                <form action="{{route("test")}}" method="post">
                  <button type="submit" class="btn btn-primary" id="submit">ABSEN</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
  </body>
</html>
