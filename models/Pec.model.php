<?php


namespace Model {

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Pec extends DAO
    {

        protected $id;
        protected $libelle;
        protected $prix;
        protected $duree;


        function __construct()
        {
            parent::__construct("id", "rdv");
        }


        public function read($id)
        {
            $sql = "SELECT * 
                FROM pec 
                WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $row = $stmt->fetch();
        }

        public function update($objet)
        {
        }


        public function delete($id)
        {
            $sql = "DELETE 
                FROM pec 
                WHERE $this->key=:id";
            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function create($objet)
        {
        }

        public function getIdByType($type)
        {
        $sql = "SELECT id
                FROM prise_en_charge
                WHERE type=:libelle";
                
                $stmt = Connexion::connexionPDO()->prepare($sql);
                $stmt->bindParam(':libelle', $type);
                $libelle=$stmt->execute();

                return $libelle;
                
        }
    }
}
