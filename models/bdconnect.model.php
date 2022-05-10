<?php

namespace Model {

    use PDO;
    use PDOException;

    class Connexion extends PDO {

        static function connexionPDO() {
                $login = "root";
                $mdp = "";
                $bd = "promed";
                $serveur = "localhost";

            try {
                $conn = new \PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
                // $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
                return $conn;

            } 
            catch (PDOException $e) {
                print "Erreur de connexion PDO ";
                die();
            }
        }
    }

}