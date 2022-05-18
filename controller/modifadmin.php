<?php 

require_once('../Model/Admin.class.php');

$admin = new admin($_POST['nom'],$_POST['login'], $_POST['email'], $_POST['motdepasse']);

$admin->modifier();
header("Location:../liste-admin.php?resultat=oui modif");
//echo "oui";
//exit();
?>
