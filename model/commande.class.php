<?php

class commande{

private $nom;

private $prenom;

private $adresse;

private $tel;
private $nomrepas;

 

function __construct($nom,$prenom,$adresse,$tel,$nomrepas){

$this->nom = addslashes($nom);

$this->prenom = addslashes($prenom);

$this->adresse = addslashes($adresse);
$this->tel = addslashes($tel);
$this->nomrepas = addslashes($nomrepas);

 

}








public function supprimer(){

   

    include('../includes/connect_db.php');

 

    $req = $bdd->exec('DELETE FROM commande WHERE id=\''.$_GET['id'].'\'');

 

        echo'oui';  

 

 

}

public function ajouter(){ 

    include('../includes/connect_db.php');
            
            $req = $bdd->exec("INSERT INTO `commande`(`nom`, `prenom`, `adresse`, `tel`,`nomrepas`)	VALUES ('$this->nom','$this->prenom','$this->adresse','$this->tel','$this->nomrepas')");
            
            echo'oui';
                    //return TRUE;
                
    }
    







}






?>