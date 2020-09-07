@extends('layouts.karyawan')
@section ('content')
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Selamat datang, {{ Auth::user()->nama }}</span>
      </nav>
      <div class="container-fluid">
        <div class="row p-3">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header center">
                <strong>DATA DIRI KARYAWAN</strong>
              </div>
              <div class="card-body">
                <img class="card-img-top mx-auto d-block" src="{{ Auth::user()->foto }}" alt="Data Diri" width="200px">
                <h5 class="card-title center">
                <b>{{ Auth::user()->nama }}</b>
                </h5>
                <p class="card-text">
                <!-- {{ Auth::user()->kelamin }} -->
                <?php if(Auth::user()->kelamin == 1) :?> 
                  Laki-Laki
                <?php else :?>
                  Perempuan
                <?php endif; ?>
                <br>
                {{ Auth::user()->alamat }} <br>
                {{ Auth::user()->tanggal_lahir }} <br>
                {{ Auth::user()->nomor_telepon }} <br>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header center">
                <strong>LOG BOOK KEMARIN</strong>
              </div>
              @foreach($logbook as $l)
              <div class="card-body">
                <h5 class="card-title">{{$l->tanggal_absen}}</h5>
                <p class="card-text">{{$l->logbook}}</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <strong>PENGUMUMAN</strong>
          </div>
          <div class="card-body">
          @foreach($pengumuman as $p)
          <hr>
            <h5 class="card-title">{{$p->judul}}</h5>
            <p class="card-text">{{$p->isi}}</p>
            <p class="card-text">Dikirim pada : {{$p->created_at}}</p>
          @endforeach
          </div>
        </div>
        <br>
      </div>
    </div>
    <script src="{{url('/own/js/bootstrap.js')}}"></script>
@endsection