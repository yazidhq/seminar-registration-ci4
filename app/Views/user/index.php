<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">

    <!-- home start -->
    <section class="clean-block clean-hero" style="background-image:url(&quot;self-assets/img/head.gif&quot;);color:rgba(113, 51, 142, 0.4);  margin-top: -15%">
        <div class="text" style="margin-top: 17%">
            <div class="col-lg-2 rounded mx-auto d-block logo-cover">
                <img src="/self-assets/img/gd.png" class="w-100" />
            </div>
            <h2 class="title mt-3"><strong>Website Seminar <br> Universitas Gunadarma</strong></h2>
        </div>
    </section>
    <section class="clean-block">
        <marquee bgcolor="#471a53" class="marq text-light">The official website for information on seminars held with Gunadarma University. If you have any questions, contact us via the contact menu</marquee>
    </section>
    <!-- home end -->

    <!-- Seminar List Start -->
    <section class="clean-block clean-form">
        <div class="container" style="margin-top: -8%;">
            <div class="block-heading">
                <h2 id="purple"><strong>Seminar Terbaru</strong></h2>
            </div>

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

            <div class="d-grid gap-2">
                <a href="/User/seminar" class="btn text-center rounded-0" id="btn-purple">Lihat Seluruh Daftar Seminar</a>
            </div>

            <div class="mt-4 mb-4">
                <?= $pager->links('seminar', 'seminar_paginate'); ?>
            </div>

            <hr>

        </div>
    </section>
    <!-- Seminar List -->

    <div class="bg-light">
        <section class="container clean-block clean-form pt-5">
            <div class="container">
                <div class="row g-0" style="margin-right: 5%;margin: bottom -5px">
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: right;">
                            <h5 class="card-title h3" style="font-size:360%">Participating in seminars offered by <span style="color: #71338e;font-weight:bold">Gunadarma University</span> provides the advantage of convenience.</h5>
                            <p class="card-text">
                                Gunadarma University seminars provide convenient participation from anywhere, <br> eliminating travel and accommodation costs, and allowing <br> seamless integration into daily routines.
                            </p>
                            <a class="btn text-white rounded-1" id="btn-purple" href="/User/seminar">Explore Now !</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="/self-assets/img/speaker.jpg" class="img-fluid rounded-start" width="90%" style="border-radius: 40%; margin-left:5%">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Gallery -->
    <section class="clean-block slider">

        <div class="container">
            <div>
                <h2 id="purple" class="text-center mb-2 pt-4"><strong>Galeri & Dokumentasi</strong></h2>
                <figure class="text-center mb-4">
                    <blockquote class="blockquote">
                        <p>“Life is a gift, and it offers us the privilege, opportunity, and responsibility to give something back by becoming more.”</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Anthony Robbins</cite>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img1'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img2'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img3'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img4'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img5'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <img src="/self-assets/dokumentasi/<?= $dokumentasi['img6'] ?>" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                </div>
            </div>
        </div>

        <div class="container">
            <div id="slider">
                <h2 id="purple" class="text-center mb-3 pt-4"><strong>Universitas Gunadarma</strong></h2>
                <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug2.jpeg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug3.jpeg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug4.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug5.jpg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug6.jpeg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug7.jpeg" alt="Slide Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 d-block" src="/self-assets/img/gall/ug8.jpeg" alt="Slide Image">
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="5"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="6"></li>
                    </ol>
                </div>
            </div>
        </div>

    </section>
    <!-- Gallery -->


</main>

<?php $this->endSection(); ?>