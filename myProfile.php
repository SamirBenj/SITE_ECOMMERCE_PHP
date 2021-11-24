<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fonts/css/all.css">
    <link rel="stylesheet" href="profileDesign.css">
    <title>Mon Profile</title>
    
</head>
<body>
    <?php session_start() ?>

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
    <h2>Bonjour <?php echo $_SESSION['user_email'] ?>  !</h2> 
    <div style="text-align:center;">
    <div class="allInfo">
        <div class="cardProfile">
            <!-- <i class="far fa-user-circle" style="font-size:70px"></i> -->
            <>Hello</p>
        </div>

        <div class="mesCommmandes">
            <p>Hello</p>
        </div>
    </div>
</div>
<!-- </body>
</html>