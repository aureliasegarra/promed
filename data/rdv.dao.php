<?php

namespace DAO{

    require_once "bd.dao.php";
    require_once "bd.connect.php";

    use DAO\DAO;
    use DBConnexion\Connexion;

 
    class RdvDao extends DAO{

    

        function __construct()
        {
			parent::__construct("id", "rdv");
        }


        public function read($id)
        {
            $sql = "SELECT * FROM rdv WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch();

            // $id = $row["id"];
            // $nom = $row["nom"];
            // $prenom = $row["prenom"];
            // $email = $row["email"];
            // $activite = $row["activité"];
            // $rpps = $row["rpps"];
            
            
            // $rep = new \User\Praticien($nom, $prenom, $email, $activite, $rpps);
            // $rep->setNom($nom);
            // return $rep;
        }

        public function update($objet)
        {
            // $sql = "UPDATE praticien SET nom = :nom, prenom = :prenom, email = :email, activité= :activite, rpps=:rpps  WHERE $this->key=:id";
            // $stmt = Connexion::connexionPDO()->prepare($sql);
            // $nom = $objet->getNom();
            // $prenom = $objet->getPrenom();
            // $email = $objet->getEmail();   
            // $activite = $objet->getActivite();
            // $rpps= $objet->getRpps();       
          
            // $stmt->bindParam(':nom', $nom);
            // $stmt->bindParam(':prenom', $prenom);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':activite', $activite);
            // $stmt->bindParam(':rpps', $rpps);
            // $stmt->execute();
        }


        public function delete($id)
        {
			
			$sql = "DELETE FROM rdv WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();  

  
			
        }

        public function create($objet)
        {
            // $sql = "INSERT INTO praticien (nom,prenom,email,activite,rpps) VALUES (:nom, :prenom, :email, :activite, :rpps)";
            // $stmt = Connexion::connexionPDO()->prepare($sql);
            // $nom = $objet->getNom();
            // $prenom = $objet->getPrenom();
            // $email = $objet->getEmail();
            // $activite = $objet->getActivite();
            // $rpps= $objet->getRpps();   

            // $stmt->bindParam(':nom', $nom);
            // $stmt->bindParam(':prenom', $prenom);
            // $stmt->bindParam(':email', $email);
            // $stmt->bindParam(':activite', $activite);
            // $stmt->bindParam(':rpps', $rpps);

            // $stmt->execute();
            // $objet->setNom(parent::getLastKey());
        }

        static function getRdv() {
        
            //     $req = "select * from praticien";
            //     $rep = "<table class=\"table table-striped\">";	
            //     $rows = Connexion::connexionPDO()->query($req);

            //     foreach ($rows as $row) {
            //         $rep .= "<tr><td>" . $row["nom"];
            //         $rep .= "</td><td>" . $row["prenom"];
            //         $rep .= "</td><td>" . $row["email"];
            //         $rep .= "</td><td>" . $row["activité"];
            //         $rep .= "</td><td>" . $row["rpps"];
            //      "</td></tr>";
                   
            //     }
        
            // return $rep;
        }

       public function getRdvByPraticien($idPraticien) {

        $req = "select * from rdv join patient on rdv.id_patient=patient.id join prise_en_charge on prise_en_charge.id = rdv.id_pec where id_praticien=$idPraticien ";
        $rep = "";	
        $rows = Connexion::connexionPDO()->query($req);

        foreach ($rows as $row) {    
            $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th><td>" . $row["date_heure"];
            $rep .= "</td><td>" . $row["prenom"]." ". $row["nom"];
            $rep .= "</td><td>" . $row["type"];        
            "</td></tr>";                
        }
    return $rep;
}
}
}