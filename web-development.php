<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Développement web</title>

    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./libs/flickity/flickity.css" rel="stylesheet" type="text/css">
    <link href="./css/carousel.css" rel="stylesheet" type="text/css">
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link href="./css/domain.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<?php include("header.php"); ?>
<main>

    <section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <h1>Développement web</h1>
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
                                <h2>De zéro à héros du développement web</h2>
                            </div>

                            <p>Tu cherches à devenir <strong>développeur web</strong> ? <br>
                                Que tu sois novice ou débutant, tu es au bon endroit.
                                Le développement web est un excellent moyen d'entrer dans le monde de la
                                <strong>programmation</strong> et de la
                                <strong>technologie</strong>.
                                C'est une compétence qui te permettra de créer ton propre site web ainsi que des applications et logiciels.
                                Pour cela, tu apprendras différents langages de programmation : </p>

                            <ul>
                                <li><strong>Le HTML</strong>: tu apprendras les bases du langage HTML et comment créer et mettre en place la structure et le contenu des sites web.
                                    Pour cela, tu utiliseras des balises pour placer des textes, des images et bien d'autres contenus.
                                </li>
                                <li><strong>Le CSS</strong> : tu apprendras à utiliser le CSS pour donner du style aux sites web.
                                    Tu pourras alors ajouter des couleurs, des polices, des mises en page, des arrière-plans et plein d'autres éléments de style sur tes pages.
                                </li>
                                <li><strong>Le PHP</strong> : tu apprendras à utiliser le PHP pour créer des sites et des applications web dynamiques.
                                    Il te servira à récupérer des données ainsi qu'à écrire des fonctions pour gérer ces données. Il permet même de travailler avec des bases de données.
                                </li>
                                <li><strong>Le JavaScript</strong> : Tu apprendras à utiliser le langage Javascript pour créer des sites et des applications web interactifs.
                                    Tu seras capable de créer du contenu dynamique, d'animer des images et beaucoup d'autres fonctionnalités.
                                </li>
                            </ul>

                            <p>Pas de panique, pas besoin d’être un génie des maths et de la logique pour arriver à comprendre et
                                mettre en pratique ce que tu apprendras. En plus, les professeurs et intervenants seront là pour t’aider,
                                t’expliquer les notions compliquées et faire en sorte que tu réussisses tes <strong>projets web</strong>.
                                Une fois que tu auras appris les bases du développement web, tu pourras commencer à travailler sur des
                                <strong>projets concrets en équipe</strong>. Qu'il s'agisse de créer un site web de portfolio, un blog,
                                une boutique en ligne, un jeu ou une application web, tu pourras mettre en pratique tes compétences.</p>

                            <p>Voici quelques idées des projets réalisés les années précédentes :</p>
                        </div>

                        <div class="col-lg-6 p-lg-3 d-flex justify-content-center">
                            <img src="./assets/dev.png" class="img-fluid dev-img" alt="web-dev pc illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 my-5">
                <div class="carousel">
                    <div class="carousel-cell">
                        <a href="https://youtu.be/4ocEpJZoYCs">
                            <img src="./assets/Caskwette-louisem-maelysm.png" alt="yohann-renauld" />
                        </a>
                        <h3>Maelys.M, Louise M.</h3>
                    </div>
                    <div class="carousel-cell">
                        <a href="https://youtu.be/80QbuR1S39Q">
                            <img src="./assets/Kaktu-emmad-louisem.png" alt="Louise.M, Maëlys.M, Maëlys.C, Emma.D" />
                        </a>
                        <h3>Louise.M, Emma.D</h3>
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
                            <img src="./assets/photos/andy-holmes-web.jpg" class="img-fluid" alt="front end developer" />
                            <div class="portfolio-titre">
                                <h4>Développeur.euse front-end</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="./assets/photos/cetteup-webmaster.jpg" class="img-fluid" alt="web master" />
                            <div class="portfolio-titre">
                                <h4>Web Master</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="./assets/photos/shahadat-rahman-back.jpg" class="img-fluid" alt="back end developer" />
                            <div class="portfolio-titre">
                                <h4>Développeur.euse back-end</h4>
                            </div>
                            <div class="portfolio-info">
                                <p>Web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php include("footer.php"); ?>

<script src="./libs/flickity/flickity.pkgd.js"></script>
<script src="./js/carousel.js"></script>

</html>