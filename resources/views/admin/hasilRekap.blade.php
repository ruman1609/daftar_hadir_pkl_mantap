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
                            <h4 class="card-title">Data Karyawan</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                  @if(count($data) > 0)
                                    <ol>
                                      @if(isset($back))
                                        <li>
                                          <a href="/rekap/{{$data[0]->id_karyawan}}">BACK</a>
                                        </li>
                                      @endif
                                      <!-- @foreach($bulan as $bul)
                                          <li>
                                            <a href="/rekap/{{$data[0]->id_karyawan}}/{{$bul->bulan}}">{{$bul->bulan}}</a>
                                          </li>
                                      @endforeach -->
                                    </ol>
                                    <table class="table">
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
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('/own/js/bootstrap.js')}}">
    </script>
</main>
@endsection