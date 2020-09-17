@extends('layouts.admin')
@section ('content')
<main class="main">
  @if(session()->has("Berhasil"))
  <script type="text/javascript">
  alert("{{session()->get("Berhasil")}}");
</script>
@endif
@if(session()->has("dbError"))
<script type="text/javascript">
alert("{{session()->get("dbError")}}");
</script>
@endif
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Karyawan</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                  @if(count($data) > 0)
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
                                          <p class="card-text">{{$item->logbook}}</p>
                                        </div>
                                      </div>
                                    </div>
                                  @endforeach
                                    {{$data->links()}}
                                  @endif
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url("/own/js/riwayat.js")}}"></script>
</main>
@endsection
