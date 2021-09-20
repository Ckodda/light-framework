<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'views/layouts/header.php'?>
    <title>Home | User</title>
</head>
<body>
<section class="d-flex vh-100 items-center">
    <div class="container">
        <h1>Welcome to home '<?=$alias?>'</h1>
        <a class="btn btn-secondary" href="<?=URL?>home-user/close/">Salir</a>
    </div>
</section>

</body>
<?php require 'views/layouts/footer.php'?>
</html>