<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HomePage</title>
</head>
<body>
<?php include_once 'functions.php';?>
    <!-- <ul>
        <li>Accueil</li>
        <li>Mon Profile</li>
        <li>Mes Favoris</li>
        <li>Se connecter</li>

    </ul> -->
    <div id="navigationBar">
   
        <a href="index.php">Accueil</a>
        <a href="myProfile.php">Mon Profile</a>
        <a href="login.php">Se connecter</a>
        <a href="Mes Favoris">Favoris</a>

    </div>
    <br>
    <!-- <h1 style="text-align:center;">PMU</h1> -->
    <!-- <a href="login.php">Connexion</a>
    <a href="register.php">Inscription</a> -->

    <?php 
        if($_SESSION['user_email']){
            echo "Un client est connecté";
        }else {
            echo "Veuillez vous connecter/inscire";
        }
    ?>

        <div>

        </div>
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