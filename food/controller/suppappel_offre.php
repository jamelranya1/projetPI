<?php 

require_once('../Model/appel_offre.class.php');

$offre = new appel_offre($_POST['nom'],$_POST['nom_entreprise'], $_POST['prix'], $_POST['description'],$_POST['date_deb'],$_POST['date_fin']);

$offre->supprimer();
header("Location:../liste-appel-offre.php?resultat=oui supprimer");
//echo "oui";
//exit();
?>
