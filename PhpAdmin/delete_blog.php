<?php
include("./db.php");

    $BlogId = explode("=", $_SERVER["QUERY_STRING"])[1];
    $BlogData = $db->prepare("DELETE FROM blogs WHERE id=$BlogId");
    $BlogData->execute(array());

    header("Location: blogs.php");
    exit();
?>