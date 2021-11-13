<?php 
    include "db.php";

    class Functions {

        public function affichagesProduits(){
            $classConnect = new Db();
            $connect = $classConnect -> connection();

            $sql = "SELECT * FROM Produit";

            $query = $connect -> prepare($sql);
            $queryIsOk = $query -> execute();
            if($queryIsOk){
                echo "it 's working ";
                echo "<br>";
                while($row = $query -> fetch(PDO::FETCH_OBJ)){
                    echo "<div id='produitSeule'>";
                    echo "<h3>Nom du produit: </h3>".$row->prodNom."</br>";
                    echo "</div>";
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
                echo "it 's working catégorie ";
                echo "<br>";
                while($row = $query -> fetch(PDO::FETCH_OBJ)){
                    echo $row;
                    echo "<div id='categorieSeul'>";
                    echo "<h3>Nom categorie: </h3>".$row->categNom."</br>";
                    echo "</div>";
                }
            }else {
                echo "not working";
            }
        }
        
        

    }



// $displayTest = new Functions();
// $displayTest -> affichagesProduits();
?>