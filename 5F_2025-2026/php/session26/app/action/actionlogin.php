<?php
use App\Core\DatabaseConn;
session_start();

/*estrazione dati di configurazione dell'applicazione*/
require dirname(__DIR__,2).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'requireconfig.php';
$conf=require dirname(__DIR__,2).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'appconfig.php';
$message = $conf['pages'];

/*connessione al database*/
$dataBaseconfig= requireDBConfig();
$db = DatabaseConn::getDB($dataBaseconfig,$message);

/*accesso ai dati*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";
    if ($username === "" || $password === "") {
        header("Location:". $message. "messagepage.php?content=".urlencode("Compila tutti i campi."));
        exit();
    } else {
        $sql = "SELECT id, username, hashpwd FROM users WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ":username" => $username
        ]);
        $user = $stmt->fetch();
        if ($user->username && password_verify($password, $user->hashpwd)) {
            session_regenerate_id(true);

            $_SESSION["user_id"] = $user->id;
            $_SESSION["username"] = $user->username;

            header("Location:".$message. "page1.php?content=Ciao ". $_SESSION['username']. " benvenuto nella pagina1");
            exit;
        } else {
            header("Location:".$message. "messagepage.php?content=Username o password non validi.");
            exit;
        }
    }
}
