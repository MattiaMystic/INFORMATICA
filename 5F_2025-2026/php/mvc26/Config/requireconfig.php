<?php
function requireHeader():array{  //ritorna la configurazione dell'app e richiama il file header
    $appConf= require 'appConfig.php';
    require_once  dirname(__DIR__).$appConf['Layout']."header.php";
    return $appConf;
}
/*si può migliorare....*/
