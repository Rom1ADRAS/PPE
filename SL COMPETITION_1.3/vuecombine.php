<?php
require "control.php";


	$titre = "Nos combinés Disponible";
?>
<article>
   <table>
		<?php
		$pieces= new pieces();
			foreach ($pieces->getSelect() as $ligne) 
			{
				echo "<tr>";
					echo "<td>" . $ligne['Id_piece'] . "</td>";
					echo "<td>"  . $ligne['Nom_piece'] . "'>" . $ligne['Description_piece'] . "</a></td>" ;
					echo "<td>" . $ligne['Image_piece'] . "</td>";
					echo "<td>" . $ligne['Prix_piece'] 	. "</td>";
					echo "<td>"."<a href='Panier.php'><img src='image/panier2.png'width=50 height=50></a>"."</td>";
					echo "<td>";
			
			}

			// Fermeture de la connexion
				//unset($cnx);
		?>

   </table>
</article>
