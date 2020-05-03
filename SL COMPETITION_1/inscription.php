<?php require 'header.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>S'inscrire</title> 
  
</head>



<article>
        <h1>Formulaire D'inscription</h1>
        <form action="action.php?action=add" method="post">
          <input type="text" name="Nom" id="Nom" placeholder="Nom"> <br><br>
          <input type="text" name="Prenom" id="Prenom" placeholder="Prenom"><br><br>
          <input type="text" name="Numero" id="Numero" placeholder="Numero"> <br><br>

          <input type="text" name="Adresse" id="Adresse" placeholder="Adresse"> <br><br>

          <input type="text" name="CodePostal" id="CodePostal" placeholder="Code postal"> <br><br>
          <input type="text" name="Pays" id="Pays" placeholder="Pays"> <br><br>

          <input type="text" name="Mail" id="Mail" placeholder="Mail"> <br><br>

          <input type="text" name="Identifiant" id="Identifiant" placeholder="Identifiant"><br><br>
          <input type="password" name="Motdepasse" id="Motdepasse" placeholder="Mot de passe"><br><br>

          <input type="submit" name="submit" value="S'inscrire">
          <br><br>
        </form>
      </article>
      </html>
      <?php include "footer.php" ?> 