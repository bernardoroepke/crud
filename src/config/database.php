<?php

class Database {
    public static function getConnection() {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        
        try {
            $conn = new PDO($env['host'], $env['username'], $env['password']);
            $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $erro) {
            echo "ERRO => " . $erro->getMessage();
        }
    }

    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result  = $conn->prepare($sql);
        $result->execute();
        return $result;
    }
}

?>