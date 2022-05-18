<?php
class restaurant{
private $nomrepas;
private $prix;




function __construct($nomrepas,$prix){
$this->nomrepas =($nomrepas);
$this->prix = ($prix);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `restaurant`(`nomrepas`, `prix`)	VALUES ('$this->nomrepas','$this->prix')");
		
		echo'oui';
                //return TRUE;
			
}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `restaurant` SET `nomrepas`='$this->nomrepas',`prix`='$this->prix'WHERE id = $id");
				
        
        echo'oui modif';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM restaurant WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}

}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>