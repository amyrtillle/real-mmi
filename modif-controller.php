<?php

include("account-management.php");

session_start ();

if (isset($_POST["pwd"]) && $_POST["pwd"] != ""
    && isset($_POST["firstname"]) && $_POST["firstname"] != ""
    && isset($_POST["lastname"]) && $_POST["lastname"] != "") {

    $account = new Account($_SESSION['email'], $_SESSION['pwd']);
    $account->updateLogin($_SESSION['email'], $_POST["pwd"], $_POST["firstname"], $_POST["lastname"]);

}
?>
