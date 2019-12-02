<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<body>
<?php require 'header.php';
?>
 <h1> Pièces Disponible 	 </h1>
  <table border="2">
  <tr>
  <th>#</th>
  <th>Nom de la Pièces</th>
  <th>Despcription</th>
  <th>Image</th>
  <th>Prix</th>
  <th>Stock</th>
  </tr>
<?php
  // $resultat ici énoncé de la requête
  // $cnx connexion à la base de données
  require "model.php";
  require "control.php";
  $page= (!empty($_GET['page']) ? $_GET['page'] : 0);
  $page =($page <= 0 ? 1 :$page);
  $pieces= new pieces();
  foreach ($pieces->getligne() as $ligne) 
  {
    echo "<tr>";
      echo "<td>" . $ligne['Id_piece'] . "</td>";
      echo "<td>"  . $ligne['Nom_piece'] . "</td>";
      echo "<td>" . $ligne['Description_piece'] . "</td>";
      echo "<td>" . $ligne['Image_pieces'] . "</td>";
      echo "<td>" . $ligne['Prix_piece'] 	. "€"."</td>";
      echo "<td>" . $ligne['Quantite_piece'] 	."</td>";
      echo "<td>"."<a href='Panier.php'><img src='image/panier2.png'width=50 height=50></a>"."</td>";
      echo "<td>";
  
  }

 
 ?>  
        
  </form>
</body>
</table>
<a href="?action=Page&page=<?php echo $page -1 ?>">Page précédente</a>
___
<a href="?action=Page&page=<?php echo $page +1 ?>">Page suivante</a>
<?php require 'footer.php';
?>
</html>


