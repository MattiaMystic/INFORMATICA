<?php
$conf=require dirname(__DIR__,2).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'appconfig.php';
$message = $conf['pages'];
$_SESSION = [];
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
session_destroy();
header("Location:". $message. "messagepage.php?content=Logout effettuato con successo.");

