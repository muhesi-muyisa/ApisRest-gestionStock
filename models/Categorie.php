<?php
    class Categorie{
        
        // Les information de la table et la connexion ainisi que les méthodes
        private $table='categorie';
        private $connexion=null;

        // Les propriété de la classe Catégorie
        public $id;
        public $nom;

        // La construction de la connexion 
        public function __construct($db){
            if ($this->connexion==null) {
                $this->connexion=$db;
            }
        }

        // Méthode d'enregistrement 
        public function createCate(){
            $sql="INSERT INTO $this->table(nom) VALUES(:nom)";

            $req=$this->connexion->prepare($sql);

            $rq=$req->execute([
                ':nom'=>$this->nom
            ]);
            if($rq) return true;
            else return false;
        }

         // Méthode de modofication
         public function updateCate(){
            $sql="UPDATE $this->table SET nom=:nom WHERE id=:id";
            $req=$this->connexion->prepare($sql);

            $rq=$req->execute([
                ':nom'=>$this->nom,
                ':id'=>$this->id
            ]);
            if($rq) return true;
            else return false;
        }
        // Fonction de suppression
        public function deleteCate(){
            $sql="DELETE FROM $this->table WHERE id=:id";
            $req=$this->connexion->prepare($sql);

            $rq=$req->execute([
                ':id'=>$this->id
            ]);
            if($rq) return true;
            else return false;
        }
        // Fonction de lecture
        public function readCate(){
            $sql="SELECT * FROM $this->table ORDER BY id DESC";
            $req=$this->connexion->query($sql);
            return $req;
        }
    }