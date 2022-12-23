<?php
include 'include/pdo.php';
if(isset($_GET["id"])){


$id=$_GET["id"];

$stmt = $pdo->query("SELECT * FROM recette WHERE id = $id");
$recettes = $stmt->fetchAll();

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
    

     if(isset($recette['description'])){ 
      echo '<div class="form-group"><p name="description">'.$recette['description'].'</p>
      </div>'; 
   }


    if(isset($recette['duree'])){ 
      echo '<div class="form-group"><p name="duree">'.$recette['duree'].'</p>
      </div>'; 
   }


    if(isset($recette['ingredient'])){ 
         echo '<div class="form-group"><p name="ingredient">'.$recette['ingredient'].'</p>
         </div>'; 
    }

   if(isset($recette['etape'])){ 
      echo '<div class="form-group"><p name="etape">'.$recette['etape'].'</p>
      </div>'; 
   }


  
}
}
?>