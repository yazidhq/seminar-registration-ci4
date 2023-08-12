<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<!-- contact start -->
<main class="page landing-page">
    <section class="clean-block clean-form">
        <div class="container">
            <div class="block-heading">
                <div id="contact">
                    <h2 id="purple"><strong>Kontak Kami</strong></h2>
                    <p>Media Information Center</p>
                    <p>Jl. Margonda Raya 100, Depok</p>
                    <p>West Java, INDONESIA - 16424</p>
                    <p>+62 - 21 - 78881112 ext. 234</p>
                    <p>email : mediacenter [@] gunadarma.ac.id</p>
                </div>
            </div>
            <form action="/Admin/simpan_kontak" method="post">
                <?php if (session()->getFlashdata('simpan_kontak')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('simpan_kontak') ?>
                    </div>
                <?php endif; ?>
                <?php csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="wa">Nomor WhatsApp</label>
                    <input class="form-control" type="number" id="wa" name="wa" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="pesan">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn rounded-0" id="btn-purple" type="submit">Send</button>
                </div>
            </form>
        </div>
    </section>
</main>
<!-- contact end -->

<?php $this->endSection(); ?>