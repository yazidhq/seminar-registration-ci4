<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<?php $data = $dokumentasi['id_seminar'] ?>
<?php $db = \Config\Database::connect(); ?>
<?php $seminar = $db->query("SELECT tema, cover FROM seminar WHERE id_seminar = $data")->getRow() ?>

<main class="page landing-page">
    <section class="clean-block clean-form">
        <div class="container">

            <div class="block-heading">
                <h2 id="purple">DOKUMENTASI</h2>
                <h1><strong><?= ucfirst($seminar->tema) ?></strong></h1>
            </div>

            <section class="portfolio-block projects-cards">

                <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
                    <div class="row py-3 shadow-5">
                        <div class="col-12 mb-1">
                            <div class="lightbox">

                                <img src="/self-assets/cover/<?= $seminar->cover ?>" class="ecommerce-gallery-main-img active w-100" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img1'] ?>">
                            </div>
                        </div>
                        <div class=" col-md-6 col-lg-4">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img2'] ?>">
                            </div>
                        </div>
                        <div class=" col-md-6 col-lg-4">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img3'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img4'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img5'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card border-0"><img class="card-img-top scale-on-hover" src="/self-assets/dokumentasi/<?= $dokumentasi['img6'] ?>">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>

</main>

<?php $this->endSection(); ?>