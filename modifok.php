<?php require 'header.php';

bd();

require_once 'Utilisateur.php';

$entry = Utilisateur::retrieveByPK($_GET['id']);
?>

<?php
echo "<br/><br/>";

$entry->nom = $_POST['nom'];
$entry->prenom = $_POST['prenom'];
$entry->mdp = $_POST['password'];
$entry->mail = $_POST['mail'];
$entry->age = $_POST['age'];
$entry->save();
?>
<p style='color: blue;'>Modification(s) réussie(s) !</p>
<br/><br/>
<a href="liste_utilisateur.php">Retour sur la liste d'utilisateurs</a>

<?php require 'footer.php' ?>

