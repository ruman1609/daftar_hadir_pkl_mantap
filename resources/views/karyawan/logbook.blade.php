@extends('layouts.karyawan')
@section ('content')
    <div class="isi">
      <nav class="navbar navbar-light bg-light inti">
        <span class="navbar-brand">Isi Logbook</span>
      </nav>
      <div class="container-fluid p-3">
        <form action="{{route('logbook.add')}}" method="post">
        @csrf
          <div class="form-group row">
            <div class="col-md-6">
              <input readonly name="tanggal" value="{{date('Y-m-d')}}" class="form-control">
            </div>
          </div>
          <input type="hidden" name="id_karyawan" value="1815025061">
          <div class="form-group">
            <textarea name="logbook" rows="10" required class="form-control" placeholder="Isi Logbook di sini"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
    <script src="{{url('/own/js/bootstrap.js')}}"></script>
    <script type="text/javascript">
      let as = document.querySelector(".logbook");
      as.classList.add("active");
    </script>
@endsection
