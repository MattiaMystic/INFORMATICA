<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4','root','',[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$case = $db->query("SELECT Nome FROM Casa")->fetchAll();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Pilota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Inserisci Pilota</h2>

<form action="Pilota.php" method="POST">
    <input type="text" name="cf" placeholder="Codice Fiscale" required>
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="cognome" placeholder="Cognome" required>
    <input type="number" name="numero" placeholder="Numero Pilota">
    <label>Casa:</label>
    <select name="nome_casa" required>
        <?php foreach($case as $c): ?>
            <option value="<?= $c->Nome ?>"><?= $c->Nome ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Registra Pilota</button>
</form>

</body>
</html>
