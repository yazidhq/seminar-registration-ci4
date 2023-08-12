<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main style="margin-bottom: 5%;">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">
                            <div class="card p-3">

                                <div class="block-heading">
                                    <h2 id="purple"><strong>Data Admin</strong></h2>
                                    <a href="/Admin/tambah_admin">Tambah Data Admin</a>
                                    <hr>
                                    <?php if (session()->getFlashdata('tambah_admin')) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('tambah_admin') ?>
                                        </div>
                                    <?php elseif (session()->getFlashdata('ubah_admin')) : ?>
                                        <div class="alert alert-warning">
                                            <?= session()->getFlashdata('ubah_admin') ?>
                                        </div>
                                    <?php elseif (session()->getFlashdata('hapus_admin')) : ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('hapus_admin') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($admin as $row) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $i++ ?></th>
                                                        <td><?= $row['nama']; ?></td>
                                                        <td><?= $row['username']; ?></td>
                                                        <td>
                                                            <a class="btn btn-danger btn-sm delete-confirm" href="/Admin/hapus_admin/<?= $row['id_admin'] ?>">Hapus</a>
                                                            <a class="btn btn-warning btn-sm" href="/Admin/ubah_admin/<?= $row['id_admin'] ?>">Ubah</a>
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
            </section>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>