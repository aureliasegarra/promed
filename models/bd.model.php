<?php

namespace Model {

    use Model\Connexion;

    abstract class DAO
    {        

        abstract function read($id);

        abstract function update($objet);

        abstract function delete($objet);

        abstract function create($objet);

        protected $key;

        protected $table;

        function __construct($key, $table)
        {
            $this->key = $key;
            $this->table = $table;
        }

        function getLastKey()         
        {
            return Connexion::connexionPDO()->lastInsertId();
        }
    }
}