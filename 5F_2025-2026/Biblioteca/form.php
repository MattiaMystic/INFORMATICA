<?php

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="paginaDebug.php">
        <h3>REGISTRAZIONE</h3>
        <hr>
        <label for="nome">Nome:</label> <input id="nome" type="text" name="nome" required>
        <label for="cognome">Cognome:</label> <input id="cognome" type="text" name="cognome" required>
        <label for="password">Password:</label> <input id="password" type="password" name="password" required>
        <button id="bottoneInvioForm" type="submit">INVIA</button>
    </form>
</body>
<script src="script.js"></script>
</html>
