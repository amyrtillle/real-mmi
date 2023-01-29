<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Mon compte</title>
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./css/account-infos.css" rel="stylesheet" type="text/css" />
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php
session_start();
include("header.php");
?>

<main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Mon compte</h1>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="account-frame">
                                <h2>Mes informations</h2>
                                <div id="account-infos">
                                    <p>Email : <?php echo $_SESSION['email'] ?></p>
                                    <p>Nom : <?php echo $_SESSION['lastname'] ?></p>
                                    <p>Prénom : <?php echo $_SESSION['firstname'] ?></p>
                                    <p>Profil : <?php echo $_SESSION['profil'] ?></p>
                                </div>
                                <button class="button" id="update-infos">Modifier</button>

                                <form action='modif-controller.php' method='POST' id='form-update' class="hidden">
                                    <div>
                                        <label>Mot de passe :</label>
                                        <input type='password' name='pwd' required>
                                    </div>

                                    <div>
                                        <label>Nom :</label>
                                        <input type='text' name='firstname' required>
                                    </div>

                                    <div>
                                        <label>Prénom :</label>
                                        <input type='text' name='lastname' required>
                                    </div>

                                    <div>
                                        <input type='submit' value='Sauvegarder' name='modifier' id="save-infos" class="button">
                                        <button class="button hidden" id="cancel-infos">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="account-frame">
                                <h2>Actions</h2>
                                <div class="d-flex flex-column align-items-center">
                                    <form action='deconnexion-controller.php' method='POST' id='form-deco'>
                                        <input type='submit' value='Me déconnecter' class="button">
                                    </form>
                                    <form action='delete-controller.php' method='POST' id='form-delete'>
                                        <input type='submit' value='Supprimer mon compte' class="button">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col-lg-12">
                        <div class="account-frame">
                            <h2>Poster un témoignage dans le forum</h2>
                            <div class="d-flex flex-column justify-content-left align-items-left">
                                <form action='post-controller.php' method='POST' id='form-post'>
                                    <div>
                                        <label>Titre</label>
                                        <input type="text" name="title" class="input" required>
                                    </div>

                                    <div>
                                        <label>Publication</label>
                                        <textarea name="publication" required="required"></textarea>
                                    </div>

                                    <div>
                                        <input type='submit' value='Poster' name='poster' class="button" id="send-post">
                                    </div>

                                </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include("footer.php"); ?>

<script src="./js/modif-account.js"></script>

</html>
