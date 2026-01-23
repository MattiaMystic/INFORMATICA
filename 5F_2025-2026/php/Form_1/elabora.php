<?php
$nome= trim($_POST['nome']??"");//trim elimina gli spazi bianchi prima e dopo la stringa, $_POST è una variabile superglobale che contiene i dati inseriti nel form se usiamo il metodo POST, è un array associativo

$cognome= trim($_POST['cognome']??"");

$email= trim($_POST['email']??"");

$password= trim($_POST['password']??"");

$eta= trim($_POST['eta']??"");

$sesso= trim($_POST['sesso']??"");

$corsi= trim($_POST['corsi[]']??[]);

$citta= trim($_POST['citta']??"");

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
<p>Nome :<?=$nome?></p>
<p>Cognome :<?=$cognome?></p>
<p>Email :<?=$email?></p>
<p>Password :<?=$password?></p>
<p>Età :<?=$eta?></p>
<p>Sesso :<?=$sesso?></p>
<p>Corsi: <?= foreach (...) ?></p>
<p>Città :<?=$citta?></p>

</body>
</html>
