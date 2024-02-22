<?php
	header("access-Control-Allow-Origin: *");
	//header("Content-type: Application/Json; charset=UTF-8");
	header("access-Control-Allow-Methods: GET");
    require_once'../../config/Database.php';
    require_once'../../models/Categorie.php';
    $data=[];
	// Insatance de la connexion
	if ($_SERVER['REQUEST_METHOD']==="GET") {
		$database=new Database();
		$db=$database->getConnexion();

		// Instance de l'objet etudiant
		$categorie=new Categorie($db);

		// Récupération de données 
		$statement=$categorie->readCate();

		// Vérfication d'existance de données dans la base de données 
		if($statement->rowCount()>0){
			
			$data[]=$statement->fetchAll();
        }
        else $message="La base de données est vide";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Num</th>
            <th>Nom</th>
        </tr>
        <?php foreach ($d as $data) {?></p>
        <tr>
            <td><?=$d->$id;  ?> </td>
            <td><?=$d ?> </td>
        </tr>
       <?php } ?> 
    </table>
</body>
</html>