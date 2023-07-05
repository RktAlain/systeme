
<?php
include 'inscription.php';

$aff = $bdd->prepare('SELECT * FROM users');
$aff->execute();

$rec = $aff->fetch();

if(isset($_GET['id_users'])){
    $del = $bdd->prepare('DELETE FROM users WHERE id_users=?');
    $del->execute([$_GET['id_users']]);
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


    <table>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>MDP</th>
            <th>action</th>
        </tr>
        <?php
            if($aff->rowCount() > 0){
        ?>
        <tr>
            <td><?= $rec['nom']?></td>
            <td><?= $rec['prenoms']?></td>
            <td><?= $rec['mdp']?></td>
            <td>
                <a href="up.php?id_users=<?=$rec['id_users']?>&amp;nom=<?=$rec['nom'];?>&amp;prenoms=<?=$rec['prenoms'];?>&amp;mdp=<?=$rec['mdp'];?>">update</a>
                <a href="update.php?id_users=<?=$rec['id_users'];?>;?>">delete</a>
            </td>    
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>