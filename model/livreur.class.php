<?php
class livreur{
private $nom;
private $tel;
private $login;
private $motdepasse;






function __construct($nom,$tel,$login,$motdepasse){
$this->nom =($nom);
$this->tel =($tel);
$this->login =($login);
$this->motdepasse =($motdepasse);




}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `livreur`(`nom`, `tel`, `login`, `motdepasse`)	VALUES ('$this->nom','$this->tel','$this->login','$this->motdepasse' )");
		
		echo'oui';
                //return TRUE;
			
}






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM livreur WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}




?>