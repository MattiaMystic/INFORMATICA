<?php

$db = new PDO(
    "mysql:host=127.0.0.1;dbname=Campionato; charset=utf8mb4",
    "root",
    "",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO Pilota (CF, Nome, Cognome, Numero, NomeCasa) 
            VALUES (:cf, :nome, :cognome, :numero, :casa)";

    $stmt = $db->prepare($sql);

    try {
        $stmt->execute([
            ':cf'      => $_POST['cf'],
            ':nome'    => $_POST['nome'],
            ':cognome' => $_POST['cognome'],
            ':numero'  => $_POST['numero'],
            ':casa'    => $_POST['nome_casa']
        ]);
        echo "Pilota inserito con successo!";
    } catch (PDOException $e) {
        echo "Errore nell'inserimento: " . $e->getMessage();
    }
}
?>