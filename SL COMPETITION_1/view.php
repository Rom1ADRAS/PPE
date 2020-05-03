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
  
  $pieces= new pieces();
  foreach ($pieces->getSelect() as $ligne) 
  {
    echo "<tr>";
      echo "<td>" . $ligne['Id_piece'] . "</td>";
      echo "<td>"  . $ligne['Nom_piece'] . "</td>";
      echo "<td>" . $ligne['Description_piece'] . "</td>";
      echo "<td>"."<a>". $ligne['Image_pieces'] ."</a>"."</td>";
      echo "<td>" . $ligne['Prix_piece'] 	. "€"."</td>";
      echo "<td>" . $ligne['Quantite_piece'] 	."</td>";

      echo "<td>";
      
  }

 
 ?>  
     <td>

  <form action='Panier.php' method='post'>
    <a href = 'ajoutpanier.php'>
<input type="submit" name="submit" value="Ajouter">
</td> 

  </form>
</body>
</table>
<?php require 'footer.php';
?>
</html>


