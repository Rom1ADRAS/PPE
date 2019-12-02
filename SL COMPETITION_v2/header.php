<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title class="titre">SL COMPETITION</title>
	

    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  
  
  <body>
  
  <img src="image/logo.png" height="13%" width="13%">
  
  <div style="text-align:right">

 

<div>
  <a href="inscription.php" style="font-size:13pt" class="button">S'inscrire </a>
  <a href="connexion.php" style="font-size:13pt" class="button"> Me connecter </a>
  <a href="Admin.php" style="font-size:13pt" class="button"> Admin </a>

 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="panier.php">Panier<img src="image/panier.png" width=50 height=50></a>
</div>
  

  </div>
  <article>
      <!-- ------------------------------------------- Formulaire Recherche  ---------------------------------------- -->
      <form action='./action.php?action=Rechercher' method='POST'>
        <table class="table_annuaire">
          <tr> 
           
            <td> <input type='text' name='type' id='type' ></td>
            <td colspan='2'> <input type='submit' name='action' value='Rechercher'></td>
          </tr>
        </table>
      </form>
    </article>
    
  
  <ul class="topnav">   
<li><a  href="index.php">Accueil</a></li>
<li><a href="view.php"> Tout les produits Disponibles</a></li>
<li><a href="viewturbo.php?action=lire"> Turbo</a></li>
<li><a href="viewcombine.php?action=lire"> Combiné Filetés</a></li>
<li><a href="viewligne.php?action=lire"> Ligne Echappement</a></li>
<li ><a href="viewechangeur.php?action=lire"> Echangeur à air </a></li> 
</ul> 


</body>
</html>    