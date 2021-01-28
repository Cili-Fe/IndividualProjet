<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>forms</title>
</head>
<!--debu du body-->
<body>
<!--debut du PHP:connexion-->
<?php
  $dat = new mysqli("localhost", "root", "", "liste");//Connexion à la base de données
  if (!empty($_POST["submit"])){
    $dat->query("INSERT INTO `utilisateur` SET `mail`='{$_POST['mail']}', `wordpass`='{$_POST['wordpass']}'");}
   
  header('Location: http://localhost/simply-count/create.php')
  ?>


<!--fin du PHP-->

    <div class="center">
        <form action="" method="POST">
            

        
           <div class="form">
            <h3>Créer un compte</h3>
            <div>
                <input type="email" name="mail" placeholder="Adresse e-mail" required>
                <input type="password" name="wordpass" placeholder="Mot de passe" required>

            </div>

            <div>
                <button type="submit" id="send">Valider</button>
            </div>
            <a href="conect.php"> <h3>Se connecter</h3> </a>
           </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>
<!--fin du body-->
</html>