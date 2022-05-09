<?php

require_once PATIENT;

/* chargement des vues de la page*/

include VIEW_PATH . "/layout_praticien.php";
include VIEW_PATH . "/nouvelle_fiche_patient.php";
include VIEW_PATH . "/footer.php";

/* verifie si il y a save dans l'url*/

if (isset($_GET["save"])) {

    /* verifie si il existe un POST email et un POST password non nuls*/

    if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] != null & $_POST['password'] != null) {

        /* creation d'un nouveau patient avec les données du formulaire*/

        $newPatient = (new Model\Patient)->Patient(($_POST['nom']), ($_POST['prenom']), ($_POST['email']), ($_POST['activite']), ($_POST['numSecu']), ($_POST['mutuelle']), ($_POST['caisse']), ($_POST['nomTuteur']), ($_POST['dateNaissance']), ($_POST['telephone']), ($_POST['sexe']), ($_POST['password']));

        /* enregistrement du nouveau patient dans la base de données*/

        $newPatient->create($newPatient);
    }
}
