<?php
if (str_replace('\\', '/', __FILE__) === str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'])) {
    die('Access denied');
}
class ConnexionBD
{
    private static $db_name = 'tp_php_gym';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_host = 'localhost';
    private static $connexion = null;

    private function __construct()
    {
        try {
            self::$connexion = new PDO
            ('mysql:host=' . self::$db_host . ';dbname=' . self::$db_name . ';charset=utf8', self::$db_user, self::$db_pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$connexion) {
            new ConnexionBD();
        }
        return self::$connexion;
    }
}