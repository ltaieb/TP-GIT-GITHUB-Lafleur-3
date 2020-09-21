<?php 

/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vues/';
  
  require($repInclude . "_init.inc.php");
  
   // Si une fleur est à ajouter dans le panier
  /*if (isset($_GET['id']))
  {
    $ref = $_GET['ref'];
    ajouterPanier($id);
  }   
  
  $cat="";
  // Si l'affichage concerne une catégorie de fleurs
  if (isset($_GET['categ']))
  {
  $cat = $_GET['categ'];
  }*/  
  
   $lafleur = listerAdministrateur();   
  
  // Construction de la page Rechercher
  // pour l'affichage (appel des vues)

  include($repVues."entete.php") ;
  include($repVues."menu.php") ;
  include($repVues."vAdministrateur.php"); 
  include($repVues."pied.php") ;
  
  ?>
 
