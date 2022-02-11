<?php session_start();
require "fonctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Connexion/Déconnexion</title>
</head>
<body>
    <div style="text-align: end;">
    <br />
    <p class="headerLog"> <img src="assets/login.png"> <a href="connexion.php">Connexion</a> - <img src="assets/inscription.png"> <a href="inscription.php">Inscription</a> </p> 
    
    <?php
     if (isset($_SESSION['user'])==true) {
         echo "<br/><br/> <p class='headerLog'> <img src='assets/user.png'> Bonjour </p>".$_SESSION['user'];
         ?>
         - <p class="headerLog"> <img src="assets/logout.png"> <a href="deconnexion.php">Déconnexion</a> - <img src="assets/userslist.png"> <a href="liste_utilisateur.php">Liste des utilisateurs</a></p>
         <?php
     }
     else {
        echo "<br/><br/>Vous n'êtes pas connecté";
     } 
    
    ?>
    </div>
    <h1>SITE DE CONNEXION UTILISATEUR</h1>
    <br />