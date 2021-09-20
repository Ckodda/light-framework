<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'views/layouts/header.php'?>
    <title>LightFramework | Login</title>
</head>
<body>
<section class="vh-100 d-flex items-center">
    <div class="container d-flex justify-content-center items-center">
        <form action="<?=URL?>login/" method="post" class="w-50" style="min-width: 10em;">
            <div class="w-100 text-center">
                <h1>LOGIN</h1>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="txtEmail" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="txtPassword" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="pt-3">
                <button type="submit" class="form-control btn btn-primary">Iniciar sesion</button>
            </div>

        </form>
    </div>
</section>

</body>
<?php require 'views/layouts/footer.php'?>
</html>