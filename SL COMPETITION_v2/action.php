<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  

    if (isset($_REQUEST['action'])) {
      require "model.php";
      require "control.php";
      require "membre.php";
      $pieces = new Pieces();
      $client = new membre();

     

      if ($_GET['action'] == 'add') {
        $pieces->setAdd($_POST);
      
       header('Location:view.php');
       
       session_start();
      }
      if ($_REQUEST['action'] == 'Rechercher') {
        $tblpieces = $pieces->getRecherche($_POST);
        include "viewrecherche.php";
        var_dump($_POST);
        exit;
      }
      if ($_REQUEST['action'] == 'Modifier') {
        $_POST['ide']=intval($_POST['Id']);
        $employe->setUpdate($_POST);
      } 
      
      if ($_GET['action'] == 'Admin') {
          
        session_start();

      if (!empty($_SESSION['Id'])) {

        $client = new membre();
        $tblcli = $client->getSelec2t();
        
        include "viewclient.php"; 

        }//else {

          //include "./vue/vueLogin.php";         

        }
      

      //if ($_GET['action'] == 'Util') {
      //  include "./vue/vueLogin.php";
      }
    //}
      if ($_GET['action'] == 'Login') {
        session_start();

        
        $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
       
        //require_once "membre.php";
        //require_once  "control.php";
        
        //$pieces = new Pieces();
        $tblEmp = $pieces->getclient();
        
        $isLoggedIn = $client->verifLogin($username, $password);


        if (! $isLoggedIn) {
          include "Admin.php";
          echo "<span style=\"color:red;\"> Les Informations d'identifications ne sont pas Valide !! </span>";
    

            exit();
        }
        include "viewclient.php";
        exit();
     
      }

      if ( $_GET['action'] == 'Deco') {

          session_start();

          session_destroy();

          //include 'connexion.php'
        header('Location: connexion.php');
 
      }



      //if ($_GET['action'] == 'Accueil') {
       // $tblEmp = $employe->getSelect();
       // include "./vue/vue.php";
    //} 
      
    //}
   

   

  //}
      

?>
