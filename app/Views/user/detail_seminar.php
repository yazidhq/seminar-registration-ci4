<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<?php
$db = \Config\Database::connect();
$dosen = $db->query("SELECT id_seminar FROM dosen WHERE id_seminar =" . $seminar['id_seminar']);
$mahasiswa = $db->query("SELECT id_seminar FROM mahasiswa WHERE id_seminar =" . $seminar['id_seminar']);
$umum = $db->query("SELECT id_seminar FROM umum WHERE id_seminar =" . $seminar['id_seminar']);

$rowDosen = $dosen->getNumRows();
$rowMahasiswa = $mahasiswa->getNumRows();
$rowUmum = $umum->getNumRows();

$total = $rowDosen + $rowMahasiswa + $rowUmum;

$kuota = $seminar['kuota'];
?>

<section class="clean-block clean-hero" style="background-image:url(&quot;/self-assets/img/head-detail.jpeg&quot;);color:rgba(0, 0, 0, 0.4);  margin-top: -15%">
    <div class="text" style="margin-top: 20%">
        <h1 class="title"><strong>Explor Our Seminar <br> HERE!</strong></h1>
    </div>
</section>

<!-- head -->
<div class="container-fluid">
    <div class="container">
        <div class="row pb-5 header-min-height">
            <div class="col-lg-10 pt-5">
                <div class="row">
                    <div class="col-lg-3 col-sm-5 col-md-4 mb-sm-7" id="seminarCover">
                        <div class="wrapper-kelas rounded shadow minus-top logo-center white-bg">
                            <img src="/self-assets/cover/<?= $seminar['cover'] ?>" class="img-fluid mt-3">
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-7 col-md-8 pl-xl-4 pl-lg-5 pl-sm-4">
                        <h1><b><?= ucfirst($seminar['tema']) ?></b></h1>
                        <h2 id="title"></h2>
                        <small class="text-muted d-block mb-3">
                            Diselenggarakan oleh <strong><?= ucfirst($seminar['narasumber']) ?></strong> secara <strong style="text-transform: uppercase;"><?= $seminar['kategori'] ?></strong>
                        </small>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 pt-5 text-left">
                <span class="text-muted d-block">Terbuka Hingga: </span>
                <b><?= $seminar['periode'] ?></b>
                <p id="timing"></p>
                <br>
                <span class="text-muted d-block mb-2" style="margin-top: -7%;">Maks Kuota:</span>
                <b><?= $seminar['kuota'] ?> (<?= $total ?> / <?= $seminar['kuota'] ?>)</b>
                <p id="habis"></p>
            </div>
        </div>
    </div>
</div>
<!-- head -->

