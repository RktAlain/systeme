<?php
include('inscription.php');

$aff = $bdd->prepare('SELECT * FROM users');
$aff->execute();

$rec = $aff->fetch();

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
    <form action="affichage.php" method="post">
    <label for="">Nom: <?= $rec['nom'] ?></label>
    <label for="">Prénom(s): <?= $rec['prenoms'] ?></label>
    </form>
</body>
</html>