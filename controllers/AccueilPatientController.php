<?php


session_start();

use DAO\RdvDao;

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


function loginPatient($identifiant, $mdp)
{
    if (!isset($_SESSION)) {
        session_start();
    }

    $util =  (new DAO\PatientDao)->getPatientByMail($identifiant);
    $mdpBD = $util["mot_de_passe"];
    $id = $util["id"];

    if ($mdpBD == $mdp) {

        $_SESSION["identifiant"] = $identifiant;
        $_SESSION["mot_de_passe"] = $mdpBD;
        $_SESSION["nom"] = $util['nom'];
        $_SESSION['nomPrenom'] = $util['prenom'] . " " . $util['nom'];
        $_SESSION['id'] = $id;
    }

    if (isLoggedOnPatient()) {

        $tableRdv = getTable();
        // $nomPraticien = (new DAO\RdvDao)->getPraticienByPatient($_SESSION["id"]);

        include VIEW_PATH . "/layout_patient.php";
        include VIEW_PATH . "/accueil_patient.php";
        include VIEW_PATH . "/footer.php";
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

function getTable()
{
    $rdv = (new DAO\RdvDao)->getRdvByPatient($_SESSION["id"]);
    $praticien = (new DAO\RdvDao)->getPraticiensRdvByPatient($_SESSION["id"]);

    $rep = "";
  
        foreach ($rdv as $row) {
            
            $heure = date_create($row['date_heure'])->format('H:i');
            $date = date_create($row['date_heure'])->format('d/m/Y');

            // $rep .= $row["nom"];

            $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th>
                    <td>" .$row["prenom"]." ". $row["nom"];
            $rep .= "</td><td>" . $row["activite"];
            $rep .= "</td><td>" . $date;
            $rep .= "</td><td>" . $heure;
            $rep .= "</td><td>" . $row["type"];
            "</td></tr>";
        }
    
    return $rep;
}
