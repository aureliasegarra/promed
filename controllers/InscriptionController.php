<?php

require_once PRATICIEN;

/* Chargement des vues */
include VIEW_PATH . "/layout_accueil.php";
include VIEW_PATH . "/inscription.php";
include VIEW_PATH . "/footer.php";

/* Vérification si il y a un save dans l'url */
if (isset($_GET["save"])) {

    /* Vérification si le formulaire d'inscription a été lancé via son bouton "register_btn" */
    if(isset($_POST['register_btn'])){
        
        /* Vérification si il y a des champs vides */
        if (isset($_POST['nom'])  && 
            isset($_POST['prenom']) && 
            isset($_POST['email']) && 
            isset($_POST['rpps']) && 
            isset($_POST['activite']) && 
            isset($_POST['mot_de_passe']) != null) {
            
            /* Création d'un nouveau praticien */
            $newPraticien = (new Model\Praticien)->Praticien(($_POST['nom']), 
                                                            ($_POST['prenom']), 
                                                            ($_POST['email']), 
                                                            ($_POST['rpps']), 
                                                            ($_POST['activite']), 
                                                            ($_POST['mot_de_passe']));

            /* Enregistrement du nouveau patient en BDD */
            $newPraticien->create($newPraticien);
        } 
    
    }

}