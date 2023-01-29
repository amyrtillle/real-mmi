<?php

class Post
{

    private $title;
    private $date;
    private $publication;
    private $author;

    public function __construct($title, $publication, $author)
    {
        $this->title = $title;
        $this->publication = $publication;
        $this->author = $author;
    }


//        connexion DB
    public function databaseConnection()
    {
        require_once 'config.php';
        try {
            $conn = new PDO(DB, USER, PWD);
            return $conn;
        } catch (PDOException $e) {
            die ("Failed: " . $e);
        }
        return null;
    }

//    creation post
    public function createPost($title, $publication, $author)
    {

        header("location: forum.php");

        $this->title = $title;
        $this->date = date("Y-m-d");
        $this->publication = $publication;
        $this->author = $author;

        $conn = $this->databaseConnection();
        if ($conn == null) {
            echo "uhuh connexion error";
        }

        session_start();
        $this->author = $_SESSION["email"];

        $query = <<<EOT
        INSERT INTO post
        (post_title, post_date, post_publication, post_author)
        VALUES
        ("$this->title", "$this->date", "$this->publication", "$this->author");
        EOT;

        print ($query);

        $res = $conn->query($query);
        if (!$res) die("Failed query: " . $query);

        $conn->query('KILL CONNECTION_ID()');
        $conn = null;
    }

    public function affichePost($title, $publication, $author)
    {

        $this->title = $title;
        $this->date = date("Y-m-d");
        $this->publication = $publication;
        $this->author = $author;

        $conn = $this->databaseConnection();
        if ($conn == null) {
            echo "uhuh connexion error";
        }

        session_start();
        $this->author = $_SESSION["email"];

        $sql = "SELECT * FROM post";

        $res1 = $conn->query($sql);
        if (!$res1) die ("Failed query: " . $sql);
        $rows1 = $res1->fetchAll();


        $nbrows1 = sizeof($rows1);
        for ($k = $nbrows1-1; $k > $nbrows1; $k--) {
            $infos = $rows1[$k];


            echo "<h5 class='carte-title' class='art_nom'>" . $infos["post_title"] . "</h5>";
            echo "<p class='carte-text' class='art_esp'>" . $infos["post_date"] . "</p>";
            echo "<p class='carte-text' class='art_prix'>" . $infos["post_publication"] . "</p>";

            $conn->query('KILL CONNECTION_ID()');
            $conn = null;
        }

    }
}
