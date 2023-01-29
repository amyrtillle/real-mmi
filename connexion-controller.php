<?php
include("account-management.php");

if (isset($_POST["login"]) && $_POST["login"] != ""
    && isset($_POST["pwd"]) && $_POST["pwd"] != "") {

    $account = new Account($_POST["login"], $_POST["pwd"]);
    $account->verifSession();

}else{
    header("connexion.php");
}
?>