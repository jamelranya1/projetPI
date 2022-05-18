<?php
class contact{
private $nom;
private $email;
private $sujet;
private $message;




function __construct($nom,$email,$sujet,$message){
$this->nom =($nom);
$this->email= ($email);
$this->sujet= ($sujet);
$this->message=($message);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
$req = $bdd->exec("INSERT INTO `contact`(`nom`, `email`, `sujet`, `message`) VALUES ('$this->nom','$this->email','$this->sujet','$this->message')");
     
		
		echo'oui';
                //return TRUE;
			
}








public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admiin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>