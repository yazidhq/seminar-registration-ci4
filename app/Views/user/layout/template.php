<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- favicon -->
    <link rel="icon" type="image/gif" href="/self-assets/img/gd.png">
    <!-- favicon -->

    <!-- self-assets -->
    <link rel="stylesheet" href="/self-assets/css/style.css">
    <!-- self-assets -->

    <!-- assets -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="/assets/css/seminar.css">
    <!-- assets -->

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">

</head>

<body>

    <!-- include & section untuk isi konten -->
    <?= $this->include('user/layout/navbar') ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('user/layout/footer') ?>
    <!-- end -->

    <!-- self-assets -->
    <script src="/self-assets/js/script.js"></script>
    <!-- self-assets -->

    <!-- assets -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="/assets/js/vanilla-zoom.js"></script>
    <script src="/assets/js/theme.js"></script>
    <!-- assets -->

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>

</body>

</html>