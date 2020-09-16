<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN PRODUK</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('karya.index')}}">
                <i class="nav-icon icon-drop"></i> Karyawan
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Setting
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pengumuman.show')}}">
                        <i class="nav-icon icon-puzzle"></i> Buat pengumuman
                    </a>
                </li>
            </ul>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="/rekap">
                        <i class="nav-icon icon-puzzle"></i> Rekap
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("admin.logout")}}">
                <i class="nav-icon icon-drop"></i> Keluar
            </a>
        </li>
    </ul>
</nav>
