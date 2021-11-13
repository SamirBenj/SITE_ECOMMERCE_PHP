<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <div>
           
    <td>Entrer votre Nom</td>
            </br></br>
            <input type="text" name="cliNom" placeholder="Votre nom">

            </br></br>  
            <td>Entrer votre Prenom</td>
            </br></br>
            <input type="text" name="cliPrenom" placeholder="Votre Prenom">
            
            </br></br>
            <td>Entrer votre Code Postal</td>
            </br></br>
            <input type="text" name="cliCpostal" placeholder="Le code postal">

            </br></br>
            <td>Entrer votre Adresse Mail</td>
            </br></br>
            <input type="text" name="cliMail" placeholder="Votre Adresse Mail">

            </br></br>
            <td>Entrer votre Mot de passe</td>
            </br></br>
            <input type="password" name="cliMDP" placeholder="Mot de passe">

            <br></br>
            <input type="submit" value="Ajouter" name="submit"></input>
            <input type="submit" value="Effacer" name="erase"></input>
        </form>

        <br>
        <a href="index.html">Retour au menu</a>
    </div>

    <?php

        include "db.php";

        $classConnect = new Db();
        $connectdB = $classConnect -> connection();
        
        $cliNom = isset($_POST['cliNom']) ? $_POST['cliNom'] : '';
        $cliPrenom = isset($_POST['cliPrenom']) ? $_POST['cliPrenom'] : '';
        $cliCpostal = isset($_POST['cliCpostal']) ? $_POST['cliCpostal'] : '';
        $cliMail = isset($_POST['cliMail']) ? $_POST['cliMail'] : '';
        $cliMDP = isset($_POST['cliMDP']) ? $_POST['cliMDP'] : '';
        
        
            if(isset($_POST['submit'])) {
        
                if((empty($cliNom) || empty($cliPrenom) || empty($cliCpostal) || empty($cliMail) || empty($cliMDP) )) {
                    echo '<b>Inserer la/les valeur(s)';
                
                }else{
        
                    $sql = "INSERT INTO Clients(cliNom,cliPrenom,cliCpostal,cliMail,cliMDP) VALUES ('$cliNom' ,'$cliPrenom','$cliCpostal','$cliMail','$cliMDP')";
        
                    $query = $connectdB -> prepare($sql);
                    $queryIsOk = $query -> execute();

                    if($queryIsOk) {
                        echo "<b>Votre compte na pas pu être creer <b>";
                    }else
                        {
                            
                            echo '<div><b>Votre à bien était crée <b></div>';
                        }
            
                    }
                }
        
        if(isset($_POST['erase'])   ){
            echo '';
        }
            
    ?>

</body>
</html>