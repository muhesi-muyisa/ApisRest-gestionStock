<?php
	header("access-Control-Allow-Origin: *");
	header("Content-type: Application/Json; charset=UTF-8");
	header("access-Control-Allow-Methods: POST");
    require_once'../../config/Database.php';
    require_once'../../models/Categorie.php';

    // Insatance de la connexion
	if ($_SERVER['REQUEST_METHOD']==="PUT") 
    {
        // La base de données
        $db= new Database();
        // L'objet 
        $categorie=new Categorie($db);
        
    }