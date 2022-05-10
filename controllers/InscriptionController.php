<?php
use DAO\RdvDao;
use DBConnexion\Connexion;

require_once PRATICIEN_DAO;

include VIEW_PATH . "/layout_accueil.php";
include VIEW_PATH . "/inscription.php";


class InscriptionController {

    public function __construct()
    {
        $db = new Connexion();
        $this->conn = $db->conn;
    }

    // Enregistrement d'un nouvel utilisateur en base de données
    public function registration($nom, $prenom, $email, $rpps, $activite, $mot_de_passe)
    {
        $register_query = "INSERT INTO praticien (nom, prenom, email, activite, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$activite', '$mot_de_passe')";
        $result = $this->conn->query($register_query);
        return $result;
    }

    // Vérification si l'utilisateur n'existe pas déjà 
    public function isUserExists($email)
    {
        $checkUser = "SELECT email FROM praticien WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

}


