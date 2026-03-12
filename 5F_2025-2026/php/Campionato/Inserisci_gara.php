<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4','root','',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$campionati = $db->query("SELECT Nome FROM Campionato")->fetchAll();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stmt = $db->prepare("INSERT INTO Gara (NomeCampionato,Giorno,Mese,Anno) VALUES (?,?,?,?)");
    $stmt->execute([
        $_POST['nome_campionato'],
        $_POST['giorno'],
        $_POST['mese'],
        $_POST['anno']
    ]);
    echo "Gara inserita! <a href='Form_risultato.php'>Inserisci risultato</a>";
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Inserisci Gara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Inserisci Gara</h2>

<form method="POST">
    <label>Campionato:</label>
    <select name="nome_campionato" required>
        <?php foreach($campionati as $c): ?>
            <option value="<?= $c->Nome ?>"><?= $c->Nome ?></option>
        <?php endforeach; ?>
    </select>
    <input type="number" name="giorno" min="1" max="31" required placeholder="Giorno">
    <input type="number" name="mese" min="1" max="12" required placeholder="Mese">
    <input type="number" name="anno" min="2000" max="2100" required placeholder="Anno">
    <button type="submit">Inserisci Gara</button>
</form>

</body>
</html>
