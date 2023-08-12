<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
    <section class="clean-block clean-form">
        <div class="container">

            <div class="block-heading">
                <h2 id="purple"><strong>Seminar</strong> </h2>
            </div>

            <form action="" method="post" id="search">
                <input type="search" name="keyword" class="form-control" placeholder="Cari seminar -[ENTER]-" aria-label="Search" />
            </form><br>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($seminar as $row) : ?>
                    <div class="col">
                        <div class="card h-100 rounded-0">

                            <a href="/User/detail_seminar/<?= $row['id_seminar'] ?>">
                                <img src="/self-assets/cover/<?= $row['cover'] ?>" class="card-img-top rounded-0" id="card-home">
                                <div class="top-left btn 
                                <?php if ($row['kategori'] == 'daring') {
                                    echo 'btn-primary';
                                } elseif ($row['kategori'] == 'luring') {
                                    echo 'btn-success';
                                } elseif ($row['kategori'] == 'hybrid') {
                                    echo 'btn-warning';
                                } ?> rounded-0 btn-sm">
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
            </div><br>

        </div>
    </section>
</main>

<?php $this->endSection(); ?>