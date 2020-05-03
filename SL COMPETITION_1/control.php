<?php
class Pieces extends DB {
 
  function getSelect(){
    return $this->getRequete("SELECT * FROM `pieces`");
  }
 
  function setAdd($tblcli){
    var_dump($tblcli);
    
    $mdp =sha1($tblcli['Motdepasse']);
 ;
     $strSQL ="INSERT INTO client (Nom,Prenom,Numero,Adresse,CodePostal,Pays,Mail,Identifiant,Motdepasse) 
     VALUES ('".$tblcli['Nom']."', '".$tblcli['Prenom']."','".$tblcli['Numero']."','".$tblcli['Adresse']."','".$tblcli['CodePostal']."','".$tblcli['Pays']."','".$tblcli['Mail']."','".$tblcli['Identifiant']."',".$mdp.");";
       $add = $this->getRequete($strSQL);
       return $add;
   }
 
}
?>
