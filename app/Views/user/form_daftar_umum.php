<?php $this->extend('user/layout/template'); ?>

<?php $this->section('content'); ?>

<?php
$db = \Config\Database::connect();
$dosen = $db->query("SELECT id_seminar FROM dosen WHERE id_seminar =" . $seminar['id_seminar']);
$mahasiswa = $db->query("SELECT id_seminar FROM mahasiswa WHERE id_seminar =" . $seminar['id_seminar']);
$umum = $db->query("SELECT id_seminar FROM umum WHERE id_seminar =" . $seminar['id_seminar']);

$rowDosen = $dosen->getNumRows();
$rowMahasiswa = $mahasiswa->getNumRows();
$rowUmum = $umum->getNumRows();

$total = $rowDosen + $rowMahasiswa + $rowUmum;

$kuota = $seminar['kuota'];
?>

<main class="page landing-page">
    <section class="clean-block clean-form dark" id="contact">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">

                        <img src="/self-assets/cover/<?= $seminar['cover'] ?>" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;">

                        <div class="card-body p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 px-md-2"><strong>Daftar Seminar</strong><br>
                                <?= $seminar['tema'] ?>
                            </h3>

                            <form action="/Peserta/tambah_umum/<?= $seminar['id_seminar'] ?>" method="post" class="px-md-2" id="search" onsubmit="return validateForm(event)">

                                <input type="hidden" id="id_seminar" name="id_seminar" value="<?= $seminar['id_seminar'] ?>">

                                <div class="mb-3">
                                    <label class="form-label" for="nik">NIK</label>
                                    <input class="form-control" type="text" id="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama Lengkap</label>
                                    <input class="form-control" type="text" id="nama" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email Aktif</label>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="wa">Nomor WhatsApp</label>
                                    <input class="form-control" type="number" id="wa" name="wa" required>
                                </div>

                                <br>

                                <div class="d-grid gap-2">
                                    <button class="btn rounded-0" id="btn-purple" type="submit">Daftar</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- konfirmasi daftar -->
<script>
    function validateForm(event) {
        event.preventDefault(); // Prevent form submission if required fields are empty

        const nik = document.getElementById('nik');
        const nama = document.getElementById('nama');
        const email = document.getElementById('email');
        const wa = document.getElementById('wa');

        if (nik.value.trim() !== '' && nama.value.trim() !== '' && email.value.trim() !== '' && wa.value.trim() !== '') {
            Swal.fire({
                title: 'Konfirmasi Pendaftaran',
                text: 'Apakah anda yakin data sudah diisi dengan benar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Daftar',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Form submission logic goes here
                    event.target.submit();
                }
            });
        } else {
            Swal.fire(
                'Error',
                'Please fill in all required fields.',
                'error'
            );
        }
    }
</script>
<!-- konfirmasi daftar -->

<!-- limit time -->
<script>
    const tanggalTujuan = new Date("<?= $seminar['periode'] ?>").getTime();
    const hitungMundur = setInterval(function() {
        const sekarang = new Date().getTime()
        const selisih = tanggalTujuan - sekarang

        const hari = Math.floor(selisih / (1000 * 60 * 60 * 24))
        const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60))
        const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60))
        const detik = Math.floor(selisih % (1000 * 60) / 1000)

        const daftar = document.getElementById('btn-purple')

        if (selisih < 0) {
            clearInterval(hitungMundur);
            Swal.fire({
                icon: 'error',
                title: 'Mohon Maaf',
                text: 'Pendaftaran telah ditutup',
                footer: '<a href="/User/seminar">cari seminar lainnya</a>'
            })
            daftar.innerHTML = "pendaftaran telah ditutup"
            daftar.disabled = true
        }

    }, 1000);
</script>
<!-- limit time -->

<!-- limit pendaftar -->
<script>
    const limit = setInterval(function() {
        const daftar = document.getElementById('btn-purple');
        if (<?= intval($kuota) <= $total ?>) {
            clearInterval(limit);
            daftar.innerHTML = 'Pendaftaran Ditutup';
            daftar.disabled = true;
            Swal.fire({
                title: 'Maaf',
                text: 'Kuota pendaftaran seminar ini telah habis',
                footer: '<a href="/ShowCard/allSeminar">cari seminar lainnya</a>'
            });
        }
    }, 1000)
</script>
<!-- limit pendaftar -->

<?php $this->endSection(); ?>