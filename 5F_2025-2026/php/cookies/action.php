<?php


if(isset($_COOKIE['nome'])){
setcookie(
    'user',
    $_POST['nome'],
    [
        "expires" => time() + (36000),
        "path" => "/",//significa tt il dominio la validita cookie
        "secure" => false, // sia http che https
        "httponly" => true, // non accessibile da js per sicurezza
        "samesite" => "Lax"
    ]);
    $user = $_POST['nome'];
}else{
    $user= $_COOKIE['user'];


}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Ciao <?= $user ?>questa è la pagina action </p>

<a href="show.php">Vai alla pagina show
</a>
</body>
</html>
