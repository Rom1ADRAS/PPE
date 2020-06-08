<div class="container-profil">
        
       <h1>Profil</h1>
        <br>

        <img src="image/user.png" alt="avatar">
        <div class="formProfil">



          <ul >
          <form action='index.php?action=Modifier' method='POST'>

              <li> Nom : <input name='nom' type="text" value="<?php echo $_SESSION['user'][0][1] ?>"> </li>
              <li> Prénom : <input name='prenom' type="text" value="<?php echo $_SESSION['user'][0][2] ?>"></li>
              <li> Age : <input  name='age' type="text" value="<?php echo $_SESSION['user'][0][3] ?>"> </li>
              <li> Login : <input readonly name='id' type="text" value="<?php echo $_SESSION['user'][0][5] ?>"> </li>
              <li> Adresse E-mail : <input name='mail' id ="mail" type="text" value="<?php echo $_SESSION['user'][0][4] ?>"> </li>
              <li> Code Postal : <input name='cp' type="text" value="<?php  echo $_SESSION['user'][0][7] ?>"> </li>
              <li> Pays : <input name='pays' type="text" value="<?php  echo $_SESSION['user'][0][8] ?>"> </li>
 
              <input type='submit' name='action' value='Modifier' >
          </form>
          </ul>

        </div>

      </div>