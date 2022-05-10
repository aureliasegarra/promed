<?php

require_once "./getRacine.php";
require_once MAIN_CONTROLLER;

/* recupere l'action dans l'url et redirige vers le controller correspondant*/

if (isset($_GET["action"])) {
    $action = $_GET["action"];
   } 
   else {
    $action = "defaut";
   }

    $fichier = controleurPrincipal($action);
    include CONTROLLER_PATH."/".$fichier;    

?>