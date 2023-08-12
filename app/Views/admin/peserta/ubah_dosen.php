<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main style="margin-bottom: 5%;">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <section class="clean-block clean-form dark" id="contact">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-8 col-xl-6">
                            <div class="card rounded-3">

                                <div class="card-body p-md-5">

                                    <h3 class="mb-4 pb-2 pb-md-0 px-md-2"><strong>UBAH DATA DOSEN</strong><br>
                                        <strong></strong>
                                    </h3>

                                    <form action="/Peserta/proses_ubah_dosen" method="post" class="px-md-2" id="search">

                                        <input type="hidden" id="id_seminar" name="id_seminar" value="<?= $dosen['id_seminar'] ?>">

                                        <div class="mb-3">
                                            <label class="form-label" for="nip">NIP Dosen</label>
                                            <input class="form-control" type="text" id="nip" name="nip" value="<?= $dosen['nip'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="nama">Nama Lengkap</label>
                                            <input class="form-control" type="text" id="nama" name="nama" value="<?= $dosen['nama'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email Aktif</label>
                                            <input class="form-control" type="email" id="email" name="email" value="<?= $dosen['email'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="wa">Nomor WhatsApp</label>
                                            <input class="form-control" type="number" id="wa" name="wa" value="<?= $dosen['wa'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="instansi">Asal Instansi</label>
                                            <input class="form-control" type="text" id="instansi" name="instansi" value="<?= $dosen['instansi'] ?>">
                                        </div>

                                        <br>

                                        <div class=" d-grid gap-2">
                                            <button class="btn btn-dark rounded-0" type="submit">Ubah</button>
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