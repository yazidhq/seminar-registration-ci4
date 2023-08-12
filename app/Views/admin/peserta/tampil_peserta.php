<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main style="margin-bottom: 5%;">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header p-3">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img src="/self-assets/cover/<?= $seminar['cover'] ?>" class="img-fluid rounded-start" style="width: 350px; height: auto;">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><strong><?= ucfirst($seminar['tema']) ?></strong></h5>
                                                    <p class="card-text">Narasumber : <?= $seminar['narasumber'] ?> <br> Periode : <?= $seminar['periode'] ?> <br> Kuota Pendaftaran : <?= $seminar['kuota'] ?></p>
                                                    <a href="/Peserta/export_csv/<?= $seminar['id_seminar'] ?>">Download Excel (CSV)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table me-1"></i>
                                            Peserta <b><?= ucfirst($seminar['tema']) ?></b>
                                        </div>
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>
                                                        <th>NIP Dosen</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>WhatsApp</th>
                                                        <th>Asal Instansi</th>
                                                        <th>Jurusan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <!-- dosen -->
                                                    <tr>
                                                        <th>NIP Dosen</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>WhatsApp</th>
                                                        <th>Asal Instansi</th>
                                                        <th>Jurusan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php foreach ($dosen as $d) : ?>
                                                        <tr>
                                                            <td><?= $d['nip']; ?></td>
                                                            <td><?= $d['nama']; ?></td>
                                                            <td><?= $d['email']; ?></td>
                                                            <td><?= $d['wa']; ?></td>
                                                            <td><?= $d['instansi']; ?></td>
                                                            <td>NULL</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm delete-confirm" href="/Peserta/hapus_dosen/<?= $d['id_dosen'] ?>">Hapus</a>
                                                                <a class="btn btn-warning btn-sm" href="/Peserta/ubah_dosen/<?= $d['id_dosen'] ?>">Ubah</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                    <!-- mahasiswa -->
                                                    <tr>
                                                        <td><b>NPM Mahasiswa</b></td>
                                                        <td><b>Nama</b></td>
                                                        <td><b>Email</b></td>
                                                        <td><b>WhatsApp</b></td>
                                                        <td><b>Instansi</b></td>
                                                        <td><b>Jurusan</b></td>
                                                        <td><b>Aksi</b></td>
                                                    </tr>
                                                    <?php foreach ($mahasiswa as $m) : ?>
                                                        <tr>
                                                            <td><?= $m['npm']; ?></td>
                                                            <td><?= $m['nama']; ?></td>
                                                            <td><?= $m['email']; ?></td>
                                                            <td><?= $m['wa']; ?></td>
                                                            <td><?= $m['instansi']; ?></td>
                                                            <td><?= $m['jurusan']; ?></td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm delete-confirm" href="/Peserta/hapus_mahasiswa/<?= $m['id_mahasiswa'] ?>">Hapus</a>
                                                                <a class="btn btn-warning btn-sm" href="/Peserta/ubah_mahasiswa/<?= $m['id_mahasiswa'] ?>">Ubah</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                    <!-- umum -->
                                                    <tr>
                                                        <td><b>NIK Peserta Umum</b></td>
                                                        <td><b>Nama</b></td>
                                                        <td><b>Email</b></td>
                                                        <td><b>WhatsApp</b></td>
                                                        <td><b>Instansi</b></td>
                                                        <td><b>Jurusan</b></td>
                                                        <td><b>Aksi</b></td>
                                                    </tr>
                                                    <?php foreach ($umum as $u) : ?>
                                                        <tr>
                                                            <td><?= $u['nik']; ?></td>
                                                            <td><?= $u['nama']; ?></td>
                                                            <td><?= $u['email']; ?></td>
                                                            <td><?= $u['wa']; ?></td>
                                                            <td>NULL</td>
                                                            <td>NULL</td>
                                                            <td>
                                                                <a class="btn btn-danger btn-sm delete-confirm" href="/Peserta/hapus_umum/<?= $u['id_umum'] ?>">Hapus</a>
                                                                <a class="btn btn-warning btn-sm" href="/Peserta/ubah_umum/<?= $u['id_umum'] ?>">Ubah</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>