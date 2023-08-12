<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main style="margin-bottom: 5%;">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <div class="container-fluid px-4">
                <section class="clean-block clean-form">
                    <div class="container py-3 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-12 col-xl-12">
                                <div class="card p-3">

                                    <div class="block-heading">
                                        <h2 id="purple"><strong>Seminar</strong></h2>
                                        <hr>
                                        <?php if (session()->getFlashdata('tambah_seminar')) : ?>
                                            <div class="alert alert-success">
                                                <?= session()->getFlashdata('tambah_seminar') ?>
                                            </div>
                                        <?php elseif (session()->getFlashdata('ubah_seminar')) : ?>
                                            <div class="alert alert-warning">
                                                <?= session()->getFlashdata('ubah_seminar') ?>
                                            </div>
                                        <?php elseif (session()->getFlashdata('hapus_seminar')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('hapus_seminar') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <form action="" method="post" id="search">
                                        <div class="form-outline">
                                            <input type="search" id="form1" name="keyword" class="form-control" placeholder="Masukkan pencarian seminar.." aria-label="Search" />
                                        </div>
                                    </form>
                                    <hr>

                                    <div class="row row-cols-1 row-cols-md-4 g-4">
                                        <?php foreach ($seminar as $row) : ?>
                                            <div class="col">
                                                <div class="card h-100">

                                                    <img src="/self-assets/cover/<?= $row['cover'] ?>" class="card-img-top">
                                                    <div class="top-left btn 
                                                    <?php if ($row['kategori'] == 'daring') {
                                                        echo 'btn-primary';
                                                    } elseif ($row['kategori'] == 'luring') {
                                                        echo 'btn-info';
                                                    } elseif ($row['kategori'] == 'hybrid') {
                                                        echo 'btn-secondary';
                                                    } ?> btn-sm btn-sm rounded-0">
                                                        <strong style="text-transform: uppercase;color:white">
                                                            <?php if ($row['kategori'] == 'daring') {
                                                                echo 'Daring';
                                                            } elseif ($row['kategori'] == 'luring') {
                                                                echo 'Luring';
                                                            } elseif ($row['kategori'] == 'hybrid') {
                                                                echo 'Hybrid';
                                                            } ?>
                                                        </strong>
                                                    </div>

                                                    <div class="card-body">
                                                        <h4 class="card-title"><b><?= $row['tema'] ?></b></h4>
                                                    </div>

                                                    <div class="d-grid gap-2 mb-2">
                                                        <a class="btn btn-outline-secondary btn-sm rounded-0" href="/Peserta/tampil_peserta/<?= $row['id_seminar'] ?>">Lihat Peserta</a>
                                                        <a class="btn btn-outline-secondary btn-sm rounded-0" href="/Dokumentasi/unggah_dokumentasi/<?= $row['id_seminar'] ?>">Unggah Dokumentasi</a>
                                                        <a class="btn btn-outline-secondary btn-sm rounded-0" href="/Materi/unggah_materi/<?= $row['id_seminar'] ?>">Unggah Materi</a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a href="/User/detail_seminar/<?= $row['id_seminar'] ?>" class="btn btn-success btn-sm rounded-0">Detail</a>
                                                        <a href="/Admin/ubah_seminar/<?= $row['id_seminar'] ?>" class="btn btn-warning btn-sm rounded-0">Ubah</a>
                                                        <a href="/Admin/hapus_seminar/<?= $row['id_seminar'] ?>" class="btn btn-danger delete-confirm btn-sm rounded-0">Hapus</a>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div><br>

                                    <div class="mt-4 mb-4">
                                        <?= $pager->links('seminar', 'seminar_paginate'); ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>