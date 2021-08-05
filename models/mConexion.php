<?php
class mConexion{
    private static $instance = NULL;
    private static $host ="localhost";
    private static $dbname="hotelparkview";
    private static $user="root";
    private static $password="";
    private function __construct() {}
    private function __clone() {}
    public static function getConnect(){
        try{
            if(!isset(self::$instance)){
                $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
                
                self::$instance=new PDO(
                'mysql:host='.self::$host.';dbname='.self::$dbname. ';charset=utf8',
                self::$user,
                self::$password
                );
            }
            return self::$instance;     
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}
