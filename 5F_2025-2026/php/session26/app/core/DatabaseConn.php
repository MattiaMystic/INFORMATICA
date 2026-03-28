<?php
namespace App\Core;
use PDO;
use PDOException;
class DatabaseConn
{
    private  static PDO $db;
    public static function getDB(array $config,string $message):PDO{
        global $message;
        if(!isset(self::$db)){
            try{
                self::$db = new PDO($config['dns'], $config['username'], $config['password'], $config['options']);
            } catch (PDOException $e) {
                header("Location:".$message."messagepage.php?content=Internal error");
                exit();
            }
        }
        return self::$db;
    }
}