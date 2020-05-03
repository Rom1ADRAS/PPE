<?php

/**
 * Verifie si le panier existe, le créé sinon
 * @return booleen
 */
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['Nom_piece'] = array();
      $_SESSION['panier']['Quantite_piece'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}


/**
 * Ajoute un article dans le panier
 * @param string $Nom_piece
 * @param int $Quantite_piece
 * @param float $prixProduit
 * @return void
 */
function ajouterArticle($Nom_piece,$Quantite_piece,$Prix_piece){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($Nom_piece,  $_SESSION['panier']['Nom_piece']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['Quantite_piece'][$positionProduit] += $Quantite_piece ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['Nom_piece'],$Nom_piece);
         array_push( $_SESSION['panier']['Quantite_piece'],$Quantite_piece);
         array_push( $_SESSION['panier']['Prix_piece'],$Prix_piece);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}



/**
 * Modifie la quantité d'un article
 * @param $Nom_piece
 * @param $Quantite_piece
 * @return void
 */
function modifierQTeArticle($Nom_piece,Quantite_piece){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($Quantite_piece > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($Nom_piece,  $_SESSION['panier']['Nom_piece']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['Quantite_piece'][$positionProduit] = $Quantite_piecet ;
         }
      }
      else
      supprimerArticle($Nom_piece);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

/**
 * Supprime un article du panier
 * @param $Nom_piece
 * @return unknown_type
 */
function supprimerArticle($Nom_piece){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['Nom_piece'] = array();
      $tmp['Quantite_piece'] = array();
      $tmp['prixProduit'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['Nom_piece']); $i++)
      {
         if ($_SESSION['panier']['Nom_piece'][$i] !== $Nom_piece)
         {
            array_push( $tmp['Nom_piece'],$_SESSION['panier']['Nom_piece'][$i]);
            array_push( $tmp['Quantite_piece'],$_SESSION['panier']['Quantite_piece'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


/**
 * Montant total du panier
 * @return int
 */
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['Nom_piece']); $i++)
   {
      $total += $_SESSION['panier']['Quantite_piece'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}


/**
 * Fonction de suppression du panier
 * @return void
 */
function supprimePanier(){
   unset($_SESSION['panier']);
}

/**
 * Permet de savoir si le panier est verrouillé
 * @return booleen
 */
function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['Nom_piece']);
   else
   return 0;

}

?>