<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleLoginRegister.css">
    <link href="./fonts/css/all.css" rel="stylesheet"> <!--load all styles -->

    <title>Document</title>
</head>
<body>

    <div id="navigationBar">
    
        <a href="index.php">Accueil</a>
        <a href="myProfile.php">Mon Profile</a>
        <a href="login.php">Se connecter</a>
        <!-- <a href="Mes Favoris">Favoris</a> -->
        <!-- <div class="topNavRight" style="float:left"> -->
            <a style="float:left; background-color:rgb(169,169,169); margin:-15px; margin-left 10px;">Hello</a>
        <!-- </div> -->
    </div>
    <br>
    <div class="loginForm">

        <form id="selfForm" align="center" action="" method="POST">

                <!-- <h2>Me Connecter</h2> -->
                        <i class="fas fa-user-circle"style=" font-size:100px; color:rgb(189, 109, 109);"></i>

            <!-- <td>Entrer votre Adresse Mail </td> -->
            </br></br>
            <input type="text" name="cliMail" placeholder="Votre Adresse Mail">

            <!-- <br></br><td>Entrer votre Mot de passe</td> -->
            </br></br>
            <input type="password" name="cliMDP" placeholder="Votre Mot de passe">

            
            <br></br>
            <input type="submit" value="Se connecter" name="submit"></input>
            <br></br>
            <!-- <input type="submit" value="Effacer" name="erase"></input> -->

        </form>
        <br>

    </div>
        <?php


        include "db.php";

        $classConnect = new Db();
        $connectdB = $classConnect -> connection(); 
        $cliMail = isset($_POST['cliMail']) ? $_POST['cliMail'] : '';
        $cliMDP = isset($_POST['cliMDP']) ? $_POST['cliMDP'] : '';


    if(isset($_POST['submit'])) {

        if((empty($cliMail) || empty($cliMDP) )) {
            echo '<b>Inserer la/les valeur(s)';
        
        }else{

            $sql = "SELECT * FROM Clients WHERE cliMail = '$cliMail' AND cliMDP = '$cliMDP' ";

            if($queryIsOk) {

                echo '<b>Impossible de se connecter<b>';
            }else
                {
                    $_SESSION['user_email']= $cliMail;

                    header("Location:myProfile.php");
                   
                }
    
            }
        }

if(isset($_POST['erase'])   ){
    echo '';
}
    ?>
</body>
</html>