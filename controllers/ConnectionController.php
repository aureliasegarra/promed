<?php

use DAO\RdvDao;

require_once BD_CONNECT;
require_once PATIENT_DAO;
require_once PRATICIEN_DAO;
require_once RDVDAO;
include_once('controllers/InscriptionController.php');


logout();

if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe_patient"])) {
    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["mot_de_passe_patient"];
    loginPatient($identifiant, $mdp);

}

if (isset($_POST["rpps"]) && isset($_POST["mot_de_passe_praticien"]))  {
    $identifiant = $_POST["rpps"];
    $mdp = $_POST["mot_de_passe_praticien"];
    loginPraticien($identifiant, $mdp);
}


if (isset($_POST['register_btn'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $rpps = $_POST['rpps'];
    $activite = $_POST['activite'];
    $mdp = $_POST['mot_de_passe'];

    $register= new InscriptionController;
    $result_user = $register->isUserExists($email);
    if ($result_user) {
        echo "Already Email exists";
        header("Location : inscription.php");
    } else {
        $register_query = $register->registration($nom, $prenom, $email, $rpps, $activite, $mdp);
        if ($register_query) {
            header("Location : acces_praticien.php");
        } else {
            header("Location : inscription.php");
        }
    }
}


function loginPatient($identifiant, $mdp)
{
    if (!isset($_SESSION)) {
        session_start();
    }

    $util =  (new DAO\PatientDao)->getPatientByMail($identifiant);
    $mdpBD = $util["mot_de_passe"];

    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $identifiant;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION['nomPrenom']= $util['prenom']." ".$util['nom'];
    }

    if (isLoggedOnPatient()) {
        
        include VIEW_PATH . "/layout_patient.php";
        include VIEW_PATH . "/accueil_patient.php";
    } else {
        echo "Page d'erreur de login";
    }
}

function isLoggedOnPatient()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["identifiant"])) {
        $util = (new DAO\PatientDao)->getPatientByMail($_SESSION["identifiant"]);
        if (
            $util["email"] == $_SESSION["identifiant"] && $util["mot_de_passe"] == $_SESSION["mot_de_passe"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}


function loginPraticien($identifiant, $mdp)
{

    if (!isset($_SESSION)) {
        session_start();
    }


    $util = (new DAO\PraticienDao)->getPraticienByRpps($identifiant);
    $mdpBD = $util["mot_de_passe"];
    $name = $util["nom"];
    $prenom = $util["prenom"];
    $id = $util["id"];
    $activite = $util["activite"];



    if ($mdpBD == $mdp) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["identifiant"] = $identifiant;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION["nomPrenom"] = $prenom." ".$name;
        $_SESSIOn["id"]=$id;
    }

    if (isLoggedOnPraticien()) {
        // $test =(new DAO\RdvDao)->getRdvByPraticien($util['id']);
        // $test2 = $test['id_patient'];
        $tableRdv = (new DAO\RdvDao)->getRdvByPraticien($_SESSIOn["id"]);
        include VIEW_PATH . "/layout_praticien.php";
        include VIEW_PATH . "/accueil_praticien.php";
    } else {
        echo 'Echec';
    }
}


function isLoggedOnPraticien()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["identifiant"])) {
        $util = (new DAO\PraticienDao)->getPraticienByRpps($_SESSION["identifiant"]);
        if (
            $util["rpps"] == $_SESSION["identifiant"] && $util["mot_de_passe"] == $_SESSION["mot_de_passe"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

function logout()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["identifiant"]);
    unset($_SESSION["mot_de_passe_praticien"]);
    unset($_SESSION["mot_de_passe_patient"]);
    session_destroy();
}