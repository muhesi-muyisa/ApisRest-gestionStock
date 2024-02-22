<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>essai</title>
</head>
<body>
    <p>
        <?php
            if(isset($_GET['message']) && $_GET['message']!=null) echo $_GET['message'];
        ?>
    </p>
    <form action="../controlers/categories/create.php" method="POST">
        <input type="text" placeholder="Nom Categorie" name='nom'> <br> <br>
        <input type="submit" value="Créer" name='save'>
    </form>
</body>
</html>