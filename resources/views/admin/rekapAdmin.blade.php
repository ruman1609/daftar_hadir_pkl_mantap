<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rekapitulasi Karyawan</title>
  </head>
  <body>
    <h1>Rekapitulasi Daftar Kehadiran</h1>
    @if(count($data)>0)
      <ol>
        @foreach($data as $item)
          <li>
            <a href="/rekap/{{$item->user}}">{{$item->user}} {{$item->nama}}</a>
          </li>
        @endforeach
      </ol>
    @endif
  </body>
</html>
