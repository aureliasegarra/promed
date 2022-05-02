<?php

namespace User{

    class Patient{

        private $nom ;
		private $prenom;
		private $email;
		private $id;
	

	function __construct($nom,$prenom,$email) {
			$this->nom= $nom;
			$this->prenom = $prenom;
			$this->email = $email;			

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


		public function addPatient()
        {
            $daoPatient = new \DAO\PatientDao();
            $daoPatient->create($this);
        }
		function __toString() {
			$rep = "<div class=\"patient\">$this->nom $this->prenom $this->email </div>";
			return $rep;
		}

    }
}


?>