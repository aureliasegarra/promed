<?php

session_start();

include ('ConnectionController.php');
require_once PRATICIENDAO;

// TO DO : Trouver comment récupérer les données d'un user deja connecté et les afficher dans une autre pages php

    // Connexion à la base de données

// Instanciation d'un objet PDO pour créer une connexion à la base de donnée
$bddPDO = new PDO('mysql:host=localhost;dbname=promed', 'root', '');

// On définit la méthode de récupération (fetch) des données
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// On va chercher les données dans la base
// On écrit la requête
$requete = "SELECT *
            FROM praticien
            WHERE id='1';
            ";

// On exécute la requête
$result = $bddPDO->query($requete);

if (!$result){
    echo "La récupération des données n'a pas fonctionné !";
}else{
    $donnees_praticien = $result->rowCount();
    $data=$result->fetch(PDO::FETCH_ASSOC); // On récupère les données

    while($ligne=$result->fetch(PDO::FETCH_NUM)){
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        
        echo "</tr>";
    }

    $result->closeCursor();
}


// function afficherDonneesPraticien() {
//     $util = (new DAO\PraticienDao)->read($_SESSION["id"]);
//     $nom = $util->getNom();
//     return $nom;
// }

// public function getInfosPraticien($identifiant) {
//     $req = "SELECT * FROM praticien JOIN adresse ON praticien.id_adresse=adresse.id WHERE id_praticien=$identifiant"
//     $rep= "";
//     $rows = Connexion::connexionPDO()->query($req);
// }

// $test="test";

include VIEW_PATH . "/layout_praticien.php";
include VIEW_PATH . "/parametres.php";
include VIEW_PATH . "/footer.php";
