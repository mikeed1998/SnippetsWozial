<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "videosdb";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        echo "Connection failed!";
        exit();
    }