<?php

class DataBase
{
    protected static $host = "localhost";
    protected static $dbname = "oopda";
    protected static $user = "root";
    protected static $password = "root";


    public static function connect()
    {
        return new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$password);
    }
}
