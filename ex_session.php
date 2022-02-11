<?php
session_start(); // pouvoir avoir accès au tableau de session
$_SESSION['user']="Patrick";
var_dump($_SESSION); 
// unset($_SESSION["user"]); // Supprime une des variable du tableau de la session

// // Si je veux supprimer toute les sessions ?
// session_destroy();


?>