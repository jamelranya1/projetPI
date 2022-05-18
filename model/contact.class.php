<?php

class contact{

private $nom;

private $email;

private $sujet;

private $message;

 

function __construct($nom,$email,$sujet,$message){

$this->nom = addslashes($nom);

$this->email = addslashes($email);

$this->sujet = addslashes($sujet);

$this->message = md5($message);

 

}








public function supprimer(){

   

    include('../includes/connect_db.php');

 

    $req = $bdd->exec('DELETE FROM contact WHERE id=\''.$_GET['id'].'\'');

 

        echo'oui';  

 

 

}

public function ajouter(){ 

    include('../includes/connect_db.php');
            
            $req = $bdd->exec("INSERT INTO `contact`(`nom`, `email`, `sujet`, `message`)	VALUES ('$this->nom','$this->email','$this->sujet','$this->message')");
            
            echo'oui';
                    //return TRUE;
                
    }
    







}






?>