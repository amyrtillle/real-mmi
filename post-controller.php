<?php

include("post-management.php");

session_start();


if (isset($_POST["title"]) && $_POST["title"] != ""
    && isset($_POST["publication"]) && $_POST["publication"] != "") {

    $account = new Post($_POST["title"], base64_encode($_POST["publication"]), $_POST["author"]);
    $account->createPost($_POST["title"], base64_encode($_POST["publication"]), $_POST["author"]);
}

?>
