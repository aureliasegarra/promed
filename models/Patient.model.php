<?php

namespace Model{

    class Patient{

        private $nom ;
		private $prenom;
		private $email;
		private $id;
		private $table;
	

	public function __construct() {
			// $this->nom= $nom;
			// $this->prenom = $prenom;
			// $this->email = $email;
		}

		public function getNom() {
			return $this->nom;
		}

		public function getPrenom() {
			return $this->prenom;
		}

		public function getId() {
			return $this->id;
		}


		public function getEmail() {
			return $this->email;
		}

		public function setNom($nom) {
			$this->nom = $nom;
			return $this;
		}

		public function addPatient(){

            $daoPatient = new \DAO\PatientDao();
            $daoPatient->create($this);
        }


		public function getTable(){

			$rdv = (new \DAO\RdvDao)->getRdvByPatient($_SESSION["id"]);
			$rep = "";
		  
				foreach ($rdv as $row) {
					
					$heure = date_create($row['date_heure'])->format('H:i');
					$date = date_create($row['date_heure'])->format('d/m/Y');         
		
					$rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th>
							<td>" .$row["prenom"]." ". $row["nom"];
					$rep .= "</td><td>" . $row["activite"];
					$rep .= "</td><td>" . $date;
					$rep .= "</td><td>" . $heure;
					$rep .= "</td><td>" . $row["type"];
					"</td></tr>";
				}
			
			$this->table= $rep;
			return $this->table;

		}

		function __toString() {
			$rep = "<div class=\"patient\">$this->nom $this->prenom $this->email </div>";
			return $rep;
		}
    }
}
?>