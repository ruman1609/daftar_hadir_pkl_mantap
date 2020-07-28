<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buat Karyawan Baru</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <form action="/buat/karyawan" method="post" enctype="multipart/form-data">
      @csrf
      <input type="number" id="user" name="user" placeholder="Username"> <br>
      <input type="password" id="password" name="password" placeholder="Password"> <br>
      <input type="text" id="nama" name="nama" placeholder="Nama Karyawan"> <br>
      <select name="kelamin" id="kelamin">
        <option value="true">Laki-Laki</option>
        <option value="false">Perempuan</option>
      </select> <br>
      <textarea name="alamat" id="alamat" rows="8" cols="80" style="resize:none"></textarea> <br><br>
      <label for="file">Tanggal Lahir</label><br>
      <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir"> <br><br>
      <input type="tel" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon"> <br> <br>
      <label for="file">Masukkan foto ukuran 3x4</label><br>
      <input type="file" name="foto" id="foto"> <br><br>
      <input type="submit" value="DAFTAR!">
    </form>
    @if(count($errors)>0)
      <ul class="error">
        @foreach($errors->all() as $e)
        <li>{{$e}}</li><br>
        @endforeach
      </ul>
    @endif
  </body>
</html>
