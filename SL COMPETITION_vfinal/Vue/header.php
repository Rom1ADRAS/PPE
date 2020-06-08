<?php

if (!empty($_SESSION['userId']) ) {

$afficherNom = $_SESSION['userId'][0][3];
$deco = "<a href='index.php?action=Deco'style='font-size:13pt' class='btn btn-danger button mr-3'> Déconnexion </a>";
} else if (!empty($_SESSION['user'])) {

$afficherNom = $_SESSION['user'][0][1];
$deco = "<a href='index.php?action=Deco'style='font-size:13pt' class='btn btn-danger button mr-3'> Déconnexion </a>";

}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title class="titre">SL COMPETITION</title>
	
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    

    
  </head>
  
  
  <body>
  
  <img src="image/logo.png" height="13%" width="13%">
  
  <div style="text-align:right">

 


  
 
 
  <?php
                  if (!empty($afficherNom) && !empty($deco)){
                    echo " <a class='mr-3 text-muted' >
                  
                    Connecté, ".$afficherNom."</a>";
                    
                            if ($afficherNom === 'Administrateur'){

                            echo "<a href='index.php?action=dashboard' style='font-size:13pt' class='btn btn-danger button mr-3'>Administrateur</a>";

                            }else {

                            echo "<a  href='index.php?action=profil' style='font-size:13pt' class='btn btn-danger button mr-3'> Profil </a>";

                            }
                            echo $deco;

                  }else{
                    echo  "<a href='index.php?action=inscrit' style='font-size:13pt' class='btn btn-danger button mr-3'>S'inscrire </a>";
                    echo  "<a href='index.php?action=connect' style='font-size:13pt' class='btn btn-danger button mr-3'> Me connecter </a>";
                    echo  "<a href='index.php?action=connectad' style='font-size:13pt' class='btn btn-danger button mr-3'> Admin </a>";
                   
                  
                  }
                ?>

  <a href="Panier.php">Panier<img src="image/panier.png" width=50 height=50></a>

  <div align="right">
  
            <div class="recherche_p">

<form action="/search" id="searchthis" method="get">
<input id="search" name="q" type="text" placeholder="Rechercher" />
<input id="search-btn" type="submit" value="Rechercher" />
</form>

</div>
     <br/>      
</div>

  </div>
  
  <ul class="topnav">   
<li><a  href="index.php?action=accueil">Accueil</a></li>
<li><a href="index.php?action=selectall"> Tout les produits Disponibles</a></li>
<li><a href="index.php?action=turbo"> Turbo</a></li>
<li><a href="index.php?action=combine"> Combiné Filetés</a></li>
<li><a href="index.php?action=ligne"> Ligne Echappement</a></li>
<li ><a href="index.php?action=echangeur"> Echangeur à air </a></li> 
</ul> 


</body>
</html>    