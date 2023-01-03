<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_snippets_michael";

    $conn = new mysqli($host, $user, $pass, $db);

    echo (!$conn->connect_errno) ? "Funciona" : "Fallo" . $conn->connect_errno; 
    
    $sql = "SELECT * FROM datos";

    if($consulta = $conn->query())

    $vistaCambios = '
        
    ';