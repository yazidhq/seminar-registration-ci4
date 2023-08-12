<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">
                            <div class="card p-3">
                                <section class="clean-block clean-form">
                                    <div class="container">
                                        <div class="block-heading">
                                            <h2 id="purple"><strong>Dokumentasi Seminar</strong></h2><br>
                                        </div>

                                        <?php if (session()->getFlashdata('unggah_dokumentasi')) : ?>
                                            <div class="alert alert-success">
                                                <?= session()->getFlashdata('unggah_dokumentasi') ?>
                                            </div>
                                        <?php elseif (session()->getFlashdata('hapus_dokumentasi')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('hapus_dokumentasi') ?>
                                            </div>
                                        <?php endif; ?>

                                        <form action="" method="post" id="search">
                                            <div class="form-outline">
                                                <input type="search" id="form1" name="keyword" class="form-control" placeholder="Masukkan pencarian dokumentasi seminar.." aria-label="Search" />
                                            </div>
                                        </form>
                                        <hr>

                                        <div class="row row-cols-1 row-cols-md-4 g-4">
                                            <?php foreach ($dokumentasi as $row) : ?>
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <?php $data = $row['id_seminar'] ?>
                                                        <?php $db = \Config\Database::connect(); ?>
                                                        <?php $seminar = $db->query("SELECT cover FROM seminar WHERE id_seminar = $data")->getRow() ?>
                                                        <img src="/self-assets/cover/<?= $seminar->cover; ?>" class="card-img-top">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><strong><?= $row['tema'] ?></strong></h4>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="/User/detail_dokumentasi/<?= $row['id_dok'] ?>" class="btn btn-success btn-sm rounded-0">Detail</a>
                                                            <a href="/Dokumentasi/hapus_dokumentasi/<?= $row['id_dok'] ?>" class="btn btn-danger delete-confirm btn-sm rounded-0">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>