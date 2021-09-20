<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'layouts/header.php';?>
    <title>LightFramework</title>
</head>
<body>
<section class="d-flex vh-100 items-center">
    <div class="container">
        <h1><?=$mensaje?></h1>
        <a class="btn btn-success" href="<?=URL?>login/">Iniciar sesión</a>
    </div>
</section>

</body>
<?php require 'layouts/footer.php'?>
</html>