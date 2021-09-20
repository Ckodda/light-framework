<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'views/layouts/header.php'?>
    <title>Admin | Dashboard</title>
</head>
<body>
<section class="d-flex items-center vh-100">
    <div class="container">
        <h1>Hello manager '<?=$alias?>'</h1>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Name</th>
                <th>Role</th>
            </tr>

            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>

                <tr<?php if($user['name'] == $alias):?>
                    class="text-white bg-dark"
                <?php endif;?>>

                    <td><?=$user['id']?></td>
                    <td><?=$user['user']?></td>

                    <td><?=$user['name']?></td>

                    <td><?=$user['role']?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
        <a class="btn btn-secondary" href="<?=URL?>dashboard/close/">Salir</a>
    </div>
</section>

</body>
<?php require 'views/layouts/footer.php'?>
</html>