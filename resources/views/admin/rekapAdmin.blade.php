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
                            <h4 class="card-title">Rekapitulasi Daftar Kehadiran</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                <table class="table">

                                        <thead class="thead-dark">
                                          <tr>
                                            <th>#</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>AKSI</th>
                                          </tr>
                                        </thead>
                                        @foreach($data as $number => $item)
                                          <tr>
                                            <td>
                                            {{$number +1}}
                                            </td>
                                            <td>{{$item->user}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td><a href="/rekap/{{$item->user}}">cek</a></td>
                                          </tr>
                                        @endforeach
                                      </table>
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
