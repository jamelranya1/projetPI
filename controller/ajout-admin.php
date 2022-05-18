<?php 

require_once('../Model/Admin.class.php');

$admin = new admin($_POST['nom'],$_POST['login'], $_POST['email'], $_POST['motdepasse']);

$admin->ajouter();
header("Location:../liste-admin.php?resultat=oui");
//echo "oui";
//exit();
?>
