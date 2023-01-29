<?php

if (!isset($_POST["login"]) &&
    $_POST["login"] != "" &&
    isset($_POST["pwd"]) &&
    $_POST["pwd"] != "") {
    header("Location: insert-login.php");
}

$l = $_POST["login"];
$pwd = $_POST["pwd"];
$p = $_POST["profil"];

require_once 'create-account-controller.php';

header ('location: account-infos.php');

