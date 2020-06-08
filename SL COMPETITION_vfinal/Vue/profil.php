<article>

      <div class="container-profil">

       <h1>Profil</h1>

        <img src="image/user.png" alt="avatar">

        <div class="formProfil">



          <ul >

              <li> Nom : <b><?php echo $_SESSION['user'][0][1] ?></b> </li>
              <li> Prénom : <b><?php echo $_SESSION['user'][0][2] ?> </b></li>
              <li> Age : <b><?php echo $_SESSION['user'][0][3] ?></b> </li>
              <li> Login : <b><?php echo $_SESSION['user'][0][5] ?></b> </li>
              <li> Adresse E-mail : <b><?php echo $_SESSION['user'][0][4] ?></b> </li>
              <li> Code Postal : <b><?php  echo $_SESSION['user'][0][7] ?></b> </li>
              <li> Pays : <b><?php  echo $_SESSION['user'][0][8] ?></b> </li>
                <a href="index.php?action=mod" class='btp btn btn-primary' > Modifier mon profil </a>
          </ul>

        </div>
      </div>
      </article>