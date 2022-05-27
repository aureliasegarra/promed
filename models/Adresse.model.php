<?php

namespace Model{

    require_once "bd.model.php";
    require_once "bdconnect.model.php";

    use Model\DAO;
    use Model\Connexion;


    class Adresse extends DAO
    {

        protected $id;
        protected $voie;
        protected $numero;
        protected $code_postal;
        protected $ville;

 
         /* GETTERS & SETTERS */
 
         public function getId(){
                 return $this->id;
         }
 
         public function getVoie(){
             return $this->voie;
         }
 
         public function getNumero(){
             return $this->numero;
         }
 
         public function getCodePostal(){
             return $this->code_postal;
         }
 
         public function getVille(){
             return $this->ville;
         }


        function __construct()
        {
            parent::__construct("id", "adresse");
        }


           public function read($id)
           {
               $sql = "SELECT * FROM adresse WHERE $this->key=:id";
               $stmt = Connexion::connexionPDO()->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
   
               return $stmt->fetch();
           }
      
   
           public function update($objet)
           {

           }
        
   
           public function delete($id)
           {
  
   
           }
       
   
           public function create($objet)
           {
    
           }
      

           public function getAdresseByPraticienId($idPraticien){

            $sql = "SELECT * FROM adresse 
                    JOIN praticien ON adresse.id=praticien.id_adresse
                    WHERE praticien.id=:id";

            $stmt = Connexion::connexionPDO()->prepare($sql);
            $stmt->bindParam(':id', $idPraticien);
            $stmt->execute();

            return $stmt->fetch();

           }
    }

}