<?php
namespace Mvc\Config;

use PDO;

class Database
{
    public static $bdd = null;

    public function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=mvc", 'root', '');
            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$bdd->exec("set names utf8");
        }
        return self::$bdd;
    }
}
