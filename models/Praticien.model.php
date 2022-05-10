<?php

namespace Model{

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Praticien extends DAO
    {

        protected $id;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $rpps;
        protected $activite;
        protected $mot_de_passe;


        function __construct()
        {
            parent::__construct("id", "praticien");
        }


        /* Constrcteur Patient pour tester */
        public function Praticien($nom, $prenom, $email, $rpps, $activite, $mot_de_passe)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->rpps = $rpps;
            $this->activite = $activite;
            $this->mot_de_passe = $mot_de_passe;

            return $this;
        }

        /* GETTERS & SETTERS */

        public function getId(){
                return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getRpps(){
            return $this->rpps;
        }

        public function getActivite(){
            return $this->activite;
        }

        public function getMdp(){
            return $this->mot_de_passe;
        }




        public function read($id)
        {
            $sql = "SELECT * FROM praticien WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();

            // $id = $row["id"];
            // $nom = $row["nom"];
            // $prenom = $row["prenom"];
            // $email = $row["email"];
            // $activite = $row["activité"];
            // $rpps = $row["rpps"];


            // $rep = new \Model\Praticien($nom, $prenom, $email, $activite, $rpps);
            // $rep->setNom($nom);
            // return $rep;
        }

        public function update($objet)
        {
            $sql = "UPDATE praticien SET nom = :nom, prenom = :prenom, email = :email, activité= :activite, rpps=:rpps  WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $rpps = $objet->getRpps();

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
            $sql = "INSERT INTO praticien (nom,prenom,email,activite,rpps, mot_de_passe) VALUES (:nom, :prenom, :email, :activite, :rpps, :mot_de_passe)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $rpps = $objet->getRpps();
            $mot_de_passe = $objet->getMdp();

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':activite', $activite);
            $stmt->bindParam(':rpps', $rpps);
            $stmt->bindParam(':mot_de_passe', $mot_de_passe);

            $stmt->execute();
            /* $objet->setNom(parent::getLastKey()); */
        }

        

        public function getPraticienByRpps($identifiant)
        {

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


        public function getTable()
        {

            $rdv = (new \Model\Rdv)->getRdvByPraticien($_SESSION["id"]);
            $rep = "";
            if ($rdv != null) {
                foreach ($rdv as $row) {

                    $heure = date_create($row->date_heure)->format('H:i');
                    $date = date_create($row->date_heure)->format('d/m/Y');         


                    $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th><td>" . $date;
                    $rep .= "</td><td>" . $heure;
                    $rep .= "</td><td>" . $row->prenom . " " . $row->nom;
                    $rep .= "</td><td>" . $row->type;
                    "</td></tr>";
                }
            } 
            else {
                $rep =  "<td>Pas de rendez vous ce jour</td>";
               
            }
            return $rep;
        }
    }
}
