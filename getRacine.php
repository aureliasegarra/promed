<?php

/* definie cet emplacement comme étant a la racine de l'application*/

define("ROOT",__DIR__);
define("GETRACINE",__FILE__);

/* definie des constantes indiquant le chemin du dossier controller , vues et models*/

define("CONTROLLER_PATH", ROOT. "/controllers");
define("VIEW_PATH", ROOT. "/vues");
define("MODEL_PATH", ROOT. "/models");

/* definie des constantes indiquant le chemin des principales classes*/

define("BD_CONNECT", MODEL_PATH.'/bdconnect.model.php');
define("PATIENT", MODEL_PATH.'/Patient.model.php');
define("PRATICIEN", MODEL_PATH.'/Praticien.model.php');
define("RDV", MODEL_PATH.'/Rdv.model.php');

/* definie des constantes indiquant le chemin des controllers */

define("CONNECTION_CONTROLLER", CONTROLLER_PATH.'/ConnectionController.php');
define("MAIN_CONTROLLER", CONTROLLER_PATH."/MainController.php");
define("PATIENT_CONTROLLER", CONTROLLER_PATH.'/PatientController.php');


?>