<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $data = $materi['id_seminar'] ?>
    <?php $db = \Config\Database::connect(); ?>
    <?php $seminar = $db->query("SELECT tema FROM seminar WHERE id_seminar = $data")->getRow() ?>
    <title>Materi <?= $seminar->tema; ?></title>
    <!-- favicon -->
    <link rel="icon" type="image/gif" href="/assets/img/tech/Logo_Gundar.png">
    <!-- favicon -->
</head>

<body>
    <div class="embed-responsive">
        <object data="/self-assets/materi/<?= $materi['materi']; ?>" type="application/pdf" width="100%" height="1000px"></object>
    </div>
</body>

</html>