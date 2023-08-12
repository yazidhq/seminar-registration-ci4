<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main class="mb-5">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-6">
                            <div class="card p-3">

                                <div class="container-fluid mt-4 px-4">

                                    <div class="block-heading">
                                        <h2 id="purple"><strong>UBAH SEMINAR</strong></h2>
                                        <hr>
                                    </div>

                                    <form action="/Admin/proses_ubah_seminar/<?= $seminar['id_seminar'] ?>" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="oldCover" value="<?= $seminar['cover'] ?>">

                                        <div class="mb-3">
                                            <label class="form-label" for="tema">Tema Seminar</label>
                                            <input class="form-control" type="text" id="tema" name="tema" placeholder="Tema Seminar" value="<?= $seminar['tema'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="kategori">Kategori</label>
                                            <select class="form-control" id="kategori" name="kategori">
                                                <option hidden><?= $seminar['kategori'] ?></option>
                                                <option>daring</option>
                                                <option>luring</option>
                                                <option>hybrid</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="tempat">Tempat Pelaksanaan (Jika Luring)</label>
                                            <input class="form-control" type="text" id="tempat" name="tempat" placeholder="Tempat Pelaksanaan" value="<?= $seminar['tempat'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="narasumber">Narasumber</label>
                                            <input class="form-control" type="text" id="narasumber" name="narasumber" placeholder="Narasumber Seminar" value="<?= $seminar['narasumber'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi Seminar"><?= $seminar['deskripsi'] ?></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="kontak">Kontak</label>
                                            <input class="form-control" type="text" id="kontak" name="kontak" placeholder="Kontak yang dapat dihubungi" value="<?= $seminar['kontak'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="periode">Batas Akhir (Format : Jul 27, 2022 14:00:00)</label>
                                            <input class="form-control" type="text" id="periode" name="periode" required placeholder="Jul 27, 2022 14:00:00" value="<?= $seminar['periode'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="kuota">Kuota</label>
                                            <input class="form-control" type="text" id="kuota" name="kuota" placeholder="Batas kuota pendaftaran" value="<?= $seminar['kuota'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="pelaksanaan">Pelaksanaan (Format : 25 Jun 2022 09:00)</label>
                                            <input class="form-control" type="text" id="pelaksanaan" name="pelaksanaan" required placeholder="25 Jun 2022 09:00" value="<?= $seminar['pelaksanaan'] ?>">
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="mb-3">
                                            <label class="form-label" for="cover">Cover Seminar</label>
                                            <div class="col-sm-12">
                                                <img src="/self-assets/cover/<?= $seminar['cover']; ?>" class="img-thumbnail img-preview" width="100%">
                                            </div>
                                            <input style="display:none;" type="file" id="cover" name="cover">
                                            <div class="d-grid gap-2">
                                                <label class="btn btn-dark" for="cover">Ubah cover : <?= $seminar['cover'] ?></label>
                                            </div>
                                        </div>
                                        <!-- Image -->

                                        <div class="mb-3">
                                            <label class="form-label" for="wag1">WhatsApp Group 1</label>
                                            <input class="form-control" type="text" id="wag1" name="wag1" placeholder="WhatsApp Group 1" value="<?= $seminar['wag1'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="wag2">WhatsApp Group 2</label>
                                            <input class="form-control" type="text" id="wag2" name="wag2" placeholder="WhatsApp Group 2" value="<?= $seminar['wag2'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="wag3">WhatsApp Group 3</label>
                                            <input class="form-control" type="text" id="wag3" name="wag3" placeholder="WhatsApp Group 3" value="<?= $seminar['wag3'] ?>">
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-dark" type="submit">Submit</button>
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