<?php
include("./db.php");

$About = $db->prepare("SELECT * FROM about");
$About->execute(array());
$AboutList = $About->fetchAll();
foreach ($AboutList as $About) {
}

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $About["title"]; ?></title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.php">Web Security Contents</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php" style="opacity: 100%;">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="about-wrapper">
        <div class="container mt-4">
            <div class="about-container">
                <div class="about-top-title">
                    <?= $About["title"]; ?>
                </div>
                <div class="about-container-text">
                    <div class="about-text-title">
                        <?= $About["text-title"]; ?>
                    </div>
                    <div class="about-text">
                        <?= $About["text"]; ?>
                    </div>
                    <div class="about-container-cv">
                        <div class="button-input" style="margin: 30px">
                            <button onclick="window.location.href='download.php';">Download CV</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="copyright">
                © 2023 All rights reserved.
            </div>
        </div>

    </footer>

</body>

</html>