<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>Développement web</title>
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link href="./css/forum.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
</html>

<?php

include("header.php");

require_once 'config.php';
try{
    $conn = new PDO(DB, USER, PWD);
} catch (PDOException $e){
    die ("Failed: ".$e);
}


    $sql = "SELECT * FROM post INNER JOIN user ON post.post_author=user.user_login;";
    $res1 = $conn->query($sql);
    if (!$res1) die ("Failed query: " . $sql);
    $rows1 = $res1->fetchAll();


    $nbrows1 = sizeof($rows1);
    for ($k = 0; $k < $nbrows1; $k++) {
        $infos = $rows1[$k];

        if ($rows1[$k] % 2) {
            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col-lg-6'>";
            echo "<div class='post-infos'>";
            echo "<h5 class='post_title'>" . $infos["post_title"] . "</h5>";
            echo "<p class='post_author'>" . $infos["user_name"] . " " . $infos["user_surname"] . "</p>";
            echo "<p class='post_date'>" . $infos["post_date"] . "</p>";
            echo "<p class='post_publication'>" . $infos["post_publication"] . "</p>";

            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else {

            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col-lg-6'>";
            echo "<div class='d-flex flex-column justify-content-right align-items-right'>";
            echo "<div class='post-infos2'>";
            echo "<h5 class='post_title2'>" . $infos["post_title"] . "</h5>";
            echo "<p class='post_author2'>" . $infos["user_name"] . " " . $infos["user_surname"] . "</p>";
            echo "<p class='post_date2'>" . $infos["post_date"] . "</p>";
            echo "<p class='post_publication2'>" . $infos["post_publication"] . "</p>";

            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

        }
    }

include("footer.php");

?>