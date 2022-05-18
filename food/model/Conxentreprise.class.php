<?php
class Conxentreprise{
private $login;
private $motdepasse;

        
function __construct($login,$motdepasse){
$this->login = $login;
$this->motdepasse = md5($motdepasse);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM entreprise WHERE login = '$this->login' AND motdepasse = '$this->motdepasse'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  //header('location:../loginEtudiant.php?mess=error');
  echo "non";
  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];       
       $_SESSION['nom_entreprise'] = $resultat['nom_entreprise'];
       $_SESSION['matricule'] = $resultat['matricule'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['adresse'] = $resultat['adresse'];
       $_SESSION['telephone'] = $resultat['telephone'];
       $_SESSION['fax'] = $resultat['fax'];
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['motdepasse'] = $resultat['motdepasse'];
       
	  //test 
	header('location:../liste-appel-offre.php');


} 

}
}


$appel = new Conxentreprise($_POST['login'],$_POST['motdepasse']);


?>