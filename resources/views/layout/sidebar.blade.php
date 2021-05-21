<div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Indra
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ request()->is('pinjam*') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/pinjam') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('buku*') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/buku') }}">
                    <i class="material-icons">book</i>
                    <p>Buku</p>
                </a>
            </li>
            <li class="nav-item{{ request()->is('pegawai*') ? ' active' : ''}}">
                <a class="nav-link" href="{{ url('/pegawai') }}">
                    <i class="material-icons">badge</i>
                    <p>Pegawai</p>
                </a>
            </li>
        </ul>
    </div>
</div>