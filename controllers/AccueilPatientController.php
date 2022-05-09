<?php


session_start();

require_once BD_CONNECT;
require_once PATIENT_DAO;
require_once PRATICIEN_DAO;
require_once RDVDAO;

logout();

if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe_patient"])) {
    $identifiant = $_POST["identifiant"];
    $mdp = $_POST["mot_de_passe_patient"];
    loginPatient($identifiant, $mdp);
}


function loginPatient($mail, $mdp)
{
    if (!isset($_SESSION)) {
        session_start();
    }

    $util =  (new DAO\PatientDao)->getPatientByMail($mail);
    $mdpBD = $util["mot_de_passe"];
    $id = $util["id"];

    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $mail;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION['id'] = $id;
    }

    if (isLoggedOnPatient()) {

        $user = (new DAO\PatientDao());
        $patient = $user->read($_SESSION['id']);
        $table = $user->getTable();

        include_once VIEW_PATH . "/layout_patient.php";
        include_once VIEW_PATH . "/accueil_patient.php";
        include_once VIEW_PATH . "/footer.php";
    } else {
        echo "Erreur de login";
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


