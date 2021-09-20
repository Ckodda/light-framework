<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LightFramework | Login</title>
</head>
<body>
<form method="post" action="<?=URL?>login/" >
    <label for="inputEmail">
        <input id="inputEmail" type="text" name="txtEmail" placeholder="Email@example.com" >
    </label>
    <label for="inputPass">
        <input id="inputPass" type="password" name="txtPassword">
    </label>
    <button type="submit">Init</button>
</form>
</body>
</html>