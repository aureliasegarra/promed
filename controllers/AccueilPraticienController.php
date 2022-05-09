<?php

session_start();

use DAO\RdvDao;

require_once BD_CONNECT;
require_once PATIENT_DAO;
require_once PRATICIEN_DAO;
require_once RDVDAO;


if (isset($_GET["connect"])) {

    if (isset($_POST["rpps"]) && isset($_POST["mot_de_passe_praticien"]))  {
        $identifiant = $_POST["rpps"];
        $mdp = $_POST["mot_de_passe_praticien"];
        loginPraticien($identifiant, $mdp);
    }
}

else if (isLoggedOnPraticien()) {

    $tableRdv = (new DAO\RdvDao)->getRdvByPraticien($_SESSION["id"]);
 
    include VIEW_PATH . "/layout_praticien.php";
    include VIEW_PATH . "/accueil_praticien.php";
    include VIEW_PATH . "/footer.php";

}

function loginPraticien($rpps, $mdp)
{

    if (!isset($_SESSION)) {
        session_start();
    }

    $util = (new DAO\PraticienDao)->getPraticienByRpps($rpps);
    $mdpBD = $util["mot_de_passe"];
    $name = $util["nom"];
    $prenom = $util["prenom"];
    $id = $util["id"];
    $activite = $util["activite"];



    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $rpps;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION["nomPrenom"] = $prenom." ".$name;
        $_SESSION["id"]=$id;
        $_SESSION["activite"] = $activite;

    }

    if (isLoggedOnPraticien()) {

        $tableRdv = getTable();
     
        include VIEW_PATH . "/layout_praticien.php";
        include VIEW_PATH . "/accueil_praticien.php";
        include VIEW_PATH . "/footer.php";

    } else {
        echo 'Erreur de login';
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


function getTable()
{
    $rdv = (new DAO\RdvDao)->getRdvByPraticien($_SESSION["id"]);
    $rep = "";

    foreach ($rdv as $row) {

        $heure = date_create($row['date_heure'])->format('H:i');

        $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th><td>" . $heure;
        $rep .= "</td><td>" . $row["prenom"] . " " . $row["nom"];
        $rep .= "</td><td>" . $row["type"];
        "</td></tr>";
    }
    
    return $rep;
}