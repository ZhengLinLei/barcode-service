<?php
$mvc = new MVCcontroller();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/web.css">
    <link rel="shortcut icon" href="static/img/favicon.ico" type="image/x-icon">
    <title><?= $config["webName"]; ?></title>
</head>
<body>
    <div>
    <?php
    $files = $mvc->scanDir('./view/resource/img/web');

    foreach ($files as $key => $value) {
    ?>
    <img src="static/img/web/<?=$value?>">
    <?php
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>