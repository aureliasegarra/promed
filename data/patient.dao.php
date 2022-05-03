<?php

namespace DAO{

    require_once "bd.dao.php";
    require_once "bd.connect.php";

    use DAO\DAO;
    use DBConnexion\Connexion;

 
    class PatientDao extends DAO{

    

        function __construct()
        {
			parent::__construct("id", "patient");
        }


        public function read($id)
        {
            $sql = "SELECT * FROM patient WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch();

            $id = $row["id"];
            $nom = $row["nom"];
            $prenom = $row["prenom"];
            $email = $row["email"];            
            
            $rep = new \Model\Patient($nom, $prenom, $email);
            // $rep->setNom($nom);
            return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE patient SET nom = :nom, prenom = :prenom, email = :email  WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();          
          
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        }


        public function delete($id)
        {
			
			$sql = "DELETE FROM patient WHERE $this->key=:id";
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
            $sql = "INSERT INTO patient (nom,prenom,email) VALUES (:nom, :prenom, :email)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $objet->setNom(parent::getLastKey());
        }

        // static function getPatients() {
        
        //         $req = "select * from patient";
        //         $rep = "<table class=\"table table-striped\">";	
        //         $rows = Connexion::connexionPDO()->query($req);

        //         foreach ($rows as $row) {
        //             $rep .= "<tr><td>" . $row["nom"];
        //             $rep .= "</td><td>" . $row["prenom"];
        //             $rep .= "</td><td>" . $row["email"];
        //          "</td></tr>";
                   
        //         }
        
        //     return $rep;
        // }

        public function getPatientByMail($identifiant) {

            try {
                $cnx = Connexion::connexionPDO();
                $req = $cnx->prepare("select * from patient where email=:email");
                $req->bindValue(':email', $identifiant, \PDO::PARAM_STR);
                $req->execute();
                
                $resultat = $req->fetch(\PDO::FETCH_ASSOC);
            } catch (\PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
            }
    }
}
?>