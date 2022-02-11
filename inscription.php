<?php include "header.php"; ?>
 

<?php

// var_dump($_POST);
if ( (isset($_POST['prenom'])==true) && 
     (isset($_POST['mail'])==true) &&
     (isset($_POST['nom'])==true) &&
     (isset($_POST['password'])==true) && 
     (isset($_POST['age'])==true) )
    
    {
      // Contrôle que tout est cohérent côté POST : Valeur présente...
     $mdp=password_hash($_POST['password'], PASSWORD_BCRYPT);
     
     
      
      // Connexion BD
      
      bd();
      // Insertion BD
      
        require_once "Utilisateur.php";

        $entry = new Utilisateur;
        $entry->prenom = $_POST['prenom'];
        $entry->nom = $_POST['nom'];
        $entry->mdp = $mdp;
        $entry->mail = $_POST['mail'];
        $entry->age = $_POST['age'];
        $entry->save();
        
        // on va créé une session pour le nouvel inscrit déjà connecté.
        $_SESSION['user']= $_POST['nom'];



    }


if ( isset($_SESSION['user'])==false){
  ?>

<p style="color: teal;">Vous pouvez vous inscrire</p>
<br/>
<?php $_GET['mode']='sub'; require 'formulaire.php'; ?>
 <?php
}
else {
    echo "<p style='color: green;'>Vous êtes déjà connecté</p>";
}

?>


<?php include "footer.php"; ?>