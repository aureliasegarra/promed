<?php

session_start();

/* classes requises*/

require_once BD_CONNECT;
require_once PATIENT;
require_once PRATICIEN;
require_once RDV;

logout();



/* verifie si il existe un POST identifiant et un POST password */

if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe_patient"])) {

    /* enregistre la valeur du POST identifiant et du POST password dans des variables*/


    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["mot_de_passe_patient"];

    /* appel de la fonction loginPAtient avec les variables en parametres*/

    loginPatient($identifiant, $mdp);
} 




/* fonction de login du patient*/

function loginPatient($mail, $mdp)
{

    /* si il n'existe pas de session, la demarrer*/

    if (!isset($_SESSION)) {
        session_start();
    }

    /* recuperation des infos du patient par son mail */

    $patient =  (new Model\Patient)->getPatientByMail($mail);
    $mdpBD = $patient["mot_de_passe"];
    $id = $patient["id"];

    /* si le mot de passe du formulaire correspond au mot de passe de la bd on les stock dans les variables de session */

    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $mail;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION['id'] = $id;
    }
    
    /* appel de la fonction qui verifie si le patient est bien connecte */

    if (isLoggedOnPatient()) {

        /*     appel de la fonction d'affichage du contenu de la page*/

        displayPage();
    } else {
        echo "Erreur de login";
    }
}




/* fonction qui verifie si le patient est bien connecte, si oui retourne vrai*/

function isLoggedOnPatient()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    /* verifie si la variable de session 'identifiant' existe*/

    if (isset($_SESSION["identifiant"])) {

        /* recuperation des infos du patient par son mail et les compare avec les variables de session, retourne vrai si elles sont identiques*/

        $patient = (new Model\Patient)->getPatientByMail($_SESSION["identifiant"]);
        if (
            $patient["email"] == $_SESSION["identifiant"] && $patient["mot_de_passe"] == $_SESSION["mot_de_passe"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}




/* fonction de deconnexion et de destruction de la session*/

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




/* fonction d'affichage des vues et des variables a afficher*/

function displayPage()
{

    /* stockage de la classe patient dans une variable pour en appeler les fonction plus loin */

    $user = (new Model\Patient());

    /* recuperation des infos concernant le patient */

    $patient = $user->read($_SESSION['id']);

    /* recuperation du tableau a afficher */

    $table = $user->getTable();

    /* appel des vues a afficher*/

    include_once VIEW_PATH . "/layout_patient.php";
    include_once VIEW_PATH . "/accueil_patient.php";
    include_once VIEW_PATH . "/footer.php";
    
} 