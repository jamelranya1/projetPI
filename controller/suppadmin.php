<?php 

require_once('../Model/admin.class.php');

$admin = new admin($_POST['nom'],$_POST['login'], $_POST['email'],$_POST['motdepasse']);

$admin->supprimer();
header("Location:../liste-admin.php?resultat=oui supprimer");
//echo "oui";
//exit();
?>
