<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="mb-5">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-12">
                            <div class="card p-3">

                                <div class="container-fluid mt-4 px-4">

                                    <?php if (isset($dokumentasi['id_dok'])) : ?>
                                        <div class="alert alert-success" role="alert">
                                            Dokumentasi telah diunggah
                                        </div>
                                    <?php else : ?>

                                        <div class="block-heading">
                                            <h5 id="purple"><strong>unggah dokumentasi</strong></h5>
                                            <hr>
                                        </div>

                                        <form action="/Dokumentasi/proses_unggah_dokumentasi" method="post" enctype="multipart/form-data">

                                            <h2 id="purple"><strong><?= ucfirst($seminar['tema']) ?></strong></h2><br>
                                            <input type="hidden" id="id_seminar" name="id_seminar" value="<?= $seminar['id_seminar'] ?>">
                                            <input type="hidden" id="tema" name="tema" value="<?= $seminar['tema'] ?>">

                                            <!-- Image Upload -->
                                            <div class="mb-3">
                                                <label class="form-label" for="img1">Gambar 1</label>
                                                <input class="form-control" type="file" id="img1" name="img1">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="img2">Gambar 2</label>
                                                <input class="form-control" type="file" id="img2" name="img2">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="img3">Gambar 3</label>
                                                <input class="form-control" type="file" id="img3" name="img3">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="img4">Gambar 4</label>
                                                <input class="form-control" type="file" id="img4" name="img4">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="img5">Gambar 5</label>
                                                <input class="form-control" type="file" id="img5" name="img5">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="img6">Gambar 6</label>
                                                <input class="form-control" type="file" id="img6" name="img6">
                                            </div>
                                            <!-- Image -->

                                            <div class="d-grid gap-2">
                                                <button class="btn btn-dark" type="submit">Submit Dokumentasi</button>
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