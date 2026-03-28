<?php
function requireHeader():array{  //ritorna la configurazione dell'app e richiama il file header
    $appConf= require 'appconfig.php';
    require_once  dirname(__DIR__,).$appConf['layouts']."header.php";
    return $appConf;
}

function requireDBConfig():array{ //ritorna la configurazione del database e richiama la classe del database
    $databaseConf=require 'databaseConfig.php';
    require_once dirname(__DIR__,).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'DatabaseConn.php';
    return $databaseConf;
}
