<?php
class inscrit{
private $nom;
private $nom_entreprise;
private $matricule;
private $email;
private $adresse;
private $telephone;
private $fax;
private $login;
private $motdepasse;




function __construct($nom,$nom_entreprise,$matricule,$email,$adresse,$telephone,$fax,$login,$motdepasse){
$this->nom =($nom);
$this->nom_entreprise=($nom_entreprise);
$this->matricule=($matricule);
$this->email=($email);
$this->adresse=($adresse);
$this->telephone=($telephone);
$this->fax=($fax);
$this->login=($login);
$this->motdepasse = md5($motdepasse);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `entreprise`(`nom`, `nom_entreprise`, `matricule`, `email`,`adresse`,`telephone`,`fax`,`login`,`motdepasse`)	VALUES ('$this->nom','$this->nom_entreprise','$this->matricule','$this->email','$this->adresse','$this->telephone','$this->fax','$this->login','$this->motdepasse' )");
		
		echo'oui';
                //return TRUE;
			
}





}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>