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
                            <h4 class="card-title">Perbarui Data</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                  <form action="/karya/{{$data->user}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <table>
                                    <tr>
                                        <td>
                                        <label for="user">Username</label>
                                        </td>
                                        <td> : </td>
                                        <td><input type="text" value="{{$data->user}}" class="form-control" id="user" name="user" placeholder="Username" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="password">Password</label>
                                        </td>
                                        <td> : </td>
                                        <td> <input type="password" class="form-control" id="password" name="password" placeholder="Password"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="nama">Nama</label>
                                        </td>
                                        <td> : </td>
                                        <td><input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" placeholder="Nama Karyawan"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="kelamin">Jenis Kelamin</label>
                                        </td>
                                        <td> : </td>
                                        <td>
                                        <input type="text" name="kelamin" value="{{$data->kelamin}}" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="alamat">Alamat</label>
                                        </td>
                                        <td> : </td>
                                        <td><textarea class="form-control" aria-label="With textarea" name="alamat" id="alamat">{{$data->alamat}}</textarea> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                        </td>
                                        <td> : </td>
                                        <td> <input class="form-control" type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}" id="tanggal_lahir" placeholder="Tanggal Lahir"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="nomor_telepon">Nomor Telepon</label>
                                        </td>
                                        <td> : </td>
                                        <td><input class="form-control" type="tel" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon"></td>
                                    </tr>
                                    </table>
                                    <label for="file">Masukkan foto ukuran 3x4</label><br>
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                     <br><br>
                                    <input type="submit" value="PERBARUI" class="btn btn-success">
                                  </form>
                                  @if(count($errors)>0)
                                    <ul class="error">
                                      @foreach($errors->all() as $e)
                                      <li>{{$e}}</li><br>
                                      @endforeach
                                    </ul>
                                  @endif
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
