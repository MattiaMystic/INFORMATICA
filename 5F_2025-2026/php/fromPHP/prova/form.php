<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST" action="elabora.php">

    <h1>Informazioni</h1>
    <label for="nome">Nome:</label> <input id="nome" type="text" name="nome"><br>
    <label for="cognome">Cognome:</label> <input id="cognome" type="text" name="cognome"><br>
    <label for="email">Email:</label> <input id="email" type="email" name="email"><br>
    <label for="password">Password:</label> <input id="password" type="password" name="password"><br>
    <label for="eta">Età:</label> <input id="eta" type="number" name="eta"><br>

    <label>Sesso</label>
    <label for="sessoM">M</label>
    <input id="sessoM" type="radio" name="sesso" value="M">
    <label for="sessoF">F</label>
    <input id="sessoF" type="radio" name="sesso" value="F"><br><br>

    <label>Corsi:</label><br><br>
    <label for="corso PHP">CorsoPHP</label>
    <input id="corsoPHP" type="checkbox" name="corsi[]" value="php"><br><br>
    <label for="corso Java">CorsoJava</label>
    <input id="corsoJava" type="checkbox" name="corsi[]" value="java"><br><br>
    <label for="corso HTML">CorsoHTML</label>
    <input id="corsoHTML" type="checkbox" name="corsi[]" value="html"><br><br>
    <br>

    <!-- Drop down list -->
    <label for="citta">Città di Residenza:</label><br>
    <select name="citta">
        <option value =" ">--Seleziona--</option>
        <option value ="Roma">Roma</option>
        <option value ="Milano">Milano</option>
        <option value ="Firenze">Firenze</option>
        <option value ="Rovigo">Rovigo</option>
        <option value ="Napoli">Napoli</option>
        <option value ="Palermo">Palermo</option>
    </select><br><br>

    <!-- List box multipla -->
    <label for="lingua">Lingua:</label><br>
    <select name="lingua" multiple>
        <option value =" ">--Seleziona--</option>
        <option valure ="Cinese">Cinese</option>
        <option valure ="Francese">Francese</option>
        <option valure ="Inglese">Inglese</option>
        <option value ="Italiano">Italiano</option>
        <option valure ="Tedesco">Tedesco</option>
    </select><br><br>

    <label for="area">Parlaci di te...</label><br>
    <textarea name="area"></textarea><br>

    <button type="submit">Invia</button>
</form>
</body>
</html>