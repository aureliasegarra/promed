<?php


session_start();


require_once BD_CONNECT;
require_once PRATICIEN;
require_once ADRESSE;

$user = (new Model\Praticien);
$adresse = (new Model\Adresse);

$dataAdresse = $adresse->getAdresseByPraticienId($_SESSION['id']);

$data = $user->read($_SESSION['id']);

include VIEW_PATH . "/layout_praticien.php";
include VIEW_PATH . "/parametres.php";
include VIEW_PATH . "/footer.php";

