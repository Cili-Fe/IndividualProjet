<?php
require_once "connexion.php";


$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];


$preparation=$db->prepare("INSERT INTO utilisateur (nom, prenom, email,password) VALUES(?, ?, ?, ?)" );
$data=array($nom,$prenom,$email,$password);
$preparation -> execute($data);
$cost=['cost' => 12];
$password=password_hash($password, PASSWORD_BCRYPT, $cost);



/*compilation
$preparation->bindParam(':mail',$mail);
$preparation -> bindParam(':wordpass',$wordpass);
$preparation -> bindParam(':wordpass',password_hash( $password, PASSWORD_DEFAULT));
$preparation -> execute();
*/
?>