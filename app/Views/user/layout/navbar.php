<!-- navbar start -->
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
        <a class="navbar-brand logo" href="/" id="purple">
            <img class="logo" src="/self-assets/img/gd.png">
            <a href="/" style="text-decoration: none;"><strong class="logo-text">Universitas Gunadarma</strong></a>
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?= $title == 'Seminar UG' ? 'active' : '' ?>" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= $title == 'Seminar' ? 'active' : '' ?>" href="/User/seminar">Seminar</a></li>
                <li class="nav-item"><a class="nav-link <?= $title == 'Kontak' ? 'active' : '' ?>" href="/User/kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link <?= $title == 'Materi Seminar' ? 'active' : '' ?>" href="/User/materi">Materi</a></li>
                <li class="nav-item"><a class="nav-link <?= $title == 'Dokumentasi Seminar' ? 'active' : '' ?>" href="/User/dokumentasi">Dokumentasi</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->