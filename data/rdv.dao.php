<?php

namespace DAO {

    require_once "bd.dao.php";
    require_once "bd.connect.php";

    use DAO\DAO;
    use DBConnexion\Connexion;


    class RdvDao extends DAO
    {

        protected $id;

        protected $nomPatient;
        protected $prenomPatient;

        protected $nomPraticien;
        protected $prenomPraticien;       
        protected $activite;

        protected $dateRdv;
        protected $heureRdv;
        protected $pec;



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


        public function getRdvByPraticien($idPraticien)
        {
            $req = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id JOIN prise_en_charge ON prise_en_charge.id = rdv.id_pec WHERE id_praticien=$idPraticien AND date_heure BETWEEN DATE_SUB(NOW(), INTERVAL '12' HOUR) AND DATE_ADD(NOW(), INTERVAL '1' DAY) ORDER BY date_heure";
            $rows = Connexion::connexionPDO()->query($req);
            return $rows;
        }

        public function getRdvByPatient($idPatient)
        {
            $req = "SELECT * FROM rdv JOIN patient ON rdv.id_patient=patient.id JOIN prise_en_charge ON prise_en_charge.id = rdv.id_pec JOIN praticien ON praticien.id=rdv.id_praticien WHERE id_patient=$idPatient AND date_heure > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY date_heure ";       
            $rows = Connexion::connexionPDO()->query($req);
            return $rows;
        }

    }
}
