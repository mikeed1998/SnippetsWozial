<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mercabella";

    $conn = mysqli_connect($host, $user, $pass, $db);

    // $sql = "SELECT * FROM productos WHERE categoria = 50 OR categoria = 51 OR categoria = 52 OR categoria = 53 OR categoria = 54 OR categoria = 57";
    $sql2 = "SELECT * FROM productoscat WHERE txt = 'PESTA&Ntilde;AS'";

    $res = $conn->query($sql2);

    while($row = $res->fetch_assoc()) {
        //echo $row["titulo"] . "<br>";
        echo $row["txt"] . "<br>";
    }
?>