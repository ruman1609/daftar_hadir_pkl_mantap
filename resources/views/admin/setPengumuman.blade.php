<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Pengumuman</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
  </head>
  <body>
    <form action="/pengumuman" method="post">
      @csrf
      <input type="text" name="judul" id="judul" placeholder="Judul Pengumuman" required> <br>
      <textarea name="isi" id="isi" rows="8" cols="80" style="resize: none" placeholder="Isi Pengumuman"></textarea><br>
      <input type="submit" value="SUBMIT">
    </form>
    @if(session()->has("error"))
      <h5>{{session()->get("error")}}</h5>
    @endif
  </body>
</html>
