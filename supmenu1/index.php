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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.24/css/uikit.min.css" integrity="sha512-xubeWHZWmYLmgujllDg9AJUj/3pO116Cwyn0m5wnudnUFKu38H2byh/G1Cie0sv8YJZprGJXuWfjAhPlMTg76g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .lista:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <ul>
                    <li class="lista" data-bs="1">uno</li>
                    <li class="lista" data-bs="2">dos</li>
                    <li class="lista" data-bs="3">tres</li>
                    <li class="lista" data-bs="4">cuatro</li>
                    <li class="lista" data-bs="5">cinco</li>
                </ul>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <p data-bd="1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ipsa.</p>
                <p data-bd="2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum tenetur minus possimus doloribus? Culpa.</p>
                <p data-bd="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione tenetur rem eum eligendi unde doloremque, cumque alias ad culpa odio.</p>
                <p data-bd="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit architecto sequi corporis. Et cupiditate sint unde deleniti nihil, autem fugit alias quasi? Sunt, ipsam voluptatem.</p>
                <p data-bd="5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti iusto veritatis praesentium, tenetur quas asperiores nesciunt, hic eveniet dicta quis quidem nulla, suscipit esse cum sit eligendi ex autem et!</p>
            </div>
        </div>
    </div>
  
    <div class="container mt-5 py-5">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.24/js/uikit.min.js" integrity="sha512-hSlNacqEG9zgxcDD+YB6Ezc/1ldZ/Jn2m+Iy6wGmEHZJWLWnmiqq2dKoEfRePT8jr791mPGIrfpqqQ7bjhCDRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.24/js/uikit-icons.min.js" integrity="sha512-b1ov7fF+GmT1xRfYa26SCXMJcUEQKPWJjyileAYSb1Ao+gZJXKTAsD07INs06zGvD67zifII5/Z1SCsFnFZZxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery.js"></script>
    <script>
    $(document).ready(() => {
        $('data-bs').click(() => {
            $('data-bd').toggle();
        })
    });
    </script>
</html>