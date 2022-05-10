<?php

namespace Model{

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Praticien extends DAO
    {


        function __construct()
        {
            parent::__construct("id", "praticien");
        }


        public function read($id)
        {
            $sql = "SELECT * FROM praticien WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();

            // $id = $row["id"];
            // $nom = $row["nom"];
            // $prenom = $row["prenom"];
            // $email = $row["email"];
            // $activite = $row["activité"];
            // $rpps = $row["rpps"];


            // $rep = new \Model\Praticien($nom, $prenom, $email, $activite, $rpps);
            // $rep->setNom($nom);
            // return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE praticien SET nom = :nom, prenom = :prenom, email = :email, activité= :activite, rpps=:rpps  WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $rpps = $objet->getRpps();

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':activite', $activite);
            $stmt->bindParam(':rpps', $rpps);
            $stmt->execute();
        }


        public function delete($id)
        {

            $sql = "DELETE FROM praticien WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();



            //  retour de l'erreur SQL
            //
            //  if($stmt->errorCode() > 0) {
            // 		$errors = $stmt->errorInfo();
            // 		die($errors[2]);
            //  }


        }

        public function create($objet)
        {
            $sql = "INSERT INTO praticien (nom,prenom,email,activite,rpps) VALUES (:nom, :prenom, :email, :activite, :rpps)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $rpps = $objet->getRpps();

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':activite', $activite);
            $stmt->bindParam(':rpps', $rpps);

            $stmt->execute();
            $objet->setNom(parent::getLastKey());
        }

        // static function getPraticiens() {

        //         $req = "select * from praticien";
        //         $rep = "<table class=\"table table-striped\">";	
        //         $rows = Connexion::connexionPDO()->query($req);

        //         foreach ($rows as $row) {
        //             $rep .= "<tr><td>" . $row["nom"];
        //             $rep .= "</td><td>" . $row["prenom"];
        //             $rep .= "</td><td>" . $row["email"];
        //             $rep .= "</td><td>" . $row["activite"];
        //             $rep .= "</td><td>" . $row["rpps"];
        //          "</td></tr>";

        //         }

        //     return $rep;
        // }

        public function getPraticienByRpps($identifiant)
        {

            try {
                $cnx = Connexion::connexionPDO();
                $req = $cnx->prepare("select * from praticien where rpps=:rpps");
                $req->bindValue(':rpps', $identifiant, \PDO::PARAM_STR);
                $req->execute();

                $resultat = $req->fetch(\PDO::FETCH_ASSOC);
            } catch (\PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }


        public function getTable()
        {

            $rdv = (new \Model\Rdv)->getRdvByPraticien($_SESSION["id"]);
            $rep = "";
            if ($rdv != null) {
                foreach ($rdv as $row) {

                    $heure = date_create($row->date_heure)->format('H:i');
                    $date = date_create($row->date_heure)->format('d/m/Y');         


                    $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th><td>" . $date;
                    $rep .= "</td><td>" . $heure;
                    $rep .= "</td><td>" . $row->prenom . " " . $row->nom;
                    $rep .= "</td><td>" . $row->type;
                    "</td></tr>";
                }
            } 
            else {
                $rep =  "<td>Pas de rendez vous ce jour</td>";
               
            }
            return $rep;
        }
    }
}
