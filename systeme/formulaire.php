<?php
    include('inscription.php');


    if(isset($_POST['submit'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenoms'];
        $mdp = $_POST['mdp'];

        $insert = $bdd->prepare('INSERT INTO users(nom, prenoms, mdp) VALUES(?,?,?)');

        $insert->execute(array($nom, $prenom, $mdp));


        header('location:update.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>connexion</h1>
        <label for="">Nom:</label>
        <input type="text" size="5" name="nom"><br><br>
        <label for="">Prenom :</label>
        <input type="text" size="5" name="prenoms"><br><br>
        <label for="">Mot de passe :</label>
        <input type="text" size="5" name="mdp"><br><br>
        <input type="submit" name="submit" id="" value="INSCRIPTION">
    </form>
</body>
</html>