<?php
$corsi = $_POST["corsi"] ?? 0;
$docenti = $_POST["docenti"] ?? [];
$elenco_corsi = $_POST["corso"] ?? [];
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Iscrizione Corsi</h1>

<table>
    <tr>
        <th>Nome Cognome</th>
        <th>Corso</th>
    </tr>

    <?php
    $inseriti = [];

    for ($i = 0; $i < $corsi; $i++) {
        if (!empty($docenti[$i]) && !empty($elenco_corsi[$i])) {
            foreach ($docenti[$i] as $d) {
                $key = $d . $elenco_corsi[$i];
                if (!in_array($key, $inseriti)) {
                    $inseriti[] = $key;
                    ?>
                    <tr>
                        <td><?= $d ?></td>
                        <td><?= $elenco_corsi[$i] ?></td>
                    </tr>
                    <?php
                }
            }
        }
    }
    ?>
</table>

</body>
</html>
