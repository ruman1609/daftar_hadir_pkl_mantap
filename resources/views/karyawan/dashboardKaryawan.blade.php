<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
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
        <span class="navbar-brand">Selamat datang NAMA</span>
      </nav>
      <div class="container-fluid">
        <div class="row p-3">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header center">
                <strong>DATA DIRI KARYAWAN</strong>
              </div>
              <div class="card-body">
                <img class="card-img-top mx-auto d-block" src="{{url("/icon/fotokuh.jpg")}}" alt="Data Diri" width="200px">
                <h5 class="card-title center">
                  NAMA
                </h5>
                <p class="card-text">
                  Data Diri <br>
                  Data Diri <br>
                  Data Diri <br>
                  Data Diri <br>
                  Data Diri <br>
                  Data Diri
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header center">
                <strong>LOG BOOK KEMARIN</strong>
              </div>
              <div class="card-body">
                <h5 class="card-title">TANGGAL</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <strong>PENGUMUMAN</strong>
          </div>
          <div class="card-body">
            <h5 class="card-title">COVID-19 OUTBREAK</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <br>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
  </body>
</html>
