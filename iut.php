<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>IUT</title>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap-theme.css'>

    <link href="./libs/flickity/flickity.css" rel="stylesheet" type="text/css">
    <link href="./css/reset.css" rel="stylesheet" type="text/css">
    <link href="./css/body.css" rel="stylesheet" type="text/css">
    <link href="./css/carousel.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' type='text/css' href='./css/domain.css'>
    <link rel='stylesheet' type='text/css' href='./css/iut.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="./libs/bootstrap/js/bootstrap.js"></script>

</head>

<?php include("header.php"); ?>

<body>
<main>

    <section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <h1>L'IUT</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row intro">

            <div class="col-lg-12 my-5">
                <div class="d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-6 p-lg-3">
                            <div class="my-lg-4">
                                <h2>L'IUT 1 de Grenoble</h2>
                            </div>

                            <p>Situé près des montagnes, l'IUT de Grenoble est parfait pour toi si tu aimes le ski ou la randonnée. Que tu sois plutôt activités sportives ou culturelles, l'IUT1 qui est rattaché à l'UGA, te permettra de vivre des expériences inoubliables. Parce que la vie d'étudiant ne repose pas uniquement sur le travail, tu pourras t'épanouir à Grenoble tout en apprenant de nouvelles compétences.</p>

                        </div>

                        <div class="col-lg-6 p-lg-3 d-flex justify-content-center">
                            <img src="./assets/iutgre.jpg" class="img-fluid dev-img" alt="web-dev pc illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section id="field-section">
            <div class="row">
                <div class="mb-lg-3">
                    <h2>Les parcours MMI</h2>
                </div>
                <div class="col-sm-6 col-lg-4 more">
                    <div id="card-audiovisual">
                        <a href="./web-development.php" class="link">
                            <div class="card-cover d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title">Développement web et dispositifs intéractifs</h3>
                                <button class="button">Découvrir les projets</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 more">
                    <div id="card-communication" >
                        <a href="./communication.php" class="link">
                            <div class="card-cover d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title">stratégie de communication numérique et design d’expérience</h3>
                                <button class="button">Découvrir les projets</button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 more">
                    <div id="card-web-development">
                        <a href="./graphic-design.php" class="link">
                            <div class="card-cover d-flex flex-column justify-content-center align-items-center">
                                <h3 class="card-title">Création <br> numérique</h3>
                                <button class="button">Découvrir les projets</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>




        <div class="row">
            <div class="col-lg-12 my-5">
                <div class="d-flex align-items-center">
                    <div class="row">

                        <div class="col-lg-6 p-lg-3 d-flex justify-content-center">
                            <img src="./assets/amphi.png" class="img-fluid dev-img" alt="web-dev pc illustration">
                        </div>
                        <div class="col-lg-6 p-lg-3">
                            <div class="my-lg-4">
                                <h2>MMI, c'est s'entraider, s'adapter et progresser</h2>
                            </div>

                            <p>Afin que tu puisses donner le meilleur de toi-même, toute l'équipe pédagogique, t'accompagne pendant ton BUT MMI. L'adaptation est le mot-clé de ce département de Grenoble. En effet, en toutes situations, le département s'adapte pour que tu puisses bénéficier d'une formation qui te correspond et surtout qui te convient. Ainsi, tu pourras acquérir des compétences solides et t'en sortir du mieux possible.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>

<?php include("footer.php"); ?>

<script src="./libs/flickity/flickity.pkgd.js"></script>
<script src="./js/carousel.js"></script>

</html>

