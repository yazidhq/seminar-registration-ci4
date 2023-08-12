<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="mb-4">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">

                <div class="row mt-4">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4 rounded-0">
                            <div class="card-header">Kontak Masuk</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-chart-area"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('kontak')->countAllResults();
                                $rec = $query;
                                ?>
                                <strong><?= $rec ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Admin/tampil_kontak">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4 rounded-0">
                            <div class="card-header">Seminar</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-book-open"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('seminar')->countAllResults();
                                $rec = $query;
                                ?>
                                <strong><?= $rec ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Admin/tampil_seminar">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4 rounded-0">
                            <div class="card-header">Peserta Seminar</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-user"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $dosen = $db->table('dosen')->countAllResults();
                                $mahasiswa = $db->table('mahasiswa')->countAllResults();
                                $umum = $db->table('umum')->countAllResults();
                                $rec = $dosen + $mahasiswa + $umum;
                                ?>
                                <strong><?= $rec ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Admin/tampil_seminar">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4 rounded-0">
                            <div class="card-header">Dokumentasi</div>
                            <div class="card-body text-center h1">
                                <i class="fas fa-table"></i>
                                <?php
                                $db = \Config\Database::connect();
                                $query = $db->table('dokumentasi')->countAllResults();
                                $rec = $query;
                                ?>
                                <strong><?= $rec ?></strong>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/Dokumentasi/tampil_dokumentasi">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Seluruh Data Peserta Seminar
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>NPM/ NIP/ NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Instansi</th>
                                    <th>Jurusan</th>
                                    <th>Seminar yang diikuti</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>NPM/ NIP/ NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Instansi</th>
                                    <th>Jurusan</th>
                                    <th>Seminar yang diikuti</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($dosens as $row) : ?>
                                    <?php $data = $row['id_seminar'] ?>
                                    <?php $db = \Config\Database::connect(); ?>
                                    <?php $seminar = $db->query("SELECT tema FROM seminar WHERE id_seminar = $data")->getRow() ?>
                                    <tr>
                                        <td><?= $row['nip'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['wa'] ?></td>
                                        <td><?= $row['instansi'] ?></td>
                                        <td>Peserta Dosen</td>
                                        <td><?= $seminar->tema ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($mahasiswas as $row) : ?>
                                    <?php $data = $row['id_seminar'] ?>
                                    <?php $db = \Config\Database::connect(); ?>
                                    <?php $seminar = $db->query("SELECT tema FROM seminar WHERE id_seminar = $data")->getRow() ?>
                                    <tr>
                                        <td><?= $row['npm'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['wa'] ?></td>
                                        <td><?= $row['instansi'] ?></td>
                                        <td><?= $row['jurusan'] ?></td>
                                        <td><?= $seminar->tema ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($umums as $row) : ?>
                                    <?php $data = $row['id_seminar'] ?>
                                    <?php $db = \Config\Database::connect(); ?>
                                    <?php $seminar = $db->query("SELECT tema FROM seminar WHERE id_seminar = $data")->getRow() ?>
                                    <tr>
                                        <td><?= $row['nik'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['wa'] ?></td>
                                        <td>-</td>
                                        <td>Peserta Umum</td>
                                        <td><?= $seminar->tema ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- onpoint -->

<?php $this->endSection(); ?>