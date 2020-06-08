<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
try {

    if (isset($_REQUEST['action'])) {
      session_start();
      require "Modele/model.php";
      require 'Vue/header.php';
      require "Controleur/control.php";
      $pieces = new Pieces();

    
     
       
      if ($_GET['action'] == 'selectall') {
        $tblpiece = $pieces->getSelect();
        include 'Vue/view.php';
      } 

      
      if ($_GET['action'] == 'turbo') {
        $tblpiece = $pieces->getturbo();
        include 'Vue/viewturbo.php';
      } 
    
      if ($_GET['action'] == 'combine') {
        $tblpiece = $pieces->getcombine();
        include 'Vue/viewcombine.php';
      } 

      if ($_GET['action'] == 'ligne') {
        $tblpiece = $pieces->getligne();
        include 'Vue/viewligne.php';
      } 

      if ($_GET['action'] == 'echangeur') {
        $tblpiece = $pieces->getechangeur();
        include 'Vue/viewechangeur.php';
      } 

      if ($_GET['action'] == 'inscrit') {
        include 'Vue/inscription.php';
      } 

  
      if ($_REQUEST['action'] == 'inscrire') {
        $pieces->setAdd($_POST);
        /*include 'Vue/index.php';*/
      }

      if ($_GET['action'] == 'accueil') {
        include 'Vue/index.php';
      } 

      if ($_GET['action'] == 'connect') {
        
        include 'Vue/connexion.php';
      } 

      if ($_GET['action'] == 'connectad') {
        
        include 'Vue/connexionadmin.php';
      } 

      if ($_REQUEST['action'] == 'dashboard') {
        $tblclient = $pieces->getClient();
        include 'Vue/viewdashboard.php';
      } 

      if ($_REQUEST['action'] == 'Supprimer') {

        $pieces->setdelete(intval($_POST['ide']));
        $tblclient = $pieces->getClient();
        include "Vue/viewdashboard.php";

      }

      if ($_REQUEST['action'] == 'mod') {
        
        include 'Vue/viewmodifier.php';
      } 

      if ($_REQUEST['action'] == 'Modifier') {
        if (!empty($_SESSION['user'])){

        $pieces->setUpdate($_POST);

        $_SESSION['user'][0][1] = $_POST['nom'];
        $_SESSION['user'][0][2] = $_POST['prenom'];
        $_SESSION['user'][0][3] = $_POST['age'];
        $_SESSION['user'][0][4] = $_POST['mail'];
        $_SESSION['user'][0][5] = $_POST['id'];
        $_SESSION['user'][0][7] = $_POST['cp'];
        $_SESSION['user'][0][8] = $_POST['pays'];
        }

       header("Location: index.php?action=profil");
      }

        if ($_GET['action'] == 'profil'){
        if (!empty($_SESSION['user'])){
    
        
    
          include "Vue/profil.php";
    
        }
      }

      if ($_REQUEST['action'] == 'Se connecter') {
        
        $username = filter_var($_POST["log"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["Mdp"], FILTER_SANITIZE_STRING);

        require_once "Controleur/membre.php";
        require_once  "Controleur/control.php";
        $membre = new Membre();

        $isLoggedInUser = $membre->verifUser($username, $password);



        if (! $isLoggedInUser) {
            $_SESSION["erreurMessages"] = "Les informations d'identification sont invalides !";
            include "Vue/connexion.php";

        }else{

          header ("Location: index.php?action=accueil");

        }

      }

      if ($_GET['action'] == 'Me connecter') {

        $username = filter_var($_POST["logad"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["Mdpad"], FILTER_SANITIZE_STRING);

        require_once "Controleur/membre.php";
        require_once  "Controleur/control.php";
        $membre = new Membre();

      
        $isLoggedIn = $membre->verifLogin($username, $password);


        if (! $isLoggedIn) {
            $_SESSION["erreurMessage"] = "Les informations d'identification sont invalides !";
            include "Vue/connexionadmin.php";


        }else{

          header ("Location: index.php?action=accueil");
        }

      }

      if ( $_GET['action'] == 'Deco') {

          session_destroy();

        header('Location: index.php?action=accueil');
 
      }
      require 'Vue/footer.php';
    } else {

      require 'Vue/header.php'; 
      require 'Controleur/control.php';
      

      include 'Vue/index.php';
      require 'Vue/footer.php';

    }

    } 
    catch (Exception $e) {
      erreur($e->getMessage());
  }  

        
 
  
?>
