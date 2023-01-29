<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Développement web</title>
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
   <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link href="./css/forum.css" rel="stylesheet" type="text/css" />
    <link href="./css/domain.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>



<?php

include("header.php");
?>

<main>

    <section id="hero" class="hero d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center">
                    <h1>Forum</h1>
                </div>
            </div>
        </div>
    </section>

        <?php

        require_once 'config.php';
        try{
            $conn = new PDO(DB, USER, PWD);
        } catch (PDOException $e){
            die ("Failed: ".$e);
        }


        $sql = "SELECT * FROM post INNER JOIN user ON post.post_author=user.user_login ORDER BY post_id DESC;";
        $res1 = $conn->query($sql);
        if (!$res1) die ("Failed query: " . $sql);
        $rows1 = $res1->fetchAll();


        $nbrows1 = sizeof($rows1);

        echo "<div class='contain-post'>";


        for ($k = 0; $k < $nbrows1; $k++) {
            $infos = $rows1[$k];

            if ($k % 2) {

                echo "<div class='post-infos'>";
                echo "<div class='post-user'>";
                echo "<h4 class='post_author'>" . $infos["user_name"] . " " . $infos["user_surname"] . "</h4>";
                echo "<p class='post_bio'>" . $infos["user_status"] . " - " . $infos["user_bio"] . "</p>";
                echo "</div>";
                echo "<div class='post-desc'>";
                echo "<h5 class='post_title'>" . $infos["post_title"] . "</h5>";
                echo "<p class='post_date'>" . $infos["post_date"] . "</p>";
                echo "<div class='post_publication'>";
                echo "<p class='post_publication'>" . base64_decode($infos["post_publication"]) . "</p>";
                echo "</div>";
                echo "</div>";

                echo "</div>";

            } else {

                echo "<div class='post-infos2'>";
                echo "<div class='post-user2'>";
                echo "<h4 class='post_author2'>" . $infos["user_name"] . " " . $infos["user_surname"] . "</h4>";
                echo "<p class='post_bio2'>" . $infos["user_status"] . " - " . $infos["user_bio"] . "</p>";
                echo "</div>";
                echo "<div class='post-desc2'>";
                echo "<h5 class='post_title2'>" . $infos["post_title"] . "</h5>";
                echo "<p class='post_date2'>" . $infos["post_date"] . "</p>";
                echo "<div class='post_publication2'>";
                echo "<p class='post_publication2'>" . base64_decode($infos["post_publication"]) . "</p>";
                echo "</div>";
                echo "</div>";

                echo "</div>";

            }
        }

        echo "</div>";

        include("footer.php");

        ?>

</main>
<html
