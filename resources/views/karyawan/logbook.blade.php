<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logbook</title>
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
        <span class="navbar-brand">Isi Logbook</span>
      </nav>
      <div class="container-fluid p-3">
        <form action="{{route("test")}}" method="post">
          <div class="form-group row">
            <div class="col-md-6">
              <input readonly name="tanggal" value="{{date("l, d-m-Y")}}" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <textarea name="logbook" rows="10" required class="form-control" placeholder="Isi Logbook di sini"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
  </body>
</html>
