<?php
/** 
 * Script de contr�le et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources n�cessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_bdGestionDonnees.lib.php");
  require("./include/_gestionSession.lib.php");
  require("./include/_utilitairesEtGestionErreurs.lib.php");
  // d�marrage ou reprise de la session
  initSession();
  // initialement, aucune erreur ...
  $tabErreurs = array();


// DEBUT du contr�leur rechercher.php 

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  if (count($_POST)==1)
  {
    
    $unId=$_POST["id"];
    $lafleur = rechercherId($unId, $tabErreurs);
    // Si une fleur est trouv�e, on passe � l'�tape suivante
    //var_dump($lafleur);
    if (count($lafleur)>0)
    {
      $etape = 2;
    }
    else
    {
      // Aucune fleur n'est trouv�e
      // Afficher un message d'erreur
      $message="Echec de la modification : l'identifiant n'existe pas !";
      ajouterErreur($tabErreurs, $message);
      // Revenir � l'�tape 1
      $etape = 1;
    }

  }
  else
  {
    $etape = 3;
    $unId=$_POST["idcache"];
    $unNom=$_POST["nom"];
    $unMdp=$_POST["mdp"];
    $uneCat=$_POST["cat"];
    modifierClient($unId, $unNom, $unMdp, $uneCat,$tabErreurs);
    // Message de r�ussite pour l'affichage
    if (nbErreurs($tabErreurs)==0)
    {
      $reussite = 1;
      $messageActionOk = "Le client a �t� correctement modifi�e";
    }
  }
}


// D�but de l'affichage (les vues)
include($repVues."entete.php") ;
include($repVues."menu.php") ;
include($repVues ."erreur.php");

switch ($etape)
{
  case 1 :
   include($repVues."vModifierIdForm.php");
   break;
  case 2 :
   include($repVues."vModifierClientForm.php");
   break;
}
include($repVues."pied.php") ;
?>



