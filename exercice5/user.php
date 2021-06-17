<?php
$form = "<form class='form'  action='user.php' method='post'>
<div class='mb-3'>
    <label for='login' class='form-label'>login</label>
    <input type='login' name ='login' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
    
</div>
<div class='mb-3'>
    <label for='password' class='form-label'>Password</label>
    <input type='password' name='password' class='form-control' id='exampleInputPassword1'>
</div>
<button type='submit' class='btn btn-primary'>valide ici !</button>
</form>";

$login= $_POST['login'];
$password=$_POST['password'];

if (empty($_POST['login']) || empty($_POST['password'])) {

    $result = $form;

}else {
    setcookie('login', $_POST['login'], time() + 365*24*3600); 
    setcookie('password', $_POST['password'], time() + 365*24*3600);
    $result= 'Bien enregistré !';
}
if (!empty($_COOKIE['login']) || !empty($_COOKIE['password'])) {
$result = 'Votre login est : ' .$_POST['login']. ' et votre mot de passe est : '.$_POST['password'];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 8 : Variables superglobales, sessions et cookies</title>
</head>
<body>
    <h2>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</h2>
    
    
    
<?= $result ?>

</body>
</html>