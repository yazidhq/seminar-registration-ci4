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
                                    <h2 id="purple"><strong>Kontak Masuk</strong></h2>
                                    <hr>
                                    <?php if (session()->getFlashdata('hapus_kontak')) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('hapus_kontak') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Num</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">No WhatsApp</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($kontak as $row) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $i++ ?></th>
                                                        <td><?= $row['nama']; ?></td>
                                                        <td><?= $row['wa']; ?></td>
                                                        <td><?= $row['email']; ?></td>
                                                        <td><?= $row['pesan']; ?></td>
                                                        <td><a class="btn btn-danger delete-confirm" href="/Admin/hapus_kontak/<?= $row['id_kontak'] ?>">Delete</a></td>
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