<?php require 'header.php';
?>

<!doctype html>
<html lang="fr">
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <title>S'inscrire</title> 
  
</head>



<article>
        <div class="centrer">
    
        <h1>Formulaire D'inscription</h1>

          <form action="action.php?action=add" method="post">
          <input type="text" name="Nom" id="Nom" placeholder="Nom"> <br><br>
          <input type="text" name="Prenom" id="Prenom" placeholder="Prenom"><br><br>
          <input type="text" name="login" id="Prenom" placeholder="login"><br><br>
          <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe"><br><br>
          <input type="text" name="codepostal" id="codepostal" placeholder="Code Postal"><br><br>
          <input type="text" name="pays" id="pays" placeholder="Pays"><br><br>






         

          <input type="submit" name="submit" value="S'inscrire">
          <br><br>
        </form>
      </div>
      </article>
      </html>
      <?php include "footer.php" ?> 