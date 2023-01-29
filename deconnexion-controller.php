<?php
session_start();

include("account-management.php");

$account = new Account($_SESSION["email"], $_SESSION["pwd"]);
$account->deconnexion();



?>