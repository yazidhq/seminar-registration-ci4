<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<br><br><br><br><br><br><br><br><br><br>
<main class="page landing-page">
    <div class="container">
        <div class="block-heading">
            <div class="row">
                <div class="col">
                    <div class="jumbotron text-center thankyou">
                        <h1 style="font-size: 350%;"><b>Thank You!</b></h1>

                        <p class="lead">Terimakasih mendaftar <?= $seminar['tema'] ?></p>
                        <hr>

                        <div class="lead mb-3">
                            <div class="alert alert-danger" role="alert">
                                ATTENTION! Harap masuk kedalam Group WhatsApp untuk informasi pelaksanaan!
                            </div>

                            <div class="d-grid gap-2">
                                <div class="btn-group">
                                    <a href="<?= $seminar['wag1'] ?>" class="btn rounded-0" id="btn-purple" target="_blank">Link WhatsApp Group 1</a>
                                    <a href="<?= $seminar['wag1'] ?>" class="btn btn-primary rounded-0" target="_blank">Link WhatsApp Group 2</a>
                                    <a href="<?= $seminar['wag1'] ?>" class="btn rounded-0" id="btn-purple" target="_blank">Link WhatsApp Group 3</a>
                                </div>
                            </div>

                        </div>

                        <div class="lead mb-2">
                            <a class="btn btn-outline-dark" href="/" role="button">Kembali ke Halaman Utama</a>
                        </div>

                        <p>Having trouble? <a href="/User/kontak">Contact us</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<br><br><br><br><br><br><br>

<?php $this->endSection(); ?>