<!-- desc -->
<div class="container-fluid">
    <div class="container">

        <div class="tab-menu-detail">
            <div class="tab-wrapper">
                <nav class="nav nav-tabs list" id="myTab">
                    <a class="nav-item nav-link active" href="#" role="tab">
                        Deskripsi
                    </a>
                </nav>
            </div>
        </div>

        <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row tab-content-detail">
                    <div class="col-lg-9 order-lg-1 order-2 col-lg-push-3 pr-lg-5">
                        <div class="fr-view mb-5">
                            <h3 dir="ltr">
                                <img src="/self-assets/cover/<?= $seminar['cover'] ?>" class="img-fluid">
                            </h3>
                            <h3 dir="ltr">
                                <strong>Informasi:</strong>
                            </h3>
                            <hr>
                            <div style="text-align: justify;">
                                <div dir="ltr">
                                    <?= $seminar['deskripsi'] ?>
                                </div><br>
                                <div dir="ltr">
                                    Mari bergabung bersama dengan <strong><?= $seminar['narasumber'] ?></strong> dengan tema
                                    <strong>"<?= $seminar['tema'] ?>"</strong>. Kuota pendaftaran terbatas, hanya <strong><?= $seminar['kuota'] ?></strong> kuota, silahkan mendaftar.
                                </div>
                            </div>
                            <hr>
                            <p>
                                <strong><span style="font-size:24px;">FAQ:</span></strong>
                            </p>
                            <div style="text-align: justify">
                                <p>
                                    1. Apakah setelah mendaftar saya perlu konfirmasi bahwa telar mendaftar?
                                    <br>
                                    <em>
                                        Jawab: Kamu tidak perlu melakukan konfirmasi. Setelah mendaftar, silahkan join ke WhatsApp group yang disediakan.
                                    </em>
                                </p>
                                <p>
                                    2. Apakah saya bisa mendapatkan sertifikat setelah acara berlangsung?
                                    <br>
                                    <em>Jawab: Sertifikat akan dikirim melalui E-mail/ WhatsApp oleh panitia.</em>
                                </p>
                                <p>
                                    3. Darimana saya bisa mendapatkan informasi susunan atau rundown acara yang akan diselenggarakan?
                                    <br>
                                    <em>Jawab: Kamu akan mendapatkan informasi tersebut melalui WhatsApp group sesuai seminar yang kamu ikuti.</em>
                                </p>
                                <p>
                                    4. Apakah saya perlu mengisi ulang formuir pendaftaran jika ada kesalahan yang saya isikan?
                                    <br>
                                    <em>Jawab: Kamu bisa menghubungi kami di halaman <a href="/Pages/contact" style="text-decoration: none;" id="purple"><b>Kontak</b></a> untuk melakukan konfirmasi kesalahan.</em>
                                </p>
                            </div>
                            <a href="/" class="btn btn-success rounded-0">Halaman Utama</a>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-2 order-1 pl-lg-4 mb-5 event-info">
                        <div class="mb-5" style="text-align: justify;">
                            <h4><strong>Pendaftaran Seminar</strong></h4>
                            <p>Silakan mendaftar untuk mengikuti seminar sebagai peserta</p>

                            <!-- status -->
                            <div class="d-grid gap-2">
                                <button dbuttonta-toggle="modal" class="btn rounded-0" id="btn-purple" name="btn-daftar" onclick="openForm()">Daftar Seminar</button>
                            </div>

                            <div class="form-popup" id="myForm">
                                Daftar sebagai:
                                <div class="d-grid gap-2">
                                    <div class="btn-group">
                                        <a href="/User/form_daftar_dosen/<?= $seminar['id_seminar'] ?>" class="btn btn-success btn-sm rounded-0" id="href">Dosen</a>
                                        <a href="/User/form_daftar_mahasiswa/<?= $seminar['id_seminar'] ?>" class="btn btn-primary btn-sm rounded-0" id="href">Mahasiswa</a>
                                        <a href="/User/form_daftar_umum/<?= $seminar['id_seminar'] ?>" class="btn btn-warning btn-sm rounded-0" id="href">Umum</a>
                                    </div>
                                </div>
                            </div>
                            <!-- status -->

                        </div>
                        <div class="mb-5">
                            <div class="text-for-element">
                                <h4><strong>Jadwal Pelaksanaan</strong></h4>
                            </div>
                            <div class="row">
                                <div class="col-sm-9"><?= $seminar['pelaksanaan'] ?></div>
                            </div>
                        </div>
                        <div class="mb-5" style="text-align: justify;">
                            <h4><strong>Tempat Pelaksanaan</strong></h4>
                            <?php if ($seminar['kategori'] == 'luring' || $seminar['kategori'] == 'hybrid') : ?>
                                <div class="text-for-element">
                                    Alamat Penyelenggaraan : <br>
                                    <i class="bi bi-pin-map"></i> <?= $seminar['tempat'] ?>
                                </div>
                            <?php elseif ($seminar['kategori'] == 'daring') : ?>
                                <p>Pelaksanaan diselenggarakan <br> secara
                                    <strong style="text-transform: uppercase;">Daring</strong>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>


        <div class="block-heading text-center mb-4">
            <h2 id="purple"><strong>Explore seminar lainnya</strong></h2>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php foreach ($seminars as $row) : ?>
                <div class="col">
                    <div class="card h-100 rounded-0">
                        <a href="/User/detail_seminar/<?= $row['id_seminar'] ?>">
                            <img src="/self-assets/cover/<?= $row['cover'] ?>" class="card-img-top rounded-0" id="card-home">
                            <div class="top-left btn <?= $row['kategori'] == 'daring' ? 'btn-success' : 'btn-primary' ?> rounded-0 btn-sm">
                                <strong style="text-transform: uppercase;color:white"><?= $row['kategori'] == 'daring' ? 'daring' : 'luring' ?></strong>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="/User/detail_seminar/<?= $row['id_seminar'] ?>" class="text-decoration-none text-dark">
                                <h4 class="card-title"><strong><?= substr($row['tema'], 0, 27) ?>..</strong></h4>
                            </a>
                        </div>
                        <div class="container text-center mb-3 text-muted">
                            <?= $row['kategori'] == 'daring' ? '' :  '<i class="bi bi-pin-map"></i> ' . substr($row['tempat'], 0, 27) . '..' ?>
                        </div>
                        <div class="container text-center mb-3" id="purple">
                            <strong><?= $row['pelaksanaan'] ?></strong>
                        </div>
                        <a href="/User/detail_seminar/<?= $row['id_seminar'] ?>" class="btn btn-outline-secondary rounded-0">Read More</a>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg text-lg-left">
                                    <small class="text-muted" id="timing">Hingga: <?= substr($row['periode'], 0, 12) ?></small>
                                </div>
                                <div class="col-lg-auto text-lg -right">
                                    <small class="text-muted">Kuota : <?= $row['kuota'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="/User/seminar" class="btn text-center rounded-0" id="btn-purple">Lihat Lebih Banyak</a>
            </div>
        </div><br><br><br>

    </div>
</div>
<!-- desc -->

<!-- limit time -->
<script>
    const tanggalTujuan = new Date("<?= $seminar['periode'] ?>").getTime();
    const hitungMundur = setInterval(function() {
        const sekarang = new Date().getTime();
        const selisih = tanggalTujuan - sekarang;

        const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
        const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
        const detik = Math.floor(selisih % (1000 * 60) / 1000);

        const bg = document.getElementById('timing');
        const daftar = document.getElementById('btn-purple');
        const href = document.getElementById('href');
        bg.innerHTML = 'Waktu tersisa: <br>' + hari + ' hari ' + jam + ':' + menit + ':' + detik;

        if (selisih < 0) {
            clearInterval(hitungMundur);
            bg.innerHTML = 'Waktu telah abis';
            daftar.innerHTML = "Pendaftaran Ditutup";
            daftar.disabled = true;
            href.classList.add('disabled-link');
            Swal.fire({
                title: 'Mohon Maaf',
                text: 'Waktu pendaftaran seminar ini telah berakhir',
                footer: '<a href="/User/seminar">cari seminar lainnya</a>'
            });
        }

    }, 1000);
</script>
<!-- limit time -->

<!-- limit pendaftar -->
<script>
    const limit = setInterval(function() {
        const habis = document.getElementById('habis');
        const daftar = document.getElementById('btn-purple');
        const href = document.getElementById('href');
        if (<?= intval($kuota) <= $total ?>) {
            clearInterval(limit);
            habis.innerHTML = "Kuota Habis"
            daftar.innerHTML = 'Pendaftaran Ditutup';
            daftar.disabled = true;
            href.classList.add('disabled-link');
            Swal.fire({
                title: 'Maaf',
                text: 'Kuota pendaftaran seminar ini telah habis',
                footer: '<a href="/User/seminar">cari seminar lainnya</a>'
            });
        }
    }, 1000)
</script>
<!-- limit pendaftar -->

<?php $this->endSection(); ?>