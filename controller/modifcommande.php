<?php 
require_once('../Model/commande.class.php');
$comm = new commande($_POST['nom'],$_POST['prenom'], $_POST['adresse'], $_POST['tel'],$_POST['nomrepas']);
$comm->modifier();
header("Location:../liste-commande.php?resultat=oui modif");
//echo "oui";
//exit();
?>
