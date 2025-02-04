<?php
// Connexion à la BASE DE DONNÉES
class DB {
  private $cnx = null;
  private $resultat = null;
 
  function __construct(){
 
      $this->cnx = new PDO("mysql:host=localhost;dbname=slcompetition;charset=utf8", "root", "root" );
  }
 
  function __destruct(){
    if ($this->resultat!==null) { $this->resultat = null; }
    if ($this->cnx!==null) { $this->cnx = null; }
  }
 
  // Exécution de la requête préparée
  // La fonction peut être appelée plusieurs fois.
  function getRequete($strSQL){
    $this->resultat = $this->cnx->prepare($strSQL);
    $this->resultat->execute();
    return $this->resultat->fetchAll();
  }
}
?>

