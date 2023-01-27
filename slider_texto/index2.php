<?php
    include_once("config.php");
    include_once("funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css" rel="stylesheet"></link>
    <style>
    </style>
</head>
<body style="background: none !important;">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col-12 text-end position-absolute top-0 start-50 translate-middle-x z-3">
                <div class="col-6 mt-4 text-start position-relative bg-warning" style="max-height: 633px;" id="categorias_base">
                <?php
                    $categories = categories();
                ?>
                <?php 
                    foreach($categories as $category){ 
                ?>
                    <ul class="category">
                        <li><?php echo $category['categoria_nombre'] ?></li>
                            <?php
                                if( ! empty($category['subcategory'])){
                                    echo viewsubcat($category['subcategory']);
                                }
                            ?>
                        </ul>
                <?php } ?>    
                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 text-end position-absolute top-100 start-50 translate-middle-x z-2">
                <div id="auxiliar">
                    <div>   
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img src="ocean.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button id="mover"> * * * </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-start">
                                <h1>Titulo</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, ex ea. Neque veniam ab unde earum maxime iste odit, atque sit itaque corrupti sequi expedita quo modi, in vel ipsum corporis nobis laboriosam autem est fuga nostrum. Dolores praesentium itaque repudiandae, est libero hic delectus cum cumque eius sed blanditiis harum quidem dolore non amet. Sit laudantium iste dignissimos dolorem voluptates accusamus cum possimus officia deserunt provident, sed dolor quia sapiente ea molestias veritatis consectetur quas quam similique unde ratione consequatur est nisi? Sint dicta eos mollitia libero doloribus dolorum. Quam, dignissimos distinctio placeat, magnam nam amet optio eum odio deserunt unde aspernatur incidunt accusantium consequatur dolore esse tempore repudiandae architecto iste. Magni aut, eligendi, omnis nam sequi ad ex iusto quibusdam, amet sapiente quis atque corrupti quas expedita excepturi? Suscipit excepturi explicabo cupiditate omnis praesentium distinctio minima ipsam veritatis odit. Perferendis cupiditate iste eius vel accusantium nihil quo, laboriosam necessitatibus dolores doloremque itaque recusandae illum eveniet quisquam assumenda architecto maxime iusto voluptatem? Quidem nihil maxime enim reprehenderit doloribus magnam omnis ut dolorem tenetur cumque minima corrupti, alias aspernatur quaerat repudiandae inventore quos, eius, vitae animi error provident voluptas est! Quae ex, eligendi inventore harum rerum accusamus iste qui cumque! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                            </div>
                        </div>
                    </div>
                    <div>   
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img src="ocean.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button id="mover"> * * * </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-start">
                                <h1>Titulo</h1>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-6 bg-warning">
                Secciones    
                <ul>
                    <li>subseccion</li>
                </ul>
            </div>
            <div class="col-6">
                <div id="auxiliar">
                    <div>
                    <img src="ocean.png" alt="" class="img-fluid">
                    </div>
                    <div>
                    <img src="ocean.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="auxiliar">
                    <div>
                    <h1>Titulo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                    </div>
                    <div>
                    <h1>Titulo</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta minus quasi, illum delectus aliquam excepturi laudantium ad ipsa molestiae quaerat culpa facere id velit maiores omnis perferendis at, exercitationem nihil!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-9 mx-auto">
                <div id="slider">
                    <div>
                        Hola
                    </div>
                    <div>
                        Mundo
                    </div>
                    <div>
                        Adios
                    </div>
                </div>
            </div>
            <div class="col">
                <div id="dos">
                    <div>asa</div>
                    <div>fsfs</div>
                    <div>dffd</div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>     
        $('#slider, #dos, #auxiliar').slick({
            // dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            nextArrow: '#mover',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        // dots: true
                    } 
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</body>
</html>