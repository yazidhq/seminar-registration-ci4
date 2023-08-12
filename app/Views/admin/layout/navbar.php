<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/admin">Admin</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="position-absolute top-10 end-0" style="margin-right: 1%;">
        <a href="/Admin/ubah_admin/<?= session()->get('id_admin') ?>" class="text-decoration-none text-white">
            <i class="fas fa-user"></i> Halo, <?= session()->get('nama') ?>
        </a>
    </div>
</nav>