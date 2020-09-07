@if(session()->has("berhasil"))
<script type="text/javascript">
alert("{{session()->get("berhasil")}}");
</script>
@endif
@if(session()->has("dbERROR"))
<script type="text/javascript">
alert("{{session()->get("dbERROR")}}");
</script>
@endif

@extends('layouts.admin')
@section ('content')
<main class="main">
    <!-- Kasih tulisan selamat datang pake ini yan -->
    <!-- https://getbootstrap.com/docs/4.0/components/alerts/#dismissing -->
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li> -->
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Aktivitas</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="callout callout-info">
                                        <small class="text-muted">Karyawan</small>
                                        <br>
                                        <strong class="h4">{{ $data }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <nav>
      <ol>
        <li><a href="/buat/karyawan/create">Daftarkan Karyawan Baru</a></li>
        <li><a href="/buat/karyawan">Edit Data Karyawan</a></li>
        <li><a href="/rekap">Rekapitulasi Data Karyawan</a></li>
        <li><a href="/pengumuman">Set Pengumuman</a></li>
        <li><a href="/logout">LOG OUT</a></li>
      </ol>
    </nav> -->
    <main>

    </main>
    <script src="{{url('/own/js/bootstrap.js')}}">
    </script>
    <script type="text/javascript">
      // window.addEventListener("beforeunload", function(event){
      //   document.cookie = "laravel_session=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      //   document.cookie = "XSRF-TOKEN=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
      // });
      // function deleteAllCookies() {
      //   let cookies = document.cookie.split(";");
      //
      //   for (let i = 0; i < cookies.length; i++) {
      //       let cookie = cookies[i];
      //       let eqPos = cookie.indexOf("=");
      //       let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      //       document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
      //   }
      // }
      // window.addEventListener('beforeunload', function (e) {
      // windows.addEventListener('befireunkiad', function (e){
          //e.preventDefault();
          //e.returnValue = '';
      //}); buat dialog sebelum exit

      //   e.preventDefault();
      //   e.returnValue = '';
      // });  // buat ada dialog sebelum exit
    </script>
</main>
@endsection
