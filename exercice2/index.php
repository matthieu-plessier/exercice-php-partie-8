<?php

session_start();

$_SESSION['lastname']='Matt';
$_SESSION['firstname']='Plessier';
$_SESSION['age']=44;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 : Variables superglobales, sessions et cookies</title>
</head>
<body>
    <a href="user.php">Clique ici !</a>
</body>
</html>