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


    <div class="container">
        <div class="row">
            <div class="col-lg-12 contact">
                <div class='titre m-lg-4 d-flex justify-content-center'>
                    <h1 class="title-page">Créez votre compte</h1>
                </div>


                <div class="d-flex justify-content-center m-lg-4">

                    <form class="form-login" method="POST" action="create-account-controller.php">

                        <label class="m-lg-2">Nom</label>
                        <input type="text" name="firstname">
                        <br>

                        <label class="m-lg-2">Prénom</label>
                        <input type="text" name="lastname">
                        <br>

                        <label class="m-lg-2">Profil</label>
                        <select name="profil" id="profil-select">
                            <option value="">--Choisir une option--</option>
                            <option value="alumni">Alumni</option>
                            <option value="etudiant">Étudiant</option>
                        </select>
                        <br>
                        <!---->
                        <!--        <label>Login</label>-->
                        <!--        <input type="text" name="login">-->
                        <!--        <br>-->


                        <label class="m-lg-2">E-mail</label>
                        <input type="email" name="email">
                        <br>

                        <label> Bio </label>
                        <input type="text" name="bio">
                        <br>

                        <label class="m-lg-2">Mot de passe</label>
                        <input type="password" name="pwd">
                        <br>

                        <input type="submit" value="Créer un compte" name="create" class="m-lg-2">

                    </form>
                </div>
            </div>
        </div>
    </div>


</main>
</body>

<?php include("footer.php"); ?>

<script src="./js/carousel.js"></script>

</html>