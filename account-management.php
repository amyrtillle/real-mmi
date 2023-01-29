<?php
class Account {

    private $firstname;
    private $lastname;
    private $profil;
    private $email;
    private $password;
    private $bio;

    public function __construct($email, $password) {
        $this->firstname = "";
        $this->lastname = "";
        $this->profil = "";
        $this->email = $email;
        $this->password = $password;
        $this->bio = "";
    }


//        connexion DB
    public function databaseConnection() {
        require_once 'config.php';
        try{
            $conn = new PDO(DB, USER, PWD);
            return $conn;
        } catch (PDOException $e) {
            die ("Failed: " . $e);
        }
        return null;
    }

//    creation compte
    public function createAccount($firstname, $lastname, $profil, $bio) {
        $this->firstname =$firstname;
        $this->lastname = $lastname;
        $this->profil = $profil;
        $this->bio = $bio;

        $conn = $this->databaseConnection();
        if ($conn == null) { echo "uhuh connexion error"; }

        $query = <<<EOT
        INSERT INTO user
        (user_name, user_surname, user_status, user_login, user_pwd, user_bio)
        VALUES
        ("$this->firstname", "$this->lastname", "$this->profil", "$this->email", "$this->password", "$this->bio");
        EOT;

        $res = $conn->query($query);
        if (!$res) die("Failed query: " . $query);

        $this->verifSession();

        $conn->query('KILL CONNECTION_ID()');
        $conn = null;

    }

//    verif si connexion ou non
    public function verifSession() {
        $conn = $this->databaseConnection();
        if ($conn == null) { echo "uhuh connexion error"; }


        $query = "SELECT * FROM user WHERE user_login='" . $this->email ."';";
        $res = $conn->query($query);
        if(!$res) die("Failed query: " . $query);
        $rows = $res->fetchAll();

        $nbrows=sizeof($rows);

        if ($nbrows==0){
            $_SESSION['connection'] = false;
            header ('location: account.php');
        }

        for($k=0; $k<$nbrows; $k++) {
            $infos = $rows[$k];

            if ($this->password == $infos["user_pwd"]) {

                $this->firstname=$infos["user_name"];
                $this->lastname=$infos["user_surname"];
                $this->profil=$infos["user_status"];

                session_start ();
                $_SESSION['email'] = $this->email;
                $_SESSION['pwd'] = $this->password;
                $_SESSION['firstname'] = $this->firstname;
                $_SESSION['lastname'] = $this->lastname;
                $_SESSION['profil'] = $this->profil;
                $_SESSION['connection'] = true;

                header ('location: account-infos.php');
            } else {
                $_SESSION['connection'] = false;
                header ('location: account.php');
            }
        }
    }


    public function updateLogin($email, $password, $firstname, $lastname) {

        $this->email = $email;
        $this->password = $password;
        $this->firstname =$firstname;
        $this->lastname = $lastname;

        $conn = $this->databaseConnection();
        if ($conn == null) { echo "uhuh connexion error"; }

        $query = <<<EOT
        UPDATE user
        SET `user_pwd`='$this->password', `user_name`='$this->firstname', `user_surname` = '$this->lastname'
        WHERE
        `user_login` = '$this->email';
        EOT;
        $res = $conn->query($query);
        if (!$res) die("Failed query: " . $query);

        $_SESSION["firstname"] = $this->firstname;
        $_SESSION["lastname"] = $this->lastname;
        $_SESSION["pwd"] = $this->password;

        header("location: account-infos.php");

        $conn->query('KILL CONNECTION_ID()');
        $conn = null;
    }


    public function deleteAccount($email){

        header("location: index.php");
        $this->email = $email;

        $conn = $this->databaseConnection();
        if ($conn == null) { echo "uhuh connexion error"; }


        $query  = "SET foreign_key_checks = 0;
        DELETE FROM `user` WHERE `user_login` = '$this->email';
        SET foreign_key_checks = 1";

        $res = $conn->query($query);
        if (!$res) die("Failed query: " . $query);

        $conn->query('KILL CONNECTION_ID()');
        $conn = null;

    }

    public function deconnexion(){
        session_start ();

        if ($_SESSION['connection'] == true) {

            $_SESSION['connection'] = false;
            session_unset();
            header("Location: account.php");
        }
    }

}

?>
