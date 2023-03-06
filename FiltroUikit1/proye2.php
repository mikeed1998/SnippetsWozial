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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products filter</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/js/uikit-icons.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet"></link>

    <style>
        .uk-search-icon-flip svg{
            padding: 0 !important;
            cursor: pointer;
        }

        .visible{
            display: block !important;
        }

        .uk-animation-shake{
            animation-name: uk-shake !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div uk-filter="target: .filter" class="uk-width-1-1 filter-main">
            <div class="row">
                <div class="col-4 py-5 mt-5 position-relative z-2">
                    <div class="uk-flex uk-flex-middle uk-flex-column uk-width-1-2 uk-margin-small-bottom filter-options-container">
                        <div class="uk-flex uk-flex-center uk-flex-left@s uk-grid-small uk-grid-divider uk-child-width-auto uk-margin-small" uk-grid>
                            <div>
                                <ul>
                                    <?php
                                        $consulta = mysqli_query($conn, "SELECT * FROM categorias_proyectos");
                                        while($row = mysqli_fetch_assoc($consulta)) {
                                            $_id = $row['id'];
                                            echo '<h3 class="py-2">'.$row['categoria'].'</h3>';
                                            $subconsulta = mysqli_query($conn, "SELECT * FROM categorias_proyectos_detalles");                                                                       
                                            while($subrow = mysqli_fetch_assoc($subconsulta)) {
                                                if($subrow['categoria_proyecto'] == $row['id']) {
                                                    echo '
                                                        <li onclick="resetSearchBar();" uk-filter-control="filter: [tag=\'f'.$subrow['id'].'\'];"><a href="#">'.$subrow['titulo'].'</a></li>
                                                    ';
                                                }
                                            }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 position-absolute">
                    <ul class="filter uk-child-width-1-1 uk-child-width-1-1@l uk-text-right uk-dark uk-animation-toggle" uk-grid tabindex="0">
                        <?php
                            $con = mysqli_query($conn, "SELECT * FROM categorias_proyectos_detalles");
                            while($row2 = mysqli_fetch_assoc($con)) {
                                echo '
                                    <li class="skills-el" tag=\'f'.$row2['id'].'\' data-name=\''.$row2['id'].'\'>
                                        <div class="uk-card uk-card-default uk-card-body">
                                            <div>   
                                                <div class="row">     
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>            
                                                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="image col-md-6 col-xs-12 p-0 d-flex justify-content-start align-items-end" style="width: auto; height: 600px; background-image: url(ocean.png); background-size: cover;">
                                                            <div class="d-flex align-items-center justify-content-center" style="background: #F7F0EB; width: 120px; height: 120px; background-size: cover;">
                                                                <img class="img-fluid" src="forest.png" alt="" style="background-size: cover;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>             
                                                <div class="row">
                                                    <div class="col-12 text-start">
                                                        <h1>'.$row2['titulo'].'</h1>
                                                        <p>'.$row2['descripcion'].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                ';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet"></link>
    
    <script>
        function filterSearch() {
            var search = $(".uk-search-input").eq(0).val().toLowerCase();
            
            if(!search){
                $(".uk-search-input").eq(0).attr("uk-filter-control", "");
            }else{
                $(".uk-search-input").eq(0).attr("uk-filter-control", "filter: [data-name*='" + search + "']");
            }
            
            $(".uk-search-input").eq(0).click();
        }

        $(".filter-main").on("beforeFilter", function() {
            $(".skills-no-result").removeClass('visible uk-animation-shake');
        });

        $(".filter-main").on("afterFilter", function() {
            var isElementVisible = false;
            var i = 0;

            while(!isElementVisible && i < $(".skills-el").length) {
                if($(".skills-el").eq(i).is(":visible")){
                    isElementVisible = true;
                }
                
                i++;
            }

            if(isElementVisible === false) {
                $(".skills-no-result").addClass('visible uk-animation-shake');
            }
        });

        function resetSearchBar(){
            $(".uk-search-input").eq(0).val('');
            $(".uk-search-input").eq(0).val('').attr("uk-filter-control", "");
        }
    </script>
</body>
</html>