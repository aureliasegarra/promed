<?php

require_once "./getRacine.php";
require_once MAIN_CONTROLLER;

if (isset($_GET["action"])) {
    $action = $_GET["action"];
   } 
   else {
    $action = "defaut";
   }

    $fichier = controleurPrincipal($action);
    include CONTROLLER_PATH."/".$fichier;    

?>
