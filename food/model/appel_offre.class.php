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



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `appel_offre` SET `nom`='$this->nom',`nom_entreprise`='$this->nom_entreprise',`prix`='$this->prix',`description`='$this->description',`date_deb`='$this->date_deb',`date_fin`='$this->date_fin' WHERE id = $id");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM appel_offre WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>