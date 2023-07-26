<?php
include("./db.php");

$BlogData = $db->prepare("SELECT * FROM blogs ORDER BY date DESC");
$BlogData->execute(array());
$BlogList = $BlogData->fetchAll();


?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
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
                                <a href="blog.php" style="opacity: 100%;">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
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

    <div class="blog-post-wrapper">
        <div class="container mt-4">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blogs
                </div>
                <div class="blog-post-row">
                    <div class="row">
                        <?php
                        foreach ($BlogList as $Blog) {

                            echo '<div class="blog-post col-md-6">
                            <a href="blog_text.php?id=' . $Blog["id"] . '">
                                <div class="blog-post-thumbnail">
                                    <img src="assets/img/thumbnail.png" alt="" srcset="">
                                </div>
                                <div class="blog-post-text">
                                    <div class="blog-post-title">
                                    ' . $Blog["title"] . '
                                    </div>
                                    <div class="blog-post-description">
                                    ' . $Blog["blog_text"] . '
                                    </div>
                                    <div class="blog-post-meta-info">
                                        <ul>
                                            <li>
                                                <div class="blog-post-date">
                                                ' . $Blog["date"] . '
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-reading-time">
                                                    4 minute
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>

        <div class="container text-center mt-5 mb-5">
            <div class="copyright">
                © 2023 All rights reserved.
            </div>
        </div>

    </footer>

</body>

</html>