<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Karyawan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body>
    <form action="/buat/karyawan/{{$data->user}}" method="post" enctype="multipart/form-data">
      @method("put")
      @csrf
      <input type="number" id="user" name="user" value="{{$data->user}}" readonly> <br>
      <input type="password" id="password" name="password" placeholder="Password"> <br>
      <input type="text" id="nama" name="nama" value="{{$data->nama}}"> <br>
      <input type="text" name="kelamin" value="{{$data->kelamin}}" readonly> <br>
      <textarea name="alamat" id="alamat" rows="8" cols="80" style="resize:none">{{$data->alamat}}</textarea><br><br>
      <label for="file">Tanggal Lahir</label><br>
      <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$data->tanggal_lahir}}" readonly> <br><br>
      <input type="tel" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon"> <br> <br>
      <label for="file">Masukkan foto ukuran 3x4</label><br>
      <input type="file" name="foto" id="foto"> <br>
      <label for="file">Jika tidak ingin ganti tidak usah diisi</label><br><br>
      <input type="submit" value="UPDATE!">
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
