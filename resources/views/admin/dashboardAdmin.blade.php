@if(session()->has("berhasil"))
<script type="text/javascript">
  alert("{{session()->get("berhasil")}}");
</script>
@endif
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beranda</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <!-- Kasih tulisan selamat datang pake ini yan -->
    <!-- https://getbootstrap.com/docs/4.0/components/alerts/#dismissing -->
    <h1>Beranda</h1>
    <nav>
      <ol>
        <li><a href="/buat/karyawan/create">Daftarkan Karyawan Baru</a></li>
        <li><a href="/buat/karyawan">Edit Data Karyawan</a></li>
        <li><a href="/rekap">Rekapitulasi Data Karyawan</a></li>
        <li><a href="/logout">LOG OUT</a></li>
      </ol>
    </nav>
    <main>

    </main>
    <footer>
      <h3>Dibuat oleh 025 dan 061</h3>
    </footer>
    <script src="{{url("/own/js/bootstrap.js")}}">
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
      //   e.preventDefault();
      //   e.returnValue = '';
      // });  // buat ada dialog sebelum exit
    </script>
  </body>
</html>
