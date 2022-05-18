<?php

 

require_once('../Model/contact.class.php');

$contact = new contact ($_POST['nom'],$_POST['email'], $_POST['sujet'], $_POST['message']);

$contact->supprimer();

header("Location:../liste-contact.php?resultat=oui supprimer");

?>