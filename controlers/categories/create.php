<?php
	header("access-Control-Allow-Origin: *");
	header("Content-type: Application/Json; charset=UTF-8");
	header("access-Control-Allow-Methods: POST");
    require_once'../../config/Database.php';
    require_once'../../models/Categorie.php';

    // Insatance de la connexion
	if ($_SERVER['REQUEST_METHOD']==="POST") 
    {
        $database=new Database();
		$db=$database->getConnexion();

        // Instance de l'objet Niveau
        $categorie=new Categorie($db);
        if (isset($_POST['save'])) {
            $nom=htmlentities($_POST['nom']);
            if(isset($nom) && $nom!=null) {
                $categorie->nom=$nom;
                $categorie->createCate();
                $succe="Energistrement reussi";
                header("location:../../view/index.php?message=$succe");
            }else {
                $succe="Echec d'enrgistrement";
                header("location:../../view/index.php?message=$succe");
            }
        }else {
            $succe="Echec";
                header("location:../../view/index.php?message=$succe");
            header('location:../../view/index.php');
        }
    }

?>