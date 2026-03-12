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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST['cf_pilota'], $_POST['gara_info'], $_POST['punti'], $_POST['tempo'])) {
        die("Dati mancanti");
    }

    $gara_data = explode('|', $_POST['gara_info']);
    if (count($gara_data) != 4) die("Formato gara_info non valido");

    $sql = "INSERT INTO Partecipazione 
            (CF_Pilota, NomeCampionato, Giorno, Mese, Anno, Punti, Tempo) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db->prepare($sql);

    try {
        $stmt->execute([
            $_POST['cf_pilota'],
            $gara_data[0],
            $gara_data[1],
            $gara_data[2],
            $gara_data[3],
            $_POST['punti'],
            $_POST['tempo']
        ]);

        echo "Risultato registrato! <a href='Classifica.php'>Torna alla classifica</a>";

    } catch (PDOException $e) {
        echo "Errore: Il pilota ha già un risultato registrato per questa gara.";
    }
}
?>
