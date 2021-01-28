<?php
require_once'connexion.php';


$mail = $_POST['mail'];
$passeword = $_POST['passeword'];


$preparation = $db -> prepare('INSERT INTO utilisateur (mail, passeword,) VALUES(?, ?)');
$preparation -> execute(array($mail, $passeword));//*requette preparée

//compilation
$preparation->bindParam(':mail',$mail);
$preparation->bindParam(':passeword',$passeword);
//execution de la requette
$preparation->execute();
?>