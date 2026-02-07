<?php
$dbconfig= require 'Configuration/DBconfiguration.php';
require 'DataBaseConn.php';

/*
$db= new PDO ('mysql:host=192.168.60.144;dbname=mattia_pavarin_itis;charset=utf8mb4','mattia_pavarin','eroiche.scremammo.',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
);*/
$db= DataBaseConn::getDB($dbconfig);
//READ 1
/*
$query = 'SELECT * FROM studenti';
try{
    $stmt = $db->prepare($query);
    $stmt->execute();

    while($user = $stmt->fetch()) {
        echo "ID: " . $user->id . " - Nome: " . $user->nome . " - Cognome " . $user->cognome . " - Media: " . $user->media . " - Data iscrizione: " . $user->data_iscrizione . "<br>";
    }
        $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Errore ";
}
*/
//READ 2
/*
$query = 'SELECT media,cognome FROM studenti WHERE nome = :nome';
try{
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', "Antonio", PDO::PARAM_STR);
    $stmt->execute();

    while($user = $stmt->fetch()) {
        echo "Cognome: " . $user->cognome . " - Media: " . $user->media . "<br>";
    }
        $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Errore ";
}
*/

//CREATE

$query= 'INSERT INTO studenti (nome,cognome,media,data_iscrizione) VALUES (:nome,:cognome,:media,NOW())';
try {
    $stmt= $db->prepare($query);
    $stmt->bindValue(':nome','Luca',PDO::PARAM_STR);
    $stmt->bindValue(':cognome','Bianchi',PDO::PARAM_STR);
    $stmt->bindValue(':media',7.5,PDO::PARAM_STR);
    $stmt->execute();
    $stmt->closeCursor();
    echo "Inserimento avvenuto con successo";
} catch (PDOException $e) {
    echo "Errore nell'inserimento";
}
// CON READ 1 VISUALIZZO TUTTI GLI STUDENTI AGGIORNATI
$query = 'SELECT * FROM studenti';
try{
    $stmt = $db->prepare($query);
    $stmt->execute();

    while($user = $stmt->fetch()) {
        echo "ID: " . $user->id . " - Nome: " . $user->nome . " - Cognome " . $user->cognome . " - Media: " . $user->media . " - Data iscrizione: " . $user->data_iscrizione . "<br>";
    }
    $stmt->closeCursor();

} catch (PDOException $e) {
    echo "Errore ";
}

//UPDATE

$QUERY = 'UPDATE studenti 
          SET media = :media
          WHERE nome = :nome';

try {
    $stmt = $db->prepare($QUERY);
    $stmt->bindValue(':nome','Antonio',PDO::PARAM_STR);
    $stmt->bindValue(':media',8.5,PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount()===0){
    echo "Nessun record aggiornato";
    } else {
    echo "Aggiornamento avvenuto con successo";
    echo "<br>";
    }
} catch (PDOException $e) {
    echo "Errore nell'aggiornamento";
}

//DELETE
$query = 'DELETE FROM studenti WHERE nome = :nome';

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome','Marco',PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount()===0){
        echo "Nessun record eliminato";
    } else {
        echo "Eliminazione avvenuta con successo";
        $stmt->closeCursor();
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Errore nell'eliminazione";
}

























?>







