<?php 

require_once('../Model/contact.class.php');

$admin =new contact($_POST['nom'],$_POST['email'], $_POST['sujet'], $_POST['message']);

$admin->ajouter();
header("Location:../contact.php?resultat=oui");//echo "oui";
//exit();
?>
