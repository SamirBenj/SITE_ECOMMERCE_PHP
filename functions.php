<?php 
    include "db.php";
              

    class Functions {
      
        public function affichagesProduits($variable){
            $classConnect = new Db();
            $connect = $classConnect -> connection();
            $sql = "SELECT * FROM Produit";

            $query = $connect -> prepare($sql);
            $queryIsOk = $query -> execute();
            if($queryIsOk){
                // echo "it 's working ";
                // echo "<br>";
                while($row = $query -> fetch(PDO::FETCH_OBJ)){
                    // $prodId = $row -> prodNum;
                    $_SESSION['prodId'] = $row -> prodNum;
                    $value =$row -> prodNum;
                    echo "<form action='index.php?action=&id=$value'>";
                    echo "<div id='produitSeule'>";
                        echo "<div>";
                        echo "<img src='./ImageProduits/bague.jpg'></img>";
                        echo "<h3>$row->prodNom</h3>";
                        echo "<p>$row->prodDescription</p>";

                        echo "<input type='submit' name='submit' ><span>Ajouter au Panier</span> <span <i class='fas fa-cart-arrow-down' </span> ";
                        //<img width ='10px'src='./icon/cart.svg'>
                        echo "</div>";
                    echo "</div>";
                    echo "</form>";
                }
            }else {
                echo "not working";
            }
        }

        public function affichagesCategorie(){
            $classConnect = new Db();
            $connect = $classConnect -> connection();

            $sql = "SELECT * FROM Categorie";

            $query = $connect -> prepare($sql);
            $queryIsOk = $query -> execute();
            if($queryIsOk){
                // echo "it 's working catégorie ";
                // echo "<br>";
                while($row = $query -> fetch(PDO::FETCH_OBJ)){
                    // echo $row;
                    // echo "<div id='categorieSeul'>";
                    // echo "<h3>Nom categorie: </h3>".$row->categNom."</br>";
                    // echo "</div>";
                }
            }else {
                echo "not working";
            }
        }
        
       
public function affichageVente(){

    $classConnect = new Db();
    $connect = $classConnect -> connection();
    $sql = "SELECT  * FROM Vente";
    $query = $connect -> prepare($sql);

    $queryIsOk = $query -> execute();
   
    if($queryIsOk){
    while($ligne = $query->fetch(PDO::FETCH_OBJ)){

        // echo $ligne;    
        // echo "<div id='vente'>";
        // echo "<h3>DerniÃ¨rs ventes </h3>".$ligne->ventNom."</br>";
        // echo "</div>";
            
        echo ' <div id="produitVente">';
            echo '<img src="./ImageProduits/bague.jpg" alt="">';
                echo '<div id="info">';
                    echo '<h4>'.$ligne -> ventNomProduit.'</h4>';
                    echo '<h5>'.$ligne -> ventPrix.' €</h5>';
                echo '</div>';
        echo '</div>';
    }
    }else{
        echo "not working";
         }
        } 

    }



// $displayTest = new Functions();
// $displayTest -> affichagesProduits();
?>