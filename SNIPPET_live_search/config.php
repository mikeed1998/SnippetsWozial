<?php
    $con = mysqli_connect("127.0.0.1", "root", "", "live_search");

    if(!$con) {
        echo "Connection Failed" . mysqli_connect_error();
    }

