<?php
include("./db.php");

try {
    if (isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        $FullName = $_POST["fullname"];
        $Email = $_POST["email"];
        $Subject = $_POST["subject"];
        $Message = $_POST["message"];
        $Date = date('d-m-y');

        $contact_db = $db->prepare("INSERT INTO contact (full_name, email, subject, message, date) VALUES (:fullname, :email, :subject, :message, :date)");
        $contact_db->execute(array(
            ':fullname' => $FullName,
            ':email' => $Email,
            ':subject' => $Subject,
            ':message' => $Message,
            ':date' => $Date,
        ));

        $results = $contact_db->fetchAll();
        header("Location: contact.php");
        exit();
    }
} catch (PDOException $e) {
    echo $e;
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
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
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php" style="opacity: 100%;">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Contact Form
                </div>
                <div class="contact-form">
                    <form action="#" method="post">
                                <div class="fullname-input">
                                    <input type="text" name="fullname" id="" placeholder="Full Name" >
                                </div>
                                <div class="email-input">
                                    <input type="email" name="email" id="" placeholder="Email Address" style="color: black;">
                                </div>
                                <div class="subject-input">
                                    <input type="text" name="subject" id="" placeholder="Subject">
                                </div> 
                                <div class="message-input">
                                    <textarea name="message" id="" cols="60" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="button-input">
                                    <button type="submit">Send Message</button>
                                </div>           
                    </form>
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