<?php $this->extend('admin/layout/template'); ?>

<?php $this->section('content'); ?>

<main style="margin-bottom: 5%;">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">

            <section class="clean-block clean-form">
                <div class="container py-3 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-12 col-xl-6">
                            <div class="card p-3">

                                <main class="page landing-page">
                                    <section class="clean-block clean-form">
                                        <div class="container">
                                            <h3>
                                                <strong>
                                                    Ubah Data Admin
                                                </strong>
                                            </h3>
                                            <hr>
                                            <form action="/Admin/proses_ubah_admin/<?= $admin['id_admin'] ?>" method="post">
                                                <?php csrf_field(); ?>

                                                <div class="mb-3">
                                                    <label class="form-label" for="nama">Nama Lengkap</label>
                                                    <input class="form-control" type="text" id="nama" name="nama" value="<?= $admin['nama'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="username">Username</label>
                                                    <input class="form-control" type="text" id="username" name="username" value="<?= $admin['username'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input class="form-control" type="password" id="password" name="password" value="<?= substr($admin['password'], 0, 15) ?>">
                                                </div><br>

                                                <div class="mb-3 d-grid gap-2">
                                                    <button class="btn btn-dark" type="submit">Ubah</button>
                                                </div>

                                            </form>
                                        </div>
                                    </section>
                                </main>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>