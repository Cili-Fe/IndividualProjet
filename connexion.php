<?php


try{
    $user='root';
    $pass="";
    $db=new PDO("mysql:host=localhost;dbname=liste",$user,$pass);
    echo"Enregistrement reussi"."<br/>";

}
catch(PDOException $e){
Print"erreur!:".$e->getMessage()."<br/>";

}
?>