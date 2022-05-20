<?php

/* fait correspondre l'action de l'url avec un controller */

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["home"] = "HomeController.php";   
    $lesActions["inscription"] = "InscriptionController.php";
    $lesActions["accesPraticien"] = "PraticienController.php";
    $lesActions["accesPatient"] = "PatientController.php";
    $lesActions["parametres"] = "ParametresController.php";
    $lesActions["addPatient"] = "AddFichePatientController.php";
    $lesActions["consult"] = "ConsultFichePatientController.php";
    $lesActions["rdv"] = "RdvController.php";    
    $lesActions["accueilPatient"] = "AccueilPatientController.php";
    $lesActions["accueilPraticien"] = "AccueilPraticienController.php";
    $lesActions["404"] = "404Controller.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["home"];
    }
}