<?php
class Conxadmin{
private $login;
private $motdepasse;

        
function __construct($login,$motdepasse){
$this->login = $login;
$this->motdepasse = md5($motdepasse);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM admin WHERE login = '$this->login' AND motdepasse = '$this->motdepasse'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');

  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];       
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['motdepasse'] = $resultat['motdepasse'];
       
       
	  //test 
	header('location:../liste-admin.php');


} 

}
}


$admin = new Conxadmin($_POST['login'],$_POST['motdepasse']);


?>