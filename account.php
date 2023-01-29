<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Compte</title>

    <link rel='stylesheet' type='text/css' href='./css/reset.css'>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='./css/account.css'>
    <link rel='stylesheet' type='text/css' href='./css/body.css'>


</head>

<?php include("header.php");

session_start();

if ($_SESSION == true){
    header ('location: account-infos.php');
}
?>

<main id="main">
    <!-- formulaire d'inscription -->

    <div class="container">
        <div id="selection">
            <span id="select-color"></span>
            <div id="create" onclick="switchToCreate()">
                <h2>Créer un compte</h2>
            </div>
            <div id="login" onclick="switchToLogin()">
                <h2>Se connecter</h2>
            </div>

        </div>
        <form method="POST" action="create-account-controller.php" id="create-form">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <label for="lastname">Nom *</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Dupont" required>
                    </div>
                    <div class="row">
                        <label for="firstname">Prénom *</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Jean" required>
                    </div>
                    <div class="row">
                        <label for="email">Adresse e-mail *</label>
                        <input type="email" name="email" id="email" placeholder="example@mail.com" required>
                    </div>
                    <div class="row">
                        <label for="pwd">Mot de passe *</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Minimum 8 caractères" required>
                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                    </div>
                    <div class="row">
                        <label for="password2">Confirmation de mot de passe *</label>
                        <input type="password" name="password2" id="password2" placeholder="Retapez votre mot de passe" required>
                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <label for="profil">Profil *</label>
                        <select name="profil" id="profil" require>
                            <option value="">---choisir une option---</option>
                            <option value="alumni">Alumni</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>
                    <div class="row">
                        <label for="bio">Résumé sur vous *</label>
                        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Décrivez vous en quelques mots (max 70 caractères)" maxlength="70"></textarea>
                    </div>
                </div>
            </div>
            <div class="row bottom-text">
                <input type="submit" id='submit' class="account-button" value="S'inscrire" >
                <p>Vous avez déjà un compte ? <span id="go-to-log" onclick="switchToLogin()">Connectez-vous</span></p>
            </div>
        </form>

        <form method="post" action="connexion-controller.php" id="login-form">

            <div class="row">
                <label for="login">Adresse e-mail</label>
                <input type="email" name="login" id="login" placeholder="example@mail.com" required>
            </div>
            <div class="row">
                <label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" class="password3" placeholder="Mot de passe" required>
                <i class="bi bi-eye-slash" id="togglePassword3"></i>
            </div>

            <div class="row bottom-text">
                <input type="submit" id='submit' class="account-button" value="Se connecter" >
                <p>Vous n'avez pas de compte ? <span id="go-to-register" onclick="switchToCreate()">Inscrivez-vous</span></p>
            </div>
        </form>
    </div>
</main>

<?php include("footer.php"); ?>

<script src="./js/account.js"></script>