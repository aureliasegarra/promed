<?php

namespace DAO{

    require_once "bd.dao.php";
    require_once "bd.connect.php";

    use DAO\DAO;
    use DBConnexion\Connexion;

 
    class PraticienDao extends DAO{

    

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

            $row = $stmt->fetch();

            $id = $row["id"];
            $nom = $row["nom"];
            $prenom = $row["prenom"];
            $email = $row["email"];
            $activite = $row["activité"];
            $rpps = $row["rpps"];
            $mdp = $row["mot_de_passe"];
            
            
            
            $rep = new \User\Praticien($nom, $prenom, $email, $activite, $rpps, $mdp);
            $rep->setNom($nom);
            return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE praticien SET nom = :nom, prenom = :prenom, email = :email, activité= :activite, rpps=:rpps  WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();   
            $activite = $objet->getActivite();
            $rpps= $objet->getRpps();       
          
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
            $sql = "INSERT INTO praticien (nom, prenom, email, rpps, activite, mot_de_passe) VALUES (:nom, :prenom, :email, :rpps, :activite, :mot_de_passe)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $rpps= $objet->getRpps();
            $mdp = $objet->getMdp();   

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':activite', $activite);
            $stmt->bindParam(':rpps', $rpps);
            $stmt->bindParam(':mot_de_passe', $mdp);

            // $nom = $_POST['nom'];
            // $prenom = $_POST['prenom'];
            // $email = $_POST['email'];
            // $rpps = $_POST['rpps'];
            // $activite = $_POST['activite'];
            // $mot_de_passe = $_POST['mot_de_passe'];



            $stmt->execute();
            $objet->setNom(parent::getLastKey());

            
        }

        static function getPraticiens() {
        
                $req = "select * from praticien";
                $rep = "<table class=\"table table-striped\">";	
                $rows = Connexion::connexionPDO()->query($req);

                foreach ($rows as $row) {
                    $rep .= "<tr><td>" . $row["nom"];
                    $rep .= "</td><td>" . $row["prenom"];
                    $rep .= "</td><td>" . $row["email"];
                    $rep .= "</td><td>" . $row["activite"];
                    $rep .= "</td><td>" . $row["rpps"];
                 "</td></tr>";
                   
                }
        
            return $rep;
        }

       public function getPraticienByRpps($identifiant) {

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

    }
}
