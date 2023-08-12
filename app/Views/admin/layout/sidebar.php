<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link <?= $title == 'Admin' ? 'active' : '' ?>" href="/Admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Menu</div>
                    <a class="nav-link <?= $title == 'Kontak' ? 'active' : '' ?>" href="/Admin/tampil_kontak">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>Kontak Masuk
                    </a>
                    <a class="nav-link <?= $title == 'Seminar' ? 'active' : '' ?>" href="/Admin/tampil_seminar">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Daftar Seminar
                    </a>
                    <a class="nav-link <?= $title == 'Tambah Seminar' ? 'active' : '' ?>" href="/Admin/tambah_seminar">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>Tambah Seminar
                    </a>
                    <a class="nav-link <?= $title == 'Dokumentasi' ? 'active' : '' ?>" href="/Dokumentasi/tampil_dokumentasi">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Dokumentasi
                    </a>
                    <a class="nav-link <?= $title == 'Materi' ? 'active' : '' ?>" href="/Materi/tampil_materi">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Lihat Materi
                    </a>
                    <a class="nav-link <?= $title == 'Data Admin' ? 'active' : '' ?>" href="/Admin/tampil_admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Data Admin
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <a class="max text-white" href="/Login/logout">Logout</a><br>
                <a class="max text-white" href="/">Halaman Utama</a>
                <div class="small">Logged in as : <?= session()->get('username') ?></div>
            </div>
        </nav>
    </div>
</div>