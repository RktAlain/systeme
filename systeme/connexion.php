<?php
session_start();
include('inscription.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['nom']) && !empty($_POST['mdp'])){

        $nom = $_POST['nom'];
        $mdp = $_POST['mdp'];

        $aff = $bdd->prepare('SELECT * FROM users WHERE nom = ? AND mdp = ?');
        $aff->execute(array($nom,$mdp));

        $rec = $aff->fetch();

        

        if($aff->rowCount() > 0){
            $_SESSION['nom'] = $nom;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['prenoms'] = $rec['prenoms'];

            header('location: affichage.php');

        }
    }else{echo 'Veuillez remplir le champ!!';}
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
        <label for="">Mot de passe :</label>
        <input type="text" size="5" name="mdp"><br><br>
        <input type="submit" name="submit" id="" value="Connexion">
    </form>
</body>
</html>