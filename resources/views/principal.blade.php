<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="procesar" method="post">
        @csrf
        En que idioma quiere que te salude<br>
        <input type="text" name="idioma">
        <input type="submit" value="">
    </form>

    
    <a href="saludo">Español</a><br>
    <a href="salutare">Italiano</a><br>
    <a href="saluer">Frances</a><br>
</body>

</html>