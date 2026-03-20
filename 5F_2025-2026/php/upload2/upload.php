<?php
$allowed = ['jpg','png','pdf', 'php'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $tmp_Path = $_FILES["file"]["tmp_name"];//percorso temporaneo del file caricato
        //echo $tmp_Path."<br>";
        $originalName = basename($_FILES["file"]["name"]); // ritorna il nome pulito del file
        // echo $originalName."<br>";
        $username = $_POST["nome"];
        // echo $username."<br>";
        // extension check
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION)); // ritorna l'estensione del file
        if(!in_array($ext, $allowed)) {
            http_response_code(403);
            $msg = "Estensione non autorizzata";
            include "message.php";
            exit();


        }
        $maxSize = 2*1024*1024;
        $size = $_FILES["file"]["size"];
        if($size > $maxSize) {
            http_response_code(413);
            $msg = "Dimensione troppo grande ";
            include "message.php";
            exit();
        }
        $userDir= "uploads/".$username;
        if(!is_dir($userDir)) {
            mkdir($userDir, 0755);
        }
        $destination = $userDir."/".$originalName;
        move_uploaded_file($tmp_Path, $destination);
        $msg="File caricato correttamente";
        include "message.php";
    }else{
        http_response_code(500);
        $msg= "Errore durante l'upload2 del file";
        include "message.php";
    }

}