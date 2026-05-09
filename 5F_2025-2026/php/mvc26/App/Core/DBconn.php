<?php

namespace App\Core;
use PDO;
use PDOException;

class DBconn
{
    private static PDO $db;

    public static function getDB(array $config): PDO
    {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO($config['dns'], $config['username'], $config['password'], $config['options']);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$db;
    }

}

