<?php

include("account-management.php");

session_start ();

$account = new Account($_SESSION['email'], $_SESSION['pwd']);
$account->deleteAccount($_SESSION['email']);

?>