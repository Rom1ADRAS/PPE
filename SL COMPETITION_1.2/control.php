<?php
class Pieces extends DB {
 
  function getSelect(){
    return $this->getRequete("SELECT * FROM `pieces` ");
  }
 
  function setAdd($tblcli){
    
    
  
   $Nom= $tblcli['Nom'];
   $Prenom=$tblcli['Prenom'];
   $login=$tblcli['login'];
 $mdp=sha1($tblcli['motdepasse']);
 $code=$tblcli['codepostal'];
 $pays=$tblcli['pays'];
     $strSQL ='INSERT INTO client (Nom, Prenom,login,motdepasse,codepostal,pays) 
     VALUES ("'.$Nom.'","'.$Prenom.'","'.$login.'","'.$mdp.'","'.$code.'","'.$pays.'");';
       $add = $this->getRequete($strSQL);
       return $add;
       
   }
   function getLire(){
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