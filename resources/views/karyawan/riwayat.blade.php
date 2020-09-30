@extends('layouts.karyawan')
@section("content")
  <div class="isi">
    <nav class="navbar navbar-light bg-light inti">
      <span class="navbar-brand">Riwayat Karyawan</span>
    </nav>
    <div class="container">
      <div id="parent" class="p-3">
      @foreach($data as $item)
        <div class="card my-2">
          <div class="card-header" id="head{{$loop->index}}" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-expanded="false" aria-controls="collapse{{$loop->index}}" onclick="ubahArr({{$loop->index}})">
            <strong>
              {{$item->tanggal_absen}}
              <i class="material-icons" id="icon{{$loop->index}}" style="float: right;">keyboard_arrow_down</i>
            </strong>
          </div>
          <div class="collapse" id="collapse{{$loop->index}}" aria-labelledby="head{{$loop->index}}" data-parent="#parent">
            <div class="card-body">
              <h5>Status Kehadiran</h5>
              <p class="card-text">
                @if($item->kehadiran==1)
                  Hadir
                @else
                  Tidak ada keterangan
                @endif
              </p>
              <hr>
              <h5>Logbook</h5>
              @if(isset($item->logbook))
                <p class="card-text">{{$item->logbook}}</p>
              @else
                <p class="card-text">-</p>
              @endif
            </div>
          </div>
        </div>
      @endforeach
      {{$data->links()}}
        </div>
      </div>
    </div>
  </div>
  <script src="{{url("/own/js/riwayat.js")}}"></script>
  <script type="text/javascript">
    let as = document.querySelector(".rekap");
    as.classList.add("active");
  </script>
@endsection
