<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Communication</title>

    <link rel='stylesheet' type='text/css' href='./css/reset.css'>
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./libs/flickity/flickity.css" rel="stylesheet" type="text/css">
    <link href="./css/carousel.css" rel="stylesheet" type="text/css">
    <link href="./css/domain.css" rel="stylesheet" type="text/css" />
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php include("header.php"); ?>

<main>

<section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <h1>Communication</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 my-5">
                <div class="d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-6 p-lg-3">
                            <div class="my-lg-4">
                                <h2>L'art de la communication</h2>
                            </div>
                            <p>La <strong>communication et le marketing</strong> t'intéresses ? Tu trouveras sûrement ton bonheur à MMI Grenoble !</p>
                            <p>La formation MMI Grenoble forme le futur des métiers créatifs indépendants, le pôle communication offre à ses étudiants des outils pour gérer leurs activités et leur visibilité !<br>
                                En MMI, on forme aussi aux métiers de la communication, la gestion des réseaux sociaux, la communication digitale et traditionnelle ainsi que le marketing. Que tu comptes en faire ton activité primaire ou que tu souhaites obtenir des compétences pour faire fonctionner ton activité, tu auras toutes les compétences dont tu auras besoin : </p>
                            <ul>
                                <li><strong>L'expression</strong>: tu auras des travaux de rédaction dans lesquels il faut que tu exprimes des idées à de potentiels clients ou au sein d'une équipe.</li>
                                <li><strong>Les stratégies de communication et marketing</strong>: de la recherche de cibles et de besoin, à la création de calendriers de publication, tu apprendras tout ce dont tu as besoin pour mettre en place tes stratégies.</li>
                                <li><strong>La communication digitale et traditionnelle</strong>: tu apprendras comment créer tout types de de contenus de communication, des supports digitaux pour différents réseaux sociaux ou des vidéos en différents formats, aux supports plus traditionnels comme le print media, posters, affiches flyers, tout sera vu.</li>
                            </ul>

                            <p>Toutes ces branches de la formation incluent des ouvertures qui te permettrons, si tu veux travailler plus tard dans la publicité, d'avoir un bagage suffisant pour appréhender le monde du travail dans ce domaines.</p>
                             </div>

                        <div class="col-lg-6 p-lg-3">
                            <img src="./assets/comm.png" class="img-fluid" alt="phone illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="citron">
            <a href="./easter-egg.php"><img src="./assets/citron.png" class="citron-img"></a>
        </div>


        <div>
            <div class="col-lg-12 my-5">
                <div class="carousel">
                    <div class="carousel-cell">
                        <img src="./assets/photos/P115082357.jpg" alt="students studying" />
                    </div>
                    <div class="carousel-cell">
                        <img src="./assets/photos/P115075742.jpg" alt="laptop with communication courses" />
                    </div>
                    <div class="carousel-cell">
                        <img src="./assets/photos/comm-example.jpg" alt="students pointing screen of laptop" />
                    </div>
                </div>
            </div>

        </div>

        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Après MMI</h2>
                    <p>Les possibilités de carrière</p>
                </header>

                <div class="row gy-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="./assets/photos/berkeley-communications-pr.jpg" class="img-fluid" alt="person on phone" />
                            <div class="portfolio-titre">
                                <h4>Chargé.e de communication</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Communication</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="./assets/photos/myriam-jessier-seo.jpg" class="img-fluid" alt="seo manager on a laptop" />
                            <div class="portfolio-titre">
                                <h4>SEO</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Communication</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="./assets/photos/austin-distel-cm.jpg" class="img-fluid" alt="community manager on a laptop" />
                            <div class="portfolio-titre">
                                <h4>Community manager</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Communication</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

<?php include("footer.php"); ?>

<script src="./libs/flickity/flickity.pkgd.js"></script>
<script src="./js/carousel.js"></script>

</html>