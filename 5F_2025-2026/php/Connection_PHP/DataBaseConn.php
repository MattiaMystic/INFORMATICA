<?php

class DataBaseConn
{
    private static PDO $db;
    public static function getDB(array $config):PDO{
        self::$db= new PDO($config['dsn'],$config['username'],$config['password'],$config['options']);
        return self::$db;
    }

}