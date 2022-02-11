<?php
if ($_POST==null) {
    header('location: index.php');
    die;
}
?>

<?php include "header.php"; ?>
<?php

// // afficher les données envoyés par l utilisateur
// var_dump($_POST);

// // obj : vérifier si ces données sont juste par rapport à ce que j'ai en base

// // recuperer en base les données correspondant à l'utilisateur

// // que je puisse dire OK tu est connecté 

// //ou non tu reviens à la page précédente

// // 1. Connecte BD 
// $conn = new mysqli('127.0.0.1', 'root', 'root');
// // var_dump($conn);
// if ($conn->connect_error)
//   die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// // 2. Recuperer l utilisateur souhaité
// require "SimpleOrm.class.php";
// SimpleOrm::useConnection($conn, 'coursphp');

bd();

require_once "Utilisateur.php";


// Variables POST
$nomUtilLog=$_POST['name'];
$mdpUtilLog=$_POST['password'];

$entry = Utilisateur::retrieveByNom($_POST['name'], SimpleOrm::FETCH_ONE);



// var_dump($entry);
// dans le cas ou on ne trouve pas d'utilisateur avec le nom envoyé en POST alors erreur

if ($entry==null){
    die ('<br/><br/><p>*** Vous n'."'".'êtes pas encore inscrit *** Vous pouvez accéder à l'."'".'inscription sur le lien situé en haut de la page à droite ou <a href="inscription.php" style="text-decoration: none;">ici</a></p>');
}


// 3. comparer les données SI POST['nom']==entry->prenom && .. alors OK

// Variable B.D.
$nomUtilTable=$entry->nom;
$prenomUtilTable=$entry->prenom;
$mdpUtilTable=$entry->mdp;

if (($nomUtilLog==$nomUtilTable) && ($mdpUtilLog==$mdpUtilTable)){
    echo "<br/><br/>Bonjour, ".$prenomUtilTable." ".$nomUtilTable." !";
    // session_start();
    $_SESSION['user']=$nomUtilLog;
}
else {
    echo '<br/><br/><p style="color: red;">Nom et/ou Mot de passe invalide(s), connexion impossible.</p>';
    echo "<br/><br/>"."Veuillez vous reconnecter ".' <button><a href="index.php" style="text-decoration: none;">Retour à la connexion</a></button>';

}
?>
<br/>
<br/>
<br/>
<?php 
    // var_dump($_SESSION);
?>

<?php include "footer.php"; ?>