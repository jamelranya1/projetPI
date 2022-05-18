<?php
class Admin{
private $nom;
private $login;
private $email;
private $motdepasse;




function __construct($nom,$login,$email,$motdepasse){
$this->nom =($nom);
$this->login = ($login);
$this->email = ($email);
$this->motdepasse = md5($motdepasse);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`nom`, `login`, `email`, `motdepasse`)	VALUES ('$this->nom','$this->login','$this->email','$this->motdepasse')");
		
		echo'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom`='$this->nom',`login`='$this->login',`email`='$this->email',`motdepasse`='$this->motdepasse' WHERE id = $id ");
				
        
        echo'oui modif';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>