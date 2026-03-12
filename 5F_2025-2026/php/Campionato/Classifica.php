<?php
$db = new PDO(
        "mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4",
        "root",
        "",
        [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
);

try {
    $sql = "SELECT P.Nome, P.Cognome, P.Numero, SUM(Part.Punti) as PuntiTotali
            FROM Pilota P
            JOIN Partecipazione Part ON P.CF = Part.CF_Pilota
            GROUP BY P.CF
            ORDER BY PuntiTotali DESC";

    $stmt = $db->query($sql);
    $classifica = $stmt->fetchAll();

} catch (PDOException $e) {
    die("Errore nel recupero classifica: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Classifica Campionato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Classifica Piloti Generale</h2>

<table>
    <thead>
    <tr>
        <th>Posizione</th>
        <th>Pilota</th>
        <th>Numero</th>
        <th>Punti Totali</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $pos = 1;
    foreach ($classifica as $riga):
        $classePodio = ($pos <= 3) ? "podio" : "";
        ?>
        <tr class="<?= $classePodio ?>">
            <td><?= $pos++ ?>°</td>
            <td><?= htmlspecialchars($riga['Nome'] . " " . $riga['Cognome']) ?></td>
            <td><?= $riga['Numero'] ?></td>
            <td><strong><?= $riga['PuntiTotali'] ?></strong></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php">🏠 Torna alla Dashboard</a>

</body>
</html>
