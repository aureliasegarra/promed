<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["home"] = "HomeController.php";
    $lesActions["connexion"] = "ConnectionController.php";
    $lesActions["inscription"] = "InscriptionController.php";
    $lesActions["accesPraticien"] = "PraticienController.php";
    $lesActions["accesPatient"] = "PatientController.php";
    $lesActions["parametres"] = "ParametresController.php";



    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["home"];
    }
}
