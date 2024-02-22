<?php
    class Database{

        // Les attributs 
        private $host="localhost";
        private $userName="root";
        private $dbName='gestion_stock';
        private $pwd='';

        // Methode de connexion 
        public function getConnexion(){
            $conn=null;
            try {
                $conn=new PDO("mysql:host=$this->host;dbname=$this->dbName",
                $this->userName,
                $this->pwd,
                [
                    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
                ]
        );
            } catch (\PDOException $th) {
                echo("Erreur: ".$th->getMessage());
            }
            return $conn;
        }
        
    }
    