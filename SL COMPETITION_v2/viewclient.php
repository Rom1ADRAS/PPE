

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<body>
<?php require 'header.php';
?>
<?php
if (!empty($_SESSION["userId"])) {
    require_once "membre.php";
    $membre = new Membre();
    $membreResultat = $membre->getMemberById($_SESSION["userId"]);
    if(!empty($membreResultat[0]["nom_mbr"])) {
        $afficherNom = ucwords($membreResultat[0]["nom_mbr"]);
    } else {
        $afficherNom = $membreResultat[0]["pseudo_mbr"];
    }
}
?>
</article>
        <br><br>
        Bonjour <strong><?php echo $afficherNom; ?></strong>, <br>Bravo vous vous êtes connecté avec succès comme super-utilisateur!<br>
        <!--Pour sortir cliquez sur <a href="index.php?action=Admin" >Déconnexion</a>-->
       
    </article>
    <h1> Compte Client	 </h1>
  <table border="2">
  <tr>
  <th>ID</th>
  <th>Nom </th>
  <th>Prénom</th>
  <th>Login</th>
  <th>Mot de passe</th>
  <th>Pays</th>
  <th>Code Postal</th>

  </tr>
<?php
  // $resultat ici énoncé de la requête
  // $cnx connexion à la base de données
  
  $page= (!empty($_GET['page']) ? $_GET['page'] : 0);
  $page =($page <= 0 ? 1 :$page);
  $pieces= new pieces();
  foreach ($pieces->getclient() as $ligne) 
  {
    echo "<form action='action.php?action=Supprimer' method='POST'>";
    echo "<tr>";
      echo "<td>" . $ligne['Id'] . "</td>";
      echo "<td>"  . $ligne['Nom'] . "</td>";
      echo "<td>" . $ligne['Prenom'] . "</td>";
      echo "<td>" . $ligne['login'] . "</td>";
      echo "<td>" . $ligne['motdepasse'] 	."</td>";
      echo "<td>" . $ligne['Pays'] 	."</td>";
      echo "<td>" . $ligne['codepostal'] 	."</td>";
     echo "<td>"."<input type='submit' name='submit' value='Supprimer'>"."</td>";
     echo "<td>"."<input type='submit' name='submit' value='Modifier'>"."</td>";


      

  }

  ?>
