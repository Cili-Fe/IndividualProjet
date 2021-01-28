<?php 

try{
    $db = new PDO('mysql:host=localhost; dbname=liste', 'root', ''); 
}catch(Exception $e) {
    die('Erreur:'.$e ->getMessage());
}
if (extension_loaded('PDO')){
    echo 'Connexion etablie!';
}
?>