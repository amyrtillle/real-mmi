<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Création de compte</title>
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./css/contact.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php include("header.php"); ?>
<body>
<main>

<div class='titre'>
        <h1 class='title-page'>Accédez à votre compte</h1>
    </div>

    <form class='form-login' method='POST' action='connexion-controller.php'>

        <label>Login</label>
        <input type='text' name='login'>
        <br>

        <label>Mot de passe</label>
        <input type='password' name='pwd'>
        <br>

        <p class='text'>Vous êtes nouveau? Créez un compte en <a href='./create-account.php'>cliquant ici</a></p>

        <input type='submit' value='Se connecter' name='connect'>

    </form>


</main>
</body>

<?php include("footer.php"); ?>


</html>
