<?php
$db = new PDO('mysql:host=127.0.0.1;dbname=Campionato;charset=utf8mb4','root','',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stmt = $db->prepare("INSERT INTO Casa (Nome, Colore_Livrea) VALUES (?, ?)");
    $stmt->execute([$_POST['nome_casa'], $_POST['colore']]);
    echo "Casa inserita! <a href='Form_Pilota.php'>Aggiungi pilota</a>";
}
?>
