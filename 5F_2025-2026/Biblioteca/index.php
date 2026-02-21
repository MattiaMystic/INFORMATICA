<?php
/*
Creare una prima versione di un'applicativo web per la gestione di una biblioteca comunale. L'applicativo prevede una
pagina di benvenuto (home page) che contiene l'ora e la data attuale e un link a una seconda pagina che contiene un form
per registrare gli utenti della biblioteca secondo i seguenti parametri: nome, cognome, numero (progressivo) di tessera,
data di iscrizione e password. Creare quindi una terza pagina, solo per il debug, nella quale sia possibile visualizzare
in forma tabellare i dati (pwd esclusa) di tutti gli utenti registrati.
*/
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca Comunale</title>
</head>
<body>
<div class="header">
    <h2>Biblioteca comunale</h2>
    <p id="time"></p>
    <p id="date"></p>
    <button id="bottonePerPagina2">PREMIMI</button>
</div>
</body>
<script src="script.js"></script>
</html>
