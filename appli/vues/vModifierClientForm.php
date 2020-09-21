<!--Saisir les informations dans un formulaire!-->
<div class="container">
  <form action="" method=post>
    <input type="hidden" name="etape" value="3" />
     <br><br><br><br>
    <fieldset>
      <legend>Entrez les données sur le client &agrave modifier </legend>
      <label> Identifiant :</label>
      <label><?php echo $lafleur["id"]; ?> </label>
      <input type="hidden" name="idcache" value="<?php echo $lafleur["id"]; ?>" /><br />
     
      <label>Nom :</label>
      <input type="text" name="nom" value="<?php echo $lafleur["nom"]; ?>" size="20" /><br />
      
      <label>Mot de passe :</label>
      <input type="text" name="mdp" value="<?php echo $lafleur["mdp"]; ?>" size="10" /><br />
      
      <label>Catégorie :</label>
      <input type="text" name="cat" value="<?php echo $lafleur["cat"]; ?>" size="20"/><br />
      
    </fieldset>
    <button type="submit" class="btn btn-primary">Modifier</button>
    <button type="reset" class="btn">Annuler</button>
    <p />
  </form> 
</div>


