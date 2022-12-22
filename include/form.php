<h1>Formulaire de gestion</h1>
<form class="post" method="post">
    <label>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Titre:</label>
    <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="titre" value="<?php if(isset($recette['titre'])){ echo $recette['titre']; } ; ?>">
  </div>
    </label>
    <br>
    <label>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?php if(isset($recette['description'])){ echo $recette['description']; } ; ?></textarea>
  </div>

    </label>
    <br>
    <label>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Liste d'ingrédients</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ingredient"><?php if(isset($recette['ingredient'])){ echo $recette['ingredient']; } ; ?></textarea>
  </div>
    </label>
    <br>
    <label>
    <div class="form-group">
    <label for="exampleFormControlFile1">Image du plat:</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="<?php if(isset($recette['image'])){ echo $recette['image']; } ; ?>">
    </div>
    </label>
    <br>
    <label>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Etapes:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="etape"><?php if(isset($recette['etape'])){ echo $recette['etape']; } ; ?></textarea>
  </div>
    </label>
    <br>
    <label>
    <div class="form-group">
    <label for="exampleFormControlInput1">Durée :</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Durée" name="duree" value="<?php if(isset($recette['duree'])){ echo $recette['duree']; } ; ?>">
  </div>
    </label>
    <button type="submit">Enregistrer</button>
</form>