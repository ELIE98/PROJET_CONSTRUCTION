<?php 

require 'database.php';

;

if(!empty($_POST))
{
  $nom      = verify($_POST['nom']);
  $prenom   = verify($_POST['prenom']);
  $adresse  = verify($_POST['adresse']);
  $email    = verify($_POST['email']);
  $contact  = verify($_POST['contact']);
  $password = verify($_POST['password']);
  $mdp      = password_hash($password,PASSWORD_DEFAULT); 
  /* DEBOGAGE
echo $nom;
echo $prenom;
echo $adresse;
echo $email;
echo $contact;
echo $mdp;
 */
$connexion = Database::connect();
$insert = $connexion -> prepare('INSERT INTO `user`( `nom`, `prenom`, `email`, `contact`, `mdp`, `adresse`) VALUES (?,?,?,?,?,?)');
$insert -> execute(array($nom,$prenom,$email,$contact,$password,$adresse));
Database::disconnect();
header('location:../index.php');

}



function verify($data)
{
    $data  = trim($data);
    $data  = htmlspecialchars($data);
    $data  = stripslashes($data);
    return $data;
}












?>