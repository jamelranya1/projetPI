<?php
class commande{
private $nom;
private $prenom;
private $adresse;
private $tel;
private $nomrepas;





function __construct($nom,$prenom,$adresse,$tel,$nomrepas){
$this->nom =($nom);
$this->prenom= ($prenom);
$this->adresse= ($adresse);
$this->tel=($tel);
$this->nomrepas=($nomrepas);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
$req = $bdd->exec("INSERT INTO `commande`(`nom`, `prenom`, `adresse`, `tel`,`nomrepas`) VALUES ('$this->nom','$this->prenom','$this->adresse','$this->tel','$this->nomrepas')");
     
		
		echo'oui';
                //return TRUE;
			
}








public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>