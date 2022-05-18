<?php 

require_once('../Model/client.class.php');

$clt = new client($_POST['nom'],$_POST['tel'], $_POST['adresse'], $_POST['login'],$_POST['motdepasse']);

$clt->supprimer();
header("Location:../liste-client.php?resultat=oui supprimer");
//echo "oui";
//exit();
?>
