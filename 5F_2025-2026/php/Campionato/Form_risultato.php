<?php
$db = new PDO(
        "mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4",
        "root",
        "",
        [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
);

// Recuperiamo i piloti
$piloti = $db->query("SELECT CF, Nome, Cognome FROM Pilota")->fetchAll();

// Recuperiamo le gare
$gare = $db->query("SELECT NomeCampionato, Giorno, Mese, Anno FROM Gara")->fetchAll();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Risultato Gara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registra Risultato Pilota</h2>

<form action="Risultato.php" method="POST">

    <label>Seleziona Pilota:</label><br>
    <select name="cf_pilota" required>
        <?php foreach($piloti as $p): ?>
            <option value="<?= $p->CF ?>">
                <?= $p->Nome . " " . $p->Cognome ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Seleziona Gara:</label><br>
    <select name="gara_info" required>
        <?php foreach($gare as $g):
            $valore = "{$g->NomeCampionato}|{$g->Giorno}|{$g->Mese}|{$g->Anno}";
            $testo = "{$g->NomeCampionato} - {$g->Giorno}/{$g->Mese}/{$g->Anno}";
            ?>
            <option value="<?= $valore ?>"><?= $testo ?></option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Punti Ottenuti:</label><br>
    <input type="number" name="punti" min="0" required>

    <br><br>

    <label>Tempo (HH:MM:SS):</label><br>
    <input type="time" step="1" name="tempo" required>

    <br><br>

    <button type="submit">Salva Risultato</button>
</form>

</body>
</html>
