<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url("/own/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{url("/own/css/wrapper.css")}}">
    <link href="{{url("/own/css/material.css")}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <div class="fixed i1">
      <div class="jumbotron isi mx-5">
        <h1>SELAMAT DATANG</h1>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-primary" id="navigation">
      <span class="navbar-brand">DH ONLINE</span>
      <ul class="navbar-nav" style="float:right;">
        <li class="nav-item">
          <a class="nav-link" href="/login/karyawan">LOGIN</a>
        </li>
      </ul>
    </nav>
    <div class="container p-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">HK Group</h5>
          <p class="card-text">
          PT. HKGroup didirikan tahun 2008 di bawah kepemimpinan Hariansyah, yang bergerak dalam beragam bidang. Seperti event organizer (EO), wedding organizer (WO), percetakan, advertising, start up, multimedia, hingga website e-commerce. Seluruh bidang tersebut dijalankan oleh anak perusahaan yang meliputi, Friends Production, Brothers Production, RMJ Company, Borneo Raya Printing, HK Studio, dan PesanBungkus.com.
          </p>
          
        </div>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
    <script type="text/javascript">
      window.onscroll = function(){
        if(document.documentElement.scrollTop > 700) $("#navigation").addClass("fixed-top");
        else $("#navigation").removeClass("fixed-top");
      }
    </script>
  </body>
</html>
