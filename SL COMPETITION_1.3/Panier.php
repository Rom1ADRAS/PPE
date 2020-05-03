<?php 
// Création du panier si n'existe pas dans la session de l'utilisateur


SESSION_start();

$bdd = new PDO('mysql:host=localhost;dbname=slcompetition', 'root', 'root');

;


if (! isset($_SESSION['panier']))  $_SESSION['panier'] = array();

// Voici les données externes utilisées par le panier
$id_piece   = isset($_GET['Id_piece'])   ? $_GET['id_piece']   : null;
$Nom_piece  = isset($_GET['Nom_piece'])  ? $_GET['Nom_piece']  : null;
$Prix_piece = isset($_GET['Prix_piece']) ? $_GET['Prix_piece'] : '?';
$Quantite_piece  = isset($_GET['Quantite_piece'])  ? $_GET['Quantite_piece']  : 1;

// Voici les traitements du panier
if ($id_piece == null) echo 'Veuillez sélectionner un article pour le mettre dans le panier!'; // Message si pas d'acticle sélectionné
else
if (isset($_GET['ajouter'])){ // Ajouter un nouvel article
  $_SESSION['panier'][$id_piece]['nom']  = $Nom_piece;
  $_SESSION['panier'][$id_piece]['prix'] = $Prix_piece;
  $_SESSION['panier'][$id_piece]['qte']  = $Quantite_piece;
} 
else if (isset($_GET['modifier']))  $_SESSION['panier'][$id_piece]['qte'] = $qte_article; // Modifier la quantité achetée
else if (isset($_GET['supprimer']))  unset($_SESSION['panier'][$id_piece]); // Supprimer un article du panier

// Voici l'affichage du panier
echo '<h2>Contenu de votre panier</h2><ul>';
if (isset($_SESSION['panier']) && count($_SESSION['panier'])>0){
  $total_panier = 0;
  foreach($_SESSION['panier'] as $id_piece=>$article_acheté){
    // On affiche chaque ligne du panier : nom, prix et quantité modifiable + 2 boutons : modifier la qté et supprimer l'article
    if (isset($article_acheté['nom']) && isset($article_acheté['prix']) && isset($article_acheté['qte'])){
      echo '<li><form>', $article_acheté['nom'], ' (', number_format($article_acheté['prix'], 2, ',', ' '), ' €) ',
       '<input type="hidden" name="id_article" value="', $id_piece , '" />
        <br />Qté: <input type="text" name="Quantite_piece" value="', $article_acheté['qte'] , '" />
        <input type="submit" name="modifier" value="Nouvelle Qté" />
        <input type="submit" name="supprimer" value="Supprimer" />
      </form>
      </li>';
      
      // Calcule le prix total du panier 
      $total_panier += $article_acheté['prix'] * $article_acheté['qte'];
    }
  }
  echo '<hr><h3>Total: ', number_format($total_panier, 2, ',', ' '), ' €'; // Affiche le total du panier
}
else { echo 'Votre panier est vide'; } // Message si le panier est vide
echo "</ul>";
?>