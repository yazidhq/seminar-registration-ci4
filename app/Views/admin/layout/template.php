<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>

    <!-- favicon -->
    <link rel="icon" type="image/gif" href="/self-assets/img/gd.png">
    <!-- favicon -->

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="/assets-admin/css/styles.css" rel="stylesheet" />

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

</head>

<body class="sb-nav-fixed">

    <?= $this->include('admin/layout/sidebar') ?>
    <?= $this->include('admin/layout/navbar') ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('admin/layout/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="/assets-admin/assets/demo/chart-area-demo.js"></script>
    <script src="/assets-admin/assets/demo/chart-bar-demo.js"></script>
    <script src="/assets-admin/assets/demo/chart-pie-demo.js"></script>
    <script src="/assets-admin/assets/demo/datatables-demo.js"></script>
    <script src="/assets-admin/js/datatables-simple-demo.js"></script>
    <script src="/assets-admin/js/scripts.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- konfirmasi hapus data-->
    <script>
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');

            Swal.fire({
                icon: 'question',
                title: 'Hapus data?',
                text: 'Data akan terhapus dan tidak bisa dikembalikan',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',

            }).then((result) => {
                if (result.value) {
                    window.location.href = url;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    event.preventDefault();
                }
            })
        });
    </script>

</body>

</html>