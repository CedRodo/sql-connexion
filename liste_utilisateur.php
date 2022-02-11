<?php include "header.php"; ?>

<?php
// Connecter à la BD

bd();
require_once "Utilisateur.php";

echo "<h2>Liste complète des utilisateurs :</h2><br/><br/><br/>";
// recuperer l ensemble des données des utilisateurs
$entry = Utilisateur::all();

foreach($entry as $monutilisateur){
    echo "<a href='unutilisateur.php?id=".$monutilisateur->id."'> $monutilisateur->prenom $monutilisateur->nom<button></a> <a href='modutilisateur.php?id=".$monutilisateur->id."&mode=modif'> Modifier </a></button> - <button><a href='suputilisateur.php?id=".$monutilisateur->id."'> Supprimer </a></button> <hr>";

    //<a href='unutilisateur.php?id=".$monutilisateur->id."'>$monutilisateur->prenom."  ".$monutilisateur->nom."</a> <hr>";
}


// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>