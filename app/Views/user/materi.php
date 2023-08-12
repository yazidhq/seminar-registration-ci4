<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
    <section class="clean-block clean-form">
        <div class="container">

            <div class="block-heading">
                <h2 id="purple"><strong>Materi Seminar</strong> </h2>
            </div>

            <form action="" method="post" id="search">
                <input type="search" name="keyword" class="form-control" placeholder="Cari materi seminar -[ENTER]-" aria-label="Search" />
            </form><br>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($materi as $row) : ?>
                    <div class="col">
                        <div class="card h-100">
                            <?php $data = $row['id_seminar'] ?>
                            <?php $db = \Config\Database::connect(); ?>
                            <?php $seminar = $db->query("SELECT cover FROM seminar WHERE id_seminar = $data")->getRow() ?>
                            <img src="/self-assets/cover/<?= $seminar->cover; ?>" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><strong><?= substr($row['tema'], 0, 35) ?>..</strong></h4>
                            </div>
                            <div class="btn-group">
                                <a href="/User/detail_materi/<?= $row['id_materi'] ?>" class="btn btn-outline-secondary btn-sm rounded-0">Lihat Materi</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
</main>

<?php $this->endSection(); ?>