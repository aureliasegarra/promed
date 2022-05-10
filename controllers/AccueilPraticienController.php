<?php

session_start();

/* classes requises*/

require_once BD_CONNECT;
require_once PATIENT;
require_once PRATICIEN;
require_once RDV;




/* verifie si il y a connect dans l'url*/

if (isset($_GET["connect"])) {

    /* verifie si il existe un POST rpps et un POST password */

    if (isset($_POST["rpps"]) && isset($_POST["mot_de_passe_praticien"])) {

        /* enregistre la valeur du POST rpps et du POST password dans des variables*/

        $identifiant = $_POST["rpps"];
        $mdp = $_POST["mot_de_passe_praticien"];

        /* appel de la fonction loginPraticien avec les variables en parametres*/

        loginPraticien($identifiant, $mdp);
    }
}

/* si il n'y a pas connect dans l'url et que le praticien est bien connecté*/ 

else if (isLoggedOnPraticien()) {

    /* appel de la fonction d'affichage du contenu de la page*/

    displayPage();
}





/* fonction de login du praticien*/

function loginPraticien($rpps, $mdp)
{

    /* si il n'existe pas de session, la demarrer*/

    if (!isset($_SESSION)) {
        session_start();
    }

    /* recuperation des infos du praticien par son numero rpps */

    $praticien = (new Model\Praticien)->getPraticienByRpps($rpps);
    $mdpBD = $praticien["mot_de_passe"];
    $id = $praticien["id"];

    /* si le mot de passe du formulaire correspond au mot de passe de la bd on les stock dans les variables de session */

    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $rpps;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION["id"] = $id;
    }

    /* appel de la fonction qui verifie si le praticien est bien connecte */

    if (isLoggedOnPraticien()) {

        /*     appel de la fonction d'affichage du contenu de la page*/

        displayPage();
    } else {
        echo 'Erreur de login';
    }
}





/* fonction qui verifie si le praticien est bien connecte, si oui retourne vrai*/

function isLoggedOnPraticien()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    /* verifie si la variable de session 'identifiant' existe*/

    if (isset($_SESSION["identifiant"])) {

        /* recuperation des infos du praticien par son numero rpps et les compare avec les variables de session, retourne vrai si elles sont identiques*/

        $praticien = (new Model\Praticien)->getPraticienByRpps($_SESSION["identifiant"]);
        if (
            $praticien["rpps"] == $_SESSION["identifiant"] && $praticien["mot_de_passe"] == $_SESSION["mot_de_passe"]
        ) {
            $rep = true;
        }
    }
    return $rep;
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

    /* stockage de la classe praticien dans une variable pour en appeler les fonction plus loin */

    $user = (new Model\Praticien());

    /* recuperation des infos concernant le praticien */

    $praticien = $user->read($_SESSION['id']);

    /* recuperation du tableau a afficher */

    $table = $user->getTable();

    /* appel des vues a afficher*/

    include VIEW_PATH . "/layout_praticien.php";
    include VIEW_PATH . "/accueil_praticien.php";
    include VIEW_PATH . "/footer.php";
}
