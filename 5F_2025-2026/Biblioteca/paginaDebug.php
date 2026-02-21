<?php
$nome= $_POST ['nome'];
$cognome = $_POST['cognome'];
$password = $_POST['password'];
$hash_password = password_hash($password,PASSWORD_DEFAULT);
echo "<link rel='stylesheet' href='style.css'>";

$db = new PDO(
    "mysql:host=127.0.0.1;dbname=Biblioteca; charset=utf8mb4",
    "root",
    "",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);
/*
$db= new PDO (
'mysql:host=192.168.60.144;dbname=mattia_pavarin_Biblioteca;charset=utf8mb4',
'mattia_pavarin',
'eroiche.scremammo.',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);*/


$query = "INSERT INTO Lettori(nome,cognome,data_iscrizione,password) values (:nome,:cognome,now(),:password)";

try{
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':cognome',$cognome);
    $stmt->bindValue(':password',$hash_password);
    $stmt->execute();
    $stmt->closeCursor();

}catch(PDOException $e){
    echo $e->getMessage();
}

// $query = 'insert into studenti(nome,cognome,media,data_iscrizione)
//        values (:nome, :cognome, :media, now())';

$query = "SELECT nome,cognome,data_iscrizione FROM Lettori";
try{
$stmt = $db->prepare($query);
$stmt -> execute();
echo "<table id='tabella'>";
echo "<tr>
<th>Nome</th>
<th>Cognome</th>
<th>Data Iscrizione</th>
</tr>";
while($utente = $stmt->fetch()){
    echo "<tr>";
    echo "<td> ".$utente->nome."</td>";
    echo "<td> ".$utente->cognome."</td>";
    echo "<td> ".$utente->data_iscrizione."</td>";
    echo "</tr>";
}
echo "</table>";
$stmt->closeCursor();
}catch(PDOException $e){
    echo $e->getMessage();
}
?>



