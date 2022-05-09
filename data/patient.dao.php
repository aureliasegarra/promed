<?php

namespace DAO{

    require_once "bd.dao.php";
    require_once "bd.connect.php";

    use DAO\DAO;
    use DBConnexion\Connexion;

 
    class PatientDao extends DAO{

        // protected $id;
        // protected $nom;
        // protected $prenom;
        // protected $email;
        // protected $activite;
        // protected $adress;
        // protected $datenaissance;
        // protected $telephone;
        // protected $genre;


        function __construct()
        {
			parent::__construct("id", "patient");
        }

		public function getId() {
			return $this->id;
		}

        public function getNom() {
			return $this->nom;
		}

        public function getPrenom() {
			return $this->prenom;
		}

        public function getEmail() {
			return $this->email;
		}

        public function getActivite() {
			return $this->activite;
		}

        public function getAdresse() {
			return $this->adress;
		}

        public function getDateNaissance(){
            return $this->datenaissance;
        }

        public function getTelephone() {
			return $this->telephone;
		}

        public function getGenre() {
			return $this->genre;
		}


        public function read($id)
        {
            $sql = "SELECT * FROM patient WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();

            // $row = $stmt->fetch();

            // $id = $row["id"];
            // $nom = $row["nom"];
            // $prenom = $row["prenom"];
            // $email = $row["email"];            
            
            // $rep = new \Model\Patient($nom, $prenom, $email);
            // // $rep->setNom($nom);
            // return $rep;
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

        public function getTable(){

			$rdv = (new \DAO\RdvDao)->getRdvByPatient($_SESSION["id"]);
			$rep = "";
		  
				foreach ($rdv as $row) {
					
                    // $row = json_decode(json_encode($rew), true);
					$heure = date_create($row->date_heure)->format('H:i');
					$date = date_create($row->date_heure)->format('d/m/Y');         
		
					$rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th>
							<td>" .$row->prenom." ". $row->nom;
					$rep .= "</td><td>" . $row->activite;
					$rep .= "</td><td>" . $date;
					$rep .= "</td><td>" . $heure;
					$rep .= "</td><td>" . $row->type;
					"</td></tr>";
				}
			
			return $rep;

		}



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
