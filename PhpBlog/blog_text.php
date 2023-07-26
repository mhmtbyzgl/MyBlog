<?php

include("./db.php");
$BlogId = explode("=", $_SERVER["QUERY_STRING"])[1];
$BlogData = $db->prepare("SELECT * FROM blogs WHERE id=$BlogId");
$BlogData->execute(array());
$Blog = $BlogData->fetch();



?>




<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Text</title>

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

    <div class="blog-wrapper">
        <div class="container mt-4">
            <div class="blog-container">
                <div class="blog-top-title">
                    Blogs
                </div>
                <div class="blog-container-text">
                    <div class="blog-text-meta-info">
                        <ul>
                            <li>
                                <div class="blog-text-date">
                                    1 January 2020
                                </div>
                                <div class="blog-text-meta-dot">
                                    ·
                                </div>
                                <div class="blog-text-reading-time">
                                    4 minute
                                </div>
                                <div class="blog-text-meta-dot">
                                    ·
                                </div>
                                <div class="blog-text-author">
                                    Name Surname
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-text-title" style="margin: 10px;">
                        <?=$Blog["title"]?>
                    </div>
                    <div class="blog_text" style="margin: 30px;">
                        <p>
                        <?=$Blog["blog_text"]?>
                        </p>
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