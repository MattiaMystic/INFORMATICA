<?php

$corsi = $_POST["corsi"] ?? 1;

$elenco_corsi = [
    "Sistemi e Reti",
    "Informatica",
    "Statistica",
    "Contabilità",
    "Marketing",
    "Technologie",
    "Meccatronica",
    "Elettronica",
    "Chimica Organica",
    "Robotica"
];

$docenti = [
    "Rossi Mario",
    "Bianchi Luca",
    "Verdi Anna",
    "Neri Paolo",
    "Gialli Sara",
    "Blu Marco"
];

?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="pagina3.php">
    <h1>Iscrizione Corsi</h1>

    <input type="hidden" name="corsi" value="<?=$corsi?>">

    <?php for ($i = 0; $i < $corsi; $i++) { ?>
        <div class="box">
            <h3>Corso <?= $i + 1 ?></h3>

            <label>Docenti</label><br>
            <select name="docenti[<?=$i?>][]" multiple>
                <?php foreach ($docenti as $d) { ?>
                    <option value="<?=$d?>"><?=$d?></option>
                <?php } ?>
            </select><br><br>

            <label>Corso</label><br>
            <select name="corso[<?=$i?>]">
                <option value="">-- Seleziona --</option>
                <?php foreach ($elenco_corsi as $c) { ?>
                    <option value="<?=$c?>"><?=$c?></option>
                <?php } ?>
            </select>

        </div>
    <?php } ?>

    <button type="submit">Invia</button>
</form>

</body>
</html>
