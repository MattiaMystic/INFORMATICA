<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nome= trim($_GET["nome"] ?? "");
    $cognome= trim($_GET["cognome"]??"");
    $numero_tessera= trim($_GET["numero_tessera"]??"");
    $data_iscrizione= trim($_GET["data_iscrizione"]??"");
    $password= trim($_GET["password"]??"");

    echo "Nome: $nome <br>";
    echo "Cognome: $cognome <br>";
    echo "Numero Tessera: $numero_tessera <br>";
    echo "Data Iscrizione: $data_iscrizione <br>";
    echo "Password: $password <br>";

}

?>
