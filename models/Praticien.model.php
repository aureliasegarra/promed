<?php

namespace Model{

    class Praticien{

        private $nom ;
		private $prenom;
		private $email;
		private $rpps;
        private $activite;
	

	function __construct($nom,$prenom,$email,$rpps,$activite) 
    {
			$this->nom= $nom;
			$this->prenom = $prenom;
			$this->email = $email;
            $this->rpps = $rpps;
            $this->activite = $activite;

		}

		public function getNom() {
			return $this->nom;
		}

		public function getPrenom() {
			return $this->prenom;
		}

		public function getRpps() {
			return $this->rpps;
		}

		public function getActivite() {
			return $this->activite;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setNom($nom) {
			$this->nom = $nom;
			return $this;
		}


		public function addPraticien()
        {
            $daoPraticien = new \DAO\PraticienDao();
            $daoPraticien->create($this);
        }
		function __toString() {
			$rep = "<div class=\"praticien\">$this->nom $this->prenom $this->email $this->activite $this->rpps </div>";
			return $rep;
		}

    }
}


?>