<?php 

require_once('../model/livreur.class.php');

$liv = new livreur($_POST['nom'],$_POST['tel'], $_POST['login'], $_POST['motdepasse']);

$liv->ajouter();
header("Location:../liste-livreur.php?resultat=oui");
//echo "oui";
//exit();
?>