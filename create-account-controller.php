<?php

include("account-management.php");

if (isset($_POST["firstname"]) && $_POST["firstname"] != ""
    && isset($_POST["lastname"]) && $_POST["lastname"] != ""
    && isset($_POST["profil"]) && $_POST["profil"] != ""
    && isset($_POST["email"]) && $_POST["email"] != ""
    && isset($_POST["pwd"]) && $_POST["pwd"] != ""
    && isset($_POST["bio"]) && $_POST["bio"] != "") {

    $account = new Account($_POST["email"], $_POST["pwd"]);
    $account->createAccount($_POST["firstname"], $_POST["lastname"], $_POST["profil"], $_POST["bio"]);
}


?>
