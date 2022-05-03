<?php

namespace User{

    class Praticien{

        private $nom ;
		private $prenom;
		private $email;
		private $rpps;
        private $activite;
		private $mot_de_passe;
	

	function __construct($nom,$prenom,$email,$rpps,$activite, $mot_de_passe) 
    {
			$this->nom= $nom;
			$this->prenom = $prenom;
			$this->email = $email;
            $this->rpps = $rpps;
            $this->activite = $activite;
			$this->mot_de_passe = $mot_de_passe;

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

		public function getMdp() {
			return $this->mot_de_passe;
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