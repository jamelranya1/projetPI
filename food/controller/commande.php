<?php 
require_once('../Model/commande.class.php');
$comm =new commande($_POST['nom'],$_POST['prenom'], $_POST['adresse'], $_POST['tel'],$_POST['nomrepas']);
$comm->ajouter();
header("Location:../commande.php?resultat=oui");//echo "oui";
//exit();
?>
