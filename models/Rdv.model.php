<?php

namespace User{

    class Rdv{

        private $nomPraticien;
		private $nomPatient;
		private $pec;
		private $date;
        private $heure;
        private $validite;

        function __construct($nomPraticien,$nomPatient,$pec,$date,$heure,$validite) 
        {
                $this->nomPraticien= $nomPraticien;
                $this->nomPatient = $nomPatient;
                $this->pec = $pec;
                $this->date = $date;
                $this->heure = $heure;
                $this->validite = $validite;
            }

    }



}