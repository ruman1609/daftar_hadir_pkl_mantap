<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$data[0]->nama}}</title>
  </head>
  <body>
    @if(count($data) > 0)
      <ol>
        @if(isset($back))
          <li>
            <a href="/rekap/{{$data[0]->id_karyawan}}">BACK</a>
          </li>
        @endif
        @foreach($bulan as $bul)
            <li>
              <a href="/rekap/{{$data[0]->id_karyawan}}/{{$bul->bulan}}">{{$bul->bulan}}</a>
            </li>
        @endforeach
      </ol>
      <table border="1">
        <tr>
          <th>TANGGAL</th>
          <th>KEHADIRAN</th>
        </tr>
        @foreach($data as $item)
          <tr>
            <td>{{$item->tanggal_absen}}</td>
            <td>
              @if($item->kehadiran==1)
                Hadir
              @else
                Tidak ada keterangan
              @endif
            </td>
          </tr>
        @endforeach
      </table>
      {{$data->links()}}
    @endif
  </body>
</html>
