<?php
class appel_offre{
private $nom;
private $nom_entreprise;
private $prix;
private $description;
private $date_deb;
private $date_fin;





function __construct($nom,$nom_entreprise,$prix,$description,$date_deb,$date_fin){
$this->nom =($nom);
$this->nom_entreprise =($nom_entreprise);
$this->prix =($prix);
$this->description =($description);
$this->date_deb =($date_deb);
$this->date_fin =($date_fin);



}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `appel_offre`(`nom`, `nom_entreprise`, `prix`, `description`,`date_deb`,`date_fin`)	VALUES ('$this->nom','$this->nom_entreprise','$this->prix','$this->description','$this->date_deb','$this->date_fin' )");
		
		echo'oui';
                //return TRUE;
			
}



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>