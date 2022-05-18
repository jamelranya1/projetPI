<?php 

require_once('../Model/restaurant.class.php');

$rest = new restaurant($_POST['nomrepas'],$_POST['prix']);

$rest->supprimer();
header("Location:../liste-restaurant.php?resultat=oui supprimer");
//echo "oui";
//exit();
?>
