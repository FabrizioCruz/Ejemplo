<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="validar" method="post">
        @csrf
        <div class="label">Usuario</div>
        <input type="text" name="usuario" id="user"><br>
        <div class="label">Password</div>
        <input class="input" name="password" id="pass">
        <input type="submit">
    </form>
</body>

</html>