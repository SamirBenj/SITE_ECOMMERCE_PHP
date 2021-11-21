<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link href="./fonts/css/all.css" rel="stylesheet"> <!--load all styles -->
        <title>HomePage</title>
</head>
<body>
<?php include_once 'functions.php';?>
    <!-- <ul>
        <li>Accueil</li>
        <li>Mon Profile</li>
        <li>Mes Favoris</li>
        <li>Se connecter</li>

    <!-- </ul> --> 
    <div id="navigationBar">
   
        <a href="index.php">Accueil</a>
        <a href="myProfile.php">Mon Profile</a>
        <a href="login.php">Se connecter</a>
        <input type="text" value="RECHERCHE"><span class="fas fa-search"> </span>
        <!-- <a href="Mes Favoris">Favoris</a> -->
        <!-- <div class="topNavRight" style="float:left"> -->
            <a style="float:left; background-color:rgb(169,169,169); margin:-15px; margin-left 1px;">E-COMMERCE</a>
        <!-- </div> -->
    </div>
    <br>
    <!-- <h1 style="text-align:center;">PMU</h1> -->
    <!-- <a href="login.php">Connexion</a>
    <a href="register.php">Inscription</a> -->
    <div class="categorie">
        <a href="categ1.html">Categorie</a>
        <a href="categ1.html">Categorie</a>
        <a href="categ1.html">Categorie</a>
        <a href="categ1.html">Categorie</a>


    </div>

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
        <div id="rightBox">
                <h2>Dernière Ventes:</h2>
                <div id="eachProducts">
                    <?php 
                        $affichageProduit = new Functions();
                        $affichageProduit -> affichageVente();
                    ?>
                        <!-- <div id="produitVente">
                        <img src="./ImageProduits/bague.jpg" alt="">
                            <div id="info">
                                <h4>Bague</h4> 
                                <h5>6,60 €</h5>
                            </div>
                    </div> -->
                        <!-- <div id="produitVente">
                        <img src="./ImageProduits/bague.jpg" alt="">
                        <h4>Bague</h4>
                        <h5>6,60 €</h5>
                    </div>
                        <div id="produitVente">
                        <img src="./ImageProduits/bague.jpg" alt="">
                        <h4>Bague</h4>
                        <h5>6,60 €</h5>                        
                    </div> -->
                <div>
        <div>

    <link rel="stylesheet" href="style.css">

</body>
</html>