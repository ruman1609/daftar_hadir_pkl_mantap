@extends('layouts.admin')
@section ('content')
<main class="main">
    <!-- Kasih tulisan selamat datang pake ini yan -->
    <!-- https://getbootstrap.com/docs/4.0/components/alerts/#dismissing -->
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li> -->
    </ol>
    <meta name="csrf-token" content="{{csrf_token()}}">
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
                                <form action="/pengumuman" method="post">
                                  @csrf
                                  <label><h2>Judul</h2></label>
                                  <input class="form-control" type="text" name="judul" id="judul" placeholder="Judul Pengumuman" required> <br>
                                  <label><h3>Isi pengumuman</h2></label>
                                  <textarea class="form-control" name="isi" id="isi" rows="8" cols="80" style="resize: none" placeholder="Isi Pengumuman"></textarea><br>
                                  <input type="submit" class="btn btn-success" value="SUBMIT">
                                </form>
                                @if(session()->has("error"))
                                  <h5>{{session()->get("error")}}</h5>
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