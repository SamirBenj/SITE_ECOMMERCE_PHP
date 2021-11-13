<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
<?php include_once 'functions.php';?>

    <h1 style="text-align:center;">PMU</h1>
    <a href="login.php">Connexion</a>
    <a href="register.php">Inscription</a>

    
    <div class="Categorie">
        <?php
            $affichageCategorie = new Functions();
            $affichageCategorie -> affichagesCategorie();
        ?>
    </div>

    <div class="produitsRecent">
    <?php
        
        $affichageProduit = new Functions();
        $affichageProduit -> affichagesProduits();
        
    ?>

</div>
        <link rel="stylesheet" href="style.css">

</body>
</html>