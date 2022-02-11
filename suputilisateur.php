Supprimer

<?php require 'header.php';

bd();

require_once 'Utilisateur.php';

$entry = Utilisateur::retrieveByPK($_GET['id']); 
// var_dump($entry);
?>

<?php
echo "<br/><br/>";
$entry->delete();


// echo $entry->prenom;
// echo "<br/><br/>";
// echo $entry->nom;
// echo "<br/><br/>";
?>
<p>Le compte a été supprimé</p>
<br/><br/>
<a href="liste_utilisateur.php">Retour sur la liste d'utilisateurs</a>

<?php require 'footer.php' ?>