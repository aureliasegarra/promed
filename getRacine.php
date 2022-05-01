<?php

define("ROOT",__DIR__);
define("GETRACINE",__FILE__);

define("CONTROLLER_PATH", ROOT. "/controllers");
define("MODEL_PATH", ROOT. "/models");
define("VIEW_PATH", ROOT. "/vues");
define("DATA_PATH", ROOT. "/data");

define("BD_CONNECT", DATA_PATH.'/bd.connect.php');
define("PATIENT_DAO", DATA_PATH.'/patient.dao.php');
define("PRATICIEN_DAO", DATA_PATH.'/praticien.dao.php');
define("RDVDAO", DATA_PATH.'/rdv.dao.php');

define("CONNECTION_CONTROLLER", CONTROLLER_PATH.'/ConnectionController.php');
define("MAIN_CONTROLLER", CONTROLLER_PATH."/MainController.php");

?>
