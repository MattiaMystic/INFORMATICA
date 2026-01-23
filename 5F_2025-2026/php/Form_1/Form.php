<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Example</title>
</head>
<body>
<form method="POST" action="elabora.php">
    <h1>Informazioni </h1>
    <label for="Nome">Nome:</labelfor></label> <input type="text" name="nome"><br><br>
    <label for="Cognome">Cognome:</labelfor></label> <input type="text" name="cognome"><br><br>
    <label for="Email">Email:</labelfor></label> <input type="email" name="email"><br><br>
    <label for="Password">Password:</labelfor></label> <input type="password" name="password"><br><br>
    <label for="Eta">Età:</labelfor></label> <input type="number" name="eta"><br><br>
    <label for="Sesso">Sesso:</labelfor></label> <input id="sesso" type="radio" name="sesso" value="M">Maschio
    <input id="sesso" type="radio" name="sesso" value="F">Femmina<br><br>
    <label for="corsi">Corsi:</label>
    <input id="corsi" type="checkbox" name="corsi[]" value="PHP">PHP
    <input id="corsi" type="checkbox" name="corsi[]" value="HTML">HTML
    <input id="corsi" type="checkbox" name="corsi[]" value="Java">Java<br><br>

    <!--Dropdown list-->
    <label>Città di residenza:</label><br>
    <select name="citta">
        <option value="">---Seleziona una città---</option>
        <option value="Roma">Roma</option>
        <option value="Milano">Milano</option>
        <option value="Napoli">Napoli</option>
        <option value="Torino">Torino</option>
        <option value="Rovigo">Rovigo</option>
    </select><br><br>

    <!--list box multipla-->
    <label>Lingue conosciute:</label><br>
    <select name="lingue" multiple>
        <option value="Italiano">Italiano</option>
        <option value="Inglese">Inglese</option>
        <option value="Spagnolo">Spagnolo</option>
        <option value="Francese">Francese</option>
        <option value="Tedesco">Tedesco</option>
    </select><br><br>

    <!--text area-->
    <label for="area">Parlaci di te...</label><br>
    <textarea name="area"></textarea><br><br>



    <button type="submit">invia</button>
</form>
</body>
</html>



