<!-- MENU  : Connexion | Tout les utilisateurs ...
READ : Connexion utilisateurs: FORMULAIRE : Nom Mot de passe $_POST / $_SESSION VARIABLE PERSISTANTE UTILISATEUR TANT QUE JE ME DECONNECTE PAS AVEC DES DONNES CONFIDENTIELLES / $_COOKIES PANIER PERSISTANTE DONNES TEMPORAIRE CONFIDENTIELLES
READ++ : L'ensemble des utilisateurs affichés => USER(ID) =>GET On affiche l utilisateur correspondant
CREATE : Inscription utilisateur : FORMULAIRE : Nom Mot de passe ... POST 
Delete : READ++ : Supprimer un utilisateur
Update : READ++ : Cliquer sur modifier un utilisateur
NOUVEAU

ymelki — Aujourd’hui à 13:46
CREEZ UN FICHIER EN PHP
CONNECTE A LA BD
Puis vous allez afficher vos Utilisateur
afficher L ID 1 l ID 2 ...
Afficher Tout les utilisateurs
Modifier un Utilisateur
Inserer un utilisateurs
Supprimer un utilisateurs
[13:47]
Inscription / modification / suppression -->

<?php require 'header.php'; ?>
<br/>
<br/>
<?php session_destroy(); ?>
<?php if (isset($_COOKIE['pseudo'])==true) { $cookie = $_COOKIE['pseudo']; } ?>
<h2 class="titrepage">Page de connexion</h2>

<form class="formulaireLogin" method="POST" action="connexion.php">
<fieldset>
    <legend>Entrez vos identifiants :</legend>
        <p><label for="name">Votre nom : </label> <input type="text" placeholder="nom" name="name" id="name" value="<?php if ($cookie!=null) { echo $cookie; } ?>"/> <br />
        <p><label for="password">Votre mot de passe : </label> <input type="password" placeholder="mot de passe" name="password" id="password" /> <br />
</fieldset>
<br/>    
<input class="centering" type="submit" value="Envoyer" />
</form>  

<?php require 'footer.php' ?>