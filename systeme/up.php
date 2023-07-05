<?php
    include('inscription.php');


    if(isset($_POST['update'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenoms'];
        $mdp = $_POST['mdp'];

        $update = $bdd->prepare('UPDATE users SET nom = ?, prenoms = ? , mdp = ? WHERE id_users = "$deId"');

        $update->execute([$nom, $prenom, $mdp]);


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
        <input type="text" name="nom" value="<?= $_GET['nom']; ?>"><br><br>
        <label for="">Prenom :</label>
        <input type="text" name="prenoms" value="<?= $_GET['prenoms']; ?>"><br><br>
        <label for="">Mot de passe :</label>
        <input type="text" name="mdp" value="<?= $_GET['mdp']; ?>"><br><br>
        <input name="update" type="submit" id="" value="modififer">

    </form>
</body>
</html>