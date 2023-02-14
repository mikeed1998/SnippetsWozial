<?php
    function conexion() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'takasami';

        $conn = mysqli_connect($host, $user, $pass, $db);

        return $conn;
    }
?>