<article>
        <h1> Annuaire des utilisateurs de SL-COMPÉTITION !</h1>

    <div class="table-responsive p-3">
    <table class="table table-sm">
     <tr>
        <th >#</th>
        <th ><h4 class="">Nom </h4></th>
        <th ><h4 class=""> Prénom </h4></th>
        <th ><h4 class=""> Age </h4></th>
        <th ><h4 class=""> Adresse email </h4></th>
        <th ><h4 class=""> Login </h4></th>
        <th ><h4 class=""> Code Postal </h4></th>
        <th ><h4 class=""> Pays </h4></th>

      </tr>

        <?php






          foreach ($tblclient as $client) {
            echo "<form action='index.php?action=Admin' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='text' name='ide' id='ide' class='annuaire' value=".$client['Id']."></td>"
                ."<td>".$client['Nom'] ."</td>"
                ."<td>".$client['Prenom'] ."</td>"
                ."<td>".$client['age']."</td>"
                ."<td>".$client['email']."</td>"
                ."<td>".$client['login']."</td>"
                ."<td>".$client['codepostal']."</td>"
                ."<td>".$client['Pays']."</td>"
                ."<td>". "<input class='btn btn-danger' type='submit' name='action' value='Supprimer'></td></tr>";
            echo "</form>";
          }

        ?>
      </table>
        </div>
        </article>