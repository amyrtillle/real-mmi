<link rel="stylesheet" type="text/css" href="./css/header.css">
<link rel="stylesheet" href="./libs/bootstrap-icons/bootstrap-icons.css" />
<link rel="icon" type="image/x-icon" href="./assets/logo_MMI.svg"/>

<body>
<header id="header-mobile">
    <div id="header">
        <a href="./account.php"><i class="bi bi-person-fill"></i></a>
        <a href="index.php"><img src="./assets/logo_MMI.svg" alt="MMI logo"></a>
        <label for="menu-opener">
            <input type="checkbox" id="menu-opener" onclick="menuToggle()" /> 
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
    
    <nav id="menu-mobile">
        <ul>
            <li><i class="bi bi-mortarboard-fill menu-icon"></i><a href="./iut.php">Notre IUT</a></li>
            <li><i class="bi bi-camera-reels-fill menu-icon"></i><a href="./audiovisual.php">Audiovisuel</a></li>
            <li><i class="bi bi-headset menu-icon"></i><a href="./communication.php">Communication</a></li>
            <li><i class="bi bi-motherboard-fill menu-icon"></i><a href="./web-development.php">Développement web</a></li>
            <li><i class="bi bi-pencil-fill menu-icon"></i><a href="./graphic-design.php">Graphisme</a></li>
            <li><a role="button" href="./forum.php">Forum</a></li>
        </ul>
    </nav>
</header>


<header id="header-desktop">
<nav id="menu-desktop">
    <a href="index.php"><img src="./assets/logo_MMI.svg" alt="MMI logo"></a>
    
    <ul>
        <li><a href="./iut.php">Notre IUT</a></li>
        <li><a href="./audiovisual.php">Audiovisuel</a></li>
        <li><a href="./communication.php">Communication</a></li>
        <li><a href="./web-development.php">Développement web</a></li>
        <li><a href="./graphic-design.php">Graphisme</a></li>
        <li><a href="./account.php"><i class="bi bi-person-fill"></i></a></li>
        <li><a role="button" href="./forum.php">Forum</a></li>
    </ul>
    </nav>
</header>

<script src="./js/header.js"></script>
