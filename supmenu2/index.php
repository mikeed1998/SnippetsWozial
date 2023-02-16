<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'takasami';

    $conn = mysqli_connect($host, $user, $pass, $db);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .navLinks {
            display: none;
        }
    </style>
</head>
<body>
    <div class="nav">
        <ul>
        <?php
            $sql1 = "SELECT * FROM categorias_proyectos";
            $res1 = mysqli_query($conn, $sql1);

            while($rp = mysqli_fetch_assoc($res1)) {
                echo '
                    <p>'. $rp['categoria'] .'</p></br>
                ';

                $sql2 = "
                    SELECT * 
                    FROM categorias_proyectos_detalles
                    INNER JOIN categorias_proyectos
                    ON categorias_proyectos_detalles.categoria_proyecto = categorias_proyectos.id
                ";
                $res2 = mysqli_query($conn, $sql2);

                while($rh = mysqli_fetch_assoc($res2)) {
                    echo '
                        <li>
                            <a href="#">'. $rh['titulo'] .'</a>
                            <div class="navLinks">'. $rh['descripcion'] .'</div>
                        </li>
                    ';
                }
            }
            
        ?>
        
        </ul>
    </div>



    <!-- <div class="nav">
        <ul>
            <li>
                <a href="#" title="show phone #(403) 454-5526">Call us</a>
                <div class="navLinks"> (403) 454-5526 </div>
            </li>
            <li>
                <a href="#">Visit our website</a>
               <div class="navLinks"> Content Here </div>
            </li>
            <li>
                <a href="#">Email us</a>
                <div class="navLinks"> Content Here </div>
            </li>
            <li>
                <a href="#">Send to a friend</a>
                <div class="navLinks"> Content Here </div>
            </li>
        </ul>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script>
        $(".nav a").on("click", function(e) {
            var div = $(this).siblings(".navLinks").toggle();
            $(".navLinks").not(div).hide();
            e.preventDefault();
        });
    </script>
</body>
</html>