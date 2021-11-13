<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2></h2>
    
    <div class="">

        <form action="" method="POST">
            <td>Entrer votre Adresse Mail </td>
            </br></br>
            <input type="text" name="cliMail" placeholder="Votre Adresse Mail">

            <br></br><td>Entrer votre Mot de passe</td>
            </br></br>
            <input type="password" name="cliMDP" placeholder="Votre Mot de passe">

            
            <br></br>
            <input type="submit" value="Se connecter" name="submit"></input>
            <input type="submit" value="Effacer" name="erase"></input>

        </form>
        <br>
        <a href="">Retour au menu</a>

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