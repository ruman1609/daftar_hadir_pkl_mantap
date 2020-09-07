@extends('layouts.karyawan')
@section ('content')
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Absen</span>
      </nav>
      <div class="container-fluid p-2">
        <div class="row">
          <div class="col-8 offset-2">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top mx-auto d-block" style="border-radius: 50%" src="{{url("/icon/fotokuh.jpg")}}" alt="Foto Karyawan">
                <h6 class="card-subtitle center">{{ Auth::user()->user }}</h6>
                <h5 class="card-title center">{{ Auth::user()->nama }}</h5>
                <form action="{{route("test")}}" method="post">
                  <button type="submit" class="btn btn-primary" id="submit">ABSEN</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{url("/own/js/bootstrap.js")}}"></script>
@endsection
