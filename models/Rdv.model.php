<?php

namespace Model {

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Rdv extends DAO
    {

        protected $id;
        protected $idPraticien;
        protected $idPatient;
        protected $idPec;
        protected $dateHeure;
        protected $paiement;

        function __construct()
        {
            parent::__construct("id", "rdv");
        }


        public function getIdPraticien(){
            return $this->idPraticien;
        }

        public function getIdPatient(){
            return $this->idPatient;
        }
        
        public function getIdPec(){
            return $this->idPec;
        }
        
        public function getDateHeure(){
            return $this->dateHeure;
        }

        public function getPaiement(){
            return $this->paiement;
        }     


        public function rdv ($idPraticien, $idPatient, $idPec, $dateHeure,$paiement){

            $this->idPraticien = $idPraticien;
            $this->idPatient = $idPatient;
            $this->idPec = $idPec;
            $this->dateHeure = $dateHeure;
            $this->paiement = $paiement;     

            return $this;
        }

        public function read($id)
        {
            $sql = "SELECT * 
                    FROM rdv 
                    WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch();

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
            $sql = "DELETE 
                    FROM rdv 
                    WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function create($objet)
        {
            $sql = "INSERT INTO rdv (id_praticien,id_patient,id_pec,date_heure,paiement) VALUES (:idPraticien, :idPatient, :idPec, :dateHeure, :paiement)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $idPraticien = $objet->getIdPraticien();
            $idPatient = $objet->getIdPatient();
            $idPec = $objet->getIdPec();
            $dateHeure = $objet->getDateHeure();
            $paiement = $objet->getPaiement();   

            $stmt->bindParam(':idPraticien', $idPraticien);
            $stmt->bindParam(':idPatient', $idPatient);
            $stmt->bindParam(':idPec', $idPec);
            $stmt->bindParam(':dateHeure', $dateHeure);
            $stmt->bindParam(':paiement', $paiement);

            $stmt->execute();
        }


        public function getRdvByPraticien($idPraticien)
        {
            $req = "SELECT * 
                    FROM rdv 
                    JOIN patient ON rdv.id_patient=patient.id 
                    JOIN prise_en_charge ON prise_en_charge.id = rdv.id_pec 
                    WHERE id_praticien=$idPraticien 
                    AND date_heure BETWEEN DATE_SUB(NOW(), INTERVAL '12' HOUR) AND DATE_ADD(NOW(), INTERVAL '1' DAY) 
                    ORDER BY date_heure";

            $rows = Connexion::connexionPDO()->query($req);
            return $rows;
        }

        public function getRdvByPatient($idPatient)
        {
            $req = "SELECT * 
                    FROM rdv 
                    JOIN patient ON rdv.id_patient=patient.id 
                    JOIN prise_en_charge ON prise_en_charge.id = rdv.id_pec 
                    JOIN praticien ON praticien.id=rdv.id_praticien 
                    WHERE id_patient=$idPatient 
                    AND date_heure > DATE_SUB(NOW(), INTERVAL 1 DAY) 
                    ORDER BY date_heure ";

            $rows = Connexion::connexionPDO()->query($req);
            return $rows;
        }

    }
}
