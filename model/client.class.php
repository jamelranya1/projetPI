<?php
class client{
private $nom;
private $tel;
private $adresse;
private $login;
private $motdepasse;




function __construct($nom,$tel,$adresse,$login,$motdepasse){
$this->nom =($nom);
$this->tel=($tel);
$this->adresse=($adresse);
$this->login=($login);
$this->motdepasse = md5($motdepasse);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nom`,`tel`,`adresse`,`login`,`motdepasse`)	VALUES ('$this->nom','$this->tel','$this->adresse','$this->login','$this->motdepasse' )");
		
		echo'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `nom`='$this->nom',`tel`='$this->tel',`adresse`='$this->adresse',`login`='$this->login',`motdepasse`='$this->motdepasse' WHERE id = $id");
				
        
        echo'oui modif';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>