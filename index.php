<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="pages/bootstrap/css/bootstrap.min.css">
    <title>forms</title>
</head>
<!--debut du body-->
<body>
<div class="container card"> 

<div class=" col mt-2 ml-2 mr-2 mb-2">
<h2>S'inscrire</h2>
<!--Debut du formulaire-->
        <form action="treatmen.php" method="POST">
            <input class="row mt-2" type="text" placeholder="nom" name="nom" required>
            <input class="row mt-2" type="text" placeholder="prenom" name="prenom" required>
            <input class="row mt-2" type="email" placeholder="email" name="email" required>
            <input class="row mt-2" type="password" placeholder="mot de passe" name="password" required>

            <button class="bg-success text-light mt-2">s'inscrire</button>
        </form>
</div>
<h2>Connexion</h2>
    <div class=" col mt-2 ml-2 mr-2 mb-2">
        <form action="verify.php" method="POST">
            <input class="row mt-2" type="text" placeholder="email" name="email" required>
            <input class="row mt-2" type="password" placeholder="mot de passe" name="password" required>
            <button class="bg-success text-light mt-2">se connecter</button>
        </form>
        <!--Fin du formulaire-->
    </div>


</div>

</body>
<!--fin du body-->
</html>