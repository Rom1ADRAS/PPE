<body>

 <h1> Pièces Disponible 	 </h1>
  <table class='table'>
  <tr>
  <th>#</th>
  <th>Nom de la Pièces</th>
  <th>Despcription</th>
  <th>Image</th>
  <th>Prix</th>

  </tr>
<?php
  // $resultat ici énoncé de la requête
  // $cnx connexion à la base de données
 
  

  foreach ($tblpiece as $ligne) 
  {
    echo "<tr>";
      echo "<td>" . $ligne['Id_piece'] . "</td>";
      echo "<td>"  . $ligne['Nom_piece'] . "</td>";
      echo "<td>" . $ligne['Description_piece'] . "</td>";
      echo "<td>" . $ligne['Image_pieces'] . "</td>";
      echo "<td>" . $ligne['Prix_piece'] 	. "€"."</td>";
      echo "<td>"."<a href='Panier.php'><img src='image/panier2.png'width=50 height=50></a>"."</td>";

      echo "<td>";
  
  }

 
 ?>  
        
  </form>
</body>
</table>



