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

                                    <div class="block-heading">
                                        <h5 id="purple"><strong>ubah materi</strong></h5>
                                        <hr>
                                    </div>

                                    <form action="/Materi/proses_ubah_materi/<?= $materi['id_materi'] ?>" method="post" enctype="multipart/form-data">

                                        <h2 id="purple"><strong><?= ucfirst($seminar['tema']) ?></strong></h2><br>
                                        <input type="hidden" id="id_seminar" name="id_seminar" value="<?= $seminar['id_seminar'] ?>">
                                        <input type="hidden" id="tema" name="tema" value="<?= $seminar['tema'] ?>">
                                        <input type="hidden" name="oldMateri" value="<?= $materi['materi'] ?>">

                                        <!--  materi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="materi">Materi Seminar</label>
                                            <div class="embed-responsive">
                                                <object data="/self-assets/materi/<?= $materi['materi']; ?>" type="application/pdf" width="100%" height="400px"></object>
                                            </div>
                                            <input style="display:none;" type="file" id="materi" name="materi">
                                            <div class="d-grid gap-2">
                                                <label class="btn btn-outline-dark" class="custom-file-label" for="materi">Ubah file : <?= $materi['materi']; ?></label>
                                            </div>
                                        </div>
                                        <!-- materi -->

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-dark" type="submit">Submit Ubah Materi</button>
                                        </div>

                                    </form>

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