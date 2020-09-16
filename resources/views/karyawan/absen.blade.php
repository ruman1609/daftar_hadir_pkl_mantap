@extends('layouts.karyawan')
@section("title", "Absensi Karyawan")
@section ('content')
@if(session()->has("Berhasil"))
<script type="text/javascript">
alert("{{session()->get("Berhasil")}}")
</script>
@endif
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Absen</span>
      </nav>
      <div class="container-fluid p-2">
        <div class="row">
          <div class="col-8 offset-2">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top mx-auto d-block" style="border-radius: 50%" src="{{url(Auth::user()->foto)}}" alt="Foto Karyawan">
                <h6 class="card-subtitle center">{{ Auth::user()->user }}</h6>
                <h5 class="card-title center">{{ Auth::user()->nama }}</h5>
                <form action="{{route("karyawan.prosesAbsen")}}" method="post">
                  @csrf
                  @if($disable)
                    @if($sudah)
                      <button type="submit" class="btn btn-success" disabled id="submit">SUDAH ABSEN</button>
                    @else
                      <button type="submit" class="btn btn-danger" disabled id="submit">WAKTU ABSEN HABIS</button>
                    @endif
                  @else
                    @if($sudah)
                      <button type="submit" class="btn btn-success" disabled id="submit">SUDAH ABSEN</button>
                    @else
                      <button type="submit" class="btn btn-primary" id="submit">ABSEN</button>
                    @endif
                  @endif
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
