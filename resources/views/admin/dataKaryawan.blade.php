@extends('layouts.admin')
@section ('content')
<main class="main">
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
                        <div class="card-header">
                          <a href="{{route('karya.create')}}" class="btn btn-square btn-success">Tambah Karyawan</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    @if($ada)
                                      <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>Nama</th>
                                            <th>J.K.</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Nomor Telepon</th>
                                            <th>Foto</th>
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
                                              <a href="{{route('karya.edit', $item->user)}}">EDIT</a>
                                              <a href="/buat/karyawan/{{$item->user}}">DELETE</a>
                                            </td>
                                          </tr>
                                        @endforeach
                                      </table>
                                    @else
                                      <h2>Data masih kosong</h2>
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