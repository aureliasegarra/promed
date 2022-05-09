<?php

namespace Model {

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Patient extends DAO
    {

        protected $id;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $activite;
        protected $numSecu;
        protected $mutuelle;
        protected $caisse;
        protected $nomTuteur;
        protected $adress;
        protected $datenaissance;
        protected $telephone;
        protected $sexe;
        protected $mdp;

        function __construct()
        {
            parent::__construct("id", "patient");
        }


        /* constructeur de test pour l'ajout d'un patient*/

        public function Patient($nom, $prenom, $email, $activite, $numSecu, $mutuelle, $caisse, $nomTuteur, $datenaissance, $telephone, $sexe, $password)
        {

            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->activite = $activite;
            $this->numSecu = $numSecu;
            $this->mutuelle = $mutuelle;
            $this->caisse = $caisse;
            $this->nomTuteur = $nomTuteur;
            $this->datenaissance = $datenaissance;
            $this->telephone = $telephone;
            $this->sexe = $sexe;
            $this->mdp = $password;

            return $this;
        }


                                                                    /* GETTERS ET SETTER*/

                                                                    
        public function getId()
        {
            return $this->id;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getActivite()
        {
            return $this->activite;
        }

        public function getNumSecu()
        {
            return $this->numSecu;
        }

        public function getMutuelle()
        {
            return $this->mutuelle;
        }

        public function getCaisse()
        {
            return $this->caisse;
        }

        public function getAdresse()
        {
            return $this->adress;
        }

        public function getDateNaissance()
        {
            return $this->datenaissance;
        }

        public function getTelephone()
        {
            return $this->telephone;
        }

        public function getNomTuteur()
        {
            return $this->nomTuteur;
        }

        public function getSexe()
        {
            return $this->sexe;
        }

        public function getMdp()
        {
            return $this->mdp;
        }




        // public function setNom($nom)
        // {
        //     $this->nom = $nom;
        // }

        // public function setPrenom($prenom)
        // {
        //     $this->prenom = $prenom;
        // }

        // public function setEmail($mail)
        // {
        //     $this->email = $mail;
        // }

        // public function setActivite($activite)
        // {
        //     $this->activite = $activite;
        // }

        // public function setNumSecu($numSecu)
        // {
        //     $this->numSecu = $numSecu;
        // }

        // public function setMutuelle($mutuelle)
        // {
        //     $this->mutuelle = $mutuelle;
        // }

        // public function setCaisse($caisse)
        // {
        //     $this->caisse = $caisse;
        // }

        // public function setAdresse($adresse)
        // {
        //     $this->adress = $adresse;
        // }

        // public function setDateNaissance($datenaissance)
        // {
        //     $this->datenaissance = $datenaissance;
        // }

        // public function setTelephone($telephone)
        // {
        //     $this->telephone = $telephone;
        // }

        // public function setNomTuteur($nomTuteur)
        // {
        //     $this->nomTuteur = $nomTuteur;
        // }

        // public function setSexe($sexe)
        // {
        //     $this->sexe = $sexe;
        // }

        // public function setMdp($mdp)
        // {
        //     $this->mdp = $mdp;
        // }


        // public function setId()
        // {
        // }


                                                                                /* REQUETES */





        /* recupere les infos du patient par son id*/

        public function read($id)
        {
            $sql = "SELECT * FROM patient WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        }




        /* modifie un patient existant*/  /* NON EFFECTUE */

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



        /* supprime un patient existant*/  /* NON EFFECTUE */

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



        /* sauvegarde un nouveau patient */

        public function create($objet)
        {
            $sql = "INSERT INTO patient (nom,prenom,email,activite,num_secu,mutuelle,caisse,date_naissance,nom_tuteur,telephone,sexe,mot_de_passe) 
                    VALUES (:nom, :prenom, :email, :activite, :num_secu, :mutuelle, :caisse, :date_naissance, :nom_tuteur, :telephone, :sexe, :mot_de_passe)";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $email = $objet->getEmail();
            $activite = $objet->getActivite();
            $num_secu = $objet->getNumSecu();
            $mutuelle = $objet->getMutuelle();
            $caisse = $objet->getCaisse();
            $date_naissance = $objet->getDateNaissance();
            $nom_tuteur = $objet->getNomTuteur();
            $telephone = $objet->getTelephone();
            $sexe = $objet->getSexe();
            $motdepasse = $objet->getMdp();

            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':activite', $activite);
            $stmt->bindParam(':num_secu', $num_secu);
            $stmt->bindParam(':mutuelle', $mutuelle);
            $stmt->bindParam(':caisse',  $caisse);
            $stmt->bindParam(':date_naissance', $date_naissance);
            $stmt->bindParam(':nom_tuteur', $nom_tuteur);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':sexe', $sexe);
            $stmt->bindParam(':mot_de_passe', $motdepasse);

            $stmt->execute();
            // $objet->setNom(parent::getLastKey());
        }



        /* recupere les infos du patient par son mail*/

        public function getPatientByMail($identifiant)
        {

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


                                                                            /* FONCTIONS*/



        /* recupere le tableau de rdv a afficher*/

        public function getTable()
        {

            $rdv = (new \Model\Rdv)->getRdvByPatient($_SESSION["id"]);
            $rep = "";

            foreach ($rdv as $row) {

                $heure = date_create($row->date_heure)->format('H:i');
                $date = date_create($row->date_heure)->format('d/m/Y');

                $rep .= "<tr><th scope=\"row\"><i class=\"fa-solid fa-gear\"></i></th>
							<td>" . $row->prenom . " " . $row->nom;
                $rep .= "</td><td>" . $row->activite;
                $rep .= "</td><td>" . $date;
                $rep .= "</td><td>" . $heure;
                $rep .= "</td><td>" . $row->type;
                "</td></tr>";
            }

            return $rep;
        }




    }
}
