  <?php include "header2.php" ?> 
	<body>
	
  <div style="text-align:right">

  <a  href="index.php">Retour à l'accueil</a>
  </div>
	<div class="container">
  <div style="text-align:center">

    <h2>Nous Contacter</h2>
    <p>Nous sommes là pour répondre à vos questions :</p>
  </div>
  <div class="row">
    <div class="column">
	  <img src="image/contact_2.jpg" height="70%" width="100%" >
    </div>
    <div class="column">
      <form action="Verif_contacter.php" method="POST">
        <label>Nom :</label>
        <input type="text" name="nom">
        
		<label>Prénom :</label>
        <input type="text" name="prenom">
		
		<label>adresse e-mail :</label>
        <input type="email" name="mail">
	
		
		<label>Sujet :</label>
        <input type="text" name="sujet">
	
		
		<label>Votre message :</label>
		<br/><br/>
		<textarea type="areatext" name="msg" placeholder="Votre question...." style="height:170px"></textarea>
		<br/><br/>
		
        
		<button type="submit">Envoyer</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
  <?php include "footer.php" ?> 