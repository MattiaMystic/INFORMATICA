<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="pagina2.php">

    <h1>Attivazione corsi:</h1>

    <label for="corsi">Quanti corsi vuoi attivare?</label><br>
    <input type="number" name="corsi" min="1" max="10" required><br><br>

    <button type="submit">Invia</button>

</form>

</body>
</html>
