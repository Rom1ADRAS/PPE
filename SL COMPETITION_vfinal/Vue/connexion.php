
  
        <div class="form-wrapper">
           
           
           <div class='wrapper'>
  
           <h2>Connexion</h2>
                  
            <form method="POST" action="index.php?action=Se connecter">
  
                    <div class="form-group">
  
                       <label for="login">Login :</label>
                       <input type="text" placeholder="Votre Login" id="login" name="log" value="" />
                    </div>  
                       <div class="form-group">
  
                       <label for="motdepasse">Mots de Passe:</label>
                       <input type="password" placeholder="Mots de passe" id="mdp" name="Mdp" value="" />
                       
                    </div>  
                    
                    <?php
              if(isset($_SESSION['erreurMessages']))
              {
                echo "<tr>";
                echo "<td colspan='2'>";
                echo $_SESSION['erreurMessages'];
                echo "</td>";
                echo "</tr>";

                session_destroy();

              }
              ?>

                   <input type="submit" name="action" value="Se connecter" />

            





    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

    
</div>
</div>

</form>
