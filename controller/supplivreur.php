<?php 

require_once('../Model/livreur.class.php');

$liv = new livreur($_POST['nom'],$_POST['tel'], $_POST['login'], $_POST['motdepasse']);

$liv->supprimer();
header("Location:../liste-livreur.php?resultat=oui supprimer");
//echo "oui";
//exit();
?>
