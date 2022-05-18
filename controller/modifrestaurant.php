<?php 

require_once('../Model/restaurant.class.php');

$rest = new restaurant($_POST['nomrepas'],$_POST['prix']);

$rest->modifier();
header("Location:../liste-restaurant.php?resultat=oui modif");
//echo "oui";
//exit();
?>
