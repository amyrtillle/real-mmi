<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>Développement web</title>
    
    <link rel='stylesheet' type='text/css' href='./css/reset.css'>
    
    <link href="./css/body.css" rel="stylesheet" type="text/css" />
    <link href="./libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php include("header.php"); ?>
<body>
<main>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <h2>Poster une message</h2>
                    <form action='post-controller.php' method='POST' id='form-post'>

                        <label>Titre</label>
                        <input type="text" name="title">
                        <br>

                        <label>Date</label>
                        <input type="date" name="date">
                        <br>

                        <textarea name="publication"></textarea>
                        <input type='submit' value='poster' name='poster'>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

<?php include("footer.php"); ?>

</html>