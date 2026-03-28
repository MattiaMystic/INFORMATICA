<?php
use App\Core\DatabaseConn;

/*estrazione dati di configurazione dell'applicazione*/
require dirname(__DIR__,2).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'requireconfig.php';
$conf=require dirname(__DIR__,2).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'appconfig.php';
$message = $conf['pages'];
$username = $_POST['username'] ?? '';
$passwordChiara = $_POST['passwordChiara'] ?? '';
$hashpwd = password_hash($passwordChiara, PASSWORD_DEFAULT);

/*connessione al database*/
$dataBaseconfig= requireDBConfig();
$db = DatabaseConn::getDB($dataBaseconfig,$message);
if(is_null($db)) {
    header("Location:". $message."messagepage.php?content=errore interno, riprovare più tardi",true,500);
    exit();
}
$sql = "INSERT INTO users (username, hashpwd) VALUES (:username, :hashpwd)";
$stmt = $db->prepare($sql);

try {
    $stmt->execute([
        ":username" => $username,
        ":hashpwd" => $hashpwd
    ]);
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        header("Location:". $message."messagepage.php?content=".urlencode("username già presente"));
    } else {
        header("Location:" . $message . "messagepage.php?content=".urlencode("errore interno, riprovare più tardi"));
    }
    exit;
}
header("Location:". $message ."messagepage.php?content=Utente creato con successo");


