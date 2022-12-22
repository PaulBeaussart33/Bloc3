<?php
include 'include/pdo.php';
if(isset($_GET["id"])){


$id=$_GET["id"];

$stmt = $pdo->query("SELECT * FROM recette WHERE id = $id");
$recettes = $stmt->fetchAll();
var_dump($recettes);
foreach($recettes as $recette){
    if(isset($recette['image'])){ 
        $i = $recette['image'];
        echo "<div class='form-group'><img name='image' src='img/$i'/>
        </div>"; 
     }


    
     if(isset($recette['titre'])){ 
        echo '<div class="form-group"><p name="titre">'.$recette['titre'].'</p>
        </div>'; 
     }
    


}
}
?>