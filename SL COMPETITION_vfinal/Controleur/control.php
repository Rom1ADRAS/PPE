<?php
require_once("Modele/model.php");
class Pieces extends DB {
 
  function getSelect(){
    return $this->getRequete("SELECT * FROM `pieces` ");
  }

  function getClient(){
    return $this->getRequete("SELECT * FROM `client` ");
  }

  function setUpdate($tblemp){

    $strSQL = "UPDATE client SET Nom = :nom, Prenom = :pnom , age = :age, email = :email, codepostal = :codepostal, Pays = :Pays WHERE login = :id;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      'id' => $tblemp['id'],
      'age' => $tblemp['age'],
      'email' => $tblemp['mail'],
      'codepostal' => $tblemp['cp'],
      'Pays' => $tblemp['pays']
    );

    $update = $this->Requete($strSQL, $tabValeur);

    return $update;


  }
  function setDelete($id){

    $strSQL = "DELETE FROM client WHERE Id = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblemp){
    
    
  
   
    $strSQL = "INSERT INTO client (Nom, Prenom, age, email, login, motdepasse, codepostal, Pays) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $tabValeur = array(
      $tblemp['Nom'],
      $tblemp['Prenom'],
      $tblemp['age'],
      $tblemp['email'],
      $tblemp['login'],
      sha1($tblemp['motdepasse']),
      $tblemp['CP1'],
      $tblemp['Pays']
    );
       $add = $this->Requete($strSQL,$tabValeur);
       return $add;
       
   }
   function getturbo(){
    return $this->getRequete("SELECT * FROM `pieces` WHERE categorie='turbo'");
  }
  function getcombine(){
    return $this->getRequete("SELECT * FROM `pieces` WHERE categorie='combiné'");
  }
  function getligne(){
    return $this->getRequete("SELECT * FROM `pieces` WHERE categorie='ligne'");
  }
  function getechangeur(){
    return $this->getRequete("SELECT * FROM `pieces` WHERE categorie='echangeur'");
  }
  
 }



?>