<div class="sidebar">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      <div class="jajajaja">
        <a href="/karyawan" class="navbar-brand">DH ONLINE</a>
        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-label="Toggle navigation" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link absen" href="{{route('karyawan.absen')}}">
              <i class="material-icons" style="font-size: 1rem">done</i>
              ABSEN
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link logbook" href="{{route('karyawan.logbook')}}">
              <i class="material-icons" style="font-size: 1rem">book</i>
              LOGBOOK
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link rekap" href="{{route('karyawan.s')}}">
              <i class="material-icons" style="font-size: 1rem">history</i>
              RIWAYAT
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">
              <i class="material-icons" style="font-size: 1rem">login</i>
              LOG OUT
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
