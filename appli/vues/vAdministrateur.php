

<!-- Affichage des informations du panier-->

<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <caption>
         <br><br><br>
        <h3> <u>LISTE DES ADMINISTRATEUR(E)S</u> </h3>

      </caption>
      <thead>
        <tr>
        
          <th>Identifiant</th>
          <th>Nom</th>
          <th>Mot de passe</th>
          <th>Catégorie</th>
          
         </tr>
      </thead>
      <tbody>  
<?php
//print_r($lafleur);
    $i = 0;
    while($i < count($lafleur))
    { 
 ?>     
        <tr>
        
            <td><?php echo $lafleur[$i]["id"]?></td>
            <td><?php echo $lafleur[$i]["nom"]?></td>
            <td align="right"><?php echo $lafleur[$i]["mdp"]?></td>
            <td align="right"><?php echo $lafleur[$i]["cat"]?></td>          
            
        </tr>
<?php
        $i = $i + 1;
     }
?>  
       
      
       </tbody>       
     </table>    
  </div>

 
