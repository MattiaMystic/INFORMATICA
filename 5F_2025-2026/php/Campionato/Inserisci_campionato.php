<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4','root','',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stmt = $db->prepare("INSERT INTO Campionato (Nome) VALUES (?)");
    $stmt->execute([$_POST['nome_campionato']]);
    echo "Campionato inserito! <a href='Inserisci_gara.php'>Inserisci Gara</a>";
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Inserisci Campionato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Inserisci Campionato</h2>

<form method="POST">
    <input type="text" name="nome_campionato" placeholder="Nome Campionato" required>
    <button type="submit">Inserisci Campionato</button>
</form>

</body>
</html>
