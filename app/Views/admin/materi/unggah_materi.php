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

                                <div class="container-fluid mt-4 px-4">

                                    <?php if (isset($materi['id_materi'])) : ?>
                                        <div class="alert alert-success" role="alert">
                                            Materi telah diunggah
                                        </div>
                                    <?php else : ?>

                                        <div class="block-heading">
                                            <h5 id="purple"><strong>unggah materi</strong></h5>
                                            <hr>
                                        </div>

                                        <form action="/Materi/proses_unggah_materi" method="post" enctype="multipart/form-data">

                                            <h2 id="purple"><strong><?= ucfirst($seminar['tema']) ?></strong></h2><br>
                                            <input type="hidden" id="id_seminar" name="id_seminar" value="<?= $seminar['id_seminar'] ?>">
                                            <input type="hidden" id="tema" name="tema" value="<?= $seminar['tema'] ?>">

                                            <!-- materi Upload -->
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="materi" name="materi">
                                            </div>
                                            <!-- materi -->

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-dark" type="submit">Submit Materi</button>
                                            </div>

                                        </form>

                                    <?php endif; ?>

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