<?php session_start();
require "fonctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion/Déconnexion</title>
</head>
<body>
    <div style="text-align: end;">
    <br />
    <a href="connexion.php">Connexion</a> - 

    
    
    <a href="inscription.php">Inscription</a>  
    
    <?php
     if (isset($_SESSION['user'])==true) {
         echo "<br/><br/>Bonjour ".htmlspecialchars($_SESSION['user']);
         ?>
         - <a href="deconnexion.php">Déconnexion</a> - <a href="liste_utilisateur.php">Liste des utilisateurs</a>
         <?php
     }
     else {
        echo "<br/><br/>Vous n'êtes pas connecté";
     } 
    
    ?>
    </div>
    <h1>SITE DE CONNEXION UTILISATEUR</h1>
    <br />