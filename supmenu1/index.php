<?php
    require_once('conn.php');
    $conn = conexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .lista:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php
                    $sql = "SELECT * FROM categorias_proyectos";
                    $consult = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($consult)) {
                        $id = $row['id'];
                        echo '
                            <ul>
                                <li>
                                    '. $row['categoria'] .'
                                    <ol>
                                        ';
                                        $sql2 = "SELECT * FROM categorias_proyectos_detalles WHERE categoria_proyecto = $id";
                                        $subconsult = mysqli_query($conn, $sql2);
                                        while($srow = mysqli_fetch_assoc($subconsult)) {
                                            echo '
                                            <li class="lista" data-lista="data">
                                                '. $srow['titulo'] .'
                                            </li>
                                        ';
                                        }
                                        echo '
                                    </ol>
                                </li>
                            </ul>
                        ';
                    }
                ?> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
            
        })
    </script>
</html>