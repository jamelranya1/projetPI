<?php

class commande{
private $nom;
private $prenom;
private $adresse;
private $tel;
private $nomrepas;

 

function __construct($nom,$prenom,$adresse,$tel,$nomrepas){
    $this->nom =($nom);
    $this->prenom =($prenom);
    $this->adresse =($adresse);
    $this->tel =($tel);
    $this->nomrepas =($nomrepas);
    

 

}








public function supprimer(){

   

    include('../includes/connect_db.php');

 

    $req = $bdd->exec('DELETE FROM commande WHERE id=\''.$_GET['id'].'\'');

 

        echo'oui';  

 

 

}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `commande` SET `nom`='$this->nom',`prenom`='$this->prenom',`adresse`='$this->adresse',`tel`='$this->tel',`nomrepas`='$this->nomrepas' WHERE id = $id");
				
        
        echo'oui modif';
        
}	
public function ajouter(){ 

    include('../includes/connect_db.php');
            
            $req = $bdd->exec("INSERT INTO `commande`(`nom`, `prenom`, `adresse`, `tel`,`nomrepas`)	VALUES ('$this->nom','$this->prenom','$this->adresse','$this->tel','$this->nomrepas')");
            
            echo'oui';
                    //return TRUE;
                
    }
    







}






?>