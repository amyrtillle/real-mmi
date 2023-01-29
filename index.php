<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Accueil</title>
    <link rel='stylesheet' type='text/css' href='./css/reset.css'>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='./libs/bootstrap/css/bootstrap-theme.css'>
    <link rel='stylesheet' type='text/css' href='./css/body.css'>
    <link rel='stylesheet' type='text/css' href='./css/domain.css'>
    <link rel='stylesheet' type='text/css' href='./css/index.css'>

    <script src="./libs/bootstrap/js/bootstrap.js"></script>

</head>

<?php include("header.php"); ?>
<main>


<section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <h1>MMI Grenoble</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="video-section">
        <div class="d-flex flex-column align-items-center">
            <h2>MMI Grenoble</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GDJmbGiqB1w" title="MMI Grenoble" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>

     <div class="container intro">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h5>La formation pluridisciplinaire où tu apprends le développement web, la communication, le graphisme et l'audiovisuel</h5>
                    <div class="text-center text-lg-start">
                        <a href="./iut.php" class="button my-5 scrollto">
                            <span>En savoir plus</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 hero-img">
                    <img src="./assets/photos/P115067420.jpg" alt="photo of grenoble from iut"></img>
                </div>
            </div>
        </div>





    <section id="presentation-section" class="mt-lg-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 my-5">
                    <div class="d-flex align-items-center">
                        <div class="row">
                            <div class="col-lg-6 p-lg-3 d-flex justify-content-center">
                                <img src="./assets/photos/P115072130.jpg" class="img-fluid dev-img" alt="photo of grenoble from iut">
                            </div>
                            
                            <div class="col-lg-6 p-lg-3 d-flex flex-column justify-content-center">
                                <div class="my-lg-5">
                                    <h2>MMI Grenoble, le BUT polyvalent</h2>
                                </div>
    
                                <p>Que tu cherches à devenir développeur.euse web, professionnel.le dans la communication ou le marketing, un.e as du design graphique ou un.e réalisateur.ice d'exception, MMI Grenoble est là pour t'accompagner pendant ce BUT de 3 ans </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <header class="section-header d-flex justify-content-center mb-lg-4">
                <h2>Les domaines MMI</h2>
            </header>

            <div class="row gy-4 portfolio-container">
                <div class="col-lg-3 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href="./graphic-design.php"><img src="./assets/photos/PXL_animation2.jpg" class="img-fluid" alt="2d animator" /></a>
                        <div class="portfolio-titre">
                            <h4>Graphisme</h4>
                        </div>
                        <div class="portfolio-info">
                        <a href="./graphic-design.php" class="link-preview" title="Pôle design graphique">
                                
                                <button>En savoir plus</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href="./web-development.php"> <img src="./assets/photos/berkeley-communications-pr.jpg" class="img-fluid" alt="person on phone" /></a>
                        <div class="portfolio-titre">
                            <h4>Développement Web</h4>
                        </div>
                        <div class="portfolio-info">
                        <a href="./web-development.php" class="link-preview" title="Pôle développement web">
                                
                                <button>En savoir plus</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href="./communication.php"><img src="./assets/photos/myriam-jessier-seo.jpg" class="img-fluid" alt="seo manager" /></a>
                        <div class="portfolio-titre">
                            <h4>Communication</h4>
                        </div>
                        <div class="portfolio-info">                            
                            <a href="./communication.php" class="link-preview" title="Pôle communication">
                                
                                <button>En savoir plus</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                        <a href="./audiovisual.php"><img src="./assets/photos/video-edit.jpg" class="img-fluid" alt="video editor" /></a>
                        <div class="portfolio-titre">
                            <h4>Audiovisuel</h4>
                        </div>
                        <div class="portfolio-info">
                            <a href="./audiovisual.php" class="link-preview" title="Pôle audiovisuel">
                                
                                <button>En savoir plus</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include("footer.php"); ?>