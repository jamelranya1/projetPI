<?php 

require_once('../model/restaurant.class.php');

$rest= new restaurant($_POST['nomrepas'],$_POST['prix']);

$rest->ajouter();
header("Location:../liste-restaurant.php?resultat=oui");
//echo "oui";
//exit();
?>