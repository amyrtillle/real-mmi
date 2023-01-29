<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Nous contacter</title>

    <link rel='stylesheet' type='text/css' href='./css/reset.css'>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='./css/contact.css'>
    <link rel='stylesheet' type='text/css' href='./css/body.css'>

    
</head>

<?php include("header.php"); ?>

<main>
    <h1>Nous contacter</h1>
    <div id="contact-container">
        <div id="contact-info">
            <h3>Informations de contact</h3>
            <ul>
                <li class="info-link">
                    <a href="tel:+33476575000" ><i class="bi bi-telephone-fill"></i> +33 4 76 57 50 00</a> 
                </li>
                <li class="info-link">
                    <a href="mailto:iut1.mmi@univ-grenoble-alpes.fr"><i class="bi bi-envelope-fill"></i>iut1.mmi@univ-grenoble-alpes.fr</a>
                </li>
                <li class="info-link">
                    <a href="https://goo.gl/maps/HSPDJ8KiRbSjy4Ya6" target="_blank"><i class="bi bi-geo-alt-fill"></i>17 Quai Claude Bernard, 38000 Grenoble</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="surname" class="">Prénom</label>
                                <input type="text" id="surname" name="surname" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Nom</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Email</label>
                                <input type="text" id="email" name="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="phone" class="">Téléphone</label>
                                <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row inputs">
                        
                            <div>
                                <label for="subject" class="">Sélectionnez un sujet</label>
                                <br>
                                <input type="radio" name="subject" value="informations-generales" >Informations générales
                                <input type="radio" name="subject" value="autre">Autre
                            </div>
                        
                    </div>
                    <div class="row inputs">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                            </div>

                    </div>
                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                </div>
                <div class="status"></div>
            </div>
         </div>
    </div>
</main>

<?php include("footer.php"); ?>


    <script src="./libs/bootstrap/js/bootstrap.js"></script> 
    