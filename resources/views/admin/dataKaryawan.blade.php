<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Karyawan</title>
  </head>
  <body>
    @if($ada)
      <table border="1">
        <tr>
          <th>User</th>
          <th>Nama</th>
          <th>J.K.</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Nomor Telepon</th>
          <th>Foto</th>
          <th>AKSI</th>
        </tr>
        @foreach($data as $item)
          <tr>
            <td>{{$item->user}}</td>
            <td>{{$item->nama}}</td>
            <td>
              @if($item->kelamin == 1)
                Laki-Laki
              @else
                Perempuan
              @endif
            </td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->tanggal_lahir}}</td>
            <td>{{$item->nomor_telepon}}</td>
            <td><img src="{{$item->foto}}" alt="Foto" width="50px"></td>
            <td>
              <a href="/buat/karyawan/{{$item->user}}/edit">EDIT</a>
              <a href="/buat/karyawan/{{$item->user}}">DELETE</a>
            </td>
          </tr>
        @endforeach
      </table>
    @else
      <h2>Data masih kosong</h2>
    @endif
  </body>
</html>